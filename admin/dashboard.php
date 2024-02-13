<title id="contactContent">Dashboard</title>
<style type="text/css">
   @media(min-width: 900px){
      #cardDiv{
            width: 80%;
      }
   }
</style>
<?php include "sidebar.php" ; ?>
<div class="content ">
   <?php include "navmenu.php" ; ?>
   <div class="p-3">
      <div class="bg-white">
         <div class="text-bg-white d-flex align-items-center p-3 ">
            <span class="fs-4"><b>Dashboard</b></span>
         </div>
         <hr class="m-0">
         <div class="main-container px-3 my-2 py-4 shadow-sm overflow-x-auto row-gap-5">
            <div id="cardDiv" class="row gap-4 mt-2 px-2 mb-auto justify-content-center justify-content-lg-start">
               <!-- Total Client -->
               <div class="dashboard-card text-bg-white card shadow px-2 py-1" style="width: 14rem;">
                 <div class="card-body d-flex flex-column align-items-start ">
                   <i class="fa-solid fa-users text-bg-primary p-3 rounded-2" style="font-size: 20px;"></i>
                   <?php
                   include '../connect.php';
                   $sql = "SELECT COUNT(type) AS total FROM user_tbl WHERE type = 'Client' AND verification != ''";
                   $result = $conn->query($sql);
                       $row = $result->fetch_assoc();
                       echo "<span class='card-text fw-bold mt-3 fs-4'>" . $row['total'] . "</span>";
                   ?>
                   <span class="card-title text-secondary fs-6">Registered Client</span>
                 </div>
               </div>

               <!-- Total Agent -->
               <div class="dashboard-card text-bg-white card shadow px-2 py-1" style="width: 14rem;">
                 <div class="card-body d-flex flex-column align-items-start ">
                   <i class="fa-solid fa-users text-bg-success p-3 rounded-2" style="font-size: 20px;"></i>
                   <?php 
                   $sql = "SELECT COUNT(type) AS total FROM user_tbl WHERE type = 'Agent' AND verification != ''";
                   $result = $conn->query($sql);
                       $row = $result->fetch_assoc();
                       echo "<span class='card-text fw-bold mt-3 fs-4'>" . $row['total'] . "</span>";
                   ?>
                   <span class="card-title text-secondary fs-6">Registered Agent</span>
                 </div>
               </div>

               <!-- Total Properties -->
               <div class="dashboard-card text-bg-white card shadow px-2 py-1" style="width: 14rem;">
                 <div class="card-body d-flex flex-column align-items-start ">
                   <i class="fa-solid fa-user-large text-bg-danger p-3 rounded-2" style="font-size: 20px;"></i>
                   <?php 
                   $sql = "SELECT COUNT(*) AS total FROM properties_tbl";
                   $result = $conn->query($sql);
                       $row = $result->fetch_assoc();
                       echo "<span class='card-text fw-bold mt-3 fs-4'>" . $row['total'] . "</span>";
                   ?>
                   <span class="card-title text-secondary fs-6">Total Properties</span>
                 </div>
               </div>

               <!-- Total Apartment -->
               <div class="dashboard-card text-bg-white card shadow px-2 py-1" style="width: 14rem;">
                 <div class="card-body d-flex flex-column align-items-start ">
                   <i class="fa-solid fa-building text-bg-primary p-3 rounded-2" style="font-size: 20px;"></i>
                   <?php 
                   $sql = "SELECT COUNT(type) AS total FROM properties_tbl WHERE type='Apartment'";
                   $result = $conn->query($sql);
                       $row = $result->fetch_assoc();
                       echo "<span class='card-text fw-bold mt-3 fs-4'>" . $row['total'] . "</span>";
                   ?>
                   <span class="card-title text-secondary fs-6">No. of Apartment</span>
                 </div>
               </div>

               <!-- Total Houses -->
               <div class="dashboard-card text-bg-white card shadow px-2 py-1" style="width: 14rem;">
                 <div class="card-body d-flex flex-column align-items-start ">
                   <i class="fa-solid fa-house text-bg-success p-3 rounded-2" style="font-size: 20px;"></i>
                   <?php 
                   $sql = "SELECT COUNT(type) AS total FROM properties_tbl WHERE type='House'";
                   $result = $conn->query($sql);
                       $row = $result->fetch_assoc();
                       echo "<span class='card-text fw-bold mt-3 fs-4'>" . $row['total'] . "</span>";
                   ?>
                   <span class="card-title text-secondary fs-6">No. of Houses</span>
                 </div>
               </div>

               <!-- Total Sale -->
               <div class="dashboard-card text-bg-white card shadow px-2 py-1" style="width: 14rem;">
                 <div class="card-body d-flex flex-column align-items-start ">
                   <i class="fa-solid fa-quote-left text-bg-primary p-3 rounded-2" style="font-size: 20px;"></i>
                   <?php 
                   $sql = "SELECT COUNT(rs) AS total FROM properties_tbl WHERE rs='Sale'";
                   $result = $conn->query($sql);
                       $row = $result->fetch_assoc();
                       echo "<span class='card-text fw-bold mt-3 fs-4'>" . $row['total'] . "</span>";
                   ?>
                   <span class="card-title text-secondary fs-6">No. Sales</span>
                 </div>
               </div>

               <!-- Total Rent -->
               <div class="dashboard-card text-bg-white card shadow px-2 py-1" style="width: 14rem;">
                 <div class="card-body d-flex flex-column align-items-start ">
                   <i class="fa-solid fa-quote-right text-bg-success p-3 rounded-2" style="font-size: 20px;"></i>
                   <?php 
                   $sql = "SELECT COUNT(rs) AS total FROM properties_tbl WHERE rs='Rent'";
                   $result = $conn->query($sql);
                       $row = $result->fetch_assoc();
                       echo "<span class='card-text fw-bold mt-3 fs-4'>" . $row['total'] . "</span>";
                   ?>
                   <span class="card-title text-secondary fs-6">No. Rentals</span>
                 </div>
               </div>

           </div>
         </div>
      </div>
   </div>
</div>

<?php include "footer.php" ; ?>