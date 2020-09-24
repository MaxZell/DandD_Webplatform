<title>RESULTAT</title>
<link rel="stylesheet" type="text/css" href="results.css" media="screen" />
<?php
	//importiert Bootstrap 4.5.0 und unsere CSS Datei.
	include "style.html";
session_start();
if($_SESSION["Anmeldungsstatus"] == "JA"){

	$Punkte1 = strip_tags($_POST["group1"]);
	$Punkte2 = strip_tags($_POST["group2"]);
	$Punkte3 = strip_tags($_POST["group3"]);
	$Punkte4 = strip_tags($_POST["group4"]);
	$Punkte5 = strip_tags($_POST["group5"]);
	$Punkte6 = strip_tags($_POST["group6"]);
	$Punkte7 = strip_tags($_POST["group7"]);
	$Punkte8 = strip_tags($_POST["group8"]);
	$Punkte9 = strip_tags($_POST["group9"]);
	$Punkte10 = strip_tags($_POST["group10"]);
	$Punkte11 = strip_tags($_POST["group11"]);
	$Punkte12 = strip_tags($_POST["group12"]);
	$Punkte13 = strip_tags($_POST["group13"]);
	$Punkte14 = strip_tags($_POST["group14"]);
	$Punkte15 = strip_tags($_POST["group15"]);
	$Punkte16 = strip_tags($_POST["group16"]);
	include "splitter.php";

	$X = $P1_X + $P2_X + $P3_X + $P4_X + $P5_X + $P6_X + $P7_X + $P8_X + $P9_X + $P10_X + $P11_X + $P12_X + $P13_X + $P14_X + $P15_X + $P16_X;

	$Y = $P1_Y + $P2_Y + $P3_Y + $P4_Y + $P5_Y + $P6_Y + $P7_Y + $P8_Y + $P9_Y + $P10_Y + $P11_Y + $P12_Y + $P13_Y + $P14_Y + $P15_Y + $P16_Y;

	$ausgerechnetesX = $X * 10;
	$ausgerechnetesY = $Y * 10;

	$_SESSION["X"] = $ausgerechnetesX;
	$_SESSION["Y"] = $ausgerechnetesY;
}
else{
	header("Location: forbidden.php");
}
?>

<h1>Farbenerklärung</h1>
<div><div class='box red'></div><p> Autoritär Links</p></div>
<br>
<div><div class='box blue'></div><p> Autoritär Rechts</p></div>
<br>
<div><div class='box green'></div><p> Liberal Links</p></div>
<br>
<div><div class='box yellow'></div><p> Liberal Rechts</p></div>

<p>Wenn Sie nun Autoritär sind, bedeutet dies nicht unbedingt, dass Sie gegen Demokratie sind.<br>
Es beudetet nur, dass Sie einen starken Staat möchten.<br>
<br>
Falls Sie nun eher Liberal sind, beudetet das, dass Sie einen schwachen Staat bevorzugen.</p>
<br>



<?php
//Damit die Speicherfunktion nicht misbraucht wird.
if($_SESSION["Resultat_Gespeichert"] == "JA"){

	echo "<p><br><br>Resultat wurde bereits gespeichert. <br>
	
	ACHTUNG! Vergessen Sie nicht ein Foto von Ihrem Resultat zu machen.<br>
	Diese Webseite ist noch im Aufbau und Sie können Ihr Resultat nicht jederzeit abrufen.
	<br>
	Vielen Dank für Ihr Verständnis!

	<br><br>
	Sie können sich nun Abmelden</p>";

	echo '
	<form action="signout.php" method="POST" >
	<input type="submit" value="Abmelden" class="btn btn-primary mb-2">
	</form>
	';
} else {
	echo '
<form action="save.php" method="POST" >
<input type="submit" value="Resultat speichern" class="btn btn-primary mb-2">
</form>';
}


?>
<iframe
   src="diagramm.php"
   width="100%" 
   height="100%">
   	<title>Diagramm</title>

   </iframe>
<form method="POST" action="login.php" >
<input type="Submit" value="Zurück" name="Zurück" class="btn w-100 mb-2" />
</form>