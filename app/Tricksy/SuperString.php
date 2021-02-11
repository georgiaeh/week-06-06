<?php 

namespace App\Tricksy;

class SuperString
{
    private $str;

    public function __construct(string $str)
    {
        $this->str = $str;
    }

    public function __toString() : string
    {
        return $this->str;
    }

    public function titleCase() : SuperString
    {
        $this->str = ucfirst($this->str);
        return $this;
    }

    public function append(string $append) : SuperString
    {
        $this->str .= $append;
        return $this;
    }
}