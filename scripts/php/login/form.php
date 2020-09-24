<?php session_start (); ?>
<html>
<head>
  <title>Login</title>
</head>

<body>
<?php
if (isset ($_REQUEST["fehler"]))
{
  echo "Die Zugangsdaten sind ungueltig." . "<br><br>";
}
?>
<form id="form" action="login.php" method="post">
  Name: <input type="text" name="name" size="20"><br>
  Kennwort: <input type="password" name="pwd" size="20"><br>
  <button onclick="login()">Login</button>
  <button onclick="register()">Register</button>
</form>
<script>
function login(){
	document.getElementById("form").submit();
}
function register(){
	document.getElementById("form").action = "./register_form.php";
	document.getElementById("form").submit();
}
</script>
</body>
</html> 