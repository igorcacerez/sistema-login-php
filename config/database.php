<?php
// Váriaveis com os dados de conexão
$host = "localhost";
$user = "root";
$pass = "";
$db = "banco";

try {
    $conn = new PDO('mysql:host='. $host .';dbname=' . $db, $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}