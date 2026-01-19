<?php
require 'conexao.php';

$sql = "SELECT * FROM personagens";
$stmt = $pdo->query($sql);
$lista = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<h1>📋 Lista de Personagens</h1>";
echo "<a href='inserir.php'>➕ Criar Novo Personagem</a><br><br>"; // Link pra ir criar

foreach ($lista as $personagem) {
    echo "<hr>";
    echo "ID: " . $personagem['id'] . " | "; 
    echo "Nome: <strong>" . $personagem['nome'] . "</strong> | ";
    
    // O link de deletar aqui! Ele manda o ID pela URL
    echo " <a href='deletar.php?id=" . $personagem['id'] . "'>🗑️ Deletar</a>"; 
    echo "<br>";
}
?>