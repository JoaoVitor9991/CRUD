<?php

require_once 'personagem.php';
require_once 'atacante.php';
require_once 'guerreiro.php';
require_once 'mago.php';
require_once 'guilda.php';
require_once 'inventario.php';
require_once 'item.php';
require_once 'ninja.php';

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
echo "<br>";
echo "<br>";
$thor->atacar();
echo "<br>";
echo "<br>";
$merlin->atacar();

$guilda = new Guilda();
$guilda->adicionarMembros($thor);
$guilda->adicionarMembros($merlin);
echo "<br>";
echo "<br>";
echo "<h1>Membros da REVENGE: </h1>";
echo "<br>";
$guilda->listarMembros();

echo "<br> --- EXPULSÃO --- <br>";
$guilda->expulsarMembros("Thor");

echo "<br> --- LISTA ATUALIZADA --- <br>";
$guilda->listarMembros();
echo "<br>";
echo "<br>";
$inventario = new Inventario();
$potion = new Item("Potion");
$inventario->guardar($potion);
$inventario->listarItem();


$mochila = new Inventario();


$pocao = new Item("Pocao de Vida");
$espada = new Item("Espada Quebrada");


$mochila->guardar($pocao);
$mochila->guardar($espada);

echo "<h3>--- INVENTÁRIO INICIAL ---</h3>";
$mochila->listarItem();

echo "<h3>--- USANDO A POÇÃO ---</h3>";

$mochila->usarItem("Pocao de Vida"); 

echo "<h3>--- INVENTÁRIO FINAL ---</h3>";
$mochila->listarItem();




//$testeErro = new Personagem("ERRO", 100);




$lutador1 = new Ninja("Sub-Zero", 100, 100);
$lutador2 = new Ninja("Scorpion", 100, 100);

echo "<h1>FIGHT!</h1>";


while ($lutador1->getVida() > 0 && $lutador2->getVida() > 0) {
    
    
    $dano = rand(5, 15);
    $lutador2->receberDano($dano);
    
    echo "Sub-Zero bateu $dano! Scorpion ficou com " . $lutador2->getVida() . " de vida.<br>";

   
    if ($lutador2->getVida() <= 0) {
        break; 
    }

    
    $dano2 = rand(5, 15);
    $lutador1->receberDano($dano2); 

    echo "Scorpion revidou com $dano2! Sub-Zero ficou com " . $lutador1->getVida() . " de vida.<br>";
    
    echo "<hr>";
}

echo "<h1>A LUTA ACABOU!</h1>";
echo "Vencedor: " . ($lutador1->getVida() > 0 ? "Sub-Zero" : "Scorpion");
