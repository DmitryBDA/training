<?php

namespace App\Patterns\Composite\Classes;

use App\Patterns\Composite\Interfaces\iCost;

class Product implements iCost
{
    private float $price;

    /**
     * @param float $price
     */
    public function __construct(float $price)
    {
        $this->price = $price;
    }

    public function calcPrice(): float
    {
        return $this->price;
    }
}
