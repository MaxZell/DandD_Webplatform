<?php

session_start();
if($_SESSION["Anmeldungsstatus"] == "JA"){


$X = $_SESSION["X"];
$Y = $_SESSION["Y"];

$Xresult = 450 + $X;
$Yresult = 450 - $Y;

header("Content-type: image/png");
$bild = imagecreatetruecolor(900, 900);
$color = imagecolorallocate($bild, 255, 0, 255);
imageFill($bild, 0, 0, $color);


$gelb = imagecolorallocate($bild, 128, 122, 0);
$gruen = imagecolorallocate($bild, 17, 128, 0);
$blau = imagecolorallocate($bild, 0, 111, 128);
$rot = imagecolorallocate($bild, 128, 0, 0);
// Viereck zeichen
// mit folgenden Kordinaten (x1, y1, x2, y2, Farbe);
imageFilledRectangle ($bild, 0, 0, 450, 450, $rot);
imageFilledRectangle ($bild, 450, 450, 900, 900, $gelb);
imageFilledRectangle ($bild, 0, 450, 450, 900, $gruen);
imageFilledRectangle ($bild, 450, 0, 900, 450, $blau);
 

$schwarz = imagecolorallocate($bild, 0, 0, 0);


//Erstellt ein Netz aus Rechtecke
for($i=0; $i<900; $i+=20) {
  imageRectangle ($bild, $i, 0, 20, 900, $schwarz);
}
for($i=0; $i<900; $i+=20) {
  imageRectangle ($bild, 0, $i, 900, 20, $schwarz);
}



$ball = imageColorAllocate($bild, 191, 0, 0); // Farbe für den Kreis (Insel) erstellen
imageFilledEllipse($bild, $Xresult, $Yresult, 20, 20, $ball); // X, Y, Breite, Höhe




// Ausgabe des Bildes
imagepng($bild);
}else{
	echo '<link rel="stylesheet" type="text/css" href="../style.css">';
	echo "<center><h1>403 Forbidden</h1><br></center><hr>";
}
?>
