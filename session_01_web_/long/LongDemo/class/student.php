<?php
namespace Controller;

class Student {
    public $name;
    public $age;
    public $address;
    public $group;
    public function __construct($name,$age,$address,$group)
    {
        $this->name = $name;
        $this->age = $age;
        $this->address=$address;
        $this->group =$group;
    }

    public function setStudent($name,$age,$address,$group){

        $this->name = $name;
        $this->age = $age;
        $this->address=$address;
        $this->group =$group;
    }

    public function getStudent() {

        return $this->name; $this->age; $this->address; $this->group;
    }

}