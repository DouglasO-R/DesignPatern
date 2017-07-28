<?php

class Arrojado implements Investimento
{
    private $chance;

    public function Calcula(Conta $conta)
    {
        $this->chance = mt_rand(1,100);
        if($this->chance <= 20){
            return $conta->getSaldo() * 0.5;
        }elseif ($this->chance > 20 and $this->chance <= 50) {
            return  $conta->getSaldo() * 0.03;
        }else {
            return $conta->getSaldo() * 0.006;
        }
    }

}