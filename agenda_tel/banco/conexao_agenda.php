<?php 
$host = 'localhost';
$dbname = 'agenda_db';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conectado // <br><br><br><br>";
} catch (PDOException $e) {
    echo "Deu ruim " . $e->getMessage();
}

?>