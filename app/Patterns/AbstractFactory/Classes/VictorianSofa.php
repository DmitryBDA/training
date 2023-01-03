<?php

namespace App\Patterns\AbstractFactory\Classes;

use App\Patterns\AbstractFactory\Interfaces\iSofa;

class VictorianSofa implements iSofa
{
    public function getDescription()
    {
        \Debugbar::info(__CLASS__ . '---' . __METHOD__);
    }
}
