<?php
require_once 'gamer.php';


if (isset($_POST['nome'])) {
    $n = $_POST['nome'];
    $v = $_POST['nivel'];


    $g = new Gamer($n, $v);
    $g->salvar();

    echo "<h3> Gamer Cadastrado com sucesso!</h3>";
}

$lista = Gamer::listar();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        .card { border: 1px solid #ccc; padding: 10px; margin-bottom: 10px; border-radius: 5px; }
        input { padding: 5px; margin: 5px 0; }
        button { padding: 10px; cursor: pointer; background-color: #28a745; color: white; border: none; }
    </style>
</head>
<body>
        <h1>Cadastrar Jogador</h1>

        <form method="POST">
            <label for="Nome do Jogador:"></label><br>
            <input type="text" name="nome" required placeholder="Nome do jogador"><br>

            <label for="Nivel do jogador"></label><br>
            <input type="number" name="nivel" required placeholder="Nivel do jogador"><br>

            <button type="submit">Salvar no BANCO</button>
        </form>
        <hr>

        <h2>Lista de jogadores</h2>

        <?php
            foreach ($lista as $gamer) {
                echo "<div class='card'>";
                echo "<strong>Nome:</strong> " . $gamer['nome'] . "<br>";
                echo "<strong>Nível:</strong> " . $gamer['nivel']; // Arrumei o texto aqui ;)
                echo "</div>"; 
            }
        ?>
</body>
</html>