<?php
$id = $_POST['id'];
$emailtosend = $_POST['email'];
$message = "¡Felicitaciones! <br/><br/>Has completado tu “Diagnóstico Inicial de Sostenibilidad”, un paso importante dentro de la Iniciativa Chile Sostenible.<br/>Para revisar el reporte de tu organización con las fortalezas y brechas en el acercamiento a una gestión y operación sostenibles, ingresa <a href='http://diagnosticochilesostenible.cl/resumen.php?eid={$id}'>aquí</a>.<br/>";
//$message = "Hola,<br/>Puedes ver el resumen de la encuesta aqui: https://redimpacta.cl/diagnostico/resumen.php?eid={$id}";	
$email = sendEmail($emailtosend, $email, "El diagnóstico fue completado", $message, $message, $file, $filename);
$output['status'] = 1;
$output['email'] = $email;
echo json_encode($output);


function sendEmail($emailreceiver, $userfullname, $subject, $html, $text, $file, $filename) {

	$apptitle = 'Diagnóstico Inicial de Sostenibilidad';	
	
	include_once('mailin/Mailin.php');
	$mailin = new Mailin('edgardo@indaga.me', 'AYFRpLaw56bgBWJG');
	$mailin->
	addTo($emailreceiver, $userfullname)->
	setFrom('contacto@diagnosticochilesostenible.cl', $apptitle)->
	setReplyTo('contacto@diagnosticochilesostenible.cl',$apptitle)->
	//setBcc('nachodeleon77@gmail.com')->
	setSubject($subject)->
	setText('Comprobante fiscal electronico')->
	setHtml($html);
	//$attachment_content = chunk_split(base64_encode($file));
	//$mailin->createAttachment(array("$filename"=>$attachment_content));
	
	$res = $mailin->send();
//	unlink($filename);
//	echo $res;
	return $res;
	/*
	El mensaje de éxito se enviará de esta forma:
	{'result' => true, 'message' => 'E-MAILS enviados'}
	*/	
}
?>