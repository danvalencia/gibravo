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
	
	/**
	 * Getter
	 *
	 * @return list of images for this album
	 */
	public function getImages()
	{
		return $this->$_images;
	}
	
	/**
	 * Setter
	 *
	 * @param string $images 
	 * @return void
	 */
	public function setImages($images)
	{
		$this->$_images = $images;
	}
} 
?>