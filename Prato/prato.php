<?php

namespace App\Prato;

abstract class Prato
{
    protected string $nomeprato = "";
    protected string $descricao = "";
    protected string $valor = "";
    
    abstract public function getValor(): int;

    public function getInformacoes(): array
    {
        return $this->nomeprato + " | " + $this->descricao;
    }
}

?>