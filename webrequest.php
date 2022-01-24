<?php

$image = imagecreatetruecolor(1, 1);
$color = imagecolorallocate($image, 255, 255, 255); 

imagesetpixel($image, 0, 0, $color);  

header('Content-Type: image/png');
imagepng($image);
