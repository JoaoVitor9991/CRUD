<?php

$host = 'localhost';

$dbname = 'rpg_db';

$user = 'root';

$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "<h1> Conectado com sucesso no banco RPG! </h1>";
} catch (PDOException $e) {
    echo "<h1>❌ Deu erro na conexão:</h1>" . $e->getMessage();
}

?>