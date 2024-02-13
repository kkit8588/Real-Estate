<title>Register</title>
<?php include 'header.php' ?>
<body class="bg-white">
   <div>
   <?php include 'navtop.php' ?>
      <div class="container d-flex align-items-center" style="height: 95vh;">
         <div class="d-flex w-100">
            <form id="userregistration" class="shadow m-auto d-flex p-5  flex-column align-items-center row-gap-3 justify-content-center" enctype="multipart/form-data">
               <div class="text-center">
                  <h4>Register</h4>
                  <p class="text-secondary">Access to our dashboard</p>
               </div>
               <div class="col-12">
                  <input type="text" name="fullname" placeholder="Full Name*" class="form-control rounded-1 border-secondary" required>
               </div>
               <div class="col-12">
                  <input type="email" name="email" placeholder="Your Email*" class="form-control rounded-1 border-secondary" required>
               </div>
               <div class="col-12">
                  <input type="text" name="phone" placeholder="Your Phone*" class="form-control rounded-1 border-secondary" required>
               </div>
               <div class="col-12">
                  <input type="password" name="password" placeholder="Your Password*" class="form-control rounded-1 border-secondary" required>
               </div>
               <div class="col-12">
                  <input type="text" name="address" placeholder="Your Address*" class="form-control rounded-1 border-secondary" required>
               </div>
               <div class="row col-12 justify-content-between ">
                  <div class="col-6 px-0">
                     <div class="rounded-1" style="border: 1px solid black; position: relative;">
                        <p class="position-absolute h-100 p-1 bg-white" style="top: 0; left: 4px; bottom: 0; border-right: 1px solid black;">Choose Image</p>
                        <input type="file" name="image" class="form-control rounded-1 border-secondary" accept="image/*" required style="background-color: unset; border: unset;">
                     </div>
                     <div id="emailHelp" class="form-text">Choose your profile*</div>
                  </div>
                  <div class="col-5 px-0">
                     <input type="date" name="bday" class="form-control rounded-1 border-secondary" required>
                     <div id="emailHelp" class="form-text">Select your birthday*</div>
                  </div>
               </div>
               <div class="row col-12 d-flex justify-content-between ">
                  <div class="col-6 px-0">
                     <select required="required" name="user_type" class="form-select rounded-1 border-secondary col-12">
                        <option selected hidden value="">Select Account</option>
                        <option value="Client" name="Client">Client</option>
                        <option value="Agent" name="Agent">Agent</option>
                     </select>
                  </div>
                  <div class="col-5 px-0">
                     <select required="required" name="gender" class="form-select rounded-1 border-secondary col-12">
                        <option selected hidden value="">Gender</option>
                        <option value="Male" name="Male">Male</option>
                        <option value="Female" name="Female">Female</option>
                     </select>
                  </div>
               </div>
               <div class="me-auto">
                  <input type="submit" name="submit" value="Register" class="btn btn-success rounded-0">
               </div>
               
               <div>
                  <small>Already have an Account? <a href="login.php">Login here</a></small>
               </div>
               
            </form>

         </div>
      </div>
   <?php include 'navbottom.php' ?>
   </div>
   <?php include 'footer.php' ?>
</body>
