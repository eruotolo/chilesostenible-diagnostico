<?php
	include('../include/dbselect.php');	
	$nro_preg = $_POST['nro_preg'];
	$id = $_POST['id'];
	$val = $_POST['val'];
	$other = $_POST['other'];
	$value = mysql_real_escape_string($_POST['value']);
	
	if ($val == 1) {
		$rubro = "Actividades de extracción de Recursos Naturales";
	} else if ($val == 2) {
		$rubro = "Energías Renovables (ERNC)";
	} else if ($val == 3) {
		$rubro = "Gastronomía";
	} else if ($val == 4) {
		$rubro = "Gestión de residuos";
	} else if ($val == 5) {
		$rubro = "Medios de comunicación";
	} else if ($val == 6) {
		$rubro = "Petróleo y gas";
	} else if ($val == 7) {
		$rubro = "Productos agrícolas";
	} else if ($val == 8) {
		$rubro = "Productos físicos que incluyen envases";
	} else if ($val == 9) {
		$rubro = "Reconversión de residuos industriales";
	} else if ($val == 10) {
		$rubro = "Sector farmacéutico";
	} else if ($val == 11) {
		$rubro = "Servicios";
	} else if ($val == 12) {
		$rubro = "Servicios bancarios y financieros";
	} else if ($val == 13) {
		$rubro = "Tecnologías de la información y la comunicación";
	} else if ($val == 14) {
		$rubro = "Turismo";
	} else if ($val == 15) {
		$rubro = $other;
	}
	
	$sql = "UPDATE `encuesta`
			SET
			`p{$nro_preg}` = '$value',
			rubro = '$rubro'
			WHERE `ID` = $id;";
	$query = mysql_query($sql) or die(mysql_error());
	
	$output['status'] = 1;
	echo json_encode($output);
?>