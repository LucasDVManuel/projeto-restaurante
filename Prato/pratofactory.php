<?php

namespace App\Prato;

class PratoFactory
{
    public function createPrato($prato): Prato
    {
        $pratoName = "App\\Plans\\" . ucwords($prato) . "\\Prato";

        if (!class_exists($pratoName)) {

            throw new \Exception('A classe com o nome ' . $pratoName . ' não foi encontrada!');
        }

        return new $pratoName();
    }
}