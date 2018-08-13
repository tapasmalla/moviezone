<?php 
	require_once "../models/project.php";

	// print_r($_REQUEST);
	if(empty($_REQUEST['language'])){
		echo "Please Enter Language";
	}
	else{

		$language = $_REQUEST['language'];

		$result = $obj->select("count(*) as cnt","mz_lang","lang_name='$language'");
		// pre($result);

		if($result[0]['cnt'] > 0){
			echo "Language Exist";
		}
		else{

			$obj->insert("mz_lang","lang_name","'$language'");
			echo "Language Added";
		}
		
	}
	
 ?>