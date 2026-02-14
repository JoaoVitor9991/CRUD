<?php

require_once 'banco.php';
require_once 'item.php';


$teste = new item("chama", 50);
$teste->salvar();
