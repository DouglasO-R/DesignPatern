<?php
require_once "ICMS.php";
require_once "ISS.php";
/*
dessa informa eu injeto os requisitos da função
*/
class CalculadoraDeImpostos{

    public function Calcula(Orcamento $orcamento,imposto $imposto){
       return $imposto->calcula($orcamento);
    }
}