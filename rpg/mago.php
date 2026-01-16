<?php

class Mago extends Personagem {

    public function soltarPoder(){
        echo $this->getNome() . ": bola de FOGO!!!";
    }
}