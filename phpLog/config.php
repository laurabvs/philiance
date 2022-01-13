<?php

$servername = "localhost";
$database = "login";
$username = "root";
$password = "";
$charset = "utf8";

try {
$dsn = "mysql:host=$servername;dbname=$database;charset=$charset";
$pdo = new PDO($dsn, $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

return $pdo;
}

catch (PDOException $e){
echo 'Connection échouée: '. $e->getMessage();
}

?>