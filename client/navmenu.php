<div class="bg-white px-3 d-flex align-items-center shadow-sm" style="height: 70px;">
	<h4 class="fw-bold">
		<?php
			$fileName = pathinfo(basename($_SERVER['PHP_SELF']), PATHINFO_FILENAME);
			$fileName = ucwords(str_replace("-", " ", $fileName));
			echo $fileName;
		?>
	</h4>
	<div class="d-flex column-gap-4 ms-auto me-5">

		<div class="dropdown dropstart position-relative">
		  <i id="envelopeid" class="fa-solid fa-envelope fs-3 text-secondary" data-bs-toggle="dropdown" type="button"></i>
		  <h6 class="position-absolute" style="top: -8px; right: -10px;" >
		    <span class="badge text-bg-warning px-2 rounded-1">
		    <?php
		    include '../connect.php'; 
			$outgoing_id = $_SESSION['unique_id'];
			$new = "new";
			$query = $conn->query("SELECT COUNT(*) as count FROM messages WHERE notif ='$new' AND outgoing_msg_id = '$outgoing_id'");

			$row = $query->fetch_assoc();
			echo $row['count'];
			?>
          	</span>
		  </h6>
		  <ul class="dropdown-menu mt-2">
		  	<?php
             $unique_id = $_SESSION['unique_id'];
             $friend_id = $_SESSION['unique_id'];
             $email = $_SESSION['email'];
             $connection = "friend";
             $sqlSelect = $conn->query("SELECT * FROM connection Where (unique_id = '$unique_id' OR friend_id = '$friend_id') AND (agent_email = '$email' OR client_email = '$email') AND connection = '$connection' ORDER BY id");
            if ($sqlSelect->num_rows > 0){
	            while($row= $sqlSelect->fetch_assoc()):
	          
	        ?>
		    <li><a class="dropdown-item" href="chat.php?friend_id=<?php echo $row['friend_id'] ?>"><?php echo $row['agent_email']; ?>
		    	
		    </a>
		</li>
			<?php endwhile; } ?>
		  </ul>
		</div>
		<!-- <a href="#" class="position-relative">
		  <i class="fa-solid fa-bell fs-3 text-secondary"></i>
		  <h6 class="position-absolute" style="top: -8px; right: -10px;">
		  	 <span class="badge text-bg-danger px-2 rounded-1">4</span>
		  </h6>
		</a> -->
		
	</div>
	<div class="d-flex" >
		<span class="d-flex flex-column align-items-end justify-content-center">
			<p class="form-text m-0"><b>Hello,</b> <span class="fst-italic"><?php echo $_SESSION['type'];?></span></p>
			<p class="form-text fw-bold m-0 text-nowrap"><?php echo $_SESSION['email'];?></p>
		</span>
		<button class="px-1 d-flex bg-transparent border-0 " data-bs-toggle="dropdown">
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