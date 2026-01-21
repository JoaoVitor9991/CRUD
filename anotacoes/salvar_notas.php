<?php
require 'conexao_notas.php';

try {
    $texto_recebido = $_POST['texto_nota'];

    $sql = "INSERT INTO anotacoes (texto) VALUES (?)";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([$texto_recebido]);

    echo "Nota salva com sucesso";
} catch (PDOException $e) {
    echo "ERRO " . $e->getMessage();
}

?>