<?php
//importiert Bootstrap 4.5.0 und unsere CSS Datei.
include "style.html";

session_start();


if($_SESSION["Anmeldungsstatus"] == "JA"){

$X = $_SESSION["X"];
$Y = $_SESSION["Y"];

$Person_ID = $_SESSION["Person_ID"];

include "DBConnector.php";

$sqlResultatSpeichern = "INSERT INTO resultate (X, Y, Person_ID_FK)
           VALUES ($X, $Y, $Person_ID)";

        if ($conn->query($sqlResultatSpeichern) === TRUE) {
            
            $_SESSION["Resultat_Gespeichert"] = "JA";
            header("Location: resultprocessing.php");
        } else {


        	echo '<!doctype html>
	        <head>
	        <title>
	        Abspeicherungserror</title>

	        </head>
	        <body>
	        <p>Sie haben für diesen Test bereits das Resultat abgespeichert.
	        	<br> Für ein neuen Test, benötigen Sie ein neues Konto.</p>
	        	</body>
	        	</html>
	        	<br>
	        	<form method="POST" action="resultprocessing.php" >
	        	  <input type="Submit" value="Zurück" name="Zurück" class="btn w-100 mb-2" />
	        	  </form>

	        	';
        }
}else{
	echo '<link rel="stylesheet" type="text/css" href="../style.css">';
	echo "<center><h1>403 Forbidden</h1><br></center><hr>";
}




?>