<?php
  include 'server.php';
 ?>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="startscherm.php">
</head>

<body>
<div class="login-pagina">
<div class="form">
  <a href "registratie.php"><img class ="logo" src = "Logo_2.png"> </a>
  <div class = "text"> Registreren </div>
  <form class="registratie-form" method ="POST" action="../Start scherm/startscherm.php">
    <input type="text" name="Gebruikernaam" placeholder="Gebruikernaam"/>
    <button type ="submit">Opslaan</button>
  </form>

</div>
</div>

</body>
</html>
