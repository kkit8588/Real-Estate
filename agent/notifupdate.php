<?php
session_start();
include '../connect.php';

$notif = "old";
$update = mysqli_query($conn, "UPDATE messages SET notif='$notif'");

?>
