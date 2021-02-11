<?php

namespace App\Redux;

class Stringy{

    private $str;

    public function __construct($str)
    {
        $this->str = $str;
    }

    public function lower()
    {
        $this->str = strtolower($this->str);
        return $this;
    }

    public function upper()
    {
        $this->str = strtoupper($this->str);
        return $this;
    }

    public function repeat($num)
    {
        $this->str = str_repeat($this->str, $num);
        return $this;
    }

    public function append($append)
    {
        $this->str = $this->str . $append;
        return $this;
    }

    public function get()
    {
        return $this->str;
    }

}