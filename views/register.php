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
				<h1>Register Form</h1>
				<form id="register_form">
					<input type="text" name="u_name" placeholder="Your Name" />
					<input type="text" name="u_mobile" placeholder="Mobile" />
					<input type="email" name="u_email" placeholder="Email Address" />
					<input type="password" name="u_pass" placeholder="password" />
					<input type="password" name="u_cpass" placeholder="Confirm password" />
					<select name="u_type">
						<option value="0"> Please Select User Type</option>
						<option value="1">Booking User </option>
						<option value="2">User Admin</option>
					</select>
					<button type="button" class="btn btn-success btn_register" >Submit</button>
					
					<!-- <input type="submit" value="Send" /> -->
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