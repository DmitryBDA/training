<?php

namespace App\Patterns\FactoryMethod\Classes;

use App\Patterns\FactoryMethod\Interfaces\iTransport;

class Truck implements iTransport
{

    public function deliver()
    {
        \Debugbar::info('Доставить грузовиком по суше');
    }
}
