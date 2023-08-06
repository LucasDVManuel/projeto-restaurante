<?php

namespace App\Prato;

namespace App\Plans\Lanche;

use App\Prato\Prato as MasterPrato;

class Lanche extends MasterPrato 
{
    protected string $nomeprato = "Lanche iPag";
    protected string $descricao = "Lanche com hamburguer, presunto, queijo, tomate, alface, calabresa, batata plaha e molho da casa";
    protected string $valor = "34.90";
    protected string $CortarMeio = "N";
    protected string $TipoPao = "Brioche";
    
    public function getValor(): int
    {
        return $this->valor;
    }

    public function getInformacoes(): array
    {
        $informacoes = $this->nomeprato;

        
        $informacoes += " | "+$this->getValor();
        $informacoes += " | "+$this->TipoPao;
        $informacoes += " | "+$this->descricao;

        return $informacoes;
    }
}

?>