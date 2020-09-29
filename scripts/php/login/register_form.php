<?php session_start (); ?>
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" href="./styles/style.css" />
  <link rel="shortcut icon" type="image/x-icon" href="./../../../d&d_logo_32x32.png" />
  <link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@531&display=swap" rel="stylesheet">
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
    <div id="loginCotainer">
    <label id="title">Registration</label>
      <form action="register.php" method="post">
          <div>Nickname:</div><input type="text" name="nickname" size="20"><br>
          <div>Password:</div><input type="password" name="password" size="20"><br>
        <br>
          <input type="submit" value="Register">
      </form>
    </div>
  </body>
</html> 