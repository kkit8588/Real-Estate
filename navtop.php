<style type="text/css">
   .nav-item:hover{
      background-color: #f2f2f2 !important;
   }
</style>
<div class="py-3" style="background-color: #343434;">
    <div class="container d-flex">
       <div class="d-lg-flex column-gap-3 text-white">
          <div>
             <i class="fa-solid fa-phone text-success"></i>
             <small>+639635237112</small>
          </div>
          <div>
             <i class="fa-solid fa-envelope text-success"></i>
             <small>stamargaritaheights@gmail.com</small>
          </div>
       </div>
       <div class="ms-auto d-flex align-items-center column-gap-3">
          <a href="login.php" class="text-decoration-none">
             <i class="fa-solid fa-user-large text-success"></i>
             <small class="text-white">Login</small>
          </a>
          <small class="text-white">|</small>
          <a href="register.php" class="text-decoration-none">
             <i class="fa-solid fa-user-plus text-success"></i>
             <small class="text-white">Register</small>
          </a>
       </div>
    </div>
 </div>
 <nav class="navbar navbar-expand-lg bg-white shadow position-sticky w-100 top-0" style="z-index: 1000;">
   <div class="container">
     <a class="navbar-brand col-4" href="#">
       <img src="./upload/logo.png" alt="Logo" width="230" height="80" class="d-inline-block align-text-top">
     </a>
     <div class="ms-auto d-lg-none ms-lg-0 me-2 me-lg-0">
      <?php
        session_start();
        include 'connect.php';

        if (isset($_SESSION['id']) && isset($_SESSION['type']) && ($_SESSION['type'] === 'Admin' || $_SESSION['type'] === 'Agent')) {
        ?>
        <button class="btn btn-success rounded-5 py-2">
          <i class="fa-solid fa-circle-plus me-1"></i>Add Property
        </button>

        <?php }?>
     </div>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarNav">
       <ul class="navbar-nav column-gap-3">
         <li class="nav-item px-3 px-lg-0">
           <a class="nav-link" aria-current="page" href="home.php">Home</a>
         </li>
         <li class="nav-item px-3 px-lg-0">
           <a class="nav-link" href="aboutus.php">About</a>
         </li>
         <li class="nav-item px-3 px-lg-0">
           <a class="nav-link" href="contact.php">Contact</a>
         </li>
         <li class="nav-item px-3 px-lg-0">
           <a class="nav-link" href="properties.php">Properties</a>
         </li>
         <li class="nav-item px-3 px-lg-0">
           <a class="nav-link" href="agent.php">Agent</a>
         </li>
       </ul>
     </div>
     <div class="ms-auto d-none d-lg-block ms-lg-0 me-1 me-lg-0">
      <?php
        if (isset($_SESSION['id']) && isset($_SESSION['type']) && ($_SESSION['type'] === 'Admin' || $_SESSION['type'] === 'Agent')) {
      ?>
          <a href="./agent/property-information.php" class="btn btn-success rounded-5 py-2">
              <i class="fa-solid fa-circle-plus me-1"></i>Add Property
          </a>
      <?php } ?>
     </div>
     
   </div>
 </nav>