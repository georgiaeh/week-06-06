<?php

namespace App\Shopping;

class Basket
{
    private $items = [];
    private $total = 0;

    public function add(object $item)
    {
        $this->items[] = $item->type(); 
        $this->total += $item->price();
        return $this; //return the object to allow for chaining of methods
    }

    public function total() : string
    {   
        $formattedTotal = number_format($this->total, 2, ".", ",");
        return "£{$formattedTotal}";
    }

    public function items() : string
    {
        return implode(", ", $this->items);
    }

}