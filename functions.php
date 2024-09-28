<?php 

session_start();

function database_run($query,$vars = array())
{
	$dbcon = "mysql:host=localhost;dbname=naturaverde_db";
	$con = new PDO($dbcon,'root','');

	if(!$con){
		return false;
	}

	$stm = $con->prepare($query);
	$check = $stm->execute($vars);

	if($check){
		
		$data = $stm->fetchAll(PDO::FETCH_OBJ);
		
		if(count($data) > 0){
			return $data;
		}
	}

	return false;
}



?>