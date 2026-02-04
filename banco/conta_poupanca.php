<?php

require_once 'conta.php';

class ContaPoupanca extends Conta {

    public function aplicarRendimento()
    {
        $this->saldo = $this->saldo * 1.05;
    }
}