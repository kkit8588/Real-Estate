<?php
include '../connect.php';
require_once '../phpqrcode/qrlib.php';

$id = $_POST['id'];
$title = $_POST['title'];
$agent_email = $_POST['agent_email'];
$agent_name = $_POST['agent_name'];
$type = $_POST['type'];
$rs = $_POST['rs'];
$bhk = $_POST['bhk'];
$area = $_POST['area'];
$status = $_POST['status'];
$price = $_POST['price'];
$location = $_POST['location'];
$propertyage = $_POST['propertyage'];
$swimmingpool = $_POST['swimmingpool'];
$parking = $_POST['parking'];
$gym = $_POST['gym'];
$thirdparty = $_POST['thirdparty'];
$alivator = $_POST['alivator'];
$cctv = $_POST['cctv'];
$security = $_POST['security'];
$diningcapacity = $_POST['diningcapacity'];
$churchtemple = $_POST['churchtemple'];
$kitchen = $_POST['kitchen'];
$sqm = $_POST['sqm'];
$bedroom = $_POST['bedroom'];
$bathroom = $_POST['bathroom'];
$balcony = $_POST['balcony'];
$hall = $_POST['hall'];
$unique_id = $_POST['unique_id'];
$images_id = rand(time(), 100000000);

$ci_name = $_FILES['ci']['name'];
$ci_type = $_FILES['ci']['type'];   
$tempci_image = $_FILES['ci']['tmp_name'];
$ci_size = $_FILES['ci']['size'];
$ci_destination = "../images/".$ci_name;

$td_name = $_FILES['td']['name'];
$td_type = $_FILES['td']['type'];   
$temptd_image = $_FILES['td']['tmp_name'];
$td_size = $_FILES['td']['size'];
$td_destination = "../threeD/".$td_name;

// Generate and insert QR code
$path = '../qrcode/';
$qrcode = $path . time() . ".png";
$qrimage = time() . ".png";


$arrayHolder = [];

	if ($id == "") {

	$fileType = isset($_FILES["td"]["type"]) ? $_FILES["td"]["type"] : '';

if (strpos($fileType, 'video/') === 0) {
    $qrnum = "http://localhost/realestate/video.php?qrnum=" . $images_id;
} else {
    $qrnum = "http://localhost/realestate/view.php?qrnum=" . $images_id;
}

// Insert data into the database
$sql = "INSERT INTO properties_tbl (qrnum, images_id, threed, qrimage) VALUES (?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $qrnum, $images_id, $td_name, $qrcode);

if ($stmt->execute()) {
    QRcode::png($qrnum, $qrcode, 'H', 4, 4);
    echo "File information inserted successfully.";
} else {
    echo "Error: " . $stmt->error;
}



	move_uploaded_file($temptd_image, $td_destination);
	move_uploaded_file($tempci_image, $ci_destination);

	$sqlInsert = mysqli_query($conn, "UPDATE properties_tbl SET title='$title', type='$type', rs='$rs', bhk='$bhk', area='$area', status='$status', price='$price', location='$location', propertyage='$propertyage', swimmingpool='$swimmingpool', parking='$parking', gym='$gym', thirdparty='$thirdparty', alivator='$alivator', cctv='$cctv', security='$security', diningcapacity='$diningcapacity', churchtemple='$churchtemple', kitchen='$kitchen', sqm='$sqm', bedroom='$bedroom', bathroom='$bathroom', balcony='$balcony', hall='$hall', agent_email='$agent_email', agent_name='$agent_name', unique_id='$unique_id', ci='$ci_name' WHERE images_id='$images_id' ");


		if ($sqlInsert) {
    $imagesDirectory = "../images/";

    foreach ($_FILES['images']['name'] as $key => $name) {
        if (!empty($name)) {
            $targetFile = $imagesDirectory . basename($name);
            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

            if (getimagesize($_FILES['images']['tmp_name'][$key]) !== false) {
                if (move_uploaded_file($_FILES['images']['tmp_name'][$key], $targetFile)) {
                    $sql = "INSERT INTO images (file_name, images_id) VALUES ('$name', '$images_id')";
                    if ($conn->query($sql) === TRUE) {
                        $arrayHolder["image_status"][] = 'Success';
                    } else {
                        $arrayHolder["image_status"][] = 'Error';
                    }
                } else {
                    $arrayHolder["image_status"][] = 'Error';
                }
            } else {
                $arrayHolder["image_status"][] = 'Invalid Image';
            }
        }
    }

    $targetDirectory = "../threeD/textures/";

    foreach ($_FILES['textures']['name'] as $key => $name) {
        if (!empty($name)) {
            $targetFile = $targetDirectory . basename($name);
            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

            if (getimagesize($_FILES['textures']['tmp_name'][$key]) !== false) {
                if (move_uploaded_file($_FILES['textures']['tmp_name'][$key], $targetFile)) {
                    $sqltwo = "INSERT INTO images (file_name) VALUES ('$name')";
                    if ($conn->query($sqltwo) === TRUE) {
                        $arrayHolder["texture_status"][] = 'Success';
                    } else {
                        $arrayHolder["texture_status"][] = 'Error';
                    }
                } else {
                    $arrayHolder["texture_status"][] = 'Error';
                }
            } else {
                $arrayHolder["texture_status"][] = 'Invalid Image';
            }
        }
    }
}

	     echo "<script>alert('Adding Properties Successfully!');";
        echo "window.location.href='../Agent/property-information.php';</script>";

	}else{
		$sqlUpdate = mysqli_query($conn, "UPDATE properties_tbl SET title='$title', type='$type', agent_email='$agent_email', agent_name='$agent_name', rs='$rs', bhk='$bhk', area='$area', status='$status', price='$price', location='$location', propertyage='$propertyage', swimmingpool='$swimmingpool', parking='$parking', gym='$gym', thirdparty='$thirdparty', alivator='$alivator', cctv='$cctv', security='$security', diningcapacity='$diningcapacity', churchtemple='$churchtemple', kitchen='$kitchen', sqm='$sqm', bedroom='$bedroom', bathroom='$bathroom', balcony='$balcony', hall='$hall', unique_id='$unique_id' WHERE id='$id' ");
		$arrayHolder["status"] = 'Success';
	}


    echo json_encode($arrayHolder);
?>
