<?php 
	require_once "parameter.php";
	abstract class Connection implements Parameter{

		var $conn = "";
		function __construct(){
			// echo "start";
			$this->conn = new mysqli(
			Parameter::HOST,
			Parameter::USER,
			Parameter::PASSWORD,
			Parameter::DATABASE

			);
		// 	echo "<pre>";
		// print_r($this->conn);
		// 	echo "</pre>";
			if(session_id() == ""){
				session_start();
			}

		}

		function __destruct(){
			// echo "End";
		}
	}

 ?>