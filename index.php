<?php

require_once "Orcamento.php";
require_once "CalculadoraDeImpostos.php";

$reforma = new Orcamento(500);

$calculadora = new CalculadoraDeImpostos;

echo $calculadora->Calcula($reforma,"ICMS");
echo "<br />";
echo $calculadora->Calcula($reforma,"ISS");



