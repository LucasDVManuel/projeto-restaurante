<?php

abstract class observador implements \SplSubject
{
    protected $estado;
    protected \SplObjectStorage $observadores;

    public function __construct(){
        $this->observadores = new \SplObjectStorage;
    }

    public function attach(SplObserver $observer): void
    {
        $this->observadores->attach($observer);
    }

    public function detach(SplObserver $observer): void
    {
        $this->observadores->detach($observer);
    }

    public function getEstado(){
        return $this->estado;
    }
}


?>