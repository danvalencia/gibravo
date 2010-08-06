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
		<link rel="stylesheet" href="/styles/contact.css" type="text/css"></link>
	</head>
	<body>
		<div id="page-container">
			<div id="header">
				<?php include("header.php");?>
			</div>
			<div id="leftnav">
				<?php include("leftnav.php");?>
			</div>
			<div id="main">
				<?php include($main);?>
			</div>
			<div id="footer">
				<?php include("footer.php");?>
			</div>
		</div>
		<script type="text/javascript" charset="utf-8" src="/javascript/jquery-1.4.2.min.js"></script>
		<script type="text/javascript" charset="utf-8" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/jquery-ui.min.js"></script>
		<script type="text/javascript" charset="utf-8" src="/javascript/image.js"></script>
		<script type="text/javascript" charset="utf-8" src="/javascript/menu.js"></script>
		<script type="text/javascript" charset="utf-8" src="/javascript/mail.js"></script>
		<script type="text/javascript" >
		$(document).ready(function() {
			Menu.initMenu("<?= $is_home_page ? 'home_page' : $seccion_name ?>");
			Image.init();
			$("input:submit").button();
			$(".thumb.image").first().click();
		});   
		</script>
	</body>
</html>