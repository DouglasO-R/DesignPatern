<?php
/*
require_once "Orcamento.php";
require_once "CalculadoraDeImpostos.php";
require_once "imposto.php";
require_once "ICMS.php";
require_once "ISS.php";
require_once "ICCC.php";




$reforma = new Orcamento(500);

$calculadora = new CalculadoraDeImpostos;

echo $calculadora->Calcula($reforma,new ICMS());
echo "<br />";
echo $calculadora->Calcula($reforma,new ISS());
echo "<br />";
echo $calculadora->Calcula($reforma,new ICCC());
*/

require_once "Investimento.php";
require_once "Conta.php";
require_once "RealizaInvestimento.php";
require_once "Conservador.php";
require_once "Moderado.php";
require_once "Arrojado.php";

$conta_doug = new Conta;
$conta_doug->Deposito(1000);

$investimento = new RealizaInvestimento;

echo $investimento->invest($conta_doug,new Moderado());