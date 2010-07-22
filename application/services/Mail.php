<?php 
class Mail
{
	private $_to = "danvalencia@gmail.com";
	private $_name;
	private $_from;
	private $_msg;
	
	
	function __construct($name, $from, $message = "")
	{
		$this->_name = $name;
		$this->_from = "From: " . $from;
		$this->_msg = $message;
	}
	
	public function sendMail()
	{
		logToFile("Intentando enviar el mail");
		if(isset($this->_name) && isset($this->_from))
		{
			logToFile("Nombre: " . $this->_name . " From: " . $this->_from . " To: " . $this->_to . " Mensaje: " . $this->_msg);				
			if(mail($this->_to, "Contacto", $this->_msg, $this->_from))
			{
				logToFile("Mail enviado exitosamente");
				return true;
			}
		}
		return false;
	}
	
}
?>