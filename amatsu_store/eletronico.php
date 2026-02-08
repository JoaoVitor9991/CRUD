<?php

require_once 'produto.php';

class Eletronico extends Produto {


     public  function calcularPrecoFinal() {
        return $this->precoBase * 1.1;
    }
}