<?php
session_start();
require_once('./../dbConnector.php');
$dbConnector = new dbConnector();
$pdo = $dbConnector->getPdo();

$select = "select * from tbl_users where user_name = :UserName";

$stmt = $pdo->prepare($select);
$stmt->bindValue(":UserName", $_REQUEST["name"], PDO::PARAM_STR);
$result = $stmt->execute();
$resultFetched = $stmt->fetch();

if ($result) {
  if(password_verify($_REQUEST["pwd"], $resultFetched['user_password'])){
    $_SESSION["user_id"] = $resultFetched["user_ID"];
    $_SESSION["user_nickname"] = $resultFetched["user_name"];
    // user should not come back to login form and well after forward from login to interface 
    // https://stackoverflow.com/questions/15655017/window-location-js-vs-header-php-for-redirection
    header ("Location: ./../MainMenu.php");
  }else{
    // echo("wrong password");
    echo "<script>alert('wrong password'); window.history.back();</script>";
  }
}else {
  // trigger_error('Invalid query: ' . $conn->error);
  // echo "0 results";
  echo "<script>alert('0 results'); window.history.back();</script>";
}
// $conn->close();
?> 