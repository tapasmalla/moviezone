<?php 

	session_start();
	if(!isset($_SESSION['us_name'])){
		header("location:login.php");
	}
	require_once "header.php";
 ?>
 <header>
 	  <div class="container">
 	  	<div class="top_gap">
 	  		<div class="col-lg-12">
 	  		<!-- <h2 class="from_hr">Resister Form</h2> -->
 	  		<div class="form-style-6">
				<h1>Change Password</h1>
				<form id="changepass_form">
					<input type="password" name="cpass" placeholder="Current password" />
					<input type="password" name="npass" placeholder="New password" />
					<input type="password" name="cnpass" placeholder="Confirm password" />
					<button type="button" class="btn btn-success btn_changepass" >Submit</button>
					
				</form>
				<div class="errdiv"></div>
			</div>	
			</div>
 	  	</div>
 	  </div>	

 </header>
 <?php 
 	require_once "footer.php";
  ?>