<?php

// $servername = "localhost";
// $username = "root";
// $password = "";

try {
  $conn = new PDO('mysql:host=localhost;dbname=todo', "root", "");
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connecté";
} catch(PDOException $e) {
  echo "Connection échouée: " . $e->getMessage();
}