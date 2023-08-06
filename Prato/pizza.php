<?php

namespace App\Prato;

namespace App\Plans\Pizza;

use App\Prato\Prato as MasterPrato;

class Pizza extends MasterPrato 
{
    protected string $nomeprato = "Pizza iPag";
    protected string $descricao = "Pizza com calabresa , presunto, queijo, bacon, azeitona, milho, cebola";
    protected string $valor = "49.90";
    protected string $bordarecheada = "sim";
    protected string $tamanho = "familia";
    
    public function getValor(): int
    {
        return $this->valor;
    }

    public function getInformacoes(): array
    {
        $informacoes = $this->nomeprato;

        if($this->bordarecheada == "sim"){
            $informacoes += " | Borda Recheada";
        }

            $informacoes += " | "+$this->tamanho;
            $informacoes += " | "+$this->getValor();
            $informacoes += " | "+$this->descricao;

        return $informacoes;
    }
}

?>