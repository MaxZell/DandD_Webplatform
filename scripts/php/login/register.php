<?php
session_start ();

error_log("let`s start register");

// Datenbankverbindung aufbauen
$con = mysqli_connect ("localhost", "root", "");
if (!mysqli_select_db ($con,"nne_dd"))
{
  die ("No connection to database");
}

$nickname = mysqli_real_escape_string($con, $_POST['nickname']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$lastname = mysqli_real_escape_string($con, $_POST['lastname']);
$firstname = mysqli_real_escape_string($con, $_POST['firstname']);

$sql = "SELECT * FROM tbl_users WHERE (user_name = '$nickname')";
$result = mysqli_query($con, $sql);
if(mysqli_num_rows ($result) == 0){
	$error = 0;

	if($nickname == ""){
		$error = 1;
	}

	if($password == ""){
		$error = 1;
	}

	if($firstname == ""){
		$error = 1;
	}

	if($lastname == ""){
		$error = 1;
	}

	if($error != 0){
		header ("Location: register_form.php?error=1");
	}else{
		$hashPassword = md5($password);
		$sql = "INSERT INTO tbl_users (user_name, user_password) VALUES ('$nickname', '$hashPassword');";
		$result = mysqli_query($con, $sql);
		$sql = "SELECT * FROM tbl_users WHERE (user_name = '$nickname')";
		$result = mysqli_query ($con,$sql);


		if (mysqli_num_rows ($result) > 0)
		{
		// Benutzerdaten in ein Array auslesen.
		$data = mysqli_fetch_array ($result,MYSQLI_ASSOC);

		// Sessionvariablen erstellen und registrieren
		$_SESSION["user_id"] = $data["user_ID"];
		$_SESSION["user_nickname"] = $data["user_name"];
		// user_surname  = $data["Nachname"];
		// $_SESSION["user_prename"] = $data["Vorname"];

		header ("Location: intern.php");
		}
	}

}else{
	 header ("Location: register_form.php?registration=1");
}  	
?> 