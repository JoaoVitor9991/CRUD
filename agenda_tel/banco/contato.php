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

    public function listar()
    {
        $sql = "SELECT * from contatos ";

        $stmt = $this->pdo->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}