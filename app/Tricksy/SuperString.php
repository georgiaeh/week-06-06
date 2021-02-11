<?php 

namespace App\Tricksy;

class SuperString
{
    private $str;

    public function __construct($str)
    {
        $this->str = $str;
    }

    public function __toString()
    {
        return $this->str;
    }

    public function titleCase()
    {
        $this->str = ucfirst($this->str);
        return $this;
    }

    public function append($append)
    {
        $this->str .= $append;
        return $this;
    }
}