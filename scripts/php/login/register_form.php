<?php session_start (); ?>
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" href="./../../../styles/style.css" />
  <link rel="shortcut icon" type="image/x-icon" href="./../../../d&d_logo_32x32.png" />
  <link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@531&display=swap" rel="stylesheet">
</head>
  <body id="registerBody">
  <?php
    if (isset ($_REQUEST["error"]))
    {
      echo "<script>alert('Sir, please check all fields');</script>";
    }

    if (isset ($_REQUEST["registration"]))
    {
      echo "<script>alert('Dear lord, secsessfully registered!');</script>";
    }
  ?>
    <div id="loginCotainer">
      <!-- <img src="https://media.giphy.com/media/l0HlTy9x8FZo0XO1i/giphy.gif" alt="fire" height="200px" z-index="-1"> -->
    <p id="title">Registration</p>
      <form id="form" action="register.php" method="post">
        <div id="inp"><span for="name">Name:</span> <input id="name" type="text" name="nickname"></div><br>
        <div id="inp"><span for="pwd">Password:</span> <input id="pwd" type="password" name="password"></div><br>
        <input id="pwdB" type="submit" value="Register">
      </form>
    </div>
  </body>
</html> 