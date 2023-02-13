<?php 
  $host = "localhost";
  $db = "agenda";
  $user = "root";
  $pass = "yourDbPass";

  try {
    $connection = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $erro) {
    $error = $erro->getMessage();
    echo "Erro: $error";
  }
?>