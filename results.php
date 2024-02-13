<title>Property Installment Computation</title>
<?php include 'header.php' ?>
   <div>
      <?php include 'navtop.php' ?>
       <div class="d-flex py-5 flex-column align-items-center">
            <h2>Property Installment Computation</h2>
            <div class="d-flex flex-column" style="width: 150px;">
               <hr class="text-success mb-2">
               <hr class="w-50 mx-auto m-0 border border-success border-2"  >
            </div>
            <div class="container mt-5 py-1 d-flex">
               <?php
                  // Function to calculate installment details
                  function calculateInstallment($propertyPrice, $durationMonths, $interestRate) {
                      $interestRateDecimal = $interestRate / 100;
                      $monthlyInterestRate = $interestRateDecimal / 12;
                      
                      $amount = $propertyPrice;
                      $totalDuration = $durationMonths;
                      $interestRate = $interestRate;
                      
                      $totalInterest = $amount * $interestRateDecimal * $durationMonths / 12;
                      $totalAmount = $amount + $totalInterest;
                      
                      $billPerMonth = $totalAmount / $durationMonths;
                      
                      $result = array(
                          'amount' => $amount,
                          'totalDuration' => $totalDuration,
                          'interestRate' => $interestRate,
                          'totalInterest' => $totalInterest,
                          'totalAmount' => $totalAmount,
                          'billPerMonth' => $billPerMonth
                      );

                      return $result;
                  }

                  // Check if the form is submitted
                  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                      // Get input values
                      $propertyPrice = $_POST['property_price'];
                      $durationMonths = $_POST['duration_months'];
                      $interestRate = $_POST['interest_rate'];

                      // Calculate installment details
                      $installmentDetails = calculateInstallment($propertyPrice, $durationMonths, $interestRate);
                    ?>  
                     
                  
                  
               <table class="table table-stripped table-bordered text-center mx-auto" style="width: 70%">
                  <thead class="table-dark">
                     <tr>
                        <th>Term</th>
                        <th>Amount</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>Amount</td>
                        <td><?php echo $installmentDetails['amount']?></td>
                     </tr>
                     <tr>
                        <td>Total Duration</td>
                        <td><?php echo $installmentDetails['totalDuration']?></td>
                     </tr>
                     <tr>
                        <td>Interest Rate</td>
                        <td><?php echo $installmentDetails['interestRate']?>%</td>
                     </tr>
                     <tr>
                        <td>Total Interest</td>
                        <td><?php echo $installmentDetails['totalInterest']?></td>
                     </tr>
                     <tr>
                        <td>Total Amount</td>
                        <td><?php echo $installmentDetails['amount'] + $installmentDetails['totalInterest']?> </td>
                     </tr>
                     <tr>
                        <td>Bill Per Month</td>
                        <td><?php echo $installmentDetails['billPerMonth']?> </td>
                     </tr>
                  </tbody>
               </table>
               <?php } ?>
            </div>
         </div>
      </div>

      <?php include 'navbottom.php' ?>
   </div>
   <?php include 'footer.php' ?>