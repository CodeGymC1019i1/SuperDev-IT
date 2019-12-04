<?php
    class Rectangle {
        public $height;
        public $width;

        public function __construct($width,$height)
        {
            $this->width = $width;
            $this->height = $height;
        }

        public function getArea()
        {
            return $this->height * $this->width;
        }
        public function getPerimeter()
        {
            return (($this->width + $this->height) * 2);
        }
        public function disPlay()
        {
            return "Hình chữ nhật{" . "width=" . $this->width . ", height=" . $this->height . "}";
        }
    }
?>