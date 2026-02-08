<?php

require_once 'produto.php';

class Livro extends Produto {
    public  function calcularPrecoFinal() {
        return $this->precoBase;
    }
}