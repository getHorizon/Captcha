<?php
session_start();

draw(3);
exit;

function draw($l) {
  $hash = md5(rand(0,999));
  $code = substr($hash, 15, $l);
  $_SESSION["CAPTCHACODE"] = $code;
  $im = imagecreate(80, 25);
  $bg = imagecolorallocate($im, 255, 255, 255);
	$textcolor = imagecolorallocate($im, 0, 101, 244);
  ImageString($im, 5, 20, 8, $code, $textcolor); 
  header("Content-Type: image/jpeg"); 
  ImageJpeg($im);
  ImageDestroy($im); 
}
