<?php

class Livro {
    private $titulo;
    private $paginas;

    public function __construct($titulo, $paginas)
    {
        $this->titulo = $titulo;
        $this->paginas = $paginas;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getPaginas()
    {
        return $this->paginas;
    }

}