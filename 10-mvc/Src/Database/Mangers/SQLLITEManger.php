<?php
namespace Src\Database\Mangers;

use Src\Database\Grammers\MYSQLGrammer;
use Src\Database\Mangers\Contracts\DatabaseManger;

class SQLLITEManger implements DatabaseManger {
    private static $instance = null;
    public function connect() :\PDO {
        if(! self::$instance){
            $connectionStmt = env("DB_DRIVER").":host=".env('DB_HOST').";dbname=".env('DB_DATABASE').";port=".env('DB_PORT');
            self::$instance = new \PDO($connectionStmt,env('DB_USERNAME'),env('DB_PASSWORD'));
        }
        return self::$instance;
    }
    public function raw(string $query,array $values = []) {
        $stmt = self::$instance->prepare($query);
        foreach($values AS $index=>$value){
            $stmt->bindValue($index+1 , $value);
        }
        $return = $stmt->excute();
        if(str_starts_with(strtolower($query),'select')){
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }
        return $return;
    }
    public function create(array $data) {
        $query = MYSQLGrammer::buildInsertQuery(array_keys($data));
        $stmt = self::$instance->prepare($query);
        foreach(array_values($data) As $index=>$value){
            $stmt->bindValue($index+1,$value); 
        }       
        return $stmt->execute(); // true , false
    }
    public function read(array $columns = ['*'],$filters = null) {
       $query = MYSQLGrammer::buildSelectQuery($columns,$filters);
       $stmt = self::$instance->prepare($query);
       if($filters){
            $this->filter($stmt , $filters);
       }
       $stmt->execute();
       return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function update(array $data , $filters = null) {

        $query = MYSQLGrammer::buildUpdateQuery(array_keys($data),$filters);
        $stmt = self::$instance->prepare($query);
        foreach(array_values($data) AS $index=>$value){
            $stmt->bindValue($index + 1 , $value); // 1 , 2
        }
        if($filters){
            $this->filter($stmt , $filters , count($data));
        }
       return $stmt->execute();
    }
    public function delete($filters = null) {
        $query = MYSQLGrammer::buildDeleteQuery($filters);
        $stmt = self::$instance->prepare($query);
        if($filters){
             $this->filter($stmt , $filters);
        }
        return $stmt->execute();
    }

    private function filter($stmt ,array $filters , $startBindingIndex = 0){
        if(is_array($filters[0])){
            foreach($filters AS $index => $filter){
                $stmt->bindValue($index + $startBindingIndex + 1 ,$filter[2]);
            }
        }else{
            $stmt->bindValue(1 + $startBindingIndex ,$filters[2]);
        }
    }
}