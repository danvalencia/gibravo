<?php
require("../model/Section.php");
require("../model/Image.php");
require("../model/Album.php");

class SectionDao
{
	public $_filename;
	
	/**
	 * Constructor
	 *
	 * @param string $filename
	 */
	function __construct($filename = "../../data.xml") 
	{
		$this->_filename = $filename;
	}
	
	public function fetchSections()
	{
 		$sections_xml = simplexml_load_file($this->_filename);
		$sections_array = array();
		
		foreach ($sections_xml->section as $section) 
		{
			$section_obj = new Section();
			$section_name = (string) $section->attributes()->name;
			$section_obj->setName($section_name);
			$album_arr = array();
			$section_image_arr = array();
			foreach($section->album as $album)
			{
				$album_obj = new Album();
				$album_name = (string) $album->attributes()->name;
				$album_obj->setName($album_name);
				$image_arr = array();
				foreach($album->image as $image)
				{
					$image_obj = $this->parseImage($image);
					$image_arr[$image_obj->getName()]=$image_obj;
				}				
				$album_obj->setImages($image_arr);
				$album_arr[$album_name]=$album_obj;				
			}
			
			foreach($section->image as $outImage)
			{
				$image_obj = $this->parseImage($outImage);
				$section_image_arr[$image_obj->getName()]=$image_obj;
			}
			
			$section_obj->setAlbums($album_arr);
			$sections_array[$section_name]=$section_obj;
		}
		
		return $sections_array;
	}
	
	public function parseImage($image)
	{
		$image_obj = new Image();
		$image_path = (string) $image->attributes()->path;
		$image_title = (string) $image->title;
		$image_name = (string) $image->name;
		$image_thumb_path = (string) $image->thumbnail->attributes()->path;
		$image_obj->setName($image_name);
		$image_obj->setPath($image_path);
		$image_obj->setTitle($image_title);
		$image_obj->setThumbnailPath($image_thumb_path);
		return $image_obj;
	}
	
	
}
?>
