<?php

class Personagem {
    private $nome;
    private $vida;

    public function __construct($nome, $vida)
    {
        $this->nome = $nome;
        $this->vida = $vida;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getVida()
    {
        return $this->vida;
    }

    public function receberDano($dano)
    {
        $this->vida = $this->vida - $dano;

        if ($this->vida < 0) {
            $this->vida = 0;
        }
    }
}