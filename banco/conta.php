<?php

abstract class Conta {
    protected $titular;
    protected $saldo ;

    public function __construct($titular, $saldoInicial)
    {
        $this->titular = $titular;
        $this->saldo = $saldoInicial;
    }

    public function depositar($valorDepositado)
    {
        $this->saldo += $valorDepositado;
    }

    public function sacar($valorSacado)
    {
        if($valorSacado <= $this->saldo){
            $this->saldo -= $valorSacado;
            echo "Valor de: " .$valorSacado . " sacado com sucesso. ";
        } else {
            echo "Ta duro amigo. ";
        }
    }

    public function verSaldo()
    {
        return "O saldo do usuário: " . $this->titular . " é de R$: " . $this->saldo;
    }
}