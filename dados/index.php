<?php

require_once 'gamer.php';

//$n = new Gamer("Amatsu", 100);

//$n->salvar();
echo "Game salvo";

echo "<br>";

$l = Gamer::listar();

echo "<h1> Lista de Jogadores </h1>";

foreach ($l as $gamer) {
    echo "<hr>";

    echo "Nome: " . $gamer['nome'] . "<br>";
    echo "Nome: " . $gamer['nivel'] . "<br>";
}