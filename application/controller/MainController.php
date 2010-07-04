<?php require("../services/ImageService.php");
$seccion_name = $_GET['seccion'];
$album_name = $_GET['album'];
$image_name = $_GET['imagen'];
#echo("<p>Works: seccion: $seccion_name, album: $album_name,  imagen: $image_name </p>");

// $xml=simplexml_load_file("../../data.xml");
$service = new ImageService();
$sections = $service->fetchSections();

$section=$sections[$seccion_name];
$albums=$section->getAlbums();
$album=$albums[$album_name];
$image_count=0;
$MAX_IMAGES=21;
#var_dump($album);

// $xml_str=var_dump($xml);
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
				<ul class="sections">
					<?php foreach ($sections as $a_section): ?>
						<li class="item_sections">
							<?php if (strcasecmp($a_section->getName(), $seccion_name) == 0): ?>
								<span class="section_selected"><?php echo strtoupper($a_section->getName()) ?></span>
							<?php else: ?>
								<span class="section_unselected"><?php echo strtoupper($a_section->getName()) ?></span>
							<?php endif ?>								
							<ul class="albums">
								<?php foreach ($a_section->getAlbums() as $an_album): ?>
									<?php if (strcasecmp($a_section->getName(), $seccion_name) == 0): ?>
										<li class="item_albums">
									<?php else: ?>
										<li class="item_albums hidden">
									<?php endif ?>		
									
									<?php if (strcasecmp($an_album->getName(), $album_name) == 0): ?>
										<span class="album_selected"><?php echo $an_album->getName() ?></span>
									<?php else: ?>
										<span class="album_unselected"><?php echo $an_album->getName() ?></span>
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
						<div class="thumb">
							<img src="<?php echo $image->getThumbnailPath()?>"></img>
						</div>
					<?php endforeach ?>
					<?php for ($i=$image_count; $i < $MAX_IMAGES; $i++): ?>
						<div class="thumb"></div>
					<?php endfor?>
				</div>
				<div id="image_panel">
					<!-- <img src="/images/personal/ciudad1.jpg"></img> -->
				</div>
			</div>
			<div id="footer">
					ALL IMAGES © GIBRAN JULIAN
			</div>
		</div>
	</body>
</html>