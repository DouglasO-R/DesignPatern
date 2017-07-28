<?php

class Conservador implements Investimento
{
    public function Calcula(Conta $conta)
    {
        return $conta->getSaldo() * 0.008;
    }
}