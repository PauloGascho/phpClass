<?php

$image = imagecreatefromjpeg("certificado.jpg");

$tileColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

$font1 = "fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf";
$font2 = "fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf";

// imagettftext (varlocal, numfont, angfont, posX, posY, color, font, text)
imagettftext($image, 32, 0, 320, 250, $tileColor, $font1, "CERTIFICADO");
imagettftext($image, 32, 0, 375, 350, $tileColor, $font2, "Divanei Aparecido");
imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ").date("d/m/Y"), $tileColor);

header("Content-type: image/jpeg");

imagejpeg($image);

imagedestroy($image);

?>