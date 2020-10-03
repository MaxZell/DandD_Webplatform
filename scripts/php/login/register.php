<?php
session_start ();

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
		
		$select = "insert into tbl_users(user_name, user_password) values('$nickname', '$hashPassword')";
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
		}
	}
}else{
	 header ("Location: register_form.php?registration=1");
}  	
?> 