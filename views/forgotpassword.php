<?php 

	session_start();
	if(isset($_SESSION['us_name'])){
		header("location:index.php");
	}
	require_once "header.php";

 ?>
 <header>
 	  <div class="container">
 	  	<div class="top_gap">
 	  		<div class="col-lg-12">
 	  		<!-- <h2 class="from_hr">Resister Form</h2> -->
 	  		<div class="form-style-6">
				<h1>Forgot Password Form</h1>
				<form id="forgot1_form">
					<input type="email" name="u_email" placeholder="Email Address" />
					<button type="button" class="btn btn-success btn_forgot1" >Send OTP</button>
				</form>

				<form id="forgot2_form">
					<input type="text" name="u_otp" placeholder="OTP" />
					<button type="button" class="btn btn-success btn_forgot2" >Submit</button>
				</form>

				<form id="forgot3_form">
					<input type="password" name="u_pass" placeholder="Password" />
					<input type="password" name="u_cpass" placeholder="Confirm Password" />
					<button type="button" class="btn btn-success btn_forgot3" >Set Password</button>
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