<?php
session_start();
include '../connect.php';

if (!isset($_SESSION['id']) || !isset($_SESSION['email']) || !isset($_SESSION['name']) || !isset($_SESSION['type']) || $_SESSION['type'] !== 'Client') {
    header('Location: ../login.php');
    exit();
}
?>
