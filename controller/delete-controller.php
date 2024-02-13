<?php
include '../connect.php';


if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $tablename = $_POST['tablename'];
    $stmt = $conn->prepare("DELETE FROM $tablename WHERE id = ?");
    $stmt->bind_param("i", $id); // "i" indicates integer type
    $stmt->execute();
}
?>