<?php session_start (); ?>
<html>
<head>
  <title>Login D&D Game Platform</title>
  <link rel="stylesheet" href="./styles/style.css" />
  <link rel="shortcut icon" type="image/x-icon" href="d&d_logo_32x32.png" />
  <link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@531&display=swap" rel="stylesheet">
</head>
<body id="loginBody">
  <?php
    if (isset ($_REQUEST["error"])){
      echo "The access data are not valid." . "<br><br>";
    }
  ?>
  <div id="loginCotainer"><!--https://developer.mozilla.org/en-US/docs/Mozilla/Add-ons/WebExtensions/API/history/deleteAll-->
    <p id="title">Dungeons and Dragons</p>
    <form id="form" action="./scripts/php/login/login.php" method="post">
      <div id="inp"><span for="name">Name:</span> <input id="name" type="text" name="name"></div><br>
      <div id="inp"><span for="pwd">Password:</span> <input id="pwd" type="password" name="pwd"></div><br>
      <button id="nameB" onclick="login()">Login</button><br>
      <button id="pwdB" onclick="register()">Register</button>
    </form>
  </div>
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