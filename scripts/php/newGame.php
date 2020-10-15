<?php session_start (); ?>
<html>
<head>
  <title>New Game</title>
  <link rel="stylesheet" href="./../../styles/style.css" />
  <link rel="shortcut icon" type="image/x-icon" href="./../../d&d_logo_32x32.png" />
  <link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@531&display=swap" rel="stylesheet">
</head>
  <body id="newGameBody">
    <div id="container">
      <p id="title">Create New Game</p>
      <form id="form" action="../php/backend/new_map.php" method="post" enctype="multipart/form-data">
        <p>Game name</p>
        <input id="name" type="text" name="name"><br>
        <p>Game map</p>
        <input id="map" type="file" name="map"><br>
        <p>Map Preview</p>
        <canvas id="mapPreview" height="300" width="auto" on></canvas><br>
        <input id="submitNewGame" type="submit" value="Create Game">
      </form>



    </div>
    <div id="mapOverlay" style="display:none"></div>
    <script>
    /*
      canvas.addEventListener('click', function showOverlay(){
        /*
        https://stackoverflow.com/questions/10906734/how-to-upload-image-into-html5-canvas
        https://developer.mozilla.org/ru/docs/Web/API/Canvas_API/Tutorial/%D0%98%D1%81%D0%BF%D0%BE%D0%BB%D1%8C%D0%B7%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5_%D0%B8%D0%B7%D0%BE%D0%B1%D1%80%D0%B0%D0%B6%D0%B5%D0%BD%D0%B8%D0%B9
        http://jsfiddle.net/influenztial/qy7h5/
        save image into database php
        https://www.geeksforgeeks.org/html-canvas-height-attribute/#:~:text=The%20HTML%20height%20Attribute,element%20in%20terms%20of%20pixels.&text=Attribute%20Values%3A%20It%20contains%20single,Default%20value%20which%20is%20150.
        javascript paste image to canvas change height
        https://stackoverflow.com/questions/2303690/resizing-an-image-in-an-html5-canvas
        https://stackoverflow.com/questions/23104582/scaling-an-image-to-fit-on-canvas
        https://stackoverflow.com/questions/9880279/how-do-i-add-a-simple-onclick-event-handler-to-a-canvas-element
        https://stackoverflow.com/questions/10257781/can-i-get-image-from-canvas-element-and-use-it-in-img-src-tag
        */
      });
      /*
      var imageLoader = document.getElementById('map');
      imageLoader.addEventListener('change', handleImage, false);
      var canvas = document.getElementById('mapPreview');
      var ctx = canvas.getContext('2d');

      function handleImage(e){
      var reader = new FileReader();
      reader.onload = function(event){
          var img = new Image();
          img.onload = function(){
            // canvas.height = "300px";
            //   canvas.width = "auto";
              // canvas.width = img.width;
              // canvas.height = img.height;
              ctx.drawImage(img,0,0, img.width,    img.height,     // source rectangle
                   0, 0, canvas.width, canvas.height);
          }
          img.src = event.target.result;
      }
      reader.readAsDataURL(e.target.files[0]);     
      }
      */
    </script>
  </body>
</html> 
