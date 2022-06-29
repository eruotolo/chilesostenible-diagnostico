<?php
	include('../include/dbselect.php');	
	$email = $_POST['email'];

	
	$sql = "SELECT * FROM encuesta WHERE email = '$email'";
	$query = mysqli_query($db,$sql) or die(mysqli_error());
	$find = 0;
	while ($row = mysqli_fetch_assoc($query)) {	
		$empresa = $row['empresa'];
		$region = $row['region'];
		$pais = $row['pais'];
		$nombre = $row['nombre'];
		$rut = $row['rut'];
		$last = $row['last'];
		$find = 1;
		$preguntas = $row;
	}
	
	$ultimapregunta = $last; 
	
	$output['status'] = 1;
	$output['empresa'] = $empresa;
	$output['region'] = $region;
	$output['find'] = $find;
	$output['ultimapregunta'] = $ultimapregunta;
	$output['pais'] = $pais;
	$output['nombre'] = $nombre;
	$output['rut'] = $rut;
	echo json_encode($output);
?>