<?php ?>
<!DOCTYPE html>
<html>
<head>
	<title>Виртуальный тур Kalinin | by Don360</title>
	<meta property="og:title" content="Виртуальный тур Kalinin | by Don360"/>
	<meta property="og:image" content="assets/og-image.jpg"/>
	<meta property="og:image:width" content="800"/>
	<meta property="og:image:height" content="417"/>
	<meta property="vk:image" content="assets/og-image-vk.jpg"/>
	<meta property="og:image:width" content="800"/>
	<meta property="og:image:height" content="357"/>
	<meta property="og:type" content="website" />
	<meta property="og:site_name" content="Мы делаем профессиональные 3D-туры под ключ"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, viewport-fit=cover" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta http-equiv="x-ua-compatible" content="IE=edge" />
	<link href='https://fonts.googleapis.com/css2?family=Roboto+Slab' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css2?family=Open+Sans' rel='stylesheet' type='text/css'>
	<style>
		@-ms-viewport { width:device-width; }
		@media only screen and (min-device-width:800px) { html { overflow:hidden; } }
		html { height:100%; }
		body { height:100%; overflow:hidden; margin:0; padding:0; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#FFFFFF; background-color:#000000; }
		#panel_thumbs {z-index:9; position: fixed; bottom: 0; left: 0;}
		#panel_thumbs img.scene {opacity: 0.7;border: 0;}
		#panel_thumbs img.scene.current {
			border: 2px solid #ffffff;
			opacity: 1;
		}
		#panel_thumbs img.scene.nextpano {
			border: 0;
			opacity: 1;
		}
	</style>
</head>
<body>
	<span itemprop="image" itemscope itemtype="http://schema.org/ImageObject"><link itemprop="url" href="og-image.jpg"><meta itemprop="width" content="800"><meta itemprop="height" content="417"></span>
	<div id="pano" style="width:100%;height:100%;"><noscript><table style="width:100%;height:100%;"><tr style="vertical-align:middle;"><td><div style="text-align:center;">ERROR:<br/><br/>Javascript not activated<br/><br/></div></td></tr></table></noscript></div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="../assets/krpano.js"></script>
	<script src="../assets/functions.js"></script>
	
	<script type="text/javascript">
	$(document).ready(function(){
		<?php if($_GET['audiogid'] == 1){?>
			embedpano({xml:'audiogid.xml', target:'pano', html5:'auto', mobilescale:1.0});
		<?php } else { ?>
			embedpano({xml:'tour.xml', target:'pano', html5:'auto', mobilescale:1.0, consolelog:true, passQueryParameters:true, onready:krpano_onready_callback});
		<?php };?>
	});
	</script>
	
	<script src="../assets/main.js"></script>
</body>
</html>
