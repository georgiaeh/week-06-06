<?php

namespace App\Tricksy\Cooking;

class Recipe
{
    private $title;
    private $ingredients;
    private $method;
    private $dietary = [];

    public function __construct($title)
    {
        $this->title = $title;
    }

    public function addIngredient($ingredient, $quantity)
    {
        $this->ingredients .= " - {$quantity} {$ingredient->getName()}\n\t";
        $this->dietary = array_merge($this->dietary, $ingredient->getDietary());
    }

    public function addMethod($method)
    {
        $this->method = $method;
    }

    public function display()
    {
        return 
        "\t{$this->title}\n
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

    public function __toString()
    {
        return "To see the full reciepe, use display() method";
    }
}