<?php

namespace App\Patterns\FactoryMethod;

use App\Patterns\FactoryMethod\Classes\Ship;
use App\Patterns\FactoryMethod\Interfaces\iTransport;

class SeaLogistic extends Logistics
{

    function createTransport(): iTransport
    {
        return new Ship();
    }
}
