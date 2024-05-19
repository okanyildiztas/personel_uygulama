<?php

session_start();

$md5=md5(rand(0,9999));

$dogrulamakodu = strtoupper(substr($md5,8,4));

$_SESSION["dogrulamakodu"] = $dogrulamakodu;

$en=75;
$boy=25;

$image = ImageCreate($en,$boy);

$beyaz = imagecolorallocate($image,255,255,255);
$siyah= imagecolorallocate($image,0,0,0);

imagefill($image,0,0,$beyaz);
imagestring($image,6,9,5,$_SESSION["dogrulamakodu"],$siyah);
header("Content-Type: image/jpeg");

imagejpeg($image);

imagedestroy($image);
exit();
?>