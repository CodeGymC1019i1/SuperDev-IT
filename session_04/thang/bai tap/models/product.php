<?php
class Product
{
    private $name;
    private $price;
    public function __construct($name = NULL, $price = 0)
    {
        $this->name = $name;
        $this->price = $price;
    }
    /**
     * @param null $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    /**
     * @param int $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }
    /**
     * @return null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }
}
