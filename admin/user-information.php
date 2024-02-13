<title id="contactContent">Client Information</title>
<?php include "sidebar.php" ; ?>
<div class="content ">
   <?php include "navmenu.php" ; ?>
   <div class="p-3">
      <div class="bg-white">
         <div class="text-bg-white d-flex align-items-center p-3 ">
            <span class="fs-4"><b>Client Information</b> Table</span>
         </div>
         <hr class="m-0">
         <div id="table-container" class=" px-3 my-2 py-4 shadow-sm ">

          
         </div>
      </div>
   </div>
</div>

<!-- modal -->
<div class="modal fade mt-5" id="agent-modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add New Client</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body mb-1">
         <form class="addclientform d-flex flex-column row-gap-3">
           <div>
             <label class="form-label">Email:</label>
             <input type="email" name="email" class="form-control border border-secondary-subtle rounded-0" placeholder="Type email">
           </div>
           <div>
             <label class="form-label">Username:</label>
             <input type="text" name="username" class="form-control border border-secondary-subtle rounded-0" placeholder="Type username">
           </div>
           <div>
             <label class="form-label">Password:</label>
             <input type="password" name="password" class="form-control border border-secondary-subtle rounded-0" placeholder="Type password">
           </div>
      </div>
      <div class="modal-footer">
        <input type="submit" name="Save" class="btn btn-primary">
        </form>
      </div>
    </div>
  </div>
</div>


<?php include "footer.php" ; ?>