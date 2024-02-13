<title>Agent</title>
<?php include 'header.php' ?>
   
   <div>
      <?php include 'navtop.php' ?>
      <div class="bg-white py-5 d-flex flex-column align-items-center">
         <div class="d-flex flex-column align-items-center">
            <h2>Official Agents</h2>
            <div class="d-flex flex-column" style="width: 150px;">
               <hr class="text-success mb-2">
               <hr class="w-50 mx-auto m-0 border border-success border-2"  >
            </div>
         </div>
         <div class="row d-flex justify-content-center gap-4 container-fluid mt-5" style="width: 90%;">
            <?php
               include 'connect.php'; 
               $i=1;
               $sqlSelect = $conn->query("SELECT * FROM user_tbl WHERE type='Agent'");
               while($row= $sqlSelect->fetch_assoc()):
            ?>
            <div class="card rounded-1 shadow p-0" style="width: 20rem; ">
              <div>
                 <img src="<?php echo 'images/'.$row['profile']; ?>" class="card-img-top rounded-1 rounded-bottom-0 object-fit-cover" alt="1" height="350">
              </div>
              <div class="card-body d-flex flex-column row-gap-1">
                <h5 class="card-title text-center">
                  <form method="POST" action="updateconnection.php">
                     <input hidden type="text" name="agent_email" value="<?php echo $row['email']; ?>">
                     <input hidden type="text" name="client_email" value="<?php if(isset($_GET['youremail'])){echo $_GET['youremail'];}else{echo "null";}?>">
                     <input hidden type="text" name="friend_id" value="<?php echo $row['unique_id']; ?>">
                     <input type="submit" name="submit" value="<?php echo $row['name']; ?>" class="btn btn sm fs-5 fw-bold" style="all: unset; cursor: pointer;">
                  </form>
                </h5>
                <p class="card-text text-body-secondary text-center">Real Estate - <?php echo $row['type']; ?></p>
              </div>
            </div>
            <?php endwhile; ?>
            </div>
         </div>
      </div>

   <?php include 'navbottom.php' ?>
   </div>
   <?php include 'footer.php' ?>

