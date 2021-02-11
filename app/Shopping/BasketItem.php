<?php

namespace App\Shopping;

class BasketItem
{
    private $item;
    private $price;

    public function __construct(string $item, float $price)
    {
        $this->item = $item;
        $this->price = $price;
    }

    public function type() : string
    {
        return $this->item;
    }

    public function price() :string
    {
        return $this->price;
    }

    public function priceFormatted() : string
    {
        return number_format($this->price, 2, ".", ",");
    }

}