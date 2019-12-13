<?php

/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 26/10/2018
 * Time: 22:50
 */
class Cylinder
{
    public function getVolume($radius, $height)
    {
        $baseArea = getBaseArea($radius) ;
         $perimeter = $this->getPerimeter($radius) ;
        $volume = $perimeter * $height + 2 * $baseArea;
        return $volume;
    }

    /**
     * @param $radius
     * @return float|int
     */
    public function getBaseArea($radius)
    {
        return $baseArea = pi() * $radius * $radius;
    }

    /**
     * @param $radius
     * @return float|int
     */
    public function getPerimeter($radius)
    {
        return $perimeter = 2 * pi() * $radius;
    }
}