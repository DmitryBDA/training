<?php

namespace App\Patterns\FactoryMethod;

use App\Patterns\FactoryMethod\Classes\Truck;
use App\Patterns\FactoryMethod\Interfaces\iTransport;

class RoadLogistic extends Logistics
{

    function createTransport(): iTransport
    {
        return new Truck();
    }
}
