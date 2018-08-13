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
 	  		<div class="row">
 	  		<div class="col-lg-6">
 	  		<!-- <h2 class="from_hr">Resister Form</h2> -->
 	  		<div class="form-style-6">
				<h1>Add Language</h1>
				<form id="language_form">
					<input type="text" name="language" placeholder="Enter Movie Language" />
					
					<button type="button" class="btn btn-success btn_language" >Add Language</button>
					
				</form>
				<div class="errdiv"></div>
			</div>	
			</div>

			<div class="col-lg-6">
				<h3>List of Movie Type</h3>

				<ul></ul>
			</div>
		</div>
 	  	</div>
 	  </div>	

 </header>
 <?php 
 	require_once "footer.php";
  ?>