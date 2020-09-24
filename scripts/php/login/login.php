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

$conn = new PDO("mysql:host=$host;dbname=$database", $user, $pw);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $conn->prepare("SELECT user_password FROM tbl_users WHERE user_name = ". $_REQUEST["name"] ."");
$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$result = $stmt->fetch();
// $con = mysqli_connect($host, $id, $pw) or die ("cannot connect");
// mysqli_select_db($con, $database) or die ("cannot select DB");

// $sql = "SELECT user_password FROM tbl_users WHERE user_name = ". $_REQUEST["name"] .";";
// $result = mysqli_query($con, $sql);

// $sql = "SELECT 'user_ID', 'user_name' FROM 'tbl_users' WHERE 'user_name' LIKE '" .
//   $_REQUEST["name"] . "' AND 'user_password' = '" .
//   password_verify($_REQUEST["pwd"], $hash) . "';";
//   //SELECT 'user_ID', 'user_name' FROM 'tbl_users' WHERE 'user_name' LIKE 'admin' AND 'user_password' = '$2y$10$mkEeCIQizKxKxKogRRg.2OuMvL60Okhk6nPW9sb1x9N/9K6B
// $result = mysqli_query ($con, $sql);
error_log("1 " . strval($_REQUEST["pwd"]));
var_dump($result);
if (password_verify($_REQUEST["pwd"], $hash)){
  error_log("logged");
  // Reading user data into an array.
  // $data = mysqli_fetch_array ($result, MYSQLI_ASSOC);

  // // Create and register session variables. Check DB structure($data).
  // $_SESSION["user_id"] = $data["user_ID"];
  // $_SESSION["user_nickname"] = $data["user_name"];
  header ("Location: intern.php");
}
else{
  header ("Location: form.php?error=1");
}
?> 