<title>Home</title>
<?php include 'header.php' ?>
   <style>
           #suggestions {
            display: none;
            position: absolute;
            border: 1px solid #ccc;
            max-width: 200px;
            overflow-y: auto;
        }

        #suggestions div {
            padding: 8px;
            cursor: pointer;
            background-color: #f9f9f9;
        }

        #suggestions div:hover {
            background-color: #e0e0e0;
        }

        #noResultsMessage {
            padding: 8px;
            color: red;
            cursor: default;
        }

        #noResultsMessage:hover {
            background-color: transparent;
        }
    </style>
   <div>
      <?php include 'navtop.php' ?>
      <div class="imagebackground" style="background-image: url('./upload/backgroundimage.png') ;
       height: 70vh;">
          <div class="imageopacity">
            
            <div class="d-flex flex-column align-items-center justify-content-center h-100">
               <div class="container mb-3">
                  <h1 class="m-0" style="color: #28a745;">Welcome to</h1>
                  <h1 class="text-white m-0">Sta Margarita Heights</h1>
               </div>
               <form method="post" action="properties.php" class="d-flex flex-column flex-lg-row align-items-center gap-1 container">
                  <div class="col-12 col-lg-2">
                     <select name="selecttype" class="form-select py-2 rounded-1">
                        <option disabled selected>Select Type</option>
                        <option value="Apartment">Apartment</option>
                        <option value="Lot">Lot</option>
                        <option value="House">House</option>
                     </select>
                  </div>
                  <div class="col-12 col-lg-2">
                     <select name="selectstatus" class="form-select py-2 rounded-1">
                        <option disabled selected>Select Status</option>
                        <option value="Rent">Rent</option>
                        <option value="Sale">Sale</option>
                     </select>
                  </div>
                  <div class="col-12 col-lg-6">
                     <input type="text" name="searchInput" class="form-control py-2 rounded-1" placeholder="Enter Location" id="searchInput" onkeyup="getSuggestions(this.value)" onclick="getSuggestions(this.value)">
                     <div id="suggestions" class="form-control"></div>

                  </div>
                  <div class="col-12 col-lg-1">
                     <input type="submit" name="submit" value="Search Property" class="btn btn-success py-2 rounded-0 col-12 col-lg-auto">
                  </div>
               </form>
            </div>
          </div>
      </div>

      <div class="py-5 d-flex flex-column align-items-center" style="background-color: whitesmoke;">
         <div class="d-flex flex-column align-items-center">
            <h2>What We Do</h2>
            <div class="d-flex flex-column" style="width: 150px;">
               <hr class="text-success mb-2">
               <hr class="w-50 mx-auto m-0 border border-success border-2"  >
            </div>
         </div>
         <div class="row d-flex justify-content-center gap-1 container-lg mt-5">
            <div class="card py-5 rounded-1 shadow-sm" style="width: 20rem; ">
              <div class="card-body d-flex flex-column align-items-center row-gap-3">
                <h1 class="card-title text-success"><i class="fa-solid fa-house-chimney"></i></h1>
                <h5 class="card-subtitle">Selling Service</h5>
                <p class="card-text text-body-secondary">Sell various House and Lot</p>
              </div>
            </div>
            <div class="card py-5 rounded-1 shadow-sm" style="width: 20rem;">
              <div class="card-body d-flex flex-column align-items-center row-gap-3">
                <h1 class="card-title text-success"><i class="fa-solid fa-house-user"></i></h1>
                <h5 class="card-subtitle">Rental Service</h5>
                <p class="card-text text-body-secondary">Offer HOuse Rental</p>
              </div>
            </div>
            <div class="card py-5 rounded-1 shadow-sm" style="width: 20rem;">
              <div class="card-body d-flex flex-column align-items-center row-gap-3">
                <h1 class="card-title text-success"><i class="fa-solid fa-list"></i></h1>
                <h5 class="card-subtitle">Property Listing</h5>
                <p class="card-text text-body-secondary">Provide Property Listing</p>
              </div>
            </div>
            <div class="card py-5 rounded-1 shadow-sm" style="width: 20rem;">
              <div class="card-body d-flex flex-column align-items-center row-gap-3">
                <h1 class="card-title text-success"><i class="fa-solid fa-chart-column"></i></h1>
                <h5 class="card-subtitle">Legal Investment</h5>
                <p class="card-text text-body-secondary text-nowrap">Take Legal Action and Investments</p>
              </div>
            </div>
         </div>
      </div>

      <div class="bg-white py-5 d-flex flex-column align-items-center">
         <div class="d-flex flex-column align-items-center">
            <h2>Recent Property</h2>
            <div class="d-flex flex-column" style="width: 150px;">
               <hr class="text-success mb-2">
               <hr class="w-50 mx-auto m-0 border border-success border-2"  >
            </div>
         </div>
         <div class="row d-flex justify-content-center gap-4 container-fluid mt-5" style="width: 90%;">
            <?php
               include 'connect.php'; 
               $i=1;
               $sqlSelect = $conn->query("SELECT * FROM properties_tbl ORDER BY id DESC LIMIT 4");
               while($row= $sqlSelect->fetch_assoc()):
            ?>
            <div class="card rounded-1 shadow p-0" style="width: 20rem; ">
              <div>
                 <img src="./images/<?php echo $row['ci']; ?>" class="card-img-top rounded-1 rounded-bottom-0 object-fit-cover" alt="1" height="350">
              </div>
              <div class="card-body d-flex flex-column row-gap-1">
                <h5 class="card-title"><?php echo $row['type']; ?></h5>
                <p class="card-text text-body-secondary"><i class="fa-solid fa-location-dot text-success"></i><?php echo $row['location']; ?></p>
              </div>
              <div class="card-footer text-body-secondary d-flex column-gap-3">
                  <span>
                     <p class="mb-1 text-dark"><?php echo $row['sqm']; ?></p>
                     <p class="text-secondary">Sqm</p>
                  </span>
                  <span>
                     <p class="mb-1 text-dark"><?php echo $row['bedroom']; ?></p>
                     <p class="text-secondary">Beds</p>
                  </span>
                  <span>
                     <p class="mb-1 text-dark"><?php echo $row['bathroom']; ?></p>
                     <p class="text-secondary">Baths</p>
                  </span>
                  <span>
                     <p class="mb-1 text-dark"><?php echo $row['kitchen']; ?></p>
                     <p class="text-secondary">Kitchen</p>
                  </span>
                  <span>
                     <p class="mb-1 text-dark"><?php echo $row['balcony']; ?></p>
                     <p class="text-secondary">Balcony</p>
                  </span>
              </div>
              <div class="d-flex px-3 py-4">
                  <span class="d-flex column-gap-1">
                     <i class="fa-solid fa-user text-success my-auto"></i>
                     <p class="text-secondary my-auto"><?php echo $row['agent_name']; ?></p>
                  </span>
                  <span class="d-flex column-gap-1 ms-auto">
                     <i class="fa-solid fa-calendar-days text-success my-auto"></i>
                     <p class="text-secondary my-auto"><?php echo $row['added_date']; ?></p>
                  </span>
              </div>
            </div>

         <?php endwhile; ?>
         </div>
      </div>

      <div class="imagebackground" style="background-image: url('./upload/1.png') ;
       min-height: 70vh;">
          <div class="imageopacity2 w-100 p-5">
            <div class="imageopacity2child d-flex flex-column align-items-start justify-content-center w-100 ms-lg-auto">
               <div>
                  <h2 class="text-white">Why Choose Us</h2>
               </div>
               <div class="d-flex mt-5 column-gap-4">
                  <i class="fa-solid fa-award fs-1 text-success"></i>
                  <div class="text-white">
                     <h5>Top Rated</h5>
                     <small class="lh-lg">Sta.Margarita Heights stays true to its promise of providing hard-working Filipinos with homes that they can afford. A house and lot community in the province of Batangas, continues the legacy to help people in achieving their dream of owning a home worthy of their hard-earned money.</small>
                  </div>
               </div>
               <div class="d-flex mt-4 column-gap-4">
                  <i class="fa-solid fa-circle-check fs-1 text-success"></i>
                  <div class="text-white">
                     <h5>Experience Quality</h5>
                     <small class="lh-lg">Walk around our open spaces, breathe in fresher air, take a look at our house models, and you will realize that there is no other place to be but in Sta.Margarita Heights.</small>
                  </div>
               </div>
               <div class="d-flex mt-4 column-gap-4">
                  <i class="fa-solid fa-user-tie fs-1 text-success"></i>
                  <div class="text-white">
                     <h5>Experienced Agents</h5>
                     <small class="lh-lg">Agent experience is the overall work experience, job satisfaction, and professional development of customer support representatives in a call center.</small>
                  </div>
               </div>
            </div>
          </div>
      </div>
      
      <div class="py-5 px-4 d-flex flex-column align-items-center bg-white">
         <div class="d-flex flex-column align-items-center">
            <h2>How We Work</h2>
            <div class="d-flex flex-column" style="width: 150px;">
               <hr class="text-success mb-2">
               <hr class="w-50 mx-auto m-0 border border-success border-2"  >
            </div>
         </div>
         <div class="d-flex flex-column flex-lg-row justify-content-center gap-5 mt-5">
            <div class="d-flex flex-column align-items-center row-gap-4">
               <div class="rounded-circle d-flex border border-dark-subtle" style="width: 130px; height: 130px;">
                  <i class="fa-solid fa-chalkboard-user text-secondary fs-1 m-auto"></i>
               </div>
               <h5>Discussion</h5>
               <small class="text-secondary">Let us Discuss you some Property Details</small>
            </div>
            <hr class="mb-5 d-none d-lg-block" style="border: 1px dotted black; transform: rotate(90deg);">
            <div class="d-flex flex-column align-items-center row-gap-4">
               <div class="rounded-circle d-flex border border-dark-subtle" style="width: 130px; height: 130px;">
                  <i class="fa-solid fa-magnifying-glass text-secondary fs-1 m-auto"></i>
               </div>
               <h5>Files Review</h5>
               <small class="text-secondary">Let you review the Files and Paper of the Property</small>
            </div>
            <hr class="mb-5 d-none d-lg-block" style="border: 1px dotted black; transform: rotate(90deg);">
            <div class="d-flex flex-column align-items-center row-gap-4">
               <div class="rounded-circle d-flex border border-dark-subtle" style="width: 130px; height: 130px;">
                  <i class="fa-solid fa-handshake text-secondary fs-1 m-auto"></i>
               </div>
               <h5>Acquire</h5>
               <small class="text-secondary">Get the most affordable Property</small>
            </div>
         </div>
      </div>

      <div class="imagebackgrounds" style="background-image: url('./upload/2.jpg') ;">
          <div class="imageopacity3 p-5 text-white">
            <div class="d-flex flex-column flex-lg-row gap-5 justify-content-center align-items-center h-100 container">
               <div class="d-flex flex-column align-items-center row-gap-3">
                  <div class="rounded-circle d-flex">
                     <i class="fa-solid fa-house-user  fs-1 m-auto"></i>
                  </div>
                  <h2 class="text-success">
                     <?php 
                      $sql = "SELECT COUNT(id) AS total FROM properties_tbl WHERE status = 'Available'";
                      $result = $conn->query($sql);
                          $row = $result->fetch_assoc();
                          echo $row['total'];
                     ?>
                   </h2>
                  <h4 class="text-lg-nowrap">Property Available</h4>
               </div>
               <div class="d-flex flex-column align-items-center row-gap-3">
                  <div class="rounded-circle d-flex">
                     <i class="fa-solid fa-house-user  fs-1 m-auto"></i>
                  </div>
                  <h2 class="text-success">
                  <?php 
                      $sql = "SELECT COUNT(id) AS total FROM properties_tbl WHERE rs = 'sale'";
                      $result = $conn->query($sql);
                          $row = $result->fetch_assoc();
                          echo $row['total'];
                  ?>
                  </h2>
                  <h4 class="text-lg-nowrap">Sale Property Available</h4>
               </div>
               <div class="d-flex flex-column align-items-center row-gap-3">
                  <div class="rounded-circle d-flex">
                     <i class="fa-solid fa-house-user  fs-1 m-auto"></i>
                  </div>
                  <h2 class="text-success">
                  <?php 
                      $sql = "SELECT COUNT(id) AS total FROM properties_tbl WHERE rs = 'rent'";
                      $result = $conn->query($sql);
                          $row = $result->fetch_assoc();
                          echo $row['total'];
                  ?>
                  </h2>
                  <h4 class="text-lg-nowrap">Rent Property Available</h4>
               </div>
               <div class="d-flex flex-column align-items-center row-gap-3">
                  <div class="rounded-circle d-flex">
                     <i class="fa-solid fa-users fs-1 m-auto"></i>
                  </div>
                  <h2 class="text-success">
                  <?php 
                      $sql = "SELECT COUNT(id) AS total FROM user_tbl WHERE verification = 'registered'";
                      $result = $conn->query($sql);
                          $row = $result->fetch_assoc();
                          echo $row['total'];
                     ?>
                  </h2>
                  <h4 class="text-lg-nowrap">Registered Users</h4>
               </div>
            </div>
          </div>
      </div>

      <?php include 'navbottom.php' ?>
   </div>
   <script>
        let timeoutId;

        function delayedGetSuggestions(query) {
            clearTimeout(timeoutId);
            timeoutId = setTimeout(function () {
                getSuggestions(query);
            }, 300); // Adjust the delay (in milliseconds) as needed
        }

        function getSuggestions(query) {
            if (query.length === 0) {
                document.getElementById('suggestions').style.display = 'none';
                return;
            }

            fetch(`get_suggestions.php?query=${query}`)
                .then(response => response.json())
                .then(suggestions => displaySuggestions(suggestions))
                .catch(error => console.error('Error fetching suggestions:', error));
        }

        function displaySuggestions(suggestions) {
            const suggestionsContainer = document.getElementById('suggestions');
            suggestionsContainer.innerHTML = '';

            if (suggestions.length === 0) {
                showNoResultsMessage();
                return;
            }

            suggestionsContainer.style.display = 'block';
            hideNoResultsMessage();

            suggestions.forEach(function (suggestion) {
                const suggestionDiv = document.createElement('div');
                suggestionDiv.textContent = suggestion;
                suggestionDiv.onclick = function () {
                    selectSuggestion(suggestion);
                };
                suggestionsContainer.appendChild(suggestionDiv);
            });
        }

        function showNoResultsMessage() {
             const suggestionsContainer = $('#suggestions');
             suggestionsContainer.css('display', 'block');

             const noResultsMessage = $('<div></div>', {
                 id: 'noResultsMessage',
                 text: 'No results found',
                 mouseover: function () {
                     $(this).css('backgroundColor', '#f9f9f9');
                 },
                 mouseout: function () {
                     $(this).css('backgroundColor', 'transparent');
                 }
             });

             suggestionsContainer.append(noResultsMessage);
         }


        function hideNoResultsMessage() {
            const noResultsMessage = document.getElementById('noResultsMessage');
            if (noResultsMessage) {
                noResultsMessage.remove();
            }
        }

        function selectSuggestion(suggestion) {
            document.getElementById('searchInput').value = suggestion;
            document.getElementById('suggestions').style.display = 'none';
        }

        document.addEventListener('click', function (event) {
            const suggestionsContainer = document.getElementById('suggestions');
            if (!event.target.matches('#searchInput') && !event.target.matches('#suggestions')) {
                suggestionsContainer.style.display = 'none';
            }
        });
    </script>
   <?php include 'footer.php' ?>