<title>Login</title>
<?php include 'header.php' ?>
<body class="bg-white">
   <div>
   <?php include 'navtop.php' ?>
      <div class="container d-flex align-items-center" style="height: 85vh;">
         <div class="d-flex w-100">
            <form id="userlogin" class="shadow m-auto d-flex p-5 flex-column align-items-center row-gap-3 justify-content-center" >
               <div class="text-center">
                  <h4>Login</h4>
                  <p class="text-secondary">Access to our dashboard</p>
               </div>
               <div>
                  <input type="email" name="email" placeholder="Your Email" class="form-control rounded-1 border-dark">
               </div>
               <div>
                  <input type="password" name="password" placeholder="Your Password" class="form-control rounded-1 border-dark">
               </div>
               <div class="me-auto">
                  <input type="submit" name="submit" value="Login Now" class="btn btn-success rounded-0">
               </div>
               
               <small>Don't have an Account? <a href="register.php">Register here</a></small>
            </form>

         </div>
      </div>
   <?php include 'navbottom.php' ?>
   </div>
   <?php include 'footer.php' ?>
</body>

