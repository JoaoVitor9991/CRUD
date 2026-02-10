<?php

require_once 'conexao.php';

class Gamer {
    private $nome;
    private $nivel;

    public function __construct($nome, $nivel)
    {
        $this->nome = $nome;
        $this->nivel = $nivel;
    }

    public function salvar()
    {
       $pdo = Conexao::conectar();

       $sql = "INSERT INTO gamers (nome, nivel) values (?, ?)";
    }
}