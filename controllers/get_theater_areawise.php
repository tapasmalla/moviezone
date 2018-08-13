<?php 
	require_once "..//models/project.php";
	// print_r($_POST);
	$id = $_POST['areaid'];
	// echo $id;
	$result = $obj->get_theater_areawise($id);
		// pre($result);
	if(is_array($result)){
		echo "<option value=''>Please select branch</option>";
		foreach($result as $val){
			$id = $val['the_id'];
			echo "<option value='$id'>";
			echo $val['the_name'];
			echo "</option>";
		}
	}
	
 ?>