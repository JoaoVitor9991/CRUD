<?php
require 'conexao.php';

// 1. Receber os dados que vieram do Formulário (pelo método POST)
// Atenção: Os nomes dentro dos colchetes [''] devem ser IGUAIS aos 'name' do formulário
$nome = $_POST['nome_digitado'];
$classe = $_POST['classe_escolhida'];
$vida = $_POST['vida_digitada'];
$mana = $_POST['mana_digitada'];

try {
    // 2. Preparar a inserção (Igualzinho antes)
    $sql = "INSERT INTO personagens (nome, classe, vida, mana) VALUES (?, ?, ?, ?)";
    
    $stmt = $pdo->prepare($sql);
    
    // 3. Executar com as variáveis que vieram do formulário (não mais fixas!)
    $stmt->execute([$nome, $classe, $vida, $mana]);
    
    // 4. Redirecionar para a lista (pra você ver o resultado)
    header("Location: listar.php");

} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>