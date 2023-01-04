<?php

namespace App\Patterns\FactoryMethod\Classes;

use App\Patterns\FactoryMethod\Interfaces\iTransport;

class RoadLogistic extends Logistics
{

    function createTransport(): iTransport
    {
        return new Truck();
    }
}
