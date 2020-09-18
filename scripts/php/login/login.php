<title>FRAGEN</title>
<head>
<title>Startseite</title>
<?php
	//importiert Bootstrap 4.5.0 und unsere CSS Datei.
	include "style.html";
	?>
</head>
<?php
//Hasht Eingabe und entfernt gefährlichen Code.
$benutzername = strip_tags($_POST["bname"]);
$passwort = hash('sha512', strip_tags($_POST["psswd"]));

session_start();


//Verbindung zur Datenbank wird aufgenommen.
include "DBConnector.php";


//Holt Daten nur, wenn das gehashte Passwort, mit dem auf der Datenbank übereinstimmt und der Benutzername existiert.
$Kontodaten_DB = "SELECT Konto_ID, Benutzername, Passwort FROM kontodaten WHERE Benutzername='$benutzername' AND Passwort='$passwort'";
		$Kontodaten_DB_gefetched = $conn->query($Kontodaten_DB);

	while($row = $Kontodaten_DB_gefetched->fetch_assoc()) {
		$Konto_ID = $row["Konto_ID"];
	}

//Wenn die geholten der Datenbank nicht vorhanden sind, 
//wird der Benutzer ins Home zurück geschickt.
if (mysqli_num_rows($Kontodaten_DB_gefetched)==0) { 

	$_SESSION["Anmeldungsstatus"] = "PASSWORT_FALSCH";
	header("Location: ../home.php");
  	exit();
}else{
	$_SESSION["Anmeldungsstatus"] = "JA";
	$_SESSION["Konto_ID"] = $Konto_ID;

	if($_SESSION["Resultat_Gespeichert"] == "JA"){
	echo '
	<h1>Sie haben den Test bereits gemacht.</h1>

	<form action="signout.php" method="POST" >
	<input type="submit" value="Abmelden" class="btn btn-primary mb-2">
	</form>
	';
	}

	// Wenn ich mal hier weiter arbeiten will, kann ich hier das Resultat anzeigen lassen.
	else{

	include "menu.php";
	}
}

?>
