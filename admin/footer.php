  
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

         function userTable() {
             $.ajax({
                    type: 'POST',
                    url: 'user-table.php',
                    success: function (data) {
                        $('#table-container').html(data);
                    },
                });
            }
            userTable();
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

        $('#anp').click(function(){
            $.ajax({
                url: "property-form.php",
                type: 'post',
                success: function(data){
                    $('.property').html(data)
                }
            });
        });
        

        $('.loginForm').submit(function(e) {
            e.preventDefault();
            var loginData = $(this).serialize();
            $.ajax({
                type: 'POST',
                url: '../controller/login-controller.php',
                data: loginData,
                dataType: 'json',
                success: function (output) {
                    if (output.status === "Success") {
                        window.location.href = 'dashboard.php';
                    }else if (output.status === "Error"){
                        alert(output.message);
                    }
                },
            });
        });
        function feedbackTable() {
             $.ajax({
                    type: 'POST',
                    url: 'feedback-table.php',
                    success: function (data) {
                        $('#feedback-container').html(data);
                    },
                });
            }
        feedbackTable();


        

    });
  </script>