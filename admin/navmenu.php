<div class="bg-white px-3 d-flex align-items-center shadow-sm" style="height: 70px;">
	<h4 class="fw-bold">
		<?php
			$fileName = pathinfo(basename($_SERVER['PHP_SELF']), PATHINFO_FILENAME);
			$fileName = ucwords(str_replace("-", " ", $fileName));
			echo $fileName;
		?>
	</h4>
	<!-- <div class="d-flex column-gap-4 ms-auto me-5">
		<a href="#" class="position-relative">
		  <i class="fa-solid fa-envelope fs-3 text-secondary"></i>
		  <h6 class="position-absolute" style="top: -8px; right: -10px;">
		  	 <span class="badge text-bg-danger px-2 rounded-1">4</span>
		  </h6>
		</a>
		<a href="#" class="position-relative">
		  <i class="fa-solid fa-bell fs-3 text-secondary"></i>
		  <h6 class="position-absolute" style="top: -8px; right: -10px;">
		  	 <span class="badge text-bg-warning px-2 rounded-1">4</span>
		  </h6>
		</a>
	</div> -->
	<div class="d-flex ms-auto" >
		<span class="d-flex flex-column align-items-end justify-content-center">
			<p class="form-text m-0"><b>Hello,</b> <span class="fst-italic"><?php echo $_SESSION['type'];?></span></p>
			<p class="form-text fw-bold m-0 text-nowrap"><?php echo $_SESSION['email'];?></p>
		</span>
		<button class="px-1 d-flex bg-transparent border-0" data-bs-toggle="dropdown">
			<?php 
			include '../connect.php';
			$select = mysqli_query($conn, "SELECT * FROM user_tbl WHERE id = $_SESSION[id]");
			$row = $select->fetch_assoc();

			?>
			<img src="../images/<?php echo $row['profile']?>" class="rounded-circle border border-dark border-2 m-auto" width="40" height="40">
		</button>
		<ul class="dropdown-menu">
		    <li><a href="logout.php" class="dropdown-item">Logout</a></li>
		</ul>
		
	</div>

</div>