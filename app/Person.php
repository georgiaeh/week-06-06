<?php 

namespace App;

class Person
{
    private $firstName;
    private $surname;

    public function __construct(string $firstName, string $surname)
    {
        $this->firstName = $firstName;
        $this->surname = $surname;
    }

    public function getName() : string
    {
        return "{$this->firstName} {$this->surname}";
    }

    public function sayHelloTo(Person $person) : string
    {
        return "Hello {$person->getName()}";
    }
}

