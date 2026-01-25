<?php

class Contato {
    private $pdo;

    public function __construct($conexao)
    {
        $this->pdo = $conexao;
    }

    public function adicionar($nome, $numero) 
    {
        $sql = "INSERT into contatos (nome, numero_tel) values (?, ?)";

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute([$nome, $numero]);
    }
}