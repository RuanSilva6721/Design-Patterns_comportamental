<?php 
use Ruan\DP\CalcuradoraImpostos;
use Ruan\DP\Orcamento;

require "vendor/autoload.php";


$calculadora= new CalcuradoraImpostos();
$orcamento = new Orcamento();
$orcamento->valor = 100;

echo $calculadora->calcula($orcamento, 'ISS');