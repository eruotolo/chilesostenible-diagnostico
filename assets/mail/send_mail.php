<?php
$id = $_POST['id'];
$emailtosend = $_POST['email'];
$message = "Hola, <br /><br/>Tienes un <b>Diagnóstico Inicial de Sostenibilidad</b> en proceso. Para seguir completando tu formulario ingresa <a href='http://diagnosticochilesostenible.cl/pregunta-01.php?eid={$id}'>aquí</a>, así podrás identificar las fortalezas y brechas de tu organización en el acercamiento a una gestión y operación sostenibles. Asegúrate de <b>ingresar con el mismo correo</b> con el que te identificaste la primera vez.<br />Para iniciar un nuevo diagnóstico, ingresa con un correo diferente.<br/>Si quieres saber cómo Chile Sostenible te puede ayudar a abordar estos desafíos, visita <a href='https://iniciativachilesostenible.cl'>iniciativachilesostenible.cl</a>. <br />.";
//$message = "Hola,<br/>Puedes contiuar con el cuestionario aqui: https://redimpacta.cl/diagnostico/pregunta-01.php?eid={$id}";	
$email = sendEmail($emailtosend, $email, "Continúa tu diagnóstico en cualquier momento", $message, $message, $file, $filename);
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