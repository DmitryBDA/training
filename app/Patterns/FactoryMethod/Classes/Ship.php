<?php

namespace App\Patterns\FactoryMethod\Classes;

use App\Patterns\FactoryMethod\Interfaces\iTransport;

class Ship implements iTransport
{
    public function deliver()
    {
        \Debugbar::info('Доставить на судне по морю');
    }
}
