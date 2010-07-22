<?php 
require("../services/Mail.php");
require("../../lib/logging.php");

$name = $_GET["name"];
$email = $_GET["email"];
$message = $_GET["message"];


$mailService = new Mail($name, $email, $message);
logToFile("objeto mailService creado. Nombre: " . $name . ", Email: " . $email . ", Message: " . $message);

if($mailService->sendMail())
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
}

echo(json_encode($json_response));
?>