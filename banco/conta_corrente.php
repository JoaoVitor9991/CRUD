<?php

require_once 'conta.php';

class ContaCorrente extends Conta {
    public function sacar($sacarContaCorrente){
        $totalComTaxa = $sacarContaCorrente + 2;

        if($totalComTaxa <= $this->saldo){

            $this->saldo -= $totalComTaxa;
            echo "Valor de: R$ " .$sacarContaCorrente . " sacado com sucesso.";
        } else {
            echo "Pobre";
        }
    }
}