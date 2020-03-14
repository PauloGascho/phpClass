<?php

header("Content-Type: image/png");

$image = imagecreate(256, 256);

$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0, 0);

// renderiza uma string como imagem(imagem/local, numfont, posX, posY, "texto", color)
imagestring($image, 5, 60, 120, "Curso de PHP 7", $red);


//renderiza imagem na tela:
imagepng($image);

//destroi imagem na memoria:
imagedestroy($image);

?>