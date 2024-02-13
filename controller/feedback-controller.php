<?php
include '../connect.php';
session_start();

$type = $_SESSION['type'];
$email = $_POST['email'];
$name = $_POST['fullname'];
$feedback = $_POST['feedback'];

$sql = mysqli_query($conn, "INSERT INTO feedback_tbl (type, email, name, feedback) VALUES ('$type', '$email', '$name', '$feedback')");
?>
