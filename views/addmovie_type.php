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
 	  		<div class="form-style-6">
				<h1>Add Movie Type</h1>
				<form id="movietype_form">
				
					<input type="text" name="movie_type" placeholder="Enter Movie Type" />
					
					<button type="button" class="btn btn-success btn_movietype" >Submit</button>
					
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