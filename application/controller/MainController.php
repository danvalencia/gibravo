<?php 
require("../services/ImageService.php");
require("../../lib/logging.php");

$show_contact = $_GET['showContact'];

$main = "main.php";
if(isset($show_contact))
{
	$main = "contact.php";
	$hide_arrows = false;
}

$seccion_name = $_GET['seccion'];
$album_name = $_GET['album'];
$image_name = $_GET['imagen'];

logToFile("Section Name: " . $seccion_name . ". Album: " . $album_name . ". Image: " . $image_name);

$service = new ImageService();
$sections = $service->fetchSections();

if(isset($seccion_name))
{
	$section=$sections[$seccion_name];	
}
else
{
	$sections=array_values($sections);
	$section=$sections[0];
}
$albums=$section->getAlbums();


if(isset($album_name))
{
	$album=$albums[$album_name];
	$images_to_display = $album->getImages();
}
else
{
	logToFile("album is not set");
	if($section->hasImages())
	{
		logToFile("section has images");
		$images_to_display = $section->getImages();		
		$display_image = $images_to_display[0];
		//$images_in_album=array_values($images_in_section);
	}
	else
	{
		logToFile("section does not has images");
		$albums=array_values($albums);
		$album=$albums[0];		
		$images_to_display = $album->getImages();
	}
}

if(isset($image_name))
{
	$display_image=$images_in_album[$image_name];
}
else
{
	$images_to_display=array_values($images_to_display);
	$display_image=$images_to_display[0];
}
$image_count=0;
$MAX_IMAGES=24;


include("../view/default_layout.php");
?>
