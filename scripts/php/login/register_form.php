<?php session_start (); ?>
<html>
<head>
  <title>Registrierung</title>
</head>

<body>
<?php
if (isset ($_REQUEST["error"]))
{
  echo "Please, check all fields" .  "<br><br>";
}

if (isset ($_REQUEST["registration"]))
{
  echo "Bereits Registriert.";
}
?>
<form action="register.php" method="post">
    <div>Nickname:</div><input type="text" name="nickname" size="20"><br>
    <div>Password:</div><input type="password" name="password" size="20"><br>
	<br>
    <input type="submit" value="Register">
</form>
</body>
</html> 