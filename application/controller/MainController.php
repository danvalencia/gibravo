<?php require("../services/ImageService.php");
$seccion_name = $_GET['seccion'];
$album_name = $_GET['album'];
$image_name = $_GET['imagen'];
echo("<p>Works: seccion: $seccion_name, album: $album_name,  imagen: $image_name </p>");

// $xml=simplexml_load_file("../../data.xml");
$service = new ImageService();
$sections = $service->fetchSections();

$section=$sections[$seccion_name];
$albums=$section->getAlbums();
$album=$albums[$album_name];
var_dump($album);

// $xml_str=var_dump($xml);
?>