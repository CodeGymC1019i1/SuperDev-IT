<?php


class Circle
{
    protected $radius;
    protected $color;

    public function __construct($radius, $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    public function calculateArea()
    {
        return $this->radius ** 2 * 3.14;
    }

    public function calculatePerimeter()
    {
        return 2 * 3.14 * $this->radius;
    }

    public function toString()
    {
        return "Radius: ".$this->radius." Color: ".$this->color."<br>";
    }
}