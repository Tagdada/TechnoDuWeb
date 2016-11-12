<html>
  <head>
    <title>Essai !!</title>
  </head>
  <body>
    <h1>Mon premier essai PHP</h1>

    <h2> Date d'aujourd'hui : </h2>
    <?php
    echo date("Y/m/d h:i:s");
    echo "<h2>Adresse IP client : </h2>";
    echo $_SERVER["REMOTE_ADDR"];
    ?>


  </body>
</html>
