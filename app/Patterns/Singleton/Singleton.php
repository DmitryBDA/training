<?php

namespace App\Patterns\Singleton;

use App\Patterns\Singleton\Trait\SingletonTrait;

class Singleton
{
    use SingletonTrait;

    public $a;
    public $b;
}
