<?php

class Guerreiro extends Personagem implements Atacante {

    public function gritoDeGuerra()
    {
        Echo $this->getNome() . " : Hoje nós jantaremos no INFERNO ";
    }

    public function atacar()
    {
        echo $this->getNome() . " Corta o ar com seu MARTELO. ";
    }
}