<?php 
    session_start();
    include 'connect.php';

    // Check if the user is logged in
    if (!isset($_SESSION['id']) || !isset($_SESSION['email']) || !isset($_SESSION['name']) || !isset($_SESSION['type'])) {
        header('Location: login.php');
        exit();
    }

?>

<title>Properties</title>
<style type="text/css">
   .inputicon{
      width: 50px;
   }
   .responsivePayPal:hover::before{
      background-color: unset;
   }
   .responsivePayPal::before{
      content: "";
      width: 100%;
      height: 100%;
      background-color: rgba(250, 250, 250, 0.1);
      position: absolute;
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
                  <div class="col-lg-8 row-gap-5">
                     <div class="row">
                        <div class="col-12 position-relative">
                           <div id="carouselExample" class="carousel slide" style="height: 500px;">
                              <div class="carousel-inner">
                              <?php
                                 include 'connect.php'; 
                                 $id = $_GET['reportid'];
                                 $sqlSelect = $conn->query("SELECT * FROM images WHERE images_id='$id'");
                                 while($row= $sqlSelect->fetch_assoc()):
                              ?>
                               <div class="carousel-item">
                                 <img src="<?php echo "./images/" . $row['file_name'];?>" class="d-block h-100 w-100" alt="...">
                               </div>
                              <?php endwhile; ?>
                              <?php
                                 $id = $_GET['reportid'];
                                 $sqlSelect = $conn->query("SELECT * FROM properties_tbl WHERE images_id='$id'");
                                 $row= $sqlSelect->fetch_assoc();
                              ?>
                              <div class="carousel-item active">
                                 <img src="<?php echo "./images/" . $row['ci'];?>" class="d-block h-100 w-100" alt="...">
                              </div>
                             </div>
                             <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                               <span class="visually-hidden">Previous</span>
                             </button>
                             <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                               <span class="carousel-control-next-icon" aria-hidden="true"></span>
                               <span class="visually-hidden">Next</span>
                             </button>
                           </div>
                             <!-- <img src='<?php echo "./images/" . $row['ci'];?>'alt='1' height='450' class='w-100 rounded-0 object-fit-cover border border-1'> -->
                             <img src='<?php echo "./qrcode/" . $row['qrimage'];?>'alt='1' height='100' width='100' class='position-absolute border border-1' style="right: 20px; bottom: 7px;">

                        </div>
                       
                     </div>
                     <div class="row py-5" >
                        <div class="col-6">
                           <span class="text-bg-success p-3"><?php echo $row['rs']; ?></span>
                           <h5 class="d-block mt-4"><?php echo $row['title']; ?></h5>
                           <span class="d-block mt-2 text-secondary"><i class="fa-solid fa-location-dot text-success"></i> <?php echo $row['location']; ?></span>
                        </div>
                        <div class="col-6 d-flex">
                           <div class="ms-auto">
                              <h4 class="text-success">Php<?php echo $row['price']; ?></h4>
                              <span class="text-secondary float-end">Price</span>
                           </div>
                        </div>
                     </div>
                     <div class="row px-2">
                        <div class="col-12 bg-secondary-subtle rounded-1 py-3 px-4 d-flex column-gap-4">
                              <span>
                                 <p class="mb-1 text-dark"><?php echo $row['area']; ?></p>
                                 <p class="text-secondary">Sqm</p>
                              </span>
                              <span>
                                 <p class="mb-1 text-dark"><?php echo $row['bhk']; ?></p>
                                 <p class="text-secondary">Beds</p>
                              </span>
                              <span>
                                 <p class="mb-1 text-dark"><?php echo $row['bathroom']; ?></p>
                                 <p class="text-secondary">Baths</p>
                              </span>
                              <span>
                                 <p class="mb-1 text-dark"><?php echo $row['kitchen']; ?></p>
                                 <p class="text-secondary">Kitchen</p>
                              </span>
                              <span>
                                 <p class="mb-1 text-dark"><?php echo $row['balcony']; ?></p>
                                 <p class="text-secondary">Balcony</p>
                              </span>
                        </div>
                     </div>
                     <div class="row my-4 px-2">
                        <h4 class="mb-5 pt-2">Description</h4>
                        <h5 class="mb-4">Property Summary</h5>
                        <div class="col-12 bg-secondary-subtle rounded-1 py-3 px-4 d-flex column-gap-4">
                           <span class="d-flex col-6">
                              <p class="mb-1 text-dark col-6">Dirty Kitchen :</p>
                              <p class="text-secondary col-6"><?php echo $row['bhk']; ?> BHK</p>
                           </span>
                           <span class="d-flex col-6">
                              <p class="mb-1 text-dark col-6 text-nowrap me-5 me-md-0">Property Type :</p>
                              <p class="text-secondary col-6"><?php echo $row['type']; ?></p>
                           </span>
                        </div>
                        <div class="col-12 rounded-1 py-3 px-4 d-flex column-gap-4">
                           <span class="d-flex col-6">
                              <p class="mb-1 text-dark col-6">Floor :</p>
                              <p class="text-secondary col-6"><?php echo $row['floor']; ?></p>
                           </span>
                           <span class="d-flex col-6">
                              <p class="mb-1 text-dark col-6">Total Floor :</p>
                              <p class="text-secondary col-6"><?php echo $row['totalfloor']; ?></p>
                           </span>
                        </div>
                        <div class="col-12 bg-secondary-subtle rounded-1 py-3 px-4 d-flex column-gap-4">
                           <span class="d-flex col-6">
                              <p class="mb-1 text-dark col-6">Blk No. :</p>
                              <p class="text-secondary col-6">Kumintang</p>
                           </span>
                           <span class="d-flex col-6">
                              <p class="mb-1 text-dark col-6">Lot No. :</p>
                              <p class="text-secondary col-6">Batangas</p>
                           </span>
                        </div>
                     </div>
                     <div class="row my-4">
                        <h5 class="mb-4">Features</h5>
                        <div class="col-12 d-flex">
                           <span class="d-flex col-6">
                              <p class="mb-1 text-dark col-6">Property Age:</p>
                              <p class="text-secondary col-6"><?php echo $row['propertyage']; ?></p>
                           </span>
                           <span class="d-flex col-6">
                              <p class="mb-1 text-dark col-6 text-nowrap me-5 me-md-0">Swiming Pool:</p>
                              <p class="text-secondary col-6"><?php echo $row['swimmingpool']; ?></p>
                           </span>
                        </div>
                        <div class="col-12 d-flex">
                           <span class="d-flex col-6">
                              <p class="mb-1 text-dark col-6">Parking:</p>
                              <p class="text-secondary col-6"><?php echo $row['parking']; ?></p>
                           </span>
                           <span class="d-flex col-6">
                              <p class="mb-1 text-dark col-6 text-nowrap me-5 me-md-0">GYM:</p>
                              <p class="text-secondary col-6"><?php echo $row['gym']; ?></p>
                           </span>
                        </div>
                        <div class="col-12 d-flex">
                           <span class="d-flex col-6">
                              <p class="mb-1 text-dark col-6">3rd Party:</p>
                              <p class="text-secondary col-6"><?php echo $row['thirdparty']; ?></p>
                           </span>
                           <span class="d-flex col-6">
                              <p class="mb-1 text-dark col-6 text-nowrap me-5 me-md-0">Alivator:</p>
                              <p class="text-secondary col-6"><?php echo $row['alivator']; ?></p>
                           </span>
                        </div>
                        <div class="col-12 d-flex">
                           <span class="d-flex col-6">
                              <p class="mb-1 text-dark col-6">CCTV:</p>
                              <p class="text-secondary col-6"><?php echo $row['cctv']; ?></p>
                           </span>
                           <span class="d-flex col-6">
                              <p class="mb-1 text-dark col-6 text-nowrap me-5 me-md-0">Church/Temple:</p>
                              <p class="text-secondary col-6"><?php echo $row['churchtemple']; ?></p>
                           </span>
                        </div>
                        <div class="col-12 d-flex">
                           <span class="d-flex col-6">
                              <p class="mb-1 text-dark col-6">Type:</p>
                              <p class="text-secondary col-6"><?php echo $row['type']; ?></p>
                           </span>
                           <span class="d-flex col-6">
                              <p class="mb-1 text-dark col-6 text-nowrap me-5 me-md-0">Security:</p>
                              <p class="text-secondary col-6"><?php echo $row['security']; ?></p>
                           </span>
                        </div>
                        <div class="col-12 d-flex">
                           <span class="d-flex col-6">
                              <p class="mb-1 text-dark col-6">Dining Capacity:</p>
                              <p class="text-secondary col-6"><?php echo $row['diningcapacity']; ?></p>
                           </span>
                        </div>
                     </div>
                     <div class="row mt-4">
                        <h5 class="mb-4">Floor Plans Images</h5>
                        <div class="accordion" id="accordionExample">
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Floor Plans
                              </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <?php
                                  $images_id = $row['images_id'];
                                  $sqlSelect = $conn->query("SELECT * FROM images WHERE images_id='$images_id'");
                                  while($images= $sqlSelect->fetch_assoc()):
                                      echo "<img src='./images/".$images['file_name']. "'alt='1' width='50' class='mx-2 border border-1 '>";
                                   endwhile;
                                ?>
                              </div>
                            </div>
                          </div>
                        </div>
                     </div>
                     <div class="row mt-4">
                        <h5 class="mb-4">Contact Agent</h5>
                        <div class="d-flex flex-column mb-3" style="width: 150px;">
                           <hr class="text-success mb-2 mt-1 border border-success border-2">
                           <hr class="w-50 m-0 border border-success border-2"  >
                        </div>
                        <div class="d-flex align-items-start">
                           <div class="ratio ratio-1x1" style="width: 180px; height: 200px;">
                              <img src="./upload/1.jpg" class="object-fit-cover" height="50" width="50">
                           </div>
                           <div class="rounded-1 px-4 d-flex flex-column row-gap-2">
                              <span class="fw-bold text-success"><?php echo $row['agent_name']; ?></span>
                              <span class="text-secondary">7896665555</span>
                              <span class="text-secondary"><?php echo $row['agent_email']; ?></span>
                              <span>
                                 <form method="POST" action="updateconnection.php">
                                    <input hidden type="text" name="agent_email" value="<?php echo $row['agent_email']; ?>">
                                    <input hidden type="text" name="client_email" value="<?php echo $_SESSION['email']; ?>">
                                    <input hidden type="text" name="friend_id" value="<?php echo $row['unique_id']; ?>">
                                    <input type="submit" name="submit" value="Chat with agent" class="btn btn-sm btn-outline-primary">
                                 </form>
                              </span>
                              <span class="d-flex column-gap-3 my-4">
                                 <a href="#"><i class="fa-brands text-dark fa-facebook"></i></a>
                                 <a href="#"><i class="fa-brands text-dark fa-twitter"></i></a>
                                 <a href="#"><i class="fa-brands text-dark fa-google-plus-g"></i></a>
                                 <a href="#"><i class="fa-brands text-dark fa-linkedin"></i></a>
                                 <a href="#"><i class="fa-brands text-dark fa-instagram"></i></a>
                              </span>
                           </div>

                        </div>
                     </div>
                  </div>

                  <div class="col-lg-4">
                     <form action="charge.php" method="post" class="d-flex flex-column shadow-sm p-3 mb-4">
                        <h4 class="text-secondary">Pay Now</h4>
                        <hr class="text-dark my-2">
                        <div class="d-flex justify-content-between py-1">
                           <div>
                              <img src="<?php echo './images/'.$row['ci']; ?>" class="rounded-2 shadow-sm object-fit-cover" alt="1" height="80" width="80">
                           </div>
                           <div class="d-flex flex-column align-items-end py-1 float-end">
                              <span class="text-dark fw-bold "><?php echo $row['title']; ?></span>
                              <span class="text-secondary "><?php echo $row['sqm']; ?>Sqm</span>
                           </div>
                        </div>
                         <input hidden type="text" name="properties_id" value="<?php echo $_GET['reportid'] ?>" />
                         <input hidden type="text" name="agent_name" value="<?php echo $row['price']; ?>" />
                         <input hidden type="text" name="amount" value="<?php echo $row['price']; ?>" />
                         <input hidden type="text" name="title" value="<?php echo $row['title']; ?>" />
                         <input hidden type="text" name="sqm" value="<?php echo $row['sqm']; ?>" />
                         <input hidden type="text" name="agent_email" value="<?php echo $row['agent_email']; ?>" />
                         <input hidden type="text" name="client_email" value="<?php echo $_SESSION['email']; ?>" />
                        <hr class="text-dark my-2">
                        <div class="d-flex align-items-center justify-content-between py-2">
                           <h4 class="text-success my-0">Php<?php echo $row['price']; ?></h4>
                           <span class="text-secondary ">Price</span>
                        </div>
                        <button type="submit" name="submit" class="responsivePayPal position-relative border-5 d-flex w-100" style="background-color: #ffc439; border-radius: 5px; border: 1px solid #dc911d !important;">
                            <img src="./upload/checkout-logo-large.png" class="paypal mx-auto" alt="Check out with PayPal">
                        </button>
                     </form>
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
                              $i=1;
                              $sqlSelect = $conn->query("SELECT * FROM properties_tbl ORDER BY id DESC LIMIT 3");
                              while($row= $sqlSelect->fetch_assoc()):
                           ?>
                           <div class="d-flex bg-white shadow-sm p-1 column-gap-3">
                             <img src="./images/<?php echo $row['ci']; ?>" class="object-fit-cover" alt="1" width="140" height="100">
                             <div class="d-flex flex-column">
                               <a href="propertydetail.php?reportid=<?php echo $row['id']; ?>" class="fs-5 text-decoration-none"><?php echo $row['title']; ?></a>
                               <p class="card-text text-secondary"><i class="fa-solid fa-location-dot me-1"></i><?php echo $row['location']; ?></p>
                             </div>
                           </div>
                           <?php endwhile; ?>
                        </div>
                     </div>
                     
                  </div>
                  
               </div>

            </div>
         </div>
      </div>
      <?php include 'navbottom.php' ?>
      <script>
      $(document).ready(function () {
         $('#unique').click(function() {
          var uDate = $(this).data('unique');
              $.ajax({
                  type: 'POST',
                  url: 'updateconnection.php',
                  data: { uDate: <php? echo '$unique['unique_id']'; ?> },
                  success: function () {
                  }
              });
         });
   });    
      </script>
   </div>
   <?php include 'footer.php' ?>