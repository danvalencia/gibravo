<?php
/**
 * This class represents an album
 *
 * @package default
 * @author Daniel Valencia
 **/
class Album
{
	/**
	 * An array of images
	 *
	 * @var array
	 **/
	private $_images;
	
	private $_name;
	
	public function getImages()
	{
		return $this->_images;
	}

	public function setImages($images)
	{
		$this->_images = $images;
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