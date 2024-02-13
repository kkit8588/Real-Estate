<title id="contactContent">Messages</title>
<?php include "sidebar.php" ; ?>
<div class="content ">
   <?php include "navmenu.php" ; ?>
   <div class="p-3">
      <div class="bg-white py-4">
         <div class="mx-auto mb-3" style="width: 40%;">
          <span class="fs-4"><b>Messages</b></span>
          <hr class="my-0">
         </div>
         <?php
             include '../connect.php'; 
             $unique_id =$_GET['friend_id'];
             $sqlSelect = $conn->query("SELECT * FROM user_tbl WHERE unique_id = '$unique_id'");
              if ($sqlSelect->num_rows > 0){
            $row= $sqlSelect->fetch_assoc();
          
          ?>
         <div id="container" class="mx-auto d-flex flex-column justify-content-between  my-2 shadow " style="height: 80vh; min-width: 22em;max-width: 40%;">
            <div class="header rounded-top-4 border-bottom d-flex w-100 start-0 p-3">
                <img src="../upload/profile.png" width="50" height="50" class="border border-2 rounded-circle">
                <div class="ms-2 mt-auto pb-1"><?php echo $row['name']. " " . $_SESSION['email']; ?></div>
            </div>
          <?php } ?>
            <div id="messageoutput" class="body h-100 overflow-y-auto p-3 d-flex flex-column row-gap-4" style="background-color: white;">
            
            </div>
            <form  class="sendmessage footer bg-white border-top w-100 p-4">
              <div class="d-flex justify-content-center align-items-center border border-secondary-subtle border-2 rounded-3">
                <div class="w-100">
                  <input id="sendmessage" type="text" name="sendmessage" placeholder="Type a message here..." class="w-100 border-0 form-control rounded-end-0" autocomplete="off">
                </div>
                <input type="hidden" name="friend_id" value="<?php echo $_GET['friend_id'];?>">
                <input type="hidden" name="unique_id" value="<?php echo $_SESSION['unique_id'];?>">
                <button type="submit" id="sendbtn" class="ms-auto border-0 rounded-end">
                  <i class="fa-solid fa-paper-plane px-3 py-2" style="font-size:20px;"></i>
                </button>
              </div>
            </form>
         </div>
      </div>
   </div>
</div>

<?php include "footer.php" ; ?>
<?php include "chatfunc.php" ; ?>