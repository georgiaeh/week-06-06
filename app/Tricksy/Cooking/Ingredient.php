<?php

namespace App\Tricksy\Cooking;

class Ingredient
{
    private $name;
    private $contains;

    public function __construct(string $name, array $contains){
        $this->name = $name;
        $this->contains = $contains;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getDietary() : array
    {
        return $this->contains;
    }

    public function vegan() : bool
    {
        //filter array for "animal produce"
        return in_array( "animal produce", $this->contains);

    }
}