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
				<h1>Add Movie</h1>
				<form id="movie_form">
				
					<input type="text" name="mo_name" placeholder="Movie Name" />

					<?php 
						$res = $obj->get_movie_type();
						// pre($res);
					 ?>
					<select name="movie_id">
						<option value="">Type Of Movie</option>
						<?php 
							if(isset($res)){
								foreach($res as $val){
									$id = $val['mo_id'];
									echo "<option value='$id'>";
									echo $val['mo_type'];
									echo "</option>";
								}
							}

						 ?>
					</select>
					<?php 
						$res = $obj->get_movie_lang();
						// pre($res);
					 ?>
					<select name="lang_id">
						<option value="">Type Of Movie</option>
						<?php 
							if(isset($res)){
								foreach($res as $val){
									$id = $val['lang_id'];
									echo "<option value='$id'>";
									echo $val['lang_name'];
									echo "</option>";
								}
							}

						 ?>
					</select>
					
					<!-- <input type="file" name="movie_image" placeholder=""> -->
					<input class="form-control" id="exampleInputPassword1" type="file" placeholder="" name="room_photo">
					<button type="button" class="btn btn-success btn_addmovie" >Submit</button>
					
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