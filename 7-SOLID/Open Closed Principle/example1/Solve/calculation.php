<?php

include_once "square.php";
include_once "rect.php";
include "circle.php";
class calculation {
    public function area(object $shape)
    {
        return $shape->getArea();
    }
}

$rect = new rect;
$rect->length = 5;
$rect->width = 10;

$square = new square;
$square->side = 10;

$circle = new circle;
$circle->raduis = 5;

$calc = new calculation;
// echo $calc->area($rect);
// echo $calc->area($square);
echo $calc->area($circle);