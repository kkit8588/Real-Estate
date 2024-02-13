<?php
include '../connect.php';


if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $arrayHolder = [];
    $tablename = $_POST['tablename'];
    $stmt = $conn->prepare("UPDATE $tablename SET approval = 'approved' WHERE id = ?");
    $stmt->bind_param("i", $id); // "i" indicates integer type
    $stmt->execute();
    if ($stmt) {
    	$arrayHolder['output'] = 'Success';
    }
    echo json_encode($arrayHolder);
}
?>