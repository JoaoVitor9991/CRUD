<?php


require_once 'conta_corrente.php';
require_once 'conta_poupanca.php';

$corrente = new ContaCorrente('Amatsu', 1000);
$poupe = new ContaPoupanca("Anira", 100);

$corrente->sacar(800);
echo "<br>";
echo "<br>";
$poupe->aplicarRendimento();
echo "<br>";
echo "<br>";
echo $corrente->verSaldo();
echo "<br>";
echo $poupe->verSaldo();