<?php session_start (); ?>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="./styles/style.css" />
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
  <button onclick="login()">Login</button><br>
  <button onclick="register()">Register</button>
</form>

<!-- <img src="https://media.giphy.com/media/l0HlTy9x8FZo0XO1i/giphy.gif" alt="backgroundFire"> -->

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