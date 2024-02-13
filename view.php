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
  <script src="https://aframe.io/releases/0.5.0/aframe.min.js"></script>
</head>
<body style="background-color: black;">
  
  <a-scene>
    <a-assets>
      <a-asset-item src="<?php  echo "./threeD/".$files; ?>" id="bosque"></a-asset-item>
    </a-assets>

    <!-- Camera entity without grab-rotate -->
    <a-entity camera position="0 1.6 -10" rotation="0 180 0"></a-entity>

    <!-- 3D model of the apartment -->
    <a-collada-model id="myModel" src="#bosque" position="0 0 0" scale="2.5 2.5 2.5"></a-collada-model>
  </a-scene>

  <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
      var model = document.getElementById('myModel');
      var isDragging = false;
      var previousMouseX;
      var previousMouseY;

      // Zoom functionality
      var zoomFactor = 1;

      document.addEventListener('wheel', function (event) {
        if (event.deltaY < 0) {
          // Zoom in
          zoomFactor *= 1.1;
        } else {
          // Zoom out
          zoomFactor *= 0.9;
        }

        model.setAttribute('scale', {
          x: zoomFactor,
          y: zoomFactor,
          z: zoomFactor
        });
      });

      // Mouse drag functionality
      document.addEventListener('mousedown', function (event) {
        isDragging = true;
        previousMouseX = event.clientX;
        previousMouseY = event.clientY;
      });

      document.addEventListener('mousemove', function (event) {
        if (isDragging) {
          var deltaX = event.clientX - previousMouseX;
          var deltaY = event.clientY - previousMouseY;

          var currentRotation = model.getAttribute('rotation');
          currentRotation.y += deltaX * 0.5; // Adjust horizontal rotation sensitivity
          currentRotation.x -= deltaY * 0.5; // Adjust vertical rotation sensitivity (switched y and x)
          model.setAttribute('rotation', currentRotation);

          previousMouseX = event.clientX;
          previousMouseY = event.clientY;
        }
      });

      document.addEventListener('mouseup', function () {
        isDragging = false;
      });
    });
  </script>
</body>
</html>
