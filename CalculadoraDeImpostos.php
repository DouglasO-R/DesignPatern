<?php
/*
dessa forma para cada novo impoto sou obrigado a crirar um if novo
*/
class CalculadoraDeImpostos{

    public function Calcula(Orcamento $orcamento,$tipo){
        if($tipo=="ICMS"){
            $icms = $orcamento->getValor() * 0.05 ;
              echo $icms;
        }elseif ($tipo=="ISS") {
           $iss = $orcamento->getValor() * 0.1;
             echo $iss;
        }
    }
}