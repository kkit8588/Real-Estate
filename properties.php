<title>Properties</title>
<style type="text/css">
   .inputicon{
      width: 50px;
   }
</style>
<?php include 'header.php' ?>
   
   <div>
      <?php include 'navtop.php' ?>
       <div class="d-flex bg-white py-5 flex-column align-items-center">
            <h2>Properties</h2>
            <div class="d-flex flex-column mb-5" style="width: 150px;">
               <hr class="text-success mb-2">
               <hr class="w-50 mx-auto m-0 border border-success border-2"  >
            </div>
            <div class="container">
               <div class="row row-gap-4">
                  <div class="col-lg-8">
                     <div class="row row-gap-4">
                        <?php
                           include 'connect.php'; 
                           if (isset($_POST['searchInput']) && isset($_POST['selectstatus']) && isset($_POST['selecttype'])) {
                              
                           $location = $_POST['searchInput'];
                           $sqlSelect = $conn->query("SELECT * FROM properties_tbl WHERE location = '$location' AND status='Available'");
                            if ($sqlSelect->num_rows > 0){
                           while($row= $sqlSelect->fetch_assoc()):

                        ?>
                        <div class="col-md-6">
                           <div class="card rounded-1 shadow p-0">
                             <div class="position-relative">
                                <span class="text-bg-success position-absolute p-2 rounded-1 " style="top: 10px; right: 10px;">For <?php echo $row['rs']; ?></span>
                                <img src="<?php echo './images/'.$row['ci']; ?>" class="card-img-top rounded-1 rounded-bottom-0 object-fit-cover" alt="1" height="350">
                                <div class="position-absolute" style="bottom: 10px; left: 10px;">
                                 <div class="text-success">Php<?php echo $row['price']; ?></div>
                                 <div class="text-secondary"><?php if ($row['area'] =" ") {
                                    echo "n/a";
                                 }else{echo $row['area'];} ?> Sqm</div>
                                </div>
                             </div>
                             <div class="card-body d-flex flex-column row-gap-1">
                               <h5 class="card-title">
                                 <a href="propertydetail.php?reportid=<?php echo $row['images_id']; ?>" class="text-dark text-decoration-none"><?php echo $row['title']; ?></a>
                              </h5>
                               <p class="card-text text-body-secondary"><i class="fa-solid fa-location-dot text-success"></i><?php echo $row['location']; ?></p>
                             </div>
                             <div class="d-flex p-3">
                                 <span class="d-flex column-gap-1">
                                    <i class="fa-solid fa-user text-success my-auto"></i>
                                    <p class="text-secondary my-auto">By: <?php echo $row['agent_name']; ?></p>
                                 </span>
                                 <span class="d-flex column-gap-1 ms-auto">
                                    <i class="fa-solid fa-calendar-days text-success my-auto"></i>
                                    <p class="text-secondary my-auto"><?php echo $row['added_date']; ?></p>
                                 </span>
                             </div>
                           </div>
                        </div>
                        <?php endwhile; }else{
                           echo "<div class='col-md-6'>
                                    <h1 class='text-secondary'>No Property Available</h1>
                                 </div>";
                        }
                        }else{

                           $sqlSelect = $conn->query("SELECT * FROM properties_tbl WHERE status='Available' AND approval='approved'");
                           while($row= $sqlSelect->fetch_assoc()):
                        ?>
                        <div class="col-md-6">
                           <div class="card rounded-1 shadow p-0">
                             <div class="position-relative">
                                <span class="text-bg-success position-absolute p-2 rounded-1 " style="top: 10px; right: 10px;">For <?php echo $row['rs']; ?></span>
                                <img src="<?php echo 'images/'.$row['ci']; ?>" class="card-img-top rounded-1 rounded-bottom-0 object-fit-cover" alt="1" height="350">
                                <div class="position-absolute" style="bottom: 10px; left: 10px;">
                                 <div class="text-success">Php<?php echo $row['price']; ?></div>
                                 <div class="text-secondary"><?php if ($row['area'] =" ") {
                                    echo "n/a";
                                 }else{echo $row['area'];} ?> Sqm</div>
                                </div>
                             </div>
                             <div class="card-body d-flex flex-column row-gap-1">
                               <h5 class="card-title">
                                 <a href="propertydetail.php?reportid=<?php echo $row['images_id']; ?>" class="text-dark text-decoration-none"><?php echo $row['title']; ?></a>
                              </h5>
                               <p class="card-text text-body-secondary"><i class="fa-solid fa-location-dot text-success"></i><?php echo $row['location']; ?></p>
                             </div>
                             <div class="d-flex p-3">
                                 <span class="d-flex column-gap-1">
                                    <i class="fa-solid fa-user text-success my-auto"></i>
                                    <p class="text-secondary my-auto">By: <?php echo $row['agent_name']; ?></p>
                                 </span>
                                 <span class="d-flex column-gap-1 ms-auto">
                                    <i class="fa-solid fa-calendar-days text-success my-auto"></i>
                                    <p class="text-secondary my-auto"><?php echo $row['added_date']; ?></p>
                                 </span>
                             </div>
                           </div>
                        </div>
                        <?php endwhile; };?>
                     </div>
                  </div>

                  <div class="col-lg-4">
                     <div>
                        <form class="w-100" method="post" action="results.php">
                           <div class="d-flex flex-column">
                              <h3 class="text-start">Installment Calculator</h3>
                              <div class="d-flex flex-column mb-3" style="width: 150px;">
                                 <hr class="text-success mb-2 mt-1 border border-success border-2">
                                 <hr class="w-50 m-0 border border-success border-2"  >
                              </div>
                              <div class="row p-2 row-gap-2 ">
                                 <div class="px-0 d-flex bg-secondary-subtle border border-secondary rounded-1">
                                    <i class="fa-solid fa-peso-sign fs-5 m-auto inputicon"></i>
                                    <input class="form-control rounded-1 rounded-start-0 border-secondary border-bottom-0 border-top-0 border-end-0" type="number" name="property_price" placeholder="Property Price"></input>
                                 </div>
                                 <div class="px-0 d-flex bg-secondary-subtle border border-secondary rounded-1">
                                    <i class="fa-solid fa-calendar-days fs-5 m-auto inputicon"></i>
                                    <input class="form-control rounded-1 rounded-start-0 border-secondary border-bottom-0 border-top-0 border-end-0" type="number" name="duration_months" placeholder="Duration Month"></input>
                                 </div>
                                 <div class="px-0 d-flex bg-secondary-subtle border border-secondary rounded-1">
                                    <i class="fa-solid fa-percent fs-5 m-auto inputicon"></i>
                                    <input class="form-control rounded-1 rounded-start-0 border-secondary border-bottom-0 border-top-0 border-end-0" type="number" name="interest_rate"  step="0.1" placeholder="Interest Rate" ></input>
                                 </div>
                                 <div class="px-0">
                                    <input type="submit" name="submit" value="Calculate Installment" class="btn btn-danger rounded-0">
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                     <div class="my-4">
                        <h3 class="text-start">Recently Added Property</h3>
                        <div class="d-flex flex-column mb-3" style="width: 150px;">
                           <hr class="text-success mb-2 mt-1 border border-success border-2">
                           <hr class="w-50 m-0 border border-success border-2"  >
                        </div>
                        <div class="d-flex flex-column row-gap-2">
                           <?php
                              include 'connect.php'; 
                              $sqlSelect = $conn->query("SELECT * FROM properties_tbl ORDER BY id DESC LIMIT 3");
                              while($row= $sqlSelect->fetch_assoc()):
                           ?>
                           <div class="d-flex bg-white shadow-sm p-1 column-gap-3">
                             <img src="./images/<?php echo $row['ci']; ?>" class="object-fit-cover" alt="1" width="140" height="100">
                             <div class="d-flex flex-column">
                               <a href="propertydetail.php?reportid=<?php echo $row['images_id']; ?>" class="fs-5 text-decoration-none"><?php echo $row['title']; ?></a>
                               <p class="card-text text-secondary"><i class="fa-solid fa-location-dot me-1"></i><?php echo $row['location']; ?></p>
                             </div>
                           </div>
                           <?php endwhile; ?>
                        </div>
                     </div>
                     
                  </div>
                  
               </div>




            <!-- 
               

               <div class="propertiesleft row d-flex justify-content-center justify-content-lg-start gap-4 px-3 px-lg-0 bg-danger" style="width: 70%; ">

               <div class="propertiesright ms-auto px-1 px-lg-0 bg-primary" style="width: 30%">
                  <form class="py-2 mt-4 mt-lg-0 " >
                     <div class="d-flex flex-column">
                        <h2 class="text-start">Installment Calculator</h2>
                        <div class="d-flex flex-column mb-3" style="width: 150px;">
                           <hr class="text-success mb-2 mt-1 border border-success border-2">
                           <hr class="w-50 m-0 border border-success border-2"  >
                        </div>
                        <div class="row p-2 row-gap-2 ">
                           <div class="col-lg-12 px-1">
                              <input class="col-12 form-control-lg rounded-1 border border-dark" type="text" name="messages" placeholder="Type Comments..."></input>
                           </div>
                           <div class="col-lg-12 px-1">
                              <input class="col-12 form-control-lg rounded-1 border border-dark" type="text" name="messages" placeholder="Type Comments..."></input>
                           </div>
                           <div class="col-lg-12 px-1">
                              <input class="col-12 form-control-lg rounded-1 border border-dark" type="text" name="messages" placeholder="Type Comments..."></input>
                           </div>
                           <div class="col-lg-12 px-1">
                              <input type="submit" name="submit" value="Submit" class="btn btn-success">
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
             -->

            </div>
         </div>
      </div>

      <?php include 'navbottom.php' ?>
   </div>
   <?php include 'footer.php' ?>