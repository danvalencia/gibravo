<?php 
require("../services/Mail.php");
require("../../lib/logging.php");

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];


$mail = new Mail($name, $email, $message);
logToFile("objeto mail creado. Nombre: " . $name . ", Email: " . $email . ", Message: " . $message);

header("Content-Type: application/json");

if($mail->validate())
{
	if($mail->sendMail())
	{
		//TODO: Mejorar el mensaje de success
		$message = array("type" => "success", "text" => "El correo fue enviado exitosamente");
		$json_response = array("message" => $message);
	}
	else
	{
		//TODO: Mejorar el mensaje de error
		$message = array("type" => "error", "text" => "Hubo un error enviando el correo. Por favor intente mas tarde.");
		$json_response = array("message" => $message);
		header("HTTP/1.1 500 Internal Error");
	}	
}
else
{
	$message = array("type" => "error", "text" => "Por favor asegúrese de llenar todos los campos.");
	$json_response = array("message" => $message);
	header("HTTP/1.1 500 Internal Error");
}

echo(json_encode($json_response));
?>