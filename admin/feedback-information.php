<title id="contactContent">Feedback Information</title>
<?php include "sidebar.php" ; ?>
<div class="content ">
   <?php include "navmenu.php" ; ?>
   <div class="p-3">
      <div class="bg-white">
         <div class="text-bg-white d-flex align-items-center p-3 ">
            <span class="fs-4"><b>Feedback Information</b></span>
         </div>
         <hr class="m-0">
         <div id="feedback-container" class="main-container px-3 my-2 py-4 shadow-sm ">

          
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

<div class="modal fade" id="reply" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Messages Reply</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="contact" class="py-2 px-3 mt-4 mt-lg-0" style="min-width: 70%">
          <div class="d-flex flex-column align-items-center">
             <div class="row p-2 row-gap-3 ">
                <div class="col-12 px-1">
                   <label class="form-label">Send to:</label>
                   <input type="email" name="email" class="col-12 form-control rounded-1 border border-secondary"  placeholder="Email Address*">
                </div>
                <div class="col-12 px-1">
                   <label class="form-label">Messages:</label>
                   <textarea type="text" name="messages" class="col-12 form-control rounded-1 border border-secondary"  placeholder="Type Reply..."></textarea>
                </div>
             </div>
          </div>
      </div>
      <div class="modal-footer">
        <input type="submit" name="submit" value="Submit" class="btn btn-success">
        </form>
      </div>
    </div>
  </div>
</div>
<?php include "footer.php" ; ?>
<script type="text/javascript">
  $(document).ready(function() {
        $('#contact').submit(function(e) {
            e.preventDefault();

            var contact = $(this).serialize();
            $.ajax({
                url: '../controller/reply.php',
                type: 'POST',
                data: contact,
                dataType: 'json',
                success: function(output) {
                    $('.form-control').val("");
                    $('#reply').modal("hide");
                    Swal.fire({
                        position: "top-center",
                        icon: "success",
                        title: "Thank you for sending qoute!",
                        showConfirmButton: true
                    });
                }
            });
        });
  });
</script>