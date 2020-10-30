
<html>
<head>
  <title>New Game</title>
  <link rel="stylesheet" href="./../../styles/style.css" />
  <link rel="shortcut icon" type="image/x-icon" href="./../../d&d_logo_32x32.png" />
  <link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@531&display=swap" rel="stylesheet">
</head>
  <body id="newGameBody">
    <div id="container">
	  
	  <form id="form" action="../php/backend/new_map.php" method="post" enctype="multipart/form-data">
        <table>  
          <tr>  
            <th><p id="title">Create New Game</p></th>
          </tr>
          <tr>  
            <th><p>Game name</p></th>
          </tr>
          <tr>
            <th><input id="name" type="text" name="name"></th>
          </tr>
          <tr>
            <th><p>Game map</p></th>
          </tr>
          <tr>
            <th>              
			  <input id="fileToUpload" style=""type="file" name="fileToUpload" onchange="loadFile(event)"><br>			  
			</th>
          </tr>
          <tr>
            <th><p>Map Preview</p></th>
          </tr>
          <tr>
            <th><img id="mapPreview" width="300" /></th>
          </tr>
          <tr>
            <th><input id="submitNewGame" type="submit" value="Create Game"></th>
          </tr>
        </table>
      </form>
    </div>
    <script>
    //https://www.webtrickshome.com/faq/how-to-display-uploaded-image-in-html-using-javascript
      var loadFile = function(event) {
        var image = document.getElementById('mapPreview');
        image.src = URL.createObjectURL(event.target.files[0]);
      };
    </script>
  </body>
</html> 
