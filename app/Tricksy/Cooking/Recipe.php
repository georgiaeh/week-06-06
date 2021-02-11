<?php

namespace App\Tricksy\Cooking;

class Recipe
{
    private $title;
    private $ingredients;
    private $method;
    private $dietary = [];

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function addIngredient(Ingredient $ingredient, string $quantity) : void
    {
        $this->ingredients .= " - {$quantity} {$ingredient->getName()}\n\t";
        $this->dietary = array_merge($this->dietary, $ingredient->getDietary());
    }

    public function addMethod(string $method) : void
    {
        $this->method = $method;
    }

    public function display() :string
    {
        return 
        "\t{$this->title}\n
        Ingredients\n
        {$this->ingredients}\n
        Method\n
        {$this->method}
        ";
    }

    public function dietary() : string
    {
        $uniqueDietary = array_unique($this->dietary);
        return implode(", ", $uniqueDietary);
    }

    public function vegan() : bool
    {
        return !in_array("animal produce", $this->dietary);
    }
}