<?php

namespace App\Patterns\AbstractFactory\Classes;

use App\Patterns\AbstractFactory\Interfaces\iChair;

class ModerChair implements iChair
{

    public function getDescription()
    {
        \Debugbar::info(__CLASS__ . '---' . __METHOD__);
    }
}
