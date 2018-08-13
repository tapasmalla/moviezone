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
				<h1>Add Screen</h1>
				<form id="screen_form">
				
					<?php 
					$usertype = $_SESSION['us_type'];
						$result = $obj->get_data($usertype);
						// pre($result);
					 ?>
					<select name="areaid" class="select_area">
						<option value="">please select Area</option>
						<?php 
							if(isset($result)){
								foreach($result as $val){
									$id = $val['area_id'];
									echo "<option value='$id'>";
									echo $val['area_name'];
									echo "</option>";
								}
							 
							}
						?>
					</select>
						
					
					<select class="select_theaterid" name="theaterid">
						<option value="">please Select Theater</option>
					</select>
					<input type="text" name="screen" placeholder="Screen Name" />
					<input type="text" name="seat" placeholder="No of Seat" />
					<button type="button" class="btn btn-success btn_addscreen" >Submit</button>
					
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