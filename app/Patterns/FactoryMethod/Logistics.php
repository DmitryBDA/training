<?php

namespace App\Patterns\FactoryMethod;

use App\Patterns\FactoryMethod\Interfaces\iTransport;

abstract class Logistics
{

    public function planDelivery(): void
    {
        $this->createTransport()->deliver();
    }

    abstract function createTransport(): iTransport;
}
