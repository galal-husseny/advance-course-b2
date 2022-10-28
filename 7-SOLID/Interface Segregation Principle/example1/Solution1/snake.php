<?php
include_once "animal.php";
class snake implements normalAnimal{
    public function eat()
    {
        return "meat";
    }
    public function drink()
    {
        return "water";
    }
}