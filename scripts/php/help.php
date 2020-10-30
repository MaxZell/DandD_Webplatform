<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/x-icon" href="./../../d&d_logo_32x32.png" />
  <link rel="stylesheet" href="./../../styles/style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@531&display=swap" rel="stylesheet">
  <title>Help</title>
</head>
<body id="helpBody">
  <div id="container">
    <div id="text">
      <h2>Project description</h2>
      <p>This website is a platform for playing Dungeons&Dragons. All aspects of the game can be done online, on this platform,
        you no longer have to buy any hardware, and you don't risk getting yourself infected with the coronavirus when playing
        with your friends. This platform can make the lockdown much easier to bear.
      </p>
      <p>This website is the result of a school project, in which we were supposed to learn scrum.
        Since the goal of the project wasn't finishing the project, but how to get there, it might not be finished.
      </p>
      <h2>Rules</h2>
      <button id="showPDF" onclick="showPdf()">Rules of D&D</button>
    </div>
    
  </div>
  <object style="display:none;" id="helpPDF" data="../../rules/DnD_BasicRules_2018.pdf" type="application/pdf">
        <embed src="../../rules/DnD_BasicRules_2018.pdf" type="application/pdf" />
    </object>
  <script>
    function showPdf(){
      document.getElementById('helpPDF').style.display='block';
      document.getElementById('text').style.display='none';
      }
  </script>
</body>
</html>