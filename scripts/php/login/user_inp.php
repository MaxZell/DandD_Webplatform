<?php
// Definition der Benutzer
// 08.03.17 Umstellung auf mysqli-connector
$benutzer[0]["Nickname"] ="admin";
$benutzer[0]["Kennwort"] = "admin";
$benutzer[0]["Nachname"] = "Mustermann";
$benutzer[0]["Vorname"] = "Max";

$benutzer[1]["Nickname"] = "test";
$benutzer[1]["Kennwort"] = "abc";
$benutzer[1]["Nachname"] = "Kunze";
$benutzer[1]["Vorname"] = "Martin";

// Sie k�nnen an dieser Stelle beliebig viele Benutzer anlegen.
// Achten Sie dabei nur auf die Fortf�hrung der Nummer.

// Aufbau der Datenbankverbindung
$con  = mysqli_connect ("localhost", "root", "");
if (!mysqli_select_db ($con,"loginSystem"))
{
  die ("Keine Verbindung zur Datenbank");
}

// Zuerst alle Datens�tze l�schen um keine Dopplungen zu bekommen.
mysqli_query ($con,"DELETE FROM benutzerdaten");

// Daten aus obigem Benutzer - array auslesen
// und als einzelnen Datensaetze in der Datenbank abgespeichert
while (list ($key, $value) = each ($benutzer))
{
  // SQL-Anweisung erstellen
  $sql = "INSERT INTO ".
    "benutzerdaten (Nickname, Kennwort, Nachname, Vorname) ".
  "VALUES ('".$value["Nickname"]."', '".
                       md5 ($value["Kennwort"])."', '".
                       $value["Nachname"]."', '".
                       $value["Vorname"]."')";
  mysqli_query ($con,$sql);

  if (mysqli_affected_rows ($con) > 0)
  {
    echo "Benutzer erfolgreich angelegt.<br>\n";
  }
  else
  {
   echo "error beim Anlegen der Benutzer.<br>\n";
  }
}
?>