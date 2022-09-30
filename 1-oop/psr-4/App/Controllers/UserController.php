<?php
namespace App\Controllers;

class UserController {
    public function __construct() {
        echo self::class; // === __CLASS__
        echo "<br>";
    }
}