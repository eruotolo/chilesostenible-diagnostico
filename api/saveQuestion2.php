<?php
	include('../include/dbselect.php');	
	$nro_preg = $_POST['nro_preg'];
	$id = $_POST['id'];
	$empleados = $_POST['empleados'];
	
	$value = mysql_real_escape_string($_POST['value']);
	
	if ($value == '{\"value\":\"1\"}') {
		$tamano = 'Empresa micro o (ingresos por ventas de hasta 2.400 UF anual)';
	} else if ($value == '{\"value\":\"2\"}') {
		$tamano = 'Empresa pequeña ( ingresos por ventas sobre 2.401 UF hasta 25.000 anual)';
	} else if ($value == '{\"value\":\"3\"}') {
		$tamano = 'Empresa mediana (ingresos por ventas sobre 25.001 UF hasta 100.000 UF anual)';
	} else if ($value == '{\"value\":\"4\"}') {
		$tamano = 'Empresa grande (ingresos por ventas por sobre 100.000 UF anual)';
	} else {
		$tamano = $tv;
	}
	
	$sql = "UPDATE `encuesta`
			SET
			`p{$nro_preg}` = '$value',
			nroempleado = '$empleados',
			tamano = '$tamano'
			WHERE `ID` = $id;";
	$query = mysql_query($sql) or die(mysql_error());

	
	$output['status'] = 1;
	echo json_encode($output);
?>