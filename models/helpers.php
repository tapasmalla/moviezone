<?php 
	require_once "connection.php";
	abstract class Helpers extends Connection{
		function insert($table, $col, $val){
			$comand = "insert into $table ($col) values ($val)";

			$result = $this->conn->query($comand) or die ($this->conn->error);
		}

		function select($col, $table, $condition){
			$comand = "select $col from $table where $condition";

			$result = $this->conn->query($comand) or die ($this->conn->error);

			if($result->num_rows > 0){
				while($ans = $result->fetch_array(MYSQLI_ASSOC)){

					$data[] = $ans;
				}
				return $data;
			}
			else{
				return 0;	
			}
		}

		function update($table, $records, $condition){
			$comand = "update $table set $records where $condition";

			$result = $this->conn->query($comand) or die ($this->conn->error);

		}
		function delete(){

		}
	}
 ?>