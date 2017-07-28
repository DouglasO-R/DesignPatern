<?php
require_once "imposto.php";

class ICCC implements imposto
{
    public function calcula(Orcamento $orcamento){
        if($orcamento->getValor() < 1000){
            return $orcamento->getValor() * 0.05;
        }elseif($orcamento->getValor()>=1000 and 3000>=$orcamento->getValor() ){
           return $orcamento->getValor()*0.07 ;
        }elseif($orcamento->getValor()>3000){
            return $orcamento->getValor() * 0.08 + 30;
        }
        
    }
}
