<?php 
    session_start();
    include '../connect.php';

    // Check if the user is logged in
    if (isset($_SESSION['id']) || isset($_SESSION['type'])) {
        header('Location: dashboard.php');
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>
 <?php include 'header.php';?>
   

</head>
<body class="overflow-x-hidden">

<div class="login-container d-flex flex-column justify-content-center align-items-center"> 
   <div class="form-container border-0 w-100 py-3">
      <form class="loginForm bg-white shadow-sm rounded-4 p-5 d-flex flex-column justify-content-center row-gap-3 "  >
         <center><img src="../upload/profile.png" width="170" height="170"></center>
         <h5 class="text-center text-secondary">Admin Login Form</h5>
         <div class="bg-dark border border-dark d-flex align-items-center shadow-sm rounded">
            <input type="text" name="username" placeholder="enter your username" class="form-control form-control-lg rounded-0 border-0 rounded-start" required>
            <i class="fa-solid fa-user fs-3 px-3 text-white"></i>
         </div>

         <div class="bg-dark border border-dark d-flex align-items-center shadow-sm rounded">
            <input type="password" name="password" placeholder="enter your password" class="form-control form-control-lg rounded-0 border-0 rounded-start" required>
            <i class="fa-solid fa-key fs-4 px-3 text-white"></i>
         </div>
         <input type="text" name="activity" value="Admin Logged In" hidden>
         <input type="submit" name="submit" value="Log in" class="btn btn-outline-dark fw-bold">
         <div>
            <span>Don't have an account?</span>
            <a href="register.php" id="register">Register Here</a>
         </div>

      </form>
   </div>
</div>
   
   <?php include 'footer.php' ?>
</body>
</html>