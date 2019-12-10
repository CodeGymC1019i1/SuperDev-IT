<?php


class Shape
{
    protected $color;

    public function __construct($color)
    {
        $this->color = "'".strtoupper($color)."'";
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    public function toString()
    {
        return "Color: ".$this->color;
    }
}