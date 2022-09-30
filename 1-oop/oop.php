<?php

class user {
    public $property;

    public function method()
    {
        $this; // refer to object
        $this->property;
        $this->method();
    }
}

$user = new user;
$user->property = 'galal';
$user->method();


class product {
    public static $property;
    public const CONSTANT = 5;
    public static function method()
    {
        product::$property = 5;
        echo product::CONSTANT;
        product::method();

        //////////////////////

        self::$property;
        echo self::CONSTANT;
        self::method();

        //////////////////////

        static::$property;
        echo static::CONSTANT;
        static::method();
    }
}

product::$property = 5;
echo product::CONSTANT;
product::method();