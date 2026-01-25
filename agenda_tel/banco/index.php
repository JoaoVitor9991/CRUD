<?php

require 'conexao_agenda.php';
require_once 'contato.php';

$meuContato = new Contato($pdo);

$meuContato->adicionar("Amatsu", "9269-6969");