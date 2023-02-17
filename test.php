<?php 
use Ruan\DP\CalcuradoraImpostos;
use Ruan\DP\Impostos\Icms;
use Ruan\DP\Impostos\iss;
use Ruan\DP\Orcamento;

require "vendor/autoload.php";


$calculadora= new CalcuradoraImpostos();
$orcamento = new Orcamento();
$orcamento->valor = 100;

echo $calculadora->calcula($orcamento, new Icms());