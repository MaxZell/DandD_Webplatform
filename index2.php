<?php
session_start();
//Überprüft ob der Benutzer bereits existiert.
	if($_SESSION["Registrationsstatus"] == "BENUTZER_EXISTIERT_BEREITS"){
		echo '<h3 style="color: red !important;">Dieser Benutzer existiert bereits.</h3>';
		session_destroy();
	}
//Überprüft ob der Benutzer erfolgreich erstellt wurde
	if($_SESSION["Registrationsstatus"] == "BENUTZER_WURDE_ERSTELLT") {
		echo '<h3 style="color: green !important;">Neuer Benutzer erstellt! Loggen Sie sich nun damit ein.</h3>';
		session_destroy();
	}
//Überprüft ob die Eingabe leer ist.
	if($_SESSION["Registrationsstatus"] == "LEER") {
		echo '<h3 style="color: red !important;">Bitte füllen Sie alle Felder aus!</h3>';
		session_destroy();
	}
	?>
</!DOCTYPE html>
<html>
<head>
	<title>Startseite</title>
	<?php
	//importiert Bootstrap 4.5.0 und unsere CSS Datei.
	include "scripts/php/login/style.html";
	?>
</head>
<body>
	<center>
<h2>Melden Sie sich an, oder Registrieren Sie sich!</h2>

<div class="Element_Registrierung"> 
<form action="scripts/php/login/register.php" method="POST" class="w-100">
  <label for="Benutzername">Username:</label><br>
  <input type="text" id="new_bname" name="new_bname" value="" class="form-control" required><br>
  <label for="Passwort">Passwort:</label><br>
  <input type="password" id="new_psswd" name="new_psswd" value="" class="form-control"required><br>
  <label for="Vorname">First name:</label><br>
  <input type="text" id="vname" name="vname" value="" class="form-control" required><br>
  <label for="Nachname">Last name:</label><br>
  <input type="text" id="nname" name="nname" value="" class="form-control" required><br><br>
  <input type="submit" value="Registrieren" class="btn w-100 mb-2">
</form> 
</div>
<br>

	<?php
	//Überprüft ob das Passwort stimmt
	if($_SESSION["Anmeldungsstatus"] == "PASSWORT_FALSCH"){
		echo '<h3 style="color: red !important;">Ihr Benutzername oder Ihr Passwort ist inkorrekt.</h3>';
		session_destroy();
	}

	?> 
	<div class="Element_Anmeldung">
<form action="scripts/php/login/login.php" method="POST">
  <label for="bname">Benutzername:</label><br>
  <input type="text" id="bname" name="bname" value="" class="form-control" required autofocus="true"><br>
  <label for="psswd">Passwort:</label><br>
  <input type="password" id="psswd" name="psswd" value="" class="form-control" required><br><br>
  <input type="submit" value="Einloggen" width="50px" id="einloggen" class="btn w-100 mb-2">
</form> 
</div>
</center>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>