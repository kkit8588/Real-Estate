<?php
session_start();
include 'connect.php';

$unique_id = $_SESSION['unique_id'];
$friend_id = $_POST['friend_id'];
$agent_email = $_POST['agent_email'];
$client_email = $_POST['client_email'];
$connection = "friend";

if($client_email=="null"){
    header("Location: login.php");
}else{
    // Select only the 'friend_id' column for checking existence
$sqlSelect = mysqli_query($conn, "SELECT friend_id FROM connection WHERE friend_id = '$friend_id'");

    if ($sqlSelect && mysqli_num_rows($sqlSelect) > 0) {
        // Update existing connection
        $update = mysqli_query($conn, "UPDATE connection SET agent_email='$agent_email', client_email='$client_email', unique_id='$unique_id', connection='$connection' WHERE friend_id='$friend_id'");
    } else {
        // Insert new connection
        $update = mysqli_query($conn, "INSERT INTO connection (friend_id, agent_email, client_email, unique_id, connection) VALUES ('$friend_id', '$agent_email', '$client_email ', '$unique_id', '$connection')");
    }

    if ($update) {
        if($_SESSION['type'] == "Agent"){
            header("Location: ./agent/chat.php?friend_id=" . $friend_id);
        }else if($_SESSION['type'] == "Client"){
            header("Location: ./client/chat.php?friend_id=" . $friend_id);
        }
    } else {
        // Handle the case where the query fails, e.g., display an error message
        echo "Error: " . mysqli_error($conn);
    }
}
?>
