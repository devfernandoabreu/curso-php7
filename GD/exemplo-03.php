<?php 

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagettftext($image, 32, 0, 320, 250, $titleColor, "fonts/Bevan/Bevan-Regular.ttf", "CERTIFICADO");
imagettftext($image, 32, 0, 355, 350, $titleColor, "fonts/Playball/Playball-Regular.ttf", "Fernando Abreu");
imagestring($image, 3, 400, 370, utf8_decode("Concluído em: ") .date("d/m/Y"), $titleColor);

header("Content-type: image/jpeg");

imagejpeg($image);

imagedestroy($image);

?>