<?php

namespace App\Redux;

class Stringy{

    private $str;

    public function __construct(string $str)
    {
        $this->str = $str;
    }

    public function lower() : Stringy
    {
        $this->str = strtolower($this->str);
        return $this;
    }

    public function upper() : Stringy
    {
        $this->str = strtoupper($this->str);
        return $this;
    }

    public function repeat(int $num) : Stringy
    {
        $this->str = str_repeat($this->str, $num);
        return $this;
    }

    public function append(string $append) : Stringy
    {
        $this->str = $this->str . $append;
        return $this;
    }

    public function get()
    {
        return $this->str;
    }

}