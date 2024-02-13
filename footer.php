  <!-- JQUERY -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- CUSTOM JAVASCRIPT -->
  <script type="text/javascript" src="./assets/js/script.js"></script>
  <!-- BOOTSTRAP JS OFFLINE -->
  <script type="text/javascript" src="./plugins/bootstrap5/bootstrap.min.js"></script>
  <!-- FONT AWESOME OFFLINE -->
  <script type="text/javascript" src="./plugins/fontawesome/all.min.js"></script>
  <!-- sweetalert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
   $(document).ready(function() {

        $('#userregistration').submit(function (e) {
            e.preventDefault();

            var userData = new FormData(this);

            $.ajax({
                url: './controller/user-register.php',
                type: 'post',
                data: userData,
                dataType: 'json',
                contentType: false,
                processData: false,
                success: function(output) {
                    if (output.status == 'Success') {
                        $('.form-control').val('');
                        Swal.fire({
                            position: "top-center",
                            icon: "info",
                            title: "Email Verification",
                            text: "Please check your email!",
                            showConfirmButton: true
                        });
                    }else{
                        Swal.fire({
                            position: "top-center",
                            icon: "error",
                            text: "This Email is already registered!",
                            showConfirmButton: true
                        });
                    }
                }
            });

        });
        
        $('#userlogin').submit(function(e) {
            e.preventDefault();
            var loginData = $(this).serialize();
            $.ajax({
                url: './controller/user-login.php',
                type: 'post',
                data: loginData,
                dataType: 'json',
                success: function(output) {
                    if (output.status == 'Success') {
                        if (output.type == 'Client') {
                            window.location.href="./client/index.php";
                        } else if (output.type == 'Agent') {
                            window.location.href="./Agent/index.php";
                        } else if (output.type == 'Admin') {
                            window.location.href="./admin/index.php";
                        }
                    } else if (output.status == 'Error') {
                        if (output.error == 'email') {
                            Swal.fire({
                                position: "top-center",
                                icon: "error",
                                text: "This email is not exist!",
                                showConfirmButton: true
                            });
                        }else if (output.error == 'password') {
                            Swal.fire({
                                position: "top-center",
                                icon: "error",
                                text: "Please check your password!",
                                showConfirmButton: true
                            });
                        }else if (output.error == 'registered') {
                            Swal.fire({
                                position: "top-center",
                                icon: "error",
                                title: "This Email is not verify!",
                                text: "Please check your email and verify!",
                                showConfirmButton: true
                            });
                        }
                    }
                }
            });
        });

        $('#contact').submit(function(e) {
            e.preventDefault();
            var contact = $(this).serialize();
            $.ajax({
                url: './controller/contact-controller.php',
                type: 'post',
                data: contact,
                dataType: 'json',
                success: function(output) {
                    $('.form-control-lg').val("");
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
