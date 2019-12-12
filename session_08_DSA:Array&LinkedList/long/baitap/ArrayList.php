<?php


class MyList
{
    public $size = 0;
    public $DEFAULT_CAPACITY = 10;
    public $elements;

    public function ArrayList($arr)
    {
        if (is_array($arr) == true){
            $this->elements = $arr;
        } else {
            $this->elements = array();
        }
    }

    public function get($index)
    {
        if (is_int($index) && $index < $this->size()) {
            return $this->elements[$index];
        } else {
            die("Eror in Array");
        }
    }

    public function remove($index)
    {
        if (is_Integer($index)) {
            $newArrayList = array();

            for ($i = 0; $i < $this->size(); $i++) {
                if ($index != $i) $newArrayList[] = $this->get($i);

                $this->ArrayList = $newArrayList;
            }
        } else {
            die("ERROR in ArrayList.remove <br> Integer value required");
        }
    }

    public function clear()
    {
        $this->ArrayList()
    }

    public
    function add($index)
    {
        array_push($this->elements, $index);
    }

    public
    function size()
    {
        return count($this->elements);
    }
}