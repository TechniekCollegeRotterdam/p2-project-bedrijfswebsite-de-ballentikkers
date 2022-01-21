<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>De postcode</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header class="banner">
        <img src="image/logo.jpg" alt="logo" width="200" height="200">
        <?php   include 'navigatie.html'; ?>
    </header>
    <img src="image/ss_xmas_menu06.jpg" alt="sushi" class="responsive">

    <h1>Postcode van 3200 of hoger</h1>
    <p>Hier kun je zien welk postcode de klanten hebben.<br>
    De volgorde staat van de laagste naar de hoogste postcode nummer.</p>
    <br>


<?php 
//connection to a db// 
    require_once("dbconshabu.php");

    $query = $db->prepare("SELECT * FROM `client` WHERE postalcode > 3200 ORDER BY `client`.`postalcode` ASC");
    $query->execute();

    $resultq = $query->fetchALL(PDO::FETCH_ASSOC);

    foreach($resultq as $data) {
    echo " KlantID : " .$data['clientid'];
    echo "<br>";   
    echo " Naam : ". $data['name'];
    echo "<br>";  
    echo " telefoonnummer : ". $data['phone number'];
    echo "<br>";  
    echo " leeftijd : ". $data['age'];
    echo "<br>";  
    echo " Geslacht : ". $data['gender'];
    echo "<br>";  
    echo " Plaats : ". $data['place'];
    echo "<br>";  
    echo " Postcode : ". $data['postalcode'];
    echo "<br>";  
    echo "<br>";  
    }

?>


<footer>
    <p><i>Nieuwsstraat 210<br>
        3201 EE<br>
        Spijkenisse</i>
    </p>
  </footer>

</body>
</html>

</body>
</html>