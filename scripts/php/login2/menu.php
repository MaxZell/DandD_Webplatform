<?php
session_start();
include "DBConnector.php";
if($_SESSION["Anmeldungsstatus"] == "JA"){

//Die Personalien werden nach erfolgreichem Anmelden von der Datenbank geholt,
	//um den Benutzer zu begrüssen.
	$Konto_ID = $_SESSION["Konto_ID"];
	$Personalien_DB = "SELECT Vorname, Nachname, Person_ID FROM person WHERE Konto_ID_FK='$Konto_ID'";
	$Personalien_DB_gefetched = $conn->query($Personalien_DB);

	
	while($row = $Personalien_DB_gefetched->fetch_assoc()) {
			echo "<br><p>Willkommen zurück, " . $row["Vorname"] ." " . $row["Nachname"]. "!" . "</p>";
			echo "<hr>";
			$Person_ID = $row["Person_ID"];
		}
		$_SESSION["Person_ID"] = $Person_ID;
		include "content.php";


} else {
	echo '<link rel="stylesheet" type="text/css" href="../style.css">';
	echo "<center><h1>403 Forbidden</h1><br></center><hr>";

}

?>
