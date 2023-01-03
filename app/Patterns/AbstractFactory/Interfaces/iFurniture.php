<?php

namespace App\Patterns\AbstractFactory\Interfaces;

interface iFurniture
{
    public function createChair(): iChair;

    public function createSofa(): iSofa;
}
