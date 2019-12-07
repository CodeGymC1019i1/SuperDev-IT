<?php
    class QuadraaticEquation {
        private $a;
        private $b;
        private $c;

        public function __construct($a,$b,$c) {
            $this->a = $a;
            $this->b = $b;
            $this->c = $c;
        }

        public function getDiscriminant() {
            return $this->b * $this->b - (4 * $this->a * $this->c);
        }
        public function getRoot1() {
            return (- $this->b + sqrt($this->getDiscriminant()))/ 2*$this->a;
        }
        public function getRoot2() {
            return (- $this->b - sqrt($this->getDiscriminant())) / 2 * $this->a;
        }

        public function result() {
            if ($this->getDiscriminant() < 0 ) {
                return "phương trình vô nghiệm";
            } else if ($this->getDiscriminant() == 0) {
                return $this->getRoot1();
            } else {
                return "nghiệm 1 là : " . $this->getRoot1(). "<br>" . "nghiệm 2 là : " . $this->getRoot2();
            }
        }
    }

?>