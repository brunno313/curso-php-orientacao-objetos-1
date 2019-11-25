<?php

class ContaCorrente {

    public $titular;
    public $conta;
    public $agencia;
    public $saldo;

    public function __construct($titular, $conta, $agencia, $saldo) {

        $this->titular = $titular;
        $this->conta = $conta;
        $this->agencia = $agencia;
        $this->saldo = $saldo;
    }
}