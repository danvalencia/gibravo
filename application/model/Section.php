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
	
	/**
	 * Getter
	 *
	 * @return an array of albums
	 **/
	public function getAlbums()
	{
		return $this->$_albums;
	};
	
	/**
	 * Setter
	 *
	 * @return void
	 **/
	public function setAlbums($albums)
	{
		$this->$_albums = $albums;
	}
}
?>