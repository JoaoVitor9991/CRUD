<?php
require 'conexao.php';

// PEGA O ID QUE VEIO NO LINK (ex: deletar.php?id=5)
$id = $_GET['id']; 

try {
    $sql = "DELETE FROM personagens WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);

    // Redireciona de volta pra lista automaticamente!
    header("Location: listar.php"); 

} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>