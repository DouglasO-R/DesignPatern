<?php

class Conta
{
    private $saldo;

    public function Deposito($valor)
    {
        $this->saldo = $valor;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }
}