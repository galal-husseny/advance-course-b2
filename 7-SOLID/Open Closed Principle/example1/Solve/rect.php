<?php 
include_once "shape.php";
class rect implements shape {
    public $width;
    public $length;

    public function getArea()
    {
        return $this->width * $this->length;
    }
}