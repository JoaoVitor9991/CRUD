<?php

require_once 'estante.php';
require_once 'livro.php';

$estante = new Estante();
$harry = new Livro("Harry Foda-se", 300);
$senhor = new Livro("Senhor dos ANais", 1300);
$pequeno = new Livro("Pequeno FOda-se", 90);

$estante->guardarLivro($harry);
$estante->guardarLivro($senhor);
$estante->guardarLivro($pequeno);

$estante->listarLivrosGrandes();
echo "<br>";
$estante->totalDePaginasDaEstante();