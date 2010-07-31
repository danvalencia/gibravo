<?php require("../services/ImageService.php");

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
}
else
{
	$albums=array_values($albums);
	$album=$albums[0];
}
$images_in_album = $album->getImages();

if(isset($image_name))
{
	$display_image=$images_in_album[$image_name];
}
else
{
	$images_in_album=array_values($images_in_album);
	$display_image=$images_in_album[0];
}
$image_count=0;
$MAX_IMAGES=24;


include("../view/default_layout.php");
?>
