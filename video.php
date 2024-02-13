<?php include 'connect.php';
$select = mysqli_query($conn, "SELECT * FROM properties_tbl WHERE images_id = '$_GET[qrnum]'");
$row = $select->fetch_assoc();
$files = $row['threed'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoplay Video Example</title>
</head>
<body>
    <div style="height: 98vh; display: flex; justify-content: center; align-items: center;">
        <video style="width: 90%; height: 90%;" controls autoplay>
            <source src="<?php  echo "./threeD/".$files; ?>" type="video/mp4">
        </video>
    </div>
</body>
</html>
