<?php
require_once 'banco.php';

class Missao {
    private $titulo;
    private $descricao;
    private $recompensa;

    public function __construct($titulo, $descricao, $recompensa)
    {
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->recompensa = $recompensa;
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
}