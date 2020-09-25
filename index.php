<?php session_start (); ?>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="./styles/style.css" />
</head>

<body id="loginBody">
<?php
if (isset ($_REQUEST["error"]))
{
  echo "The access data are not valid." . "<br><br>";
}
?>
<form id="form" action="./scripts/php/login/login.php" method="post">
  <div id="inp"><span for="name">Name:</span> <input id="name" type="text" name="name"></div><br>
  <div id="inp"><span for="pwd">Password:</span> <input id="pwd" type="password" name="pwd"></div><br>
  <button id="nameB" onclick="login()">Login</button><br>
  <button id="pwdB" onclick="register()">Register</button>
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