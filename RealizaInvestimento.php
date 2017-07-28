<?php
require_once "Conservador.php";

class RealizaInvestimento
{
    public function invest(Conta $conta, Investimento $invest)
    {
       $investimento = $invest->Calcula($conta);

       $conta->Deposito($investimento * 0.75);

       return $conta->getSaldo();
    }
}