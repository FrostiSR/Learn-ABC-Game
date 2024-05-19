<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "abcworld";

$Gebruikernaam = isset($_POST["Gebruikernaam"]);
$conn = new mysqli ($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO gebruikers (Gebruikernaam)
  VALUES ('$Gebruikernaam')";

    if ($conn->query($sql)===TRUE) {
      echo "";
    } else {
      echo "Error: " .$sql. "<br>" . $conn->error;
    }

    $conn->close();
?>
