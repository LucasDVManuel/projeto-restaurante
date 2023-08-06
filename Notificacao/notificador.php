<?php

class Notificador extends observador{
    const ESPERA = "AGUARDE APROVAÇÃO";
    const APROVADO = "INICIALIZADO";
    const PREPARANDO = "PREPARANDO";
    const PRONTO = "PRONTO PARA ENTREGA";
    const CAMINHO = "A CAMINHO DA ENTREGA";
    const ENTREGUE = "PEDIDO ENTREGUE";

    public function notify(): void
    {
        echo "Atenção: notificando observadores... <br/>".PHP_EOL;
        foreach($this->observadores as $objObserver){
            $objObserver->update($this);
        }
    }

    public function espera(): void
    {
        $this->estado = self::ESPERA;
        $this->notify();
    }

    public function aprovado(): void
    {
        $this->estado = self::APROVADO;
        $this->notify();
    }

    public function preparando(): void
    {
        $this->estado = self::PREPARANDO;
        $this->notify();
    }

    public function pronto(): void
    {
        $this->estado = self::PRONTO;
        $this->notify();
    }

    public function caminho(): void
    {
        $this->estado = self::CAMINHO;
        $this->notify();
    }

    public function entregue(): void
    {
        $this->estado = self::ENTREGUE;
        $this->notify();
    }
}

?>