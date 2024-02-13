<?php
    include 'connect.php'; 
    $location = $_POST['searchInput'];
    $sqlSelect = $conn->query("SELECT * FROM properties_tbl WHERE location = '$location'");
    if ($sqlSelect->num_rows > 0){
    while($row= $sqlSelect->fetch_assoc()):
        echo $row['agent_email'];
    endwhile;

?>