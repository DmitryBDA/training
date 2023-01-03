<?php

namespace App\Patterns\AbstractFactory\Factories;

use App\Patterns\AbstractFactory\Classes\ModerChair;
use App\Patterns\AbstractFactory\Classes\ModerSofa;
use App\Patterns\AbstractFactory\Classes\VictorianChair;
use App\Patterns\AbstractFactory\Classes\VictorianSofa;
use App\Patterns\AbstractFactory\Interfaces\iChair;
use App\Patterns\AbstractFactory\Interfaces\iFurniture;
use App\Patterns\AbstractFactory\Interfaces\iSofa;

class VictorianFactory implements iFurniture
{
    public function createChair(): iChair
    {
        return new VictorianChair();
    }
    public function createSofa(): iSofa
    {
        return new VictorianSofa();
    }
}
