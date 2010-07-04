<?php
/**
 * This class represents a section that contains a list of albums.
 *
 * @package default
 * @author Daniel Valencia
 */
class Section
{
	//Un array de albumes
	private $_albums;
	
	private $_name;
	
	public function getAlbums()
	{
		return $this->_albums;
	}
	
	public function setAlbums($albums)
	{
		$this->_albums = $albums;
	}
	
	public function getName()
	{
		return $this->_name;
		#return "thissssss";
	}
	
	public function setName($name)
	{
		$this->_name = $name;
	}
}
?>