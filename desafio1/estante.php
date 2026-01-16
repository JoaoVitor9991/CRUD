<?php

require_once 'livro.php';

class Estante {
    private $estante = [];

    public function guardarLivro(Livro $titulo)
    {
        $this->estante [] = $titulo;
    }

    public function listarLivrosGrandes()
    {
        foreach($this->estante as $livro_na_mao) {
              if ($livro_na_mao->getPaginas() >= 500) {
                echo "Esse livro é grande " . $livro_na_mao->getTitulo();
            }
        }
    }

    public function totalDePaginasDaEstante()
    {
        $total = 0;

        foreach($this->estante as $livro_na_mao) {
           $total = $total + $livro_na_mao->getPaginas(); 
        }
        echo "Total de páginas lidas: " . $total;
    }
}