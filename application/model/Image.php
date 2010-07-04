<?php
/**
* This class represents an image.
*/
class Image
{
	/**
	 * Image properties
	 */
	private $_name;
	
	private	$_path;
	
	private $_title;
	
	private $_thumbpath;
	
	/**
	 * Getters and Setters
	 */
	
	public function getPath()
	{
		return $this->_path;
	}
	
	public function setPath($path)
	{
		$this->_path = $path;
	}
	
	public function setTitle($title)
	{
		$this->_title = $title;
	}
	
	public function getTitle()
	{
		return $this->_title;
	}
	
	public function setThumbnailPath($path)
	{
		$this->_thumbpath = $path;
	}
	
	public function getThumbnailPath()
	{
		return $this->_thumbpath;
	}
	
	public function getName()
	{
		return $this->_name;
	}
	
	public function setName($name)
	{
		$this->_name = $name;
	}
}

?>