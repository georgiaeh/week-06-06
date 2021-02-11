<?php

namespace App\Tricksy\Cooking;

class Ingredient
{
    private $name;
    private $contains;

    public function __construct($name, $contains){
        $this->name = $name;
        $this->contains = $contains;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDietary()
    {
        return $this->contains;
    }

    public function vegan()
    {
        //filter array for "animal produce"
        return in_array( "animal produce", $this->contains);

    }
}