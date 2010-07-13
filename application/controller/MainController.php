<?php require("../services/ImageService.php");
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
$MAX_IMAGES=21;

?>
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<title>gibravo.com</title>
		<meta http-equiv="Content-Language" content="en-us" />
		<meta http-equiv="imagetoolbar" content="no" />
		<meta name="MSSmartTagsPreventParsing" content="true" />
		<meta name="description" content="Description" />
		<meta name="keywords" content="Keywords" />
		<meta name="author" content="Enlighten Designs" />
		<link rel="stylesheet" href="/styles/styles.css" type="text/css"></link>
	</head>
	<body>
		<div id="page-container">
			<div id="header">
				<img id="header_image" src="/images/titulo.png"></img>
			</div>
			<div id="leftnav">
				<ul id="menu" class="sections">
					<?php foreach ($sections as $a_section): ?>
						<li class="item_sections">
							<?php if (strcasecmp($a_section->getName(), $seccion_name) == 0): ?>
								<a class="section section_selected" id="<?=$a_section->getName()?>" href="#"><?= strtoupper($a_section->getName()) ?></a>
							<?php else: ?>
							    <a class="section section_unselected" href="#" id="<?=$a_section->getName()?>"><?= strtoupper($a_section->getName()) ?></a>
							<?php endif ?>								
							<ul class="albums">
								<?php foreach ($a_section->getAlbums() as $an_album): ?>
									<?php if (strcasecmp($a_section->getName(), $seccion_name) == 0): ?>
										<li class="item_albums">
									<?php else: ?>
										<li class="item_albums">
									<?php endif ?>		
									
									<?php if (strcasecmp($an_album->getName(), $album_name) == 0): ?>
										<a href="<?= "/main/".$a_section->getName()."/".$an_album->getName()?>" class="album album_selected"><?= $an_album->getName() ?></a>
									<?php else: ?>
										<a href="<?= "/main/".$a_section->getName()."/".$an_album->getName()?>" class="album album_unselected"><?= $an_album->getName() ?></a>
									<?php endif ?>						
									</li>
								<?php endforeach ?>
							</ul>
						</li>
					<?php endforeach ?>
				</ul>
			</div>
			<div id="main">
				<div id="thumb_panel">
					<?php foreach ($album->getImages() as $image): ?>
						<?php $image_count++;?>
						<div class="thumb" onclick="Image.selectImage('<?= $image->getPath() ?>');">
							<img src="<?= $image->getThumbnailPath()?>"></img>
						</div>
					<?php endforeach ?>
					<?php for ($i=$image_count; $i < $MAX_IMAGES; $i++): ?>
						<div class="thumb"></div>
					<?php endfor?>
				</div>
				<div id="image_panel" >
					<!-- <img id="_image" style="opacity:0.1;filter:alpha(opacity=40)" src="/images/pajaro_web2.jpg"></img> -->
					<img id="_image" src="<?= $display_image->getPath() ?>"></img>
				</div>
			</div>
			<div id="footer">
					ALL IMAGES © GIBRAN JULIAN
			</div>
		</div>
		<script type="text/javascript" charset="utf-8" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
		<script type="text/javascript" charset="utf-8" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/jquery-ui.min.js"></script>
		<script type="text/javascript" charset="utf-8" src="/javascript/image.js"></script>
		<script type="text/javascript" charset="utf-8" src="/javascript/menu.js"></script>
		<script type="text/javascript" >
		$(document).ready(function() {
			Menu.initMenu("<?= $seccion_name ?>");
		});   
		</script>
	</body>
</html>