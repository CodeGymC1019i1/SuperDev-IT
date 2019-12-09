<?php


class Point
{
    protected $x;
    protected $y;

    public function __construct()
    {
        $a = func_get_args();
        $i = func_get_args();
        if (method_exists($this, $f='__construct'.$i)) {
            call_user_func_array(array($this,$f),$a);
        }
    }

    public function __construct1()
    {
    }

    public function __construct2($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @param mixed $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @param mixed $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }

    public function setXY($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getXY()
    {
        $arr = [];
        array_push($arr, $this->x, $this->y);
        return $arr;
    }

    public function toString()
    {
        return "(".$this->x.",".$this->y.")<br>";
    }
}