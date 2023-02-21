<?php
namespace Ruan\DP;

use Ruan\DP\Stage\EmAprovacao;
use Ruan\DP\Stage\EstadoOrcamento;

class Orcamento {
    public float $valor;
    public int $qtdItens;

    public EstadoOrcamento $estadoAtual ;

    public function __construct(){
        $this->estadoAtual =  new EmAprovacao();
    }
    public function aplicaDescExtra(){
        $this->valor -= $this->estadoAtual->calculaDescExtra($this);
    }
    public function aprova(){
        $this->estadoAtual->aprova($this);
    }
    public function reprova(){
        $this->estadoAtual->reprova($this);
    }
    public function finaliza(){
        $this->estadoAtual->finaliza($this);
    }
}