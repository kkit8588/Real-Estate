
<?php 
include '../connect.php';
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$arraHolder =[];

$select = "SELECT * FROM admin WHERE username = '$username'";
$result = mysqli_query($conn, $select);

if (mysqli_num_rows($result) > 0) {

    $row = mysqli_fetch_assoc($result);
      $_SESSION['email'] = $row['email'];
      $_SESSION['id'] = $row['id'];
      $_SESSION['type'] = $row['type'];

    // Check if the password is correct
    if ($row['password'] == $password){
      $arraHolder['status'] = 'Success';

    }else {
      $arraHolder['status'] = 'Error';
      $arraHolder['message'] = 'You password is wrong!';
      
   }
}else{
      $arraHolder['status'] = 'Error';
      $arraHolder['message'] = 'Please check your username!';
}

echo json_encode($arraHolder);

?>




