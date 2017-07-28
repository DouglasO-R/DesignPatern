<?php

/*
dessa informa eu injeto os requisitos da função
*/
class CalculadoraDeImpostos{

    public function Calcula(Orcamento $orcamento,imposto $imposto){
       return $imposto->calcula($orcamento);
    }
}