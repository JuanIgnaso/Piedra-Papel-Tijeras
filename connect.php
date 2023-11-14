<?php
$servername = "localhost";
$username = "juan";
$password = "StrongFish91.";

try {
  $conn = new PDO("mysql:host=$servername;dbname=PiedraPapelTijerasDB", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?> 