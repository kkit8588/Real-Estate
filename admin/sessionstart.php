<?php
session_start();
include '../connect.php';

if (!isset($_SESSION['id']) || !isset($_SESSION['type']) || $_SESSION['type'] !== 'Admin') {
    header('Location: ../login.php');
    exit();
}
?>
