<html>
  <head>
    <title>Essai !!</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>Mon premier essai PHP</h1>

    <h2> Date d'aujourd'hui : </h2>
    <?php
    echo date("Y/m/d h:i:s");
    echo "<h2>Adresse IP client : </h2>";
    echo $_SERVER["REMOTE_ADDR"];
    ?>

    <h2>Message personnalisé</h2>
    <?php
    $day = date("w");
    $dayName = array("Dimanche","Lundi","Mardi",
    "Mercredi","Jeudi","Vendredi","Samedi");

    $currentDay = $dayName[$day];
    echo '<a href="https://fr.wikipedia.org/wiki/'.$dayName[$day].'" >Lien du jour : '.$currentDay.' </a>';
// Bof pas compris la question... 
    echo '<a href="http://mySite.com/essai.php?jour='.$day.'" >Lien 2 du jour : '.$currentDay.' </a>';
     ?>

  </body>
</html>
