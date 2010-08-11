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
	
	//Un array de imagenes
	private $_images;
	
	private $_name;

	private $_url;

	private $_urlTarget;
	
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
	}
	
	public function setName($name)
	{
		$this->_name = $name;
	}

	public function getImages()
	{
		return $this->_images;
	}
	
	public function setImages($images)
	{
		$this->_images = $images;
	}
	
	public function getUrl()
	{
		if(isset($this->_url) && !empty($this->_url))
		{
			return $this->_url;
		}
		return "#";
	}

	public function setUrl($url)
	{
		return $this->_url = $url;
	}
	
	public function getUrlTarget()
	{
		return $this->_urlTarget;
	}

	public function setUrlTarget($url_target)
	{
		return $this->_urlTarget = $url_target;
	}
	
	public function hasImages()
	{
		if(isset($this->_images) && count($this->_images) > 0)
		{
			return true;
		} 
		
		return false;
	}
	
	public function hasAlbums()
	{
		if(isset($this->_albums) && count($this->_albums) > 0)
		{
			return true;
		}
		return false;
	}
	
}
?>