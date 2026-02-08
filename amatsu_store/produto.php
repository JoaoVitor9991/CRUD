<?php

abstract class Produto {
    protected $nome;
    protected $precoBase;

    public function __construct($nome, $precoBase)
    {
        $this->nome = $nome;
        $this->precoBase = $precoBase;
    }

    abstract public function calcularPrecoFinal();
    

}