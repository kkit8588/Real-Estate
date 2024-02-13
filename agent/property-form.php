<?php
    include 'sessionstart.php';
    include '../connect.php';
  
    if (isset($_POST['id'])) {
    
    $id = $_POST['id'];
    $sqlSelect = $conn->query("SELECT * FROM properties_tbl WHERE id='$id'");
    $row= $sqlSelect->fetch_assoc();

    }
    
?>    
<form id="" method="POST" action="../controller/agent-properties.php" class="addclientform d-flex flex-column row-gap-3" enctype="multipart/form-data">
    <div class="row row-gap-3">
         <h5 class="my-0">Property Summary</h5>
         <input   type="hidden" name="agent_email" value="<?php if(isset($_SESSION['email'])){ echo $_SESSION['email']; }?>">
         <input   type="hidden" name="unique_id" value="<?php if(isset($_SESSION['unique_id'])){ echo $_SESSION['unique_id']; }?>">
         <input   type="hidden" name="agent_name" value="<?php if(isset($_SESSION['name'])){ echo $_SESSION['name']; }?>">
         <input   type="hidden" name="agent_id" value="<?php if(isset($_SESSION['id'])){ echo $_SESSION['id']; };?>">
         <input  type="hidden" name="id" id="id" value="<?php if (isset($id)) {echo $row['id']; }  ?>">
         <div>
           <label class="form-label">Title</label>
           <input  type="text" name="title" value="<?php if (isset($_POST['id'])) {echo $row['title']; }  ?>" class="form-control border border-secondary-subtle rounded-1" placeholder="Type title">
         </div>
         <div class="col-6">
            <select  name="type" class="form-select border border-secondary-subtle rounded-1">
               <option selected hidden value="<?php if (isset($_POST['id'])) {echo $row['type']; }  ?>"><?php if (isset($_POST['id'])) {echo $row['type']; }else{
                echo "Select Type"; }  ?></option>
               <option value="Apartment" name="Apartment">Apartment</option>
               <option value="House" name="House">House</option>
               <option value="Lot" name="Lot">Lot</option>
            </select>
         </div>
         <div class="col-6">
            <select  name="rs" class="form-select border border-secondary-subtle rounded-1">
               <option selected hidden value="<?php if (isset($_POST['id'])) {echo $row['rs']; } ?>"><?php if (isset($_POST['id'])) {echo $row['rs']; }else{
                echo "Select R/S"; }  ?></option>
               <option value="Rent" name="Rent">Rent</option>
               <option value="Sale" name="Sale">Sale</option>
            </select>
         </div>
         <div>
              <div class="row">
                 <div class="col-6">
                   <label class="form-label">BHK:</label>
                   <input  type="text" name="bhk" value="<?php if (isset($id)) {echo $row['bhk']; }  ?>" class="form-control border border-secondary-subtle rounded-1" placeholder="Type BHK">
                 </div>
                 <div class="col-6">
                   <label class="form-label">Area:</label>
                   <input  type="number" name="area" value="<?php if (isset($id)) {echo $row['area']; }  ?>" class="form-control border border-secondary-subtle rounded-1" placeholder="Type Area">
                 </div>
             </div>
         </div>
         <div class="col-12">
            <select  name="status" class="form-select border border-secondary-subtle rounded-1">
               <option selected hidden value="<?php if (isset($id)) {echo $row['status']; } ?>"><?php if (isset($id)) {echo $row['status']; }else{
                echo "Select Status"; }  ?></option>
               <option value="Available" name="Available">Available</option>
               <option value="Unvailable" name="Unvailable">Unvailable</option>
            </select>
         </div>
         <div>
           <label class="form-label">Price:</label>
           <input  type="number" name="price" value="<?php if (isset($id)) {echo $row['price']; }  ?>" class="form-control border border-secondary-subtle rounded-1" placeholder="Type Price">
         </div>
         <div>
           <label class="form-label">Location:</label>
           <input  type="text" name="location" value="<?php if (isset($id)) {echo $row['location']; }  ?>" class="form-control border border-secondary-subtle rounded-1" placeholder="Type Location">
         </div>
         <h5 class="mb-0 mt-2">Features</h5>
         <div class="col-6">
            <select  name="propertyage" class="form-select border border-secondary-subtle rounded-1">
               <option selected hidden value="<?php if (isset($id)) {echo $row['propertyage']; } ?>"><?php if (isset($id)) {echo $row['propertyage']; }else{
                echo "Select Age"; }  ?></option>
                <?php
                  $age = array(
                      '1 year',
                      '2 years',
                      '3 years',
                      '4 years',
                      '5 years',
                      '6 years',
                      '7 years',
                      '8 years',
                      '9 years',
                      '10 years'
                  );

                  foreach ($age as $ages) {
                      echo "<option value='$ages' >$ages</option>";
                  }
                ?>
            </select>
         </div>
         <div class="col-6">
            <select  name="swimmingpool" class="form-select border border-secondary-subtle rounded-1">
               <option selected hidden value="<?php if (isset($id)) {echo $row['swimmingpool']; } ?>"><?php if (isset($id)) {echo $row['swimmingpool']; }else{
                echo "Select Pool"; }  ?></option>
               <option value="Yes" name="Yes">Yes</option>
               <option value="No" name="No">No</option>
            </select>
         </div>
         <div class="col-6">
            <select  name="parking" class="form-select border border-secondary-subtle rounded-1">
               <option selected hidden value="<?php if (isset($id)) {echo $row['parking']; } ?>"><?php if (isset($id)) {echo $row['parking']; }else{
                echo "Select Parking"; }  ?></option>
               <option value="Yes" name="Yes">Yes</option>
               <option value="No" name="No">No</option>
            </select>
         </div>
         <div class="col-6">
            <select  name="gym" class="form-select border border-secondary-subtle rounded-1">
               <option selected hidden value="<?php if (isset($id)) {echo $row['gym']; } ?>"><?php if (isset($id)) {echo $row['gym']; }else{
                echo "Select GYM"; }  ?></option>
               <option value="Yes" name="Yes">Yes</option>
               <option value="No" name="No">No</option>
            </select>
         </div>
         <div class="col-6">
            <select  name="thirdparty" class="form-select border border-secondary-subtle rounded-1">
               <option selected hidden value="<?php if (isset($id)) {echo $row['thirdparty']; } ?>"><?php if (isset($id)) {echo $row['thirdparty']; }else{
                echo "Select 3rd Party"; }  ?></option>
               <option value="Yes" name="Yes">Yes</option>
               <option value="No" name="No">No</option>
            </select>
         </div>
         <div class="col-6">
            <select  name="alivator" class="form-select border border-secondary-subtle rounded-1">
               <option selected hidden value="<?php if (isset($id)) {echo $row['alivator']; } ?>"><?php if (isset($id)) {echo $row['alivator']; }else{
                echo "Select Alivator"; }  ?></option>
               <option value="Yes" name="Yes">Yes</option>
               <option value="No" name="No">No</option>
            </select>
         </div>
         <div class="col-6">
            <select  name="cctv" class="form-select border border-secondary-subtle rounded-1">
               <option selected hidden value="<?php if (isset($id)) {echo $row['cctv']; } ?>"><?php if (isset($id)) {echo $row['cctv']; }else{
                echo "Select CCTV"; }  ?></option>
               <option value="Yes" name="Yes">Yes</option>
               <option value="No" name="No">No</option>
            </select>
         </div>
         <div class="col-6">
            <select  name="security" class="form-select border border-secondary-subtle rounded-1">
               <option selected hidden value="<?php if (isset($id)) {echo $row['security']; } ?>"><?php if (isset($id)) {echo $row['security']; }else{
                echo "Select Security"; }  ?></option>
               <option value="Yes" name="Yes">Yes</option>
               <option value="No" name="No">No</option>
            </select>
         </div>
         <div class="col-6">
            <select  name="diningcapacity" class="form-select border border-secondary-subtle rounded-1">
               <option selected hidden value="<?php if (isset($id)) {echo $row['diningcapacity']; } ?>"><?php if (isset($id)) {echo $row['diningcapacity']; }else{
                echo "Dining Capacity"; }  ?></option>
                <?php
                  $age = array(
                      '2 Persons',
                      '3 Persons',
                      '4 Persons',
                      '5 Persons',
                      '6 Persons',
                      '7 Persons',
                      '8 Persons',
                      '9 Persons',
                      '10 Persons'
                  );

                  foreach ($age as $ages) {
                      echo "<option value='$ages' >$ages</option>";
                  }
                ?>
            </select>
       </div>
       <div class="col-6">
            <select  name="churchtemple" class="form-select border border-secondary-subtle rounded-1">
               <option selected hidden value="<?php if (isset($id)) {echo $row['churchtemple']; } ?>"><?php if (isset($id)) {echo $row['churchtemple']; }else{
                echo "Church/Temple"; }  ?></option>
               <option value="Yes" name="Yes">Yes</option>
               <option value="No" name="No">No</option>
            </select>
       </div>
       <div>
            <div class="row">
              <div class="col-6">
                <label class="form-label">Sqm:</label>
                <input  type="number" name="sqm" value="<?php if (isset($id)) {echo $row['sqm']; }  ?>" class="form-control border border-secondary-subtle rounded-1" placeholder="Type sqm">
              </div>
              <div class="col-6">
                <label class="form-label">Bedroom:</label>
                <input  type="number" name="bedroom" value="<?php if (isset($id)) {echo $row['bedroom']; }  ?>" class="form-control border border-secondary-subtle rounded-1" placeholder="Type Bedroom">
              </div>
            </div>
       </div>
       <div>
            <div class="row">
              <div class="col-6">
                <label class="form-label">Bathroom:</label>
                <input  type="number" name="bathroom" value="<?php if (isset($id)) {echo $row['bathroom']; }  ?>" class="form-control border border-secondary-subtle rounded-1" placeholder="Type Bathroom">
              </div>
              <div class="col-6">
                <label class="form-label">Balcony:</label>
                <input  type="number" name="balcony" value="<?php if (isset($id)) {echo $row['balcony']; }  ?>" class="form-control border border-secondary-subtle rounded-1" placeholder="Type Balcony">
              </div>
            </div>
       </div>
       <div>
            <div class="row">
              <div class="col-6">
                <label class="form-label">Hall:</label>
                <input  type="number" name="hall" value="<?php if (isset($id)) {echo $row['hall']; }  ?>" class="form-control border border-secondary-subtle rounded-1" placeholder="Type Hall">
              </div>
              <div class="col-6">
                <label class="form-label">Kitchen:</label>
                <input  type="number" name="kitchen" value="<?php if (isset($id)) {echo $row['kitchen']; }  ?>" class="form-control border border-secondary-subtle rounded-1" placeholder="Type Kitchen">
              </div>
            </div>
       </div>
       <div>
            <div class="row">
              <div class="col-6">
                <label class="form-label">Floor:</label>
                <input  type="number" name="floor" value="<?php if (isset($id)) {echo $row['floor']; }  ?>" class="form-control border border-secondary-subtle rounded-1" placeholder="Type floor">
              </div>
              <div class="col-6">
                <label class="form-label">Total Floor:</label>
                <input  type="number" name="totalfloor" value="<?php if (isset($id)) {echo $row['totalfloor']; }  ?>" class="form-control border border-secondary-subtle rounded-1" placeholder="Type Total Floor">
              </div>
            </div>
       </div>

       <h5 class="mb-0 mt-2">Floor Plans</h5>
       <div>
         <label class="form-label">Floor Plans:</label>
         <input  type="file" name="images[]" class="form-control border border-secondary-subtle rounded-1" id="images" multiple accept="image/*" >
         <div id="emailHelp" class="form-text">You can select multiple images.</div>
        <?php
            if (isset($id)) {
                $images_id = $row['images_id'];
                $sqlSelect = $conn->query("SELECT * FROM images WHERE images_id='$images_id'");
                while($images= $sqlSelect->fetch_assoc()):

                     if (isset($id)) {
                          echo "<img src='../images/".$images['file_name']. "'alt='1' width='50' class='mx-2 border border-1 '>";
                        }
                 endwhile;
            }
        ?>
       </div>
       <div>
         <label class="form-label">Cover Image:</label>
         <input  type="file" name="ci" class="form-control border border-secondary-subtle rounded-1" id="ci">
        <?php
            // if (isset($id)) {
            //     $images_id = $row['images_id'];
            //     $sqlSelect = $conn->query("SELECT * FROM images WHERE images_id='$images_id'");
            //     while($images= $sqlSelect->fetch_assoc()):

            //          if (isset($id)) {
            //               echo "<img src='../images/".$images['file_name']. "'alt='1' width='50' class='mx-2 border border-1 '>";
            //             }
            //      endwhile;
            // }
        ?>
       </div>

       <h5 class="mb-0 mt-2">3D/Video</h5>
       <div>
         <label class="form-label">3D/Video:</label>
         <input type="file" name="td" class="form-control border border-secondary-subtle rounded-1" id="td" >
       </div>
       <div>
         <label class="form-label">Textures:</label>
         <input type="file" name="textures[]" class="form-control border border-secondary-subtle rounded-1" id="textures" multiple accept="image/*" >
       </div>
    </div>
    <div class="ms-auto">
        <input  type="submit" name="ADDED" value="ADDED" class="btn btn-primary rounded-0">
    </div>
</form>
<script type="text/javascript">
  $(document).ready(function() {
    $('#AddProperties').submit(function (e) {
            e.preventDefault();

            $.ajax({
                url: '../controller/agent-properties.php',
                type: 'post',
                data: new FormData(this),
                dataType: 'json',
                contentType: false,
                processData: false,
                success: function(output) {
                    if (output.status == 'Success') {
                        $('.form-control').val('');
                        $('.form-Select').prop('selectedIndex', 0);
                        $('#agent-modal').modal('hide');
                        Swal.fire({
                            position: "top-center",
                            icon: "success",
                            title: "Adding New Properties Done!",
                            showConfirmButton: true
                        });
                        $.ajax({
                            type: 'POST',
                            url: 'property-table.php',
                            success: function (data) {
                                $('#property-container').html(data);
                            },
                        });
                    }  
                }
            });
        });
  });
</script>