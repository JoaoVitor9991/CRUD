<?php

require_once 'personagem.php';

$lutador1 = new Personagem("Sub-Zero", 100, 100);
$lutador2 = new Personagem("Scorpion", 100, 100);

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
?> 