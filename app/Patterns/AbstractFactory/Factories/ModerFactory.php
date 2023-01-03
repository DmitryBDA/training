<?php

namespace App\Patterns\AbstractFactory\Factories;

use App\Patterns\AbstractFactory\Classes\ModerChair;
use App\Patterns\AbstractFactory\Classes\ModerSofa;
use App\Patterns\AbstractFactory\Interfaces\iChair;
use App\Patterns\AbstractFactory\Interfaces\iFurniture;
use App\Patterns\AbstractFactory\Interfaces\iSofa;

class ModerFactory implements iFurniture
{

    public function createChair(): iChair
    {
        return new ModerChair();
    }

    public function createSofa(): iSofa
    {
        return new ModerSofa();
    }
}
