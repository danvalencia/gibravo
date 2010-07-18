<?php
class Mail
{
	function __construct($name, $from, $message = "")
	{
		$this->_name = $name;
		$this->_from = "From: " . $from;
		$this->_msg = $message;
	}
	
	function send()
	{
		if(isset($this->_name) && isset($this->_from))
		{
			if(mail($this->_to, "Contacto", $this->_msg, $this->_from))
			{
				return true;
			}
		}
		return false;
	}
}
?>