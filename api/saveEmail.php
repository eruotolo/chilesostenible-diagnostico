<?php
	error_reporting(E_ALL ^ E_NOTICE);  
	include('../include/dbselect.php');	
	$email = $_POST['email'];
	$empresa = $_POST['empresa'];
	$region = $_POST['region'];
	$pais = $_POST['pais'];
	$nombre = $_POST['nombre'];
	$rut = $_POST['rut'];
	
	$sql = "SELECT * FROM encuesta WHERE email = '$email'";	
	$result = mysqli_query($db,$sql) or die(mysqli_error($db));
	$count = mysqli_num_rows($result);

	if ($count == 0) {
			
		$sql1 = "SELECT * FROM encuesta WHERE rut = '$rut'";	
		$result1 = mysqli_query($db,$sql1) or die(mysqli_error($db));
		$count1 = mysqli_num_rows($result1);		
		
		if ($count1 > 0) {
			$output['status'] = 0;
			$output['reason'] = "rut";
			echo json_encode($output);	
			die();
		}
		
		$sql = "INSERT INTO `encuesta`
					(`email`,
					`empresa`,
					`region`,
					fecha,
					pais,
					nombre,
					rut)
					VALUES
					('$email',
					'$empresa',
					'$region',
					NOW(),
					'$pais',
					'$nombre',
					'$rut');
					";
		$result = mysqli_query($db,$sql) or die(mysqli_error($db));	
		$lastid = mysqli_insert_id($db);
	} else {
		while ($row = mysqli_fetch_assoc($result)) {	
			$lastid = $row['ID'];
		}		
		$sql = "UPDATE `encuesta`
					SET
					`empresa` = '$empresa',
					`region` = '$region',
					pais = '$pais',
					nombre = '$nombre',
					fecha = NOW(),
					rut = '$rut'
					WHERE `ID` = $lastid;
					";
		$query = mysqli_query($db,$sql) or die(mysqli_error($db));			
	}
	
	$output['status'] = 1;
	$output['id'] = $lastid;
	echo json_encode($output);
?>