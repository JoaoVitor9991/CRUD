<?php

require 'conexao_agenda.php';
require_once 'contato.php';

$meuContato = new Contato($pdo);

//$meuContato->adicionar("Amatsu", "9269-6969");
$lista = $meuContato->listar();

foreach ($lista as $contato) {
    echo "Nome: " . $contato['nome']. "<br>";

    echo "Telefone: " . $contato['numero_tel'] . "<br>";

    echo "<hr>";
}
//print_r($lista);
//echo "</pre>";