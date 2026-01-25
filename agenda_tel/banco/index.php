<?php
require 'conexao_agenda.php';
require_once 'contato.php';

$meuContato = new Contato($pdo);

// --- AQUI ESTAVA FALTANDO! ---
// A gente precisa encher a variável $lista antes de usar lá embaixo
$lista = $meuContato->listar();
// -----------------------------
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Agenda Telefônica</title>
</head>
<body>
    <h1>Minha Agenda</h1>

    <form action="adicionar.php" method="POST">
        <input type="text" name="nome" placeholder="Nome da pessoa" required>
        <input type="text" name="numero" placeholder="Número" required>
        <button type="submit">Salvar</button>
    </form>

    <hr>

    <h2>Lista de Contatos</h2>

    <?php
    // Agora o $lista existe!
    foreach ($lista as $contato) {
        echo "Nome: " . $contato['nome'] . "<br>"; 
        echo "Telefone: " . $contato['numero_tel'] . "<br>";
        echo "<hr>";
    }
    ?>

</body>
</html>