<?php session_start (); ?>
<html>
<head>
  <title>Join Game</title>
  <link rel="stylesheet" href="./../../styles/style.css" />
  <link rel="shortcut icon" type="image/x-icon" href="./../../d&d_logo_32x32.png" />
  <link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@531&display=swap" rel="stylesheet">
</head>
    <body id="joinGameBody">
        <div id="container">
        <p id="title">Join Your Game Lord!</p>
        <button id="listB">Active Games</button><br>
        <button id="codeB">Game Code</button>
    <script>
        let listB = document.getElementById('listB');
        listB.addEventListener('click', function() {
            document.location.href = 'joinGame/activeGames.php';
        });
        let codeB = document.getElementById('codeB');
        codeB.addEventListener('click', function() {
            document.location.href = 'joinGame/gameCode.php';
        });
    </script>
    </body>
</html> 
