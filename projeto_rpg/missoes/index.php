<?php

require_once 'banco.php';
require_once 'missoes.php';

if (isset($_POST['titulo'])){
    $t = $_POST['titulo'];
    $d = $_POST['descricao'];
    $r = $_POST['recompensa'];

    $missao = new Missao($t, $d, $r);
    $missao->salvar();
    

}

if (isset($_POST['id_excluir'])){
    $id = $_POST['id_excluir'];

    Missao::deletar($id);
    header("Location: index.php");
    echo "<p style='color:red; text-align:center;'>🗑️ Missão deletada!</p>";
    exit();
}

$listar = Missao::listar();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Missões</title>
</head>
<body>
    <h1>Cadastrar MISSÕES</h1>

    <form method="POST" class="cadastros">
        <h3>Nova missão</h3>
        <input type="text" name="titulo" required placeholder="Nome da missão">
        <input type="number" name="recompensa" required placeholder="VALOR DA RECOMENSA">
        <textarea name="descricao"></textarea>
        <button type="submit" class="enviar">Enviar</button>
    </form>

    <?php foreach ($listar as $l): ?>
        <div>
            <strong><?php echo $l['titulo']; ?></strong>
            <br>
            <span>Descrição <?php echo $l['descricao']; ?></span>
            <strong>Recompensa <?php echo $l['recompensa']; ?></strong>
        </div>

        <form method="POST">
            <input type="hidden" name="id_excluir" value="<?php echo $l['id']; ?>">

            <button type="submit" class="btn-del">DELETAR MISSÃO</button>
        </form>
    <?php endforeach; ?>    
</body>
</html>