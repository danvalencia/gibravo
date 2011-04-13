<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
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
		<link rel="stylesheet" href="/styles/leftnav.css" type="text/css"></link>
		<link rel="stylesheet" href="/styles/contact.css" type="text/css"></link>
		<link rel="stylesheet" href="/styles/wallpaper.css" type="text/css"></link>
	</head>
	<body>
		<div id="page-container">
			<div id="header">
				<?php include("header.php");?>
			</div>
			<div id="facebook_like">
				
			</div>
			<div id="leftnav">
				<?php include("leftnav.php");?>
			</div>
			<div id="main">
				<?php include($view);?>
			</div>
			<div id="footer">
				<?php include("footer.php");?>
			</div>
		</div>
		<script type="text/javascript" charset="utf-8" src="/javascript/image.js"></script>
		<script type="text/javascript" charset="utf-8" src="/javascript/fly.js"></script>
		<script type="text/javascript" charset="utf-8" src="/javascript/jquery-1.4.2.min.js"></script>
		<script type="text/javascript" charset="utf-8" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/jquery-ui.min.js"></script>
		<script type="text/javascript" charset="utf-8" src="/javascript/menu.js"></script>
		<script type="text/javascript" charset="utf-8" src="/javascript/mail.js"></script>
		<script type="text/javascript" >
		$(document).ready(function() {
			var section = "<?= $is_home_page ? 'home_page' : $seccion_name ?>";
			ImageUtils.section = section;
			var mainImage = "<?= getMainImage($display_image, $is_home_page) ?>";
			ImageUtils.loadImage(mainImage);
			if(section == "home_page")
			{
				$("#random_fly").hover(function(){
					var coordinates = Fly.getCoordinates();
					$(this).animate({"left" : coordinates[0], 
									 "top" : coordinates[1]},
									{
									    duration: 200, 
									    specialEasing: {
									      left: 'swing',
									      top: 'swing'
									    }
									});
				})
				var coordinates = Fly.getCoordinates();
				$("#random_fly").css("left", coordinates[0]).css("top", coordinates[1]).removeClass("hidden");			
				
			}
			Menu.initMenu(section);
			ImageUtils.init();
			$("input:submit").button();
			$(".thumb.image").first().click();
		});   
		</script>
		<img id="random_fly" src="/images/fly1.png" class="hidden"></img>
	</body>
</html>