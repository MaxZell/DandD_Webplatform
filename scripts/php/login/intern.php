<?php
include ("checkuser.php");
?>
<html>
<head>
  <title>Interne Seite</title>
</head>
<body>
  BenutzerId: <?php echo $_SESSION["user_id"]; ?><br>
  Nickname: <?php echo $_SESSION["user_nickname"]; ?><br>
  Nachname: <?php //echo user_surname ; ?><br>
  Vorname: <?php //echo $_SESSION["user_prename"]; ?>
  <hr>

  
  <a href="logout.php">Ausloggen</a>
  	  <a href="intern_artikel.php">Artikel</a> 
</body>
</html> 