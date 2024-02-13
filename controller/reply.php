<?php
include '../connect.php';

use PHPMailer\PHPMailer\PHPMailer;

require_once "../phpmailer/PHPMailer.php";
require_once "../phpmailer/SMTP.php";
require_once "../phpmailer/Exception.php";


$email = $_POST['email'];
$messages = $_POST['messages'];


            $mail = new PHPMailer();

            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            $mail->Username = "kkit8588@gmail.com";
            $mail->Password = 'aiorrgpinpteusih';
            $mail->Port = 587;
            $mail->SMTPSecure = "tls";

            $mail->isHTML(true);
            $mail->setFrom('kkit8588@gmail.com', 'RealEstate');
            $mail->addAddress($email);
            $mail->Subject = "Real Estate REgistration";
            $mail->Body = '
               <div style="text-align:left;">
                 '.$messages.'
               </div>';
        

       if ($mail->send()) {
            $arrayHolder['status'] = 'Success';
       }


echo json_encode($arrayHolder);
?>
