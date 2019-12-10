<?php

include_once "Point2D.php";

class Point3D extends Point2D
{
    protected $z;

    public function __construct()
    {
        $a = func_get_args();
        $i = func_get_args();
        if (method_exists($this, $f='__construct'.$i)) {
            call_user_func_array(array($this,$f),$a);
        }
    }

    public function __construct2($x, $y, $z)
    {
        parent::__construct2($x, $y);
        $this->z = $z;
    }

    /**
     * @return mixed
     */
    public function getZ()
    {
        return $this->z;
    }

    /**
     * @param mixed $z
     */
    public function setZ($z)
    {
        $this->z = $z;
    }

    public function setXYZ($x, $y, $z)
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }

    public function getXYZ()
    {
        $arr = [];
        array_push($arr, $this->x, $this->y, $this->z);
        return $arr;
    }

    public function toString()
    {
        return "(".$this->x.",".$this->y.",".$this->z.")"."<br>";
    }
}