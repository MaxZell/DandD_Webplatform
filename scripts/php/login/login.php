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
$sql = "SELECT user_password FROM tbl_users WHERE user_name = '". $_REQUEST["name"] ."';";
$result = $conn->query($sql);
$hash = $result->fetch_assoc();

if ($result->num_rows > 0) {
  if(password_verify($_REQUEST["pwd"], $hash['user_password'])){
    echo("OK");//add main menu
  }else{
    echo("wrong password");
  }
}else {
  trigger_error('Invalid query: ' . $conn->error);
  echo "0 results";
}
$conn->close();
?> 