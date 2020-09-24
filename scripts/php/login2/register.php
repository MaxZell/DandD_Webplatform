<link rel="stylesheet" type="text/css" href=" ../../../styles/style.css">
<?php
session_start();

//Eingabe werden jegliche Tags entzogen um XSS zu verhindern.
$benutzername = strip_tags($_POST["new_bname"]);
$passwort = hash('sha512', strip_tags($_POST["new_psswd"]));
$Nachname = strip_tags($_POST["nname"]);
$Vorname = strip_tags($_POST["vname"]);

$BenutzerString = "Benutzer";
//Verbindung zur Datenbank wird aufgenommen.
include "DBConnector.php";


//Überprüft ob die Eingabe leer ist. Wenn ja wird der Benutzer zurück geschickt.
if (empty($_POST["new_bname"]) || empty($_POST["new_psswd"]) || empty($_POST["nname"]) || empty($_POST["vname"])) {
	$_SESSION["Registrationsstatus"] = "LEER";
    header("Location: ../../../index.php");
    exit();
}




//Holt Kontodaten von der Datenbank.
$Kontodaten_DB = "SELECT Benutzername, Passwort FROM kontodaten WHERE Benutzername='$benutzername'";
$Kontodaten_DB_gefetched = $conn->query($Kontodaten_DB);


//Wenn die geholten der Datenbank nicht vorhanden sind, 
//wird der Benutzer registriert.
if (mysqli_num_rows($Kontodaten_DB_gefetched) == 0) {
    
    echo "Existiert bis jetzt nicht.";
    echo $benutzername;
    
    $sqlNeuerBenutzer = "INSERT INTO kontodaten (Benutzername, Passwort, Privileg)
            VALUES ('$benutzername', '$passwort', '$BenutzerString')";
    
    if ($conn->query($sqlNeuerBenutzer) === TRUE) {

		$oldInsertedID = $conn->insert_id;
		//Nimmt die ID, die zuvor während dem Eintragen in die Datenbank automatisch generiert wurde
		//und verwendet diese, um auf den vorherigen Eintrag mit dem jetzigen zu refferenzieren. (Durch den FK).
		$sqlNeuePerson = "INSERT INTO person (Nachname, Vorname, Konto_ID_FK)
           VALUES ('$Nachname', '$Vorname', $oldInsertedID)";
           
        if ($conn->query($sqlNeuePerson) === TRUE) {
            $_SESSION["Registrationsstatus"] = "BENUTZER_WURDE_ERSTELLT";
            header("Location: ../../../index.php");
        }
    } else {
        echo "Benutzer konnte aus irgend einem Grund nicht erstellt werden.";
    }
} else {
    
    $_SESSION["Registrationsstatus"] = "BENUTZER_EXISTIERT_BEREITS";
    header("Location: ../../../index.php");
}

?>