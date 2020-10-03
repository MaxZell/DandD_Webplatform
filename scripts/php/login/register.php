<?php
session_start ();

// error_log("let`s start register");
require_once('./../dbConnector.php');
$dbConnector = new dbConnector();
$pdo = $dbConnector->getPdo();

$nickname = $_REQUEST["nickname"];
$password = $_REQUEST["password"];

$select = "select * from tbl_users where user_name = :UserName";
$stmt = $pdo->prepare($select);
$stmt->bindValue(":UserName", $nickname, PDO::PARAM_STR);
$result = $stmt->execute();
$resultFetched = $stmt->fetch();

// Datenbankverbindung aufbauen
/*
	$con = mysqli_connect ("localhost", "root", "");
	if (!mysqli_select_db ($con,"nne_dd"))
	{
	die ("No connection to database");
	}

	$nickname = mysqli_real_escape_string($con, $_POST['nickname']);
	$password = mysqli_real_escape_string($con, $_POST['password']);

	$sql = "SELECT * FROM tbl_users WHERE (user_name = '$nickname')";
	$result = mysqli_query($con, $sql);
*/
if($result){
	$error = 0;

	if($nickname == ""){
		$error = 1;
	}

	if($password == ""){
		$error = 1;
	}

	if($error != 0){
		header ("Location: register_form.php?error=1");
	}else{
		$hashPassword = password_hash($password, PASSWORD_DEFAULT);
		// error_log($hashPassword);//DELETE FROM tbl_users WHERE user_name='admin';
		/*
			$sql = "INSERT INTO tbl_users (user_name, user_password) VALUES ('$nickname', '$hashPassword');";
			$result = mysqli_query($con, $sql);
			$sql = "SELECT * FROM tbl_users WHERE (user_name = '$nickname')";
			$result = mysqli_query ($con,$sql);
		*/
		$select = "insert into tbl_users(user_name, user_password) values('$nickname', '$hashPassword')";
		// $select = "INSERT INTO tbl_users (user_name, user_password) VALUES ('$nickname', '$hashPassword')";
		$stmt = $pdo->prepare($select);
		$result = $stmt->execute();
		$resultFetched = $stmt->fetch();
		
		$select = "SELECT * FROM tbl_users WHERE (user_name = '$nickname')";
		$stmt = $pdo->prepare($select);
		$result = $stmt->execute();
		$resultFetched = $stmt->fetch();

		if ($result){
			$_SESSION["user_id"] = $resultFetched["user_ID"];
			$_SESSION["user_nickname"] = $resultFetched["user_name"];

			header ("Location: ./../MainMenu.php");
		}else{
			echo mysqli_error($result);
		}
	}

}else{
	 header ("Location: register_form.php?registration=1");
}  	
?> 