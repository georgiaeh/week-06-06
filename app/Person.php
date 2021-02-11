<?php 

namespace App;

class Person
{
    private $firstName;
    private $surname;

    public function __construct($firstName, $surname)
    {
        $this->firstName = $firstName;
        $this->surname = $surname;
    }

    public function getName()
    {
        return "{$this->firstName} {$this->surname}";
    }

    public function sayHelloTo($person)
    {
        return "Hello {$person->getName()}";
    }


}

