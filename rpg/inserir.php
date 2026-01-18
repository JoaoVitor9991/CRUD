<?php

require_once 'conexao.php';

$nome = 'Merlin';
$vida = 10000;
$mana = 10000;
$classe = 'Mago';

try {
    $sql = "INSERT INTO personagens (nome, vida, mana, classe) VALUES (?, ?, ?, ?)";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([$nome, $vida, $mana, $classe]);

    echo "<h1>🧙‍♂️ Personagem criado com sucesso!</h1>";
} catch (PDOException $e) {
    echo "Erro ao inserir: " . $e->getMessage();
}


$sql = "SELECT * FROM personagens";

$stmt = $pdo->query($sql);

$lista = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<h1>📋 Lista de Personagens do Banco:</h1>";

foreach ($lista as $personagem) {
    echo "<hr>";
    echo "ID: " . $personagem['id'] . "<br>";
    echo "Nome: <strong>" . $personagem['nome'] . "</strong><br>";
    echo "Classe: " . $personagem['classe'] . "<br>";
    echo "Vida: " . $personagem['vida'] . " | Mana: " . $personagem['mana'] . "<br>";
}