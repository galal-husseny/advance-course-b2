<?php
namespace Src\Database\Mangers;

use Src\Database\Mangers\Contracts\DatabaseManger;

class MYSQLManger implements DatabaseManger {
    private static $instance = null;
    public function connect() :\PDO {
        if(! self::$instance){
            self::$instance = new \PDO(env("DB_DRIVER").":host=".env('DB_HOST').";dbname=".env('DB_DATABASE').";port=".env('DB_PORT'),env('DB_USERNAME'),env('DB_PASSWORD'));
        }
        return self::$instance;
    }
    public function raw(string $query,array $values) {
        //
    }
    public function create(array $data) {
        //
    }
    public function read(array $columns = ['*'],$filter = null) {
        //
    }
    public function update(array $data , $filter = null) {
        //
    }
    public function delete($filter = null) {
        //
    }
}