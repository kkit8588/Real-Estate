  
  <!-- JQUERY -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- BOOTSTRAP JS OFFLINE -->
  <script type="text/javascript" src="../plugins/bootstrap5/bootstrap.min.js"></script>
  <!-- FONT AWESOME OFFLINE -->
  <script src="../plugins/fontawesome/all.min.js" crossorigin="anonymous"></script>
  <!-- JS -->
  <script src="../assets/js/script.js" crossorigin="anonymous"></script>
  <!-- DATATABLE -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
  <!-- sweetalert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script type="text/javascript">

    $(document).ready(function() {
        

        function propertyTable() {
             $.ajax({
                    type: 'POST',
                    url: 'property-table.php',
                    success: function (data) {
                        $('#property-container').html(data);
                    },
                });
        }
        propertyTable();

        function salesTable() {
             $.ajax({
                    type: 'POST',
                    url: 'sales-table.php',
                    success: function (data) {
                        $('#sales-container').html(data);
                    },
                });
        }
        salesTable();

        $('#anp').click(function(){
            $.ajax({
                url: "property-form.php",
                type: 'post',
                success: function(data){
                    $('.property').html(data)
                }
            });
        });
        
        $('#envelopeid').on("click", function() {
            $.ajax({
                type: 'POST',
                url: 'notifupdate.php',
                success: function (data) {
                    // $('#payment-container').html(data);
                },
            });
        });
        $('#feedback').submit(function(n) {
            n.preventDefault();
            var fbData = $(this).serialize();
            $.ajax({
                    type: 'POST',
                    url: '../controller/feedback-controller.php',
                    data: fbData,
                    success: function () {
                        $('textarea').val("");
                        Swal.fire({
                            position: "top-center",
                            icon: "success",
                            title: "Feedback has been sent!",
                            text: "Please wait for our response.",
                            showConfirmButton: true
                        });
                    },
                });
        });
    });

  </script>