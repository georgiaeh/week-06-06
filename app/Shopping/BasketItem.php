<?php

namespace App\Shopping;

class BasketItem
{
    private $item;
    private $price;

    public function __construct($item, $price)
    {
        $this->item = $item;
        $this->price = $price;
    }

    public function type()
    {
        return $this->item;
    }

    public function price()
    {
        return $this->price;
    }

    public function priceFormatted()
    {
        return number_format($this->price, 2, ".", ",");
    }

}