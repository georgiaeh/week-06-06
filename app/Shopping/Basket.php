<?php

namespace App\Shopping;

class Basket
{
    private $items = [];
    private $total = 0;

    public function add($item)
    {
        $this->items[] = $item->type(); 
        $this->total += $item->price();
        return $this; //return the object to allow for chaining of methods
    }

    public function total()
    {   
        $formattedTotal = number_format($this->total, 2, ".", ",");
        return "£{$formattedTotal}";
    }

    public function items()
    {
        return implode(", ", $this->items);
    }

}