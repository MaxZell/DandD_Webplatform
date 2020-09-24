</!DOCTYPE html>
<head>
  <title>Fragebogen</title>
<?php
  //importiert Bootstrap 4.5.0 und unsere CSS Datei.
  include "style.html";
  ?>
  </head>
  <body>
<h1>Politischer Kompass Fragebogen</h1>
  <form action="resultprocessing.php" method="post">

  <div id="Rand">
  <fieldset id="group1">
    
    <h3>Frage 1</h3>
    <!-- Pro freier Markt -->
    <label>Je freier der Markt, desto freier der Mensch.</label><br>
    <p><input type="radio" value="1,0" name="group1" required > Trifft zu</p>
    <p><input type="radio" value="-5,0" name="group1" required > Trifft nicht zu</p>
  </fieldset>
</div>
<br>
    <div id="Rand">
  <fieldset id="group2">
    <h3>Frage 2</h3>
    <!-- Pro Neo Darvinismus -->
    <label><h4>Gewisse Menschen sind besser, wegen ihrer Rasse/Nationalität/Ethnie</h4></label><br>
    <p><input type="radio" value="2,0" name="group2" required > Trifft komplett zu</p>
    <p><input type="radio" value="1,0" name="group2" required > Trifft teilweise zu</p>
    <p><input type="radio" value="-1,0" name="group2" required > Trifft gar nicht zu</p>
  </fieldset>
</div>
<br>
    <div id="Rand">
  <fieldset id="group3">
    <h3>Frage 3</h3>
    <!-- Links oder Rechts -->
    <label><h4>Welches politische System von diesen drei Ländern spricht Sie mehr an?</h4></label><br>
    <p>USA - Wenig staatlicher Eingriff in die Wirtschaft<br>
    Kuba - Planwirtschaft<br>
    China - Planwirtschaft mit eingeschränkten Markt
    </p>
    <p><input type="radio" value="5,-5" name="group3" required > USA </p>
    <p><input type="radio" value="-2,0" name="group3" required > Kuba </p>
    <p><input type="radio" value="-1,1" name="group3" required > China</p>
  </fieldset>
    </div>
    <br>
    <div id="Rand">
  <fieldset id="group4">
    <h3>Frage 4</h3>
    <!-- Faschisten und Kapitalisten für den Imperialismus -->
    <label><h4>Kriege sind Sinnvoll für unsere Wirtschaft und sollten weiterhin geführt werden.</h4></label><br>
    <p><input type="radio" value="2,0" name="group4" required > Trifft komplett zu</p>
    <p><input type="radio" value="1,0" name="group4" required > Trifft teilweise zu</p>
    <p><input type="radio" value="-2,0" name="group4" required > Trifft gar nicht zu</p>
  </fieldset>
    </div>
    <br>
    <div id="Rand">
  <fieldset id="group5">
    <h3>Frage 5</h3>
    <!-- Faschisten und Kapitalisten für den Imperialismus -->
    <label><h4>Sind die Interessen des Individuums wichtiger, oder die des Kollektives?</h4></label><br>
    <p>Individualismus:<br>
    Ich bin selbst für meine Sicherheit verantwortlich.<br>
    Ich brauche keinen Staat, der mir vorschreibt wie ich mein Geld investiere.<br>
    Wenn ich einen Unfall habe, dann zahle ich diesen selber. Dafür muss ich keine Krankenkasse zahlen.
    Ich entscheide was das beste für mich ist.<br>
    Wer ein schlechtes Leben hat ist selbst schuld.</p><br>

    <p>Kollektivismus:<br>
    Der Staat ist für unsere Sicherheit verantwortlich.<br>
    Wir brauchen einen Staat, der alle finanziell mittragen kann. <br>
    Dafür geben wir von unserem Geld ab.<br>
    Wenn ich einen Unfall habe, bin ich finaziell gedeckt, da ich diesen Schaden nicht alleine zahlen muss.<br>
    Wir zusammen entscheiden was für uns am besten ist. <br>
    Wer ein schlechtes Leben hat ist nicht unbedingt selbst schuld.</p>

    <p><input type="radio" value="0,-2" name="group5" required > Das Individuum</p>
    <p><input type="radio" value="0,2" name="group5" required > Das Kollektiv</p>
  </fieldset>
    </div>
    <br>
    <div id="Rand">

  <fieldset id="group6">
    <h3>Frage 6</h3>
    <!-- Anarcho Kapitalismus oder Anarcho Kommunismus -->
    <label><h4>Der Staat gehört sofort abgeschafft!</h4></label><br>
    <p>Beispiel: Die Menschen können sich jetzt viel besser ohne den Staat organisieren.</p>
    <p><input type="radio" value="5,0" name="group6" required > Trifft zu</p>
    <p><input type="radio" value="0,5" name="group6" required > Trifft nicht zu</p>
  </fieldset>
      </div>
<br>
    <div id="Rand">
  <fieldset id="group7">
    <h3>Frage 7</h3>
    <!-- Mehr Staat, weniger Staat -->
    <label><h4>Was sich in den Schlafzimmern abspielt, sollte der Staat entscheiden können.</h4></label><br>
    <p><input type="radio" value="0,2" name="group7" required > Trifft zu</p>
    <p><input type="radio" value="0,-2" name="group7" required> Trifft nicht zu</p>
  </fieldset>  
</div>
 <br>
 <div id="Rand">

  <fieldset id="group8">
    <h3>Frage 8</h3>
    <!-- Links oder Rechts-->
    <label><h4>Sollte das System der Klassen abgeschafft werden?</h4></label><br>
    <p>Beispiel: Der, der seine Arbeitskraft verkauft und der, der sie kauft und dadurch profitiert.</p>
   <p><input type="radio" value="-5,0" name="group8" required> Ja</p>
   <p><input type="radio" value="5,0" name="group8" required > Nein</p>
  </fieldset>  
 </div>
 <br>
 <div id="Rand">

  <fieldset id="group9">
    <h3>Frage 9</h3>
    <!-- Demokratie Faschismus oder nicht -->
    <label><h4>Ist Demokratie gut und wichtig?</h4></label><br>
    <p>Beispiel: Der demokratische Entscheid der Bevölkerung, statt einer Minderheit, welche alles bestimmt.</p>
    <p><input type="radio" value="0,0" name="group9" required > Ja</p>
    <p><input type="radio" value="5,2" name="group9" required > Nein</p>
  </fieldset>  
 </div>
 <br>
 <div id="Rand">

  <fieldset id="group10" >
    <h3>Frage 10</h3>
    <!-- Staatlicher Eingriff -->
    <label><h4>Sollte der Staat sich mehr in das alltägliche Leben einmischen? </h4></label><br>
    <p><input type="radio" value="0,5" name="group10" required> Ja</p>
    <p><input type="radio" value="0,-5" name="group10" required> Nein</p>
    <p><input type="radio" value="0,0" name="group10" required> Keine Ahnung</p>
  </fieldset>  
</div>
<br>
 <div id="Rand">

  <fieldset id="group11" >
    <h3>Frage 11</h3>
    <!-- Staatlicher Eingriff -->
    <label><h4>Sollte man Land kaufen und verkaufen können?</h4></label><br>
    <p><input type="radio" value="5,0" name="group11" required > Trifft komplett zu
    <p><input type="radio" value="3,0" name="group11" required > Trifft teilweise zu
    <p><input type="radio" value="-2,0" name="group11" required> Trifft gar nicht zu
  </fieldset> 
</div>
<br>
 <div id="Rand">

  <fieldset id="group12" >
    <h3>Frage 12</h3>
    <!-- Staatlicher Eingriff -->
    <label><h4>Sollte Cannabis für den persönlichen Bedarf legalisiert werden?</h4></label><br>
    <p><input type="radio" value="0,-2" name="group12" required> komplett </p>
    <p><input type="radio" value="0,2" name="group12" required > teilweise (Nur für medizinischen Gebrauch)</p>
    <p><input type="radio" value="0,3" name="group12" required > gar nicht</p>
  </fieldset> 
</div>
<br>
 <div id="Rand">

  <fieldset id="group13" >
    <h3>Frage 13</h3>
    <!-- Kapitalist oder nicht -->
    <label><h4> Was gut für die erfolgreichen Unternehmen ist, ist im Endeffekt gut für uns alle. </h4></label><br>
    <p><input type="radio" value="5,0" name="group13" required > komplett </p>
    <p><input type="radio" value="3,0" name="group13" required > teilweise</p>
    <p><input type="radio" value="5,0" name="group13" required > gar nicht</p>
  </fieldset> 
</div><br>
 <div id="Rand">


  <fieldset id="group14" >
    <h3>Frage 14</h3>
    <!-- Staatlicher Eingriff -->
    <label><h4>Sollte Abtreibung legal sein?</h4></label><br>
    <p><input type="radio" value="-5,0" name="group14"required> Ja </p>
    <p><input type="radio" value="5,5" name="group14" required> Nein</p>
  </fieldset> 
</div>
<br>
 <div id="Rand">

  <fieldset id="group15" >
    <h3>Frage 15</h3>
    <!-- Staatlicher Eingriff -->
    <label><h4>Sollten wir die Todesstrafe einführen?</h4></label><br>
    <p><input type="radio" value="0,3" name="group15" required > Ja auch für kleine Verbrechen</p>
    <p><input type="radio" value="0,2" name="group15" required > Nur für grausame Verbrechen wie z. B Kinder-Schänder/Mörder</p>
    <p><input type="radio" value="0,-3" name="group15" required> gar nicht</p>
  </fieldset> 
</div>
<br>
 <div id="Rand">

  <fieldset id="group16" >
    <h3>Frage 16</h3>
    <!-- Staatlicher Eingriff -->
    <label><h4>Wohltätigkeit ist besser geeignet als Sozialhilfe, um die wirklich Benachteiligten zu unterstützen</h4></label><br>
    <p><input type="radio" value="5,0" name="group16" required> Trifft zu</p>
    <p><input type="radio" value="3,0" name="group16" required> Trifft teilweise zu (Kombination aus beidem)</p>
    <p><input type="radio" value="-5,0" name="group16"required> Trifft gar nicht zu.</p>
  </fieldset> 
</div>
<br>
  <input type="Submit" value="Auswerten" name="Auswerten" class="btn w-100 mb-2" />
</form>
</body>
</html>