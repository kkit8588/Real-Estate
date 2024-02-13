<?php 
include 'connect.php'; 
if (isset($_GET['id'])) {
   $id = $_GET['id'];
   $sqlUpdate = mysqli_query($conn, "UPDATE user_tbl SET verification='registered' WHERE id='$id'");
}?>
<title>Register</title>
<?php include 'header.php' ?>
<body class="bg-white">
   <div>
   <?php include 'navtop.php' ?>
      <div class="container d-flex align-items-center" style="height: 85vh;">
         <div class="d-flex w-100">
            <div id="userregistration" class="shadow m-auto d-flex p-5 flex-column align-items-center row-gap-3 justify-content-center" >
               <div class="text-center">
                  <span class="fs-3 fw-bold">Email Verified<i class="fa-regular fa-circle-check text-primary ms-1"></i></span>
               </div>
               
               
               <div>
                  <p>To access our dashboard <a href="login.php">Login here</a></p>
               </div>
               
            </div>

         </div>
      </div>
   <?php include 'navbottom.php' ?>
   </div>
   <?php include 'footer.php' ?>
</body>
