<?php

require_once 'banco.php';
require_once 'item.php';


if (isset($_POST['nome'])){
    $n = $_POST['nome'];
    $p = $_POST['preco'];

    $item = new Item($n, $p);
    $item->salvar();
    header("Location: index.php");
    
}
if (isset($_POST['id_excluir'])) {
    $id = $_POST['id_excluir'];

    Item::deletar($id);

    echo "<p style='color:red; text-align:center;'>🗑️ Gamer deletado!</p>";
    exit();
}

   

 $lista = Item::listar();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .body{
            font-family: sans-serif;
            background-color: grey;

        }
        .cadastro{
            background: white;
            padding: 20px;
            border-radius: 4px;

        }
    </style>
</head>
<body class="body">
    <h1>Cadastrar item</h1>

    <form method="POST" class="cadastro">
        <h3>Novo item</h3>
        <input type="text" name="nome" required placeholder="Nome do item">
        <input type="number" name="preco" required placeholder="Preço do item">
        <button type="submit" class="salvar">Salvar no banco</button>
    </form>

    <?php foreach ($lista as $item):  ?>
        <div class="card-item">
            <div>
                <strong style="font-size: 1.2em;"><?php echo $item['nome']; ?></strong> <br>
                <span style="color: #666;">Nível <?php echo $item['preco']; ?></span>
            </div>

            <form method="POST">
                <input type="hidden" name="id_excluir" value="<?php echo $item['id']; ?>">

                <button type="submit" class="btn-del">DELETAR</button>
            </form>

        </div>
    <?php endforeach; ?>    
</body>
</html>

