<?php

require_once 'banco.php';

class Item {
    private $nome;
    private $preco;

    public function __construct($nome, $preco)
    {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function salvar(){
        $pdo = Conexao::conectar();

        $sql = "INSERT INTO itens (nome, preco) VALUES (:nome, :preco)";

        $stmt = $pdo->prepare($sql);

        $stmt->bindValue(':nome', $this->nome);
        $stmt->bindValue(':preco', $this->preco);
        $stmt->execute();
    }

    public static function listar() {

        $pdo = Conexao::conectar();

        $sql = "SELECT * FROM itens";

        $stmt = $pdo->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}