<?php
include_once "rect.php";
class main {
    public function main()
    {
        // $shape = new rect; // parent
        $shape = new square;
        $shape->setWidth(20); // 100
        $shape->setLength(5); // 25
        if($shape->getArea() == 100){// wating for this result
            // do something
        } 
    }
}