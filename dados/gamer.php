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

       $sql = "INSERT INTO gamers (nome, nivel) values (:nome, :nivel)";

       $stmt = $pdo->prepare($sql);

       $stmt->bindValue(':nome', $this->nome);
       $stmt->bindValue(':nivel', $this->nivel);
       $stmt->execute();
    }

    public static function listar(){

        $pdo = Conexao::conectar();

       $sql = "SELECT * from gamers";

       $stmt = $pdo->query($sql);
       return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}