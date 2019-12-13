<?php

class ArrayList
{
    public $ArrayList;

    public function arrayList($arr = "")
    {
        if (is_array($arr) == true) {
            $this->ArrayList = $arr;
        } else {
            $this->ArrayList = array();
        }
    }

    public function add($obj)
    {
        array_push($this->ArrayList, $obj);
    }

    public function get($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->ArrayList[$index];
        } else
            die("ERROR in ArrayList.get");
    }

    public function isInteger($toCheck)
    {
        return preg_match("/^[0-9]+$/", $toCheck);
    }

    public function size()
    {
        return count($this->ArrayList);
    }

    public function remove($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            $newArrayList = [];
            for ($i = 0; $i < count($this->ArrayList); $i++) {
                if ($index !== $i) {
                    $newArrayList[$i] = $this->get($i);
                }
            }
            $this->ArrayList = $newArrayList;

        } else {
            die("ERROR in ArrayList.remove <br> Integer value required");
        }
    }
}