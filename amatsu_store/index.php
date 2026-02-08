<?php

require_once 'eletronico.php';
require_once 'livro.php';

$livro = new Livro("Senhor dos anais", 100);
$mouse = new Eletronico("Gamer", 1000);

echo $livro->calcularPrecoFinal();
echo "<br>";
echo $mouse->calcularPrecoFinal();