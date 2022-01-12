<?php
	session_start();
	
	$captcha_str = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz';
	$captcha_str = substr(str_shuffle($captcha_str), 0, 3);
	$_SESSION['code']=$captcha_str;
	
	//create the size of the image or blank image
	//$image = imagecreate(500, 300);
	$img_width=50;
	$img_height=30;
	$image = imagecreate($img_width, $img_height);
	$background_color = imagecolorallocate($image, 0, 153, 0);
	$text_color=imagecolorallocate($image, 255, 255, 255);
	
	imagestring($image, 5, 10, 10, $captcha_str, $text_color);
	header("Content-Type: image/png");
	imagepng($image);
	imagedestroy($image);
	
	?>
	