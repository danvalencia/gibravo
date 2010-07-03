class SeccionDao{
	
	function SeccionDao($filename){
		$this->seccionesXml = simplexml_load_file($filename);
	}
	
	function getSecciones(){
		
	}
}