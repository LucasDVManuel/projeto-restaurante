<?php

namespace App\Prato;

namespace App\Plans\Marmita;

use App\Prato\Prato as MasterPrato;

class Marmita extends MasterPrato 
{
    protected string $nomeprato = "Marmita iPag";
    protected string $descricao = "Marmita executiva com file de frango grelhado, arroz, feijao, salada e farofa";
    protected string $valor = "29.90";
    protected string $tamanho = "G";
    
    public function getValor(): int
    {
        return $this->valor;
    }

    public function getInformacoes(): array
    {
        $informacoes = $this->nomeprato;

        $informacoes += " | "+$this->tamanho;
        $informacoes += " | "+$this->getValor();
        $informacoes += " | "+$this->descricao;

        return $informacoes;
    }
}

?>