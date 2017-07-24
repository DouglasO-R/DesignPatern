<?php
require_once "imposto.php";

class ICMS implements imposto{
    public function calcula(Orcamento $orcamento){
        return $orcamento->getValor() * 0.05;
    }
}