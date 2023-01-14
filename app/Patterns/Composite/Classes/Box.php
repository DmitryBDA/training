<?php

namespace App\Patterns\Composite\Classes;

use App\Patterns\Composite\Interfaces\iCost;

class Box implements iCost
{
    private float $price = 0;

    private array $products;

    public function addProduct(iCost $product)
    {
        $this->products[] = $product;
    }

    public function calcPrice(): float
    {
        foreach ($this->products as $product) {
            $this->price += $product->calcPrice();
        }

        return $this->price;
    }
}
