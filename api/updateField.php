<?php
	
	error_reporting(E_ALL ^ E_NOTICE);  
	include('../include/dbselect.php');	
	$field = $_POST['field'];
	$id = $_POST['id'];
	$value = mysqli_real_escape_string($db,$_POST['value']);
	$last = 1;
	$last = explode("-",str_replace("p","",$field))[0];
	if (is_numeric($last)) {
		$last = $last + 3;
	} else {
		$last = 1;
	}
	
	$sql = "UPDATE `encuesta`
			SET
			`$field` = '$value',
			last = $last
			WHERE `ID` = $id;";
	$result = mysqli_query($db,$sql) or die(mysqli_error($db));
	
	$output['status'] = 1;
	echo json_encode($output);
?>