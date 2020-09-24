<?php session_start (); ?>
<html>
<head>
  <title>Login</title>
</head>

<body>
<?php
if (isset ($_REQUEST["error"]))
{
  echo "The access data are not valid." . "<br><br>";
}
?>
<form id="form" action="./scripts/php/login/login.php" method="post">
  Name: <input type="text" name="name" size="20"><br>
  Password: <input type="password" name="pwd" size="20"><br>
  <button onclick="login()">Login</button>
  <button onclick="register()">Register</button>
</form>
<script>
function login(){
	document.getElementById("form").submit();
}
function register(){
	document.getElementById("form").action = "./scripts/php/login/register_form.php";
	document.getElementById("form").submit();
}
</script>
</body>
</html> 