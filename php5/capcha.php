<?php
$tm=md5(microtime());

$ran_str=substr($tm,0,4);

header('content-type:image/png');

$png_image=imagecreate(250,100);

imagecolorallocate($png_image,255,255,0);

$blue=imagecolorallocate($png_image,0,0,255);
$red=imagecolorallocate($png_image,255,0,0);
imageline($png_image,0,0,80,80,$blue);
imageline($png_image,200,0,50,80,$blue);
imagestring($png_image,5,100,50,$ran_str,$red);
imagepng($png_image);

imagedestroy($png_image);
?>