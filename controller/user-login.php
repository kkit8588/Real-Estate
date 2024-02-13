<?php 
include '../connect.php';
session_start();

$email = mysqli_real_escape_string($conn, $_POST['email']);
$passwordInput = $_POST['password'];
$arrayHolder = [];

$select = "SELECT * FROM user_tbl WHERE email = '$email'";
$result = mysqli_query($conn, $select);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    if (password_verify($passwordInput, $row['password'])) {

        if ($row['verification'] == 'registered') {
            $arrayHolder['status'] = 'Success';

            $_SESSION['id'] = $row['id'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['unique_id'] = $row['unique_id'];
            $_SESSION['type'] = $row['type'];

            if ($row['type'] == 'Client') {
                $arrayHolder['type'] = 'Client';
            } elseif ($row['type'] == 'Agent') {
                $arrayHolder['type'] = 'Agent';
            } elseif ($row['type'] == 'Admin') {
                $arrayHolder['type'] = 'Admin';
            }
        }else{
            $arrayHolder['status'] = 'Error';
            $arrayHolder['error'] = 'registered';
        }
    } else {
        $arrayHolder['status'] = 'Error';
        $arrayHolder['error'] = 'password';
    }
} else {
    $arrayHolder['status'] = 'Error';
    $arrayHolder['error'] = 'email';

}

echo json_encode($arrayHolder);
?>
