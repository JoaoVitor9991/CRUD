<?php

class Item {
    private $nome;

    public function __construct($nomeItem)
    {
        $this->nome = $nomeItem;
    }

    public function getNomeItem()
    {
        return $this->nome;
    }
}