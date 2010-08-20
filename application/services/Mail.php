<?php 
class Mail
{
	private $_to = "yo@daniel-valencia.com";
	// private $_to = "danvalencia@gmail.com";
	private $_name;
	private $_from;
	private $_msg;
	
	function __construct($name, $from, $message = "")
	{
		$this->_name = $name;
		$this->_from = $from;
		$this->_msg = $message;
	}
	
	public function sendMail()
	{
		$todayis = date("l, F j, Y, g:i a") ;

		$this->_msg = " $todayis [EST] \n
					    Message: $this->_msg \n
					    From: $this->_name ($this->_from)";

		$this->_from = "From: " . $this->_from . "\r\n";

		logToFile("Intentando enviar el mail");
		
		logToFile("Nombre: " . $this->_name . " From: " . $this->_from . " To: " . $this->_to . " Mensaje: " . $this->_msg);

		if(mail($this->_to, "Contacto", $this->_msg, $this->_from))
		{
			logToFile("Mail enviado exitosamente");
			return true;
		}
		return false;
	}
	
	public function validate()
	{
		if(empty($this->_name) || empty($this->_from) || empty($this->_msg))
		{
			return false;
		}
		return true;
	}
	
}
?>