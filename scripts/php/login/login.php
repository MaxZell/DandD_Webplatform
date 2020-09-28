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
    // user should not come back to login form and well after forward from login to interface 
    // https://stackoverflow.com/questions/15655017/window-location-js-vs-header-php-for-redirection
    header ("Location: ./../MainMenu.php");
    // exit; 
    ?>
    <!--<meta http-equiv="refresh" content="0;url=./../MainMenu.php"/>-->
    <!-- <script>window.location="./../MainMenu.php";</script> -->
    <!-- <script>window.location.replace("./../MainMenu.php") alert("ok");</script> -->
    <?php
  }else{
    echo("wrong password");
  }
}else {
  trigger_error('Invalid query: ' . $conn->error);
  echo "0 results";
}
$conn->close();
?> 