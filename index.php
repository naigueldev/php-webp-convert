<?php 
require 'vendor/autoload.php';
require 'Webp.php';

$webp = new WebP;

if(isset($_GET['convertwebp']) && $_GET['convertwebp']=="1"){
	$path_source      = "img_banner/banner_0123.jpg";
	$path_destination = "img_banner_webp/banner_0123.webp";
	$webp->convertOneImage($path_source, $path_destination);
}

if(isset($_GET['convertfolderwebp']) && $_GET['convertfolderwebp']=="1"){
	$folder_from      = "img_banner";
	$folder_to        = "img_banner_webp";
	$webp->convertImagesFromToFolder($folder_from, $folder_to);
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP - WebP image format</title>
	<style type="text/css">
		html {
			font-family: sans-serif;
			line-height: 1.15;
			-webkit-text-size-adjust: 100%;
			-webkit-tap-highlight-color: rgba(0, 0, 0, 0);
		}
		body {
			margin: 0;
			font-family: "Segoe UI", Roboto, "Helvetica Neue", Arial;
			font-size: 1rem;
			font-weight: 400;
			line-height: 1.5;
			color: #212529;
			text-align: left;
			background-color: #fff;
		}
		.container {
			width: 100%;
			padding-right: 15px;
			padding-left: 15px;
			margin-right: auto;
			margin-left: auto;
		}
		.content img{
			text-align: center;
		}
		.content{
			text-align: center;
			padding: 7rem 0;
		}
	</style>
</head>
<body>
	<div class="container content">
		<img src="webplogo.png" class="webplogo">
		<p>
			WebP is a modern image format that provides superior lossless and lossy compression for images on the web. 
		Using WebP, webmasters and web developers can create smaller, richer images that make the web faster.
		</p>

		<a href="?convertwebp=1">Convert Image</a>
		
	</div>
</body>
</html>