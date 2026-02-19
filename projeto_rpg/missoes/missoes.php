<?php
require_once 'banco.php';

class Missao {
    private $titulo;
    private $descricao;
    private $recompensa;
    private $id;

    public function __construct($titulo, $descricao, $recompensa, $id = null)
    {
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->recompensa = $recompensa;
        $this->id = $id;
    }

    public function salvar(){
        $pdo = Conexao::conectar();

        $sql = "INSERT INTO missoes (titulo, descricao, recompensa) values (:titulo, :descricao, :recompensa)";

        $stmt = $pdo->prepare($sql);

        $stmt->bindValue(':titulo', $this->titulo);
        $stmt->bindValue(':descricao', $this->descricao);
        $stmt->bindValue(':recompensa', $this->recompensa);
        $stmt->execute();
    }

    public static function listar(){
        $pdo = Conexao::conectar();

        $sql = "SELECT * FROM missoes";

        $stmt = $pdo->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function deletar($id){
        $pdo = Conexao::conectar();

        $sql = "DELETE FROM missoes where id = :id";

        $stmt = $pdo->prepare($sql);

        $stmt->bindValue(':id', $id);
        $stmt->execute();
    }

    public static function buscarPorId($id){
        $pdo = Conexao::conectar();

        $sql = "SELECT * FROM missoes WHERE id = :id";
        $stmt = $pdo->prepare($sql);

        $stmt->bindValue(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


    public function atualizar(){
        $pdo = Conexao::conectar();

        $sql = "UPDATE  missoes set titulo = :titulo, descricao = :descricao, recompensa = :recompensa where id = :id";

        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':titulo', $this->titulo);
        $stmt->bindValue(':descricao', $this->descricao);
        $stmt->bindValue(':recompensa', $this->recompensa);
        $stmt->bindValue(':id', $this->id);
        $stmt->execute();

    }
    
}