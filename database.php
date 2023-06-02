<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'registro_de_usuarios';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>