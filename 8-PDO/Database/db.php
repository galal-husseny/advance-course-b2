<?php 
namespace Database;

class db {
    private static $host = 'localhost';
    private static $username = 'root';
    private static $password = '';
    private static $dbname = 'pdo';
    private static $port = 3307;
    private static $connection;

    public static function connection()
    {
       if(! isset(self::$connection) ){
        self::$connection = new \PDO("mysql:host=".self::$host.";dbname=".self::$dbname.";port=".self::$port,
        self::$username,self::$password);
       }
       return self::$connection;
    }
}
