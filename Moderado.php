<?php

class Moderado implements Investimento
{
    private $chance;

    public function Calcula(Conta $conta)
    {
        $this->chance = mt_rand(1,100);

        if($this->chance >= 50)
        {
            return $conta->getSaldo() * 0.25;
        }else
        {
            return $conta->getSaldo() * 0.007;
        }
    }
}