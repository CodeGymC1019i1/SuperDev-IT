<?php


class Student
{
    public $name;
    public $age;
    public $address;
    public $group;

    function __construct($name,$age,$address,$group)
    {
        $this->name=$name;
        $this->age=$age;
        $this->address=$address;
        $this->group=$group;
    }

    function setName($name){
        $this->name=$name;
    }

    function getName($name){
        return $this->name;
    }
}