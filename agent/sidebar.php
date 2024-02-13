<?php include 'sessionstart.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php include 'header.php';?>
   
</head>
<body style="background-color: whitesmoke;">
<ul class="menu side-bar navbar-nav px-0">
    <div class="logo text-white text-center fw-bold px-2 text-nowrap d-flex align-items-center" style="height: 70px;">
        <img src="../upload/logo.png" class="mx-auto" height="59" width="auto">
    </div>
    <div class="d-flex flex-column row-gap-1 pt-3 px-2">
        <hr class="text-dark m-0">
        <li class="nav-item">
            <a href="dashboard" class="homes nav-link px-2 d-flex">
             <span class="icon-span"><i class="fa-solid fa-gauge-high m-auto"></i></span>
             <span class="text-span">Dashboard</span>
             <span class="tooltips text-dark text-nowrap p-1">Dashboard</span>
            </a>
        </li>
        <hr class="text-dark m-0">
        <li class="nav-item ">
            <a href="property-information" class="nav-link px-2">
             <span class="icon-span"><i class="fa-solid fa-receipt m-auto"></i></span>
             <span class="text-span">Property Information</span>
             <span class="tooltips text-dark text-nowrap p-1">Property Information</span>
            </a>
        </li>
        <hr class="text-dark m-0">
        <li class="nav-item">
            <a href="sales-history" class="nav-link px-2">
                <span class="icon-span"><i class="fa-solid fa-file-invoice-dollar m-auto"></i></span>
                <span class="text-span">Sales History</span>
                <span class="tooltips text-dark text-nowrap p-1">Sales History</span>
            </a>
        </li>
        <hr class="text-dark m-0">
        <li class="nav-item">
            <a href="profile" class="homes nav-link px-2 d-flex">
             <span class="icon-span"><i class="fa-solid fa-user m-auto"></i></span>
             <span class="text-span">Profile</span>
             <span class="tooltips text-dark text-nowrap p-1">Profile</span>
            </a>
        </li>
        <hr class="text-dark m-0">
        <li class="nav-item">
            <a href="../home.php" class="nav-link px-2">
                <span class="icon-span"><i class="fa-solid fa-user m-auto"></i></span>
                <span class="text-span">Back to Home</span>
                <span class="tooltips text-dark text-nowrap p-1">Back to Home</span>
            </a>
        </li>
        <hr class="text-dark m-0">

        <!-- <li class="nav-item position-absolute end-0 start-0 m-2" style="bottom: 20px;">
            <a href="logout.php"class="logout p-2 text-decoration-none d-flex">
                <span class="me-auto text-span">Name of Admin</span>
                <span class="icon-span"><i class="fa-solid fa-right-from-bracket fs-4"></i></i>
                </i></span>
            </a>
        </li> -->
    </div>

</ul>

