<?php

require 'conexao_agenda.php';
require 'contato.php';

if (!empty($_POST['nome'])) {

    $contato = new Contato($pdo);

    $nome = $_POST['nome'];
    $numero = $_POST['numero'];

    $contato->adicionar($nome, $numero);

    header("Location: index.php");
    exit;
} else {
    header("Location: index.php");
    exit;
}
?>