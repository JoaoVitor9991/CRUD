<?php

require_once 'personagem.php';
require_once 'guerreiro.php';
require_once 'mago.php';

$thor = new Guerreiro("Thor", 12000);
$merlin = new Mago("Merlin", 9000, 10000);

$thor->gritoDeGuerra();
echo "<br>";
echo "<br>";
$merlin->soltarPoder();
echo "<br>";
echo "<br>";
$thor->receberDano(3500);
echo "<br>";
echo "<br>";
echo $thor->getVida();
echo "<br>";
echo "<br>";
$merlin->receberDano(3500);
echo "<br>";
echo $merlin->getVida();




$testeErro = new Personagem("ERRO", 100);

