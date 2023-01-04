<?php

namespace App\Patterns\FactoryMethod\Classes;

use App\Patterns\FactoryMethod\Interfaces\iTransport;

class SeaLogistic extends Logistics
{

    function createTransport(): iTransport
    {
        return new Ship();
    }
}
