<?php
require_once 'gamer.php';

// --- CÉREBRO: RECEBER DADOS ---

// 1. SE ALGUÉM CLICOU EM "SALVAR"
if (isset($_POST['nome_novo'])) {
    $n = $_POST['nome_novo'];
    $v = $_POST['nivel_novo'];
    
    // Cria o gamer e salva
    $g = new Gamer($n, $v);
    $g->salvar();
    
    echo "<p style='color:green; text-align:center;'>✅ Gamer cadastrado!</p>";
}

// 2. SE ALGUÉM CLICOU EM "EXCLUIR" (A Mágica acontece aqui!)
if (isset($_POST['id_para_deletar'])) {
    $id = $_POST['id_para_deletar'];
    
    // Chama a função de deletar que criamos ontem
    Gamer::deletar($id); 
    
    echo "<p style='color:red; text-align:center;'>🗑️ Gamer deletado!</p>";
}

// --- SEMPRE BUSCAR A LISTA ATUALIZADA ---
$lista = Gamer::listar();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema Amatsu</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; max-width: 600px; margin: auto; padding: 20px; background-color: #f9f9f9; }
        
        h1, h3 { text-align: center; color: #333; }
        
        form.cadastro { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        input { width: 95%; padding: 10px; margin: 5px 0; border: 1px solid #ddd; border-radius: 4px; }
        button.salvar { width: 100%; padding: 10px; background-color: #28a745; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; }
        button.salvar:hover { background-color: #218838; }

        .card { 
            background: white;
            border-left: 5px solid #007bff; 
            padding: 15px; 
            margin-bottom: 10px; 
            border-radius: 4px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            display: flex; 
            justify-content: space-between; 
            align-items: center; 
        }

        /* O botão vermelho de excluir */
        .btn-del { background-color: #dc3545; color: white; border: none; padding: 8px 12px; border-radius: 4px; cursor: pointer; font-weight: bold; }
        .btn-del:hover { background-color: #c82333; }
    </style>
</head>
<body>

    <h1>Sistema de Gamers 🎮</h1>
    
    <form method="POST" class="cadastro">
        <h3>Novo Jogador</h3>
        <input type="text" name="nome_novo" required placeholder="Nome do Gamer">
        <input type="number" name="nivel_novo" required placeholder="Nível">
        <button type="submit" class="salvar">Salvar no Banco 💾</button>
    </form>

    <hr style="margin: 30px 0; border: 0; border-top: 1px solid #ccc;">

    <h3>Lista Atual:</h3>

    <?php foreach ($lista as $gamer): ?>
        
        <div class="card">
            <div>
                <strong style="font-size: 1.2em;"><?php echo $gamer['nome']; ?></strong> <br>
                <span style="color: #666;">Nível <?php echo $gamer['nivel']; ?></span>
            </div>

            <form method="POST">
                <input type="hidden" name="id_para_deletar" value="<?php echo $gamer['id']; ?>">
                
                <button type="submit" class="btn-del">X</button>
            </form>
        </div>

    <?php endforeach; ?>

</body>
</html>