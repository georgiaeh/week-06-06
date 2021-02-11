<?php

namespace App\Tricksy\Cooking;

class Recipe
{
    private $title;
    private $ingredients;
    private $method;
    private $dietary = [];

    public function __constructor($title)
    {
        $this->title = $title;
    }

    public function addIngredient($ingredient, $quantity)
    {
        dump($this->ingredients);
        $this->ingredients . " - {$quantity} {$ingredient->getName()}\n";
        dump($this->ingredients);
        $this->dietary = array_merge($this->dietary, $ingredient->getDietary());
    }

    public function addMethod($method)
    {
        $this->method = $method;
    }

    public function display()
    {
        return 
        "{$this->title}\n
        Ingredients\n
        {$this->ingredients}\n
        Method\n
        {$this->method}
        ";
    }

    public function dietary()
    {
        $uniqueDietary = array_unique($this->dietary);
        return implode(", ", $uniqueDietary);
    }

    public function vegan()
    {
        return !in_array("animal produce", $this->dietary);
    }
}