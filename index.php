<?php

require_once "Orcamento.php";
require_once "CalculadoraDeImpostos.php";
require_once "imposto.php";
require_once "ICMS.php";
require_once "ISS.php";


$reforma = new Orcamento(500);

$calculadora = new CalculadoraDeImpostos;

echo $calculadora->Calcula($reforma,new ICMS());
echo "<br />";
echo $calculadora->Calcula($reforma,new ISS());



