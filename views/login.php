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
				<h1>Login Form</h1>
				<form id="login_form">
					<input type="email" name="u_email" placeholder="Email Address" />
					<input type="password" name="u_pass" placeholder="password" />
					<button type="button" class="btn btn-success btn_login" >Submit</button>
					
					<!-- <input type="submit" value="Send" /> -->
				</form>
				<div class="errdiv"></div>
			</div>
			<div class="reg_link"><a href="register.php">For New User</a></div>
			<div class="reg_link"><a href="forgotpassword.php">Forgot Password</a></div>
			</div>
 	  	</div>
 	  </div>	

 </header>
 <?php 
 	require_once "footer.php";
  ?>