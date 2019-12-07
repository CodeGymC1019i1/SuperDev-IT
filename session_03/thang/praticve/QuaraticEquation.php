<?php
class QuadraticEquation{
    public $a;
    public $b;
    public $c;
    public function __construct($a,$b,$c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    public function getDiscriminant(){
        return (pow ($this->b,2) - 4*$this->a*$this->c);
    }
    public function getRoot1(){
        return (-$this->b + pow($this->getDiscriminant(),0.5))/(2*$this->a);
    }
    public function getRoot2(){
        return (-$this->b - pow($this->getDiscriminant(),0.5))/(2*$this->a);
    }
}
$a = 1;
$b = 4;
$c = 0;
$quadraticequation = new QuadraticEquation($a,$b,$c);
echo "nghiem thu nhat la " . round($quadraticequation -> getRoot1(),3);
echo"<br>";
echo "nghiem thu 2 la " . round($quadraticequation -> getRoot2(),3);

