<?php
include '../connect.php';
use PHPMailer\PHPMailer\PHPMailer;

require_once "../phpmailer/PHPMailer.php";
require_once "../phpmailer/SMTP.php";
require_once "../phpmailer/Exception.php";

$name = $_POST['fullname'];
$email = mysqli_real_escape_string($conn, $_POST['email']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$bday = mysqli_real_escape_string($conn, $_POST['bday']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$user_type = $_POST['user_type'];
$unique_id = rand(time(), 100000000);
$status = "Active now";

$image_name = $_FILES['image']['name'];
$image_type = $_FILES['image']['type'];   
$tempimage_name = $_FILES['image']['tmp_name'];
$image_size = $_FILES['image']['size'];
$image_destination = "../images/".$image_name;

move_uploaded_file($tempimage_name, $image_destination);

$sqlSelect = "SELECT * FROM user_tbl WHERE email = '$email'";
$selectQuery = mysqli_query($conn, $sqlSelect);
$arrayHolder = [];

if (mysqli_num_rows($selectQuery) > 0) {
    $arrayHolder['status'] = 'Error';

} else {

        $query = "INSERT INTO user_tbl (name, email, phone, password, type, profile, gender, bday, address, unique_id, status) VALUES ('$name', '$email', '$phone', '$password', '$user_type', '$image_name', '$gender', '$bday', '$address', '$unique_id', '$status')";

        if (mysqli_query($conn, $query)) {
            $arrayHolder['status'] = 'Success';
            $id = mysqli_insert_id($conn); // Get the last inserted ID
        }

            $mail = new PHPMailer();

            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            $mail->Username = "kkit8588@gmail.com";
            $mail->Password = 'aiorrgpinpteusih';
            $mail->Port = 587;
            $mail->SMTPSecure = "tls";

            $mail->isHTML(true);
            $mail->setFrom('kkit8588@gmail.com', 'Real Estate');
            $mail->addAddress($email);
            $mail->Subject = "Real Estate REgistration";
            $mail->Body = '
               <div style="text-align:center;font-size:24px;">
                 Good day!<br><br>
                 <div style="background-color:#D1E2C4;border-radius:20px;width:300px;margin:auto;color:#fff;font-size:24px;padding:20px 10px;">
                   <a href="http://localhost/realestate/register-confirmation.php?id=' . $id . '">Click here to verifiy your account!</a>
                 </div>
               </div>';
        

       if ($mail->send()) {
            $arrayHolder['status'] = 'Success';
       }
}

echo json_encode($arrayHolder);
?>
