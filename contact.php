<title>Contact</title>
<?php include 'header.php' ?>
   
   <div>
      <?php include 'navtop.php' ?>
       <div class="d-flex py-5 flex-column align-items-center" >
            <div class="container py-5 d-lg-flex" style="min-height: 70vh; ">
               <div class="bg-dark text-white d-flex flex-column row-gap-2 py-2 px-3" style="min-width: 30%;">
                  <h2>Contacts</h2>
                  <div class="d-flex column-gap-1">
                     <i class="fa-solid fa-location-dot mt-1"></i>
                     <div class="mb-auto">
                        <div class="fs-5 fw-bold mb-2">Address</div>
                        <p>Kumintang Ilaya, Batangas CIty</p>
                     </div>
                  </div>
                  <div class="d-flex column-gap-1">
                     <i class="fa-solid fa-phone mt-1"></i>
                     <div class="mb-auto">
                        <div class="fs-5 fw-bold mb-2">Call Us</div>
                        <p>+639635237112</p>
                     </div>
                  </div>
                  <div class="d-flex column-gap-1">
                     <i class="fa-solid fa-envelope mt-1"></i>
                     <div class="mb-auto">
                        <div class="fs-5 fw-bold mb-2">Email Adderss</div>
                        <p>stamargaritaheight@gmail.com</p>
                     </div>
                  </div>
               </div>
               <form id="contact" class="py-2 px-3 mt-4 mt-lg-0" style="min-width: 70%">
                  <div class="d-flex flex-column align-items-center">
                     <h2>Get In Touch</h2>
                     <div class="d-flex flex-column mb-3" style="width: 150px;">
                        <hr class="text-success mb-2 mt-1">
                        <hr class="w-50 mx-auto m-0 border border-success border-2"  >
                     </div>
                     <div class="row p-2 row-gap-3 ">
                        <div class="col-lg-6 px-1">
                           <input class="col-12 form-control-lg rounded-1 border border-dark" type="text" name="name" placeholder="Your Name*">
                        </div>
                        <div class="col-lg-6 px-1">
                           <input class="col-12 form-control-lg rounded-1 border border-dark" type="email" name="email" placeholder="Email Address*">
                        </div>
                        <div class="col-lg-6 px-1">
                           <input class="col-12 form-control-lg rounded-1 border border-dark" type="text" name="phonenumber" placeholder="Phone">
                        </div>
                        <div class="col-lg-6 px-1">
                           <input class="col-12 form-control-lg rounded-1 border border-dark" type="text" name="subject" placeholder="Subject">
                        </div>
                        <div class="col-lg-12 px-1">
                           <textarea class="col-12 form-control-lg rounded-1 border border-dark" type="text" name="messages" placeholder="Type Comments..."></textarea>
                        </div>
                        <div class="col-lg-12 px-1">
                           <input type="submit" name="submit" value="Submit" class="btn btn-success">
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>

      <?php include 'navbottom.php' ?>
   </div>
   <?php include 'footer.php' ?>

