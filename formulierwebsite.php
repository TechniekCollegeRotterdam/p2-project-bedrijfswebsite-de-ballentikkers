<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">
  <label for="fname">Voornaam:</label><br>
  <input type="text" id="voornaam" name="voornaam"><br>
  <label for="lname">Achternaam:</label><br>
  <input type="text" id="achternaam" name="achternaam">

  <br><label for="fname">E-Mail:</label>
  <br><input type="text" id="E-Mail" name="E-Mail">

  <br><label for="fname">Postcode:</label>
  <br><input type="text" id="Postcode" name="Postcode">

  <br>

  <br><label>Geslacht:</label> 
  <select id="Geslacht" name="Geslacht">
  <option value="man">Man</option>
  <option value="vrouw">Vrouw</option>
  <option value="ia">Iets anders</option>
  <option value="ziln">Zeg ik liever niet</option>
</select>
  <!-- <br><input type="radio" name="geslacht" value="Man"> Man
  <input type="radio" name="geslacht" value="Vrouw"> Vrouw <br> -->

  <br>

  <br><label>Wat is Goed:</label>
  <br><textarea name="g"></textarea>

  <br><label>Wat is niet Goed:</label>
  <br><textarea name="ng"></textarea>

  <br><label>Wat kan er beter:</label>
  <br><textarea name="wkeb"></textarea>

  <br><label>Goede Producten:</label>
  <br><textarea name="gp"></textarea>

  <br><label>Minder goede Producten:</label>
  <br><textarea name="mgp"></textarea>

  <br>

  <br><label>Cijfer:</label>
  <select id="Cijfer" name="Cijfer">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
</select>
  <!-- <br><input type="radio" name="cijfer" value="1"> 1
  <br><input type="radio" name="cijfer" value="2"> 2
  <br><input type="radio" name="cijfer" value="3"> 3
  <br><input type="radio" name="cijfer" value="4"> 4
  <br><input type="radio" name="cijfer" value="5"> 5 -->

  <br>

  <br><input type="submit" name="verzenden" value="verzenden">
</form>

<br>

<?php
if(isset($_POST['verzenden'])){
    echo 'Het formulier is verzonden!';
}
?>
</body>
</html>