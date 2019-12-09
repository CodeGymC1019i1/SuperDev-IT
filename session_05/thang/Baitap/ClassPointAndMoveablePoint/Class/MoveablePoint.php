<?php

include_once "Point.php";

class MoveablePoint extends Point
{
    protected $xSpeed;
    protected $ySpeed;

    public function __construct()
    {
        $a = func_get_args();
        $i = func_get_args();
        if (method_exists($this, $f='__construct'.$i)) {
            call_user_func_array(array($this,$f),$a);
        }
    }

    public function __construct2($x, $y, $xSpeed, $ySpeed)
    {
        parent::__construct2($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function __construct3($xSpeed, $ySpeed)
    {
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    /**
     * @return mixed
     */
    public function getXSpeed()
    {
        return $this->xSpeed;
    }

    /**
     * @param mixed $xSpeed
     */
    public function setXSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }

    /**
     * @return mixed
     */
    public function getYSpeed()
    {
        return $this->ySpeed;
    }

    /**
     * @param mixed $ySpeed
     */
    public function setYSpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }

    public function setSpeed($xSpeed, $ySpeed)
    {
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function getSpeed()
    {
        $arr = [];
        array_push($arr, $this->xSpeed, $this->ySpeed);
        return $arr;
    }

    public function toString()
    {
        return "(".$this->x.",".$this->y."), Speed = (".$this->xSpeed.",".$this->ySpeed.")<br>";
    }

    public function move()
    {
        $this->x += $this->xSpeed;
        $this->y += $this->ySpeed;
        return $this;
    }
}

