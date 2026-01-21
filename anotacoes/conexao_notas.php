<?php

$host = 'localhost';
$dbname = 'notas_db';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conectado";
} catch (PDOException $e) {
    echo "DEU MERDA" . $e->getMessage();
}

?>