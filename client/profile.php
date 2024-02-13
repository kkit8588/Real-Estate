<title id="contactContent">Profile Information</title>
<?php include "sidebar.php" ; ?>
<div class="content ">
   <?php include "navmenu.php" ; ?>
   <div class="p-3">
      <div class="bg-white">
         <div class="text-bg-white d-flex align-items-center p-3 ">
            <span class="fs-4"><b>Profile Information</b></span>
         </div>
         <hr class="m-0">
         <div id="property-container" class="row px-3 my-2 py-4 shadow-sm overflow-x-auto row-gap-5" style="min-height: 79vh;">
            <div class="contact col-md-12 col-lg-6 px-5">
              <h5 class="fw-bold mb-5">Feedback Form Send to Admin</h5 class="fw-bold">
              <form id="feedback" class="anouncementform d-flex flex-column row-gap-3">
                 <div>
                   <label class="form-label">Full Name:</label>
                   <input type="text" name="fullname" class="form-control border border-secondary-subtle rounded-1" placeholder="Type Full Name"value="<?php echo $_SESSION['name'];?>">
                 </div>
                 <div>
                   <label class="form-label">Email:</label>
                   <input type="email" name="email" class="form-control border border-secondary-subtle rounded-1" placeholder="Type Email" value="<?php echo $_SESSION['email'];?>">
                 </div>
                 <div>
                   <label class="form-label">Your Feedback:</label>
                   <textarea type="text" name="feedback" class="form-control border border-secondary-subtle rounded-1" placeholder="Type your feedback message here..." style="min-height: 15em;"></textarea>
                 </div>
                 <div class="me-auto">
                      <input type="submit" name="feedback" value="Send Feedback" class="btn btn-info rounded-0 p-3">
                 </div>
              </form>
            </div>
            <div class="profileInfo col-md-12 col-lg-5 px-5">
              <?php 
              include '../connect.php';
              $id = $_SESSION['id'];
              $select = mysqli_query($conn, "SELECT * FROM user_tbl WHERE id='$id'");
              $row = $select->fetch_assoc();
              ?>
               
              <div class="d-flex flex-column row-gap-3">
                <div class="mb-4">
                  <img src="../images/<?php echo $row['profile'] ?>" width="250"  height="250" class="object-fit-none"> 
                </div>
                <span><b>Full Name:</b> <?php echo $row['name'] ?></span>
                <span><b>Email:</b> <?php echo $row['email'] ?></span>
                <span><b>Phone:</b> <?php echo $row['phone'] ?></span>
                <span><b>Account:</b> <?php echo $row['type'] ?></span>
                <span><b>Birthday:</b> <?php echo $row['bday'] ?></span>
                <span><b>Address:</b> <?php echo $row['address'] ?></span>
                
              </div>
            </div>
         </div>
      </div>
   </div>
</div>


<!-- modal -->
<div class="modal fade" id="agent-modal" tabindex="-1">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add New Properties</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="property modal-body mb-1">
        
      </div>
    </div>
  </div>
</div>


<?php include "footer.php" ; ?>