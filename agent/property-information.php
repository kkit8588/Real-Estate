<title id="contactContent">Property Information</title>
<?php include "sidebar.php" ; ?>
<div class="content ">
   <?php include "navmenu.php" ; ?>
   <div class="p-3">
      <div class="bg-white">
         <div class="text-bg-white d-flex align-items-center p-3 ">
            <span class="fs-4"><b>Property Information</b> Table</span>
            <div class="ms-auto">
               <button id="anp" class="btnagentmod btn btn-sm btn-success rounded-0" data-bs-target="#agent-modal" data-bs-toggle="modal">
                  <i class="fa-solid fa-circle-plus me-1"></i>
                  Add New Property
               </button>
            </div>
         </div>
         <hr class="m-0">
         <div id="property-container" class=" px-3 my-2 py-4 shadow-sm overflow-x-auto">

          
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