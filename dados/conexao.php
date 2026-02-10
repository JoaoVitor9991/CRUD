<?php

class Conexao {
    public static function conectar(){
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=sistema_amatsu","root","");

            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

           // echo "Conecto";
            return $pdo;
        } catch (PDOException $e){
            echo "deu merda " . $e->getMessage();
        }
    }
}
