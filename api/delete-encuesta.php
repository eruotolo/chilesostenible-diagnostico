<?php
	include('../include/dbselect.php');	
	$rowid = $_POST['rowid'];
	
	$sql = "DELETE FROM encuesta WHERE ID = '$rowid'";
	$query = mysqli_query($db,$sql) or die(mysqli_error());	
	
	$output['status'] = 1;
	echo json_encode($output);
?>