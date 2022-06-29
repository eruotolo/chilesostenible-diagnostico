<?php
	include('../include/dbselect.php');	
	$nro_preg = $_POST['nro_preg'];
	$id = $_POST['id'];
	$value = mysql_real_escape_string($_POST['value']);
	
	$sql = "UPDATE `encuesta`
			SET
			`p{$nro_preg}` = '$value'
			WHERE `ID` = $id;";
	$query = mysql_query($sql) or die(mysql_error());
	
	$output['status'] = 1;
	echo json_encode($output);
?>