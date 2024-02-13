<?php
include '../connect.php';


$incoming_msg_id = $_POST['unique_id'];
$outgoing_msg_id = $_POST['friend_id'];
$sendmessage = $_POST['sendmessage'];
$notif = "new";

$stmt = $conn->prepare("INSERT INTO messages (incoming_msg_id, outgoing_msg_id, msg, notif) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $incoming_msg_id, $outgoing_msg_id, $sendmessage, $notif);
$stmt->execute();
$stmt->close();
$conn->close();
?>
