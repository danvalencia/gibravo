<?php
function logToFile($msg, $filename = "../../log/error.log")
{ 
	// open file
	$fd = fopen($filename, "a");
	// append date/time to message
	$str = "[" . date("Y/m/d h:i:s", mktime()) . "] " . $msg; 
	// write string
	fwrite($fd, $str . "\n");
	// close file
	fclose($fd);
}
?>