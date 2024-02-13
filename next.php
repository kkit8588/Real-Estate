<?php
if ($_FILES["file"]["error"] > 0) {
    echo "Error: " . $_FILES["file"]["error"];
} else {
    $fileType = mime_content_type($_FILES["file"]["tmp_name"]);

    // Check if the file is a video
    $isVideo = strpos($fileType, "video/") === 0;

    if ($isVideo) {
        echo '<script>alert("File is a video.");</script>';
    } else {
        echo '<script>alert("File is not a video.");</script>';
    }
}

?>