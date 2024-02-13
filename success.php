<title>About Us</title>
<?php include 'header.php' ?>
   <div>
      <?php include 'navtop.php' ?>
       <div class="bg-secondary-subtle d-flex py-5 flex-column align-items-center">
            <div class="bg-white shadow-sm mt-5 d-flex">
                <div class="p-4">
                    <?php
                        include 'config.php';

                        // Once the transaction has been approved, we need to complete it.
                        if (array_key_exists('paymentId', $_GET) && array_key_exists('PayerID', $_GET)) {
                            $transaction = $gateway->completePurchase(array(
                                'payer_id'             => $_GET['PayerID'],
                                'transactionReference' => $_GET['paymentId'],
                            ));
                            $response = $transaction->send();
                         
                            if ($response->isSuccessful()) {
                                // The customer has successfully paid.
                                $arr_body = $response->getData();
                         
                                $payment_id = $arr_body['id'];
                                $payer_id = $arr_body['payer']['payer_info']['payer_id'];
                                $payer_email = $arr_body['payer']['payer_info']['email'];
                                $amount = $arr_body['transactions'][0]['amount']['total'];
                                $currency = PAYPAL_CURRENCY;
                                $payment_status = $arr_body['state'];
                               
                         
                                $db->query("INSERT INTO payments(payment_id, payer_id, payer_email, amount, currency, payment_status, title, sqm, agent_email, client_email) VALUES('". $payment_id ."', '". $payer_id ."', '". $payer_email ."', '". $amount ."', '". $currency ."', '". $payment_status ."', '".$_SESSION['title']."', '".$_SESSION['sqm']."', '".$_SESSION['agent_email']."', '".$_SESSION['client_email']."')");

                                    if ($response) {
                                        $sqlUpdate = mysqli_query($db, "UPDATE properties_tbl SET status='Sold' WHERE id='$_SESSION[properties_id]'");
                                    }
                    ?>
                            
                    <h1 class="text-center"><i class="fa-regular fa-square-check text-success text-center"></i></h1>
                    <h3 class="text-center">Your transaction was successful!</h3>
                    <hr class="text-dark ">
                    <div class="d-flex flex-column row-gap-2">
                        <div class="d-flex">
                            <div class="col-4  fw-bold">Title:</div>
                            <div><?php echo $_SESSION['title']; ?></div>
                        </div>
                        <div class="d-flex">
                            <div class="col-4  fw-bold">Area:</div>
                            <div><?php echo $_SESSION['sqm']; ?>Sqm</div>
                        </div>
                        <div class="d-flex">
                            <div class="col-4  fw-bold">Amount:</div>
                            <div>Php<?php echo $amount; ?></div>
                        </div>
                        <div class="d-flex">
                            <span class="col-4 fw-bold">Payment ID:</span>
                            <span><?php echo $payment_id; ?></span>
                        </div>
                    </div>
                    <?php
                    } else {
                                echo $response->getMessage();
                            }
                        } else {
                            echo 'Transaction is declined';
                        }
                    ?>
                </div>
            </div>
         </div>
      </div>

      <?php include 'navbottom.php' ?>
   </div>
   <?php include 'footer.php' ?>