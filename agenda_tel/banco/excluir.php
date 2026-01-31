<?php
require 'conexao_agenda.php';
require 'contato.php';


if (!empty($_GET['id'])) {
    
   
    $id_para_deletar = $_GET['id'];

    $contato = new Contato($pdo);

    
    $contato->deletarContato($id_para_deletar);
    

    
    header("Location: index.php");

} else {
    header("Location: index.php");
}

?>