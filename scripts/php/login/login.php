<?php
// Session start
session_start();

// Establish database connection
$user = "root";
$pw = "";
$host = "localhost";
$database = "nne_dd";
$table = "tbl_users";
$meldung = "";

$conn = new mysqli($host, $user, $pw, $database);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM tbl_users WHERE user_name = '". $_REQUEST["name"] ."';";
$result = $conn->query($sql);
$resultFetched = $result->fetch_assoc();

if ($result->num_rows > 0) {
  if(password_verify($_REQUEST["pwd"], $resultFetched['user_password'])){
    $_SESSION["user_id"] = $resultFetched["user_ID"];
		$_SESSION["user_nickname"] = $resultFetched["user_name"];
    header ("Location: intern.php");
  }else{
    echo("wrong password");
  }
}else {
  trigger_error('Invalid query: ' . $conn->error);
  echo "0 results";
}
$conn->close();
?> 