<?php

class Mago extends Personagem {
    private $mana;

    public function soltarPoder(){
        if ($this->mana > 0){
        $this->mana -= 1900;
        echo $this->getNome() . ": bola de FOGO!!! " . $this->mana;
        } else {
            echo "Sem mana meu chapa! ";
        }
    }

    public function __construct($nome, $vida, $mana)
    {
        parent::__construct($nome, $vida);
        $this->mana = $mana;
    }

    public function getMana()
    {
        return $this->mana;
    }
}