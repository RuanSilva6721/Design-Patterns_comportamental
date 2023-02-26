<?php 
use Ruan\DP\Orcamento;
use Ruan\DP\Pedido;

require "vendor/autoload.php";

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];



$orcamento = new Orcamento();

$orcamento->qtdItens = $numeroDeItens;
$orcamento->valor =  $valorOrcamento;

$pedido = new Pedido();
$pedido->dataFinalizacao = new \DateTimeImmutable();
$pedido->nomeCliente = $nomeCliente;
$pedido->orcamento = $orcamento;

echo "Nome: ".$pedido->nomeCliente." orcamento: ".$valorOrcamento." quantidade de itens: ". $numeroDeItens. PHP_EOL;
echo "Criar Pedido";
