<?php
namespace Ruan\DP;
class GerarPedido implements Command {
    private $valorOrcamento; 
    private $numeroDeItens;
    private $nomeCliente;
    public function __construct($valorOrcamento, $numeroDeItens, $nomeCliente){
        $this->valorOrcamento = $valorOrcamento;
        $this->numeroDeItens = $numeroDeItens;
        $this->nomeCliente = $nomeCliente;

    }
    public function execute(){
        $orcamento = new Orcamento();

        $orcamento->qtdItens = $this->numeroDeItens;
        $orcamento->valor =  $this->valorOrcamento;

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new \DateTimeImmutable();
        $pedido->nomeCliente = $this->nomeCliente;
        $pedido->orcamento = $orcamento;

        echo "Nome: ".$pedido->nomeCliente." orcamento: ".$this->valorOrcamento." quantidade de itens: ". $this->numeroDeItens. PHP_EOL;
        echo "Criar Pedido";

    }
}