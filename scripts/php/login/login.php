<?php
// Session start
session_start ();

// Establish database connection
$id = "root";
$pw = "";
$host = "localhost";
$database = "nne_dd";
$table = "tbl_users";
$meldung = "";

$con = mysqli_connect ($host, $id, $pw) or die ("cannot connect");
mysqli_select_db($con, $database) or die ("cannot select DB");

$sql = "SELECT ".
    "user_ID, user_name".
  "FROM ".
    "tbl_users ".
  "WHERE ".
    "(user_name like '".$_REQUEST["name"]."') AND ".
    "(user_password = '".password_hash($_REQUEST["pwd"], PASSWORD_DEFAULT)."')";
$result = mysqli_query ($con,$sql);


if (mysqli_num_rows ($result) > 0)
{
  // Reading user data into an array.
  $data = mysqli_fetch_array ($result,MYSQLI_ASSOC);

  // Create and register session variables. Check DB structure($data).
  $_SESSION["user_id"] = $data["user_ID"];
  $_SESSION["user_nickname"] = $data["user_name"];
  // $_SESSION["user_surname"] = $data["Nachname"];
  // $_SESSION["user_prename"] = $data["Vorname"];

  header ("Location: intern.php");
}
else
{
  header ("Location: form.php?error=1");
}
?> 