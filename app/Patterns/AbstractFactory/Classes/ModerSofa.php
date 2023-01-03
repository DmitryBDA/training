<?php

namespace App\Patterns\AbstractFactory\Classes;

use App\Patterns\AbstractFactory\Interfaces\iSofa;

class ModerSofa implements iSofa
{

    public function getDescription()
    {
        \Debugbar::info(__CLASS__ . '---' . __METHOD__);
    }
}
