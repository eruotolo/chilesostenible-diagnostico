<?php
	error_reporting(E_ALL ^ E_NOTICE);  
	include('include/dbselect.php');	
	$sql = "SELECT * FROM encuesta WHERE ID = '{$_GET['eid']}'";

	$query =  mysqli_query($db,$sql) or die(mysqli_error());
	$preguntas = array();
	
	while ($row = mysqli_fetch_assoc($query)) {	
		$preguntas = $row;
	}	

?>