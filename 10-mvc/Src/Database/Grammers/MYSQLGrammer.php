<?php
namespace Src\Database\Grammers;

use Src\Database\Grammers\Contracts\DatabaseGrammer;
use Src\Database\model;

class MYSQLGrammer implements DatabaseGrammer {
    
    public static function buildSelectQuery(array $columns,$filters = null){
        if($columns[0] == '*'){
            $databaseColumns = $columns[0];
        }else{
            $databaseColumns = implode(', ',$columns);
        }
        $query = "SELECT {$databaseColumns} FROM " . model::getTableName();
        if($filters){
            $query = self::buildWhereQuery($query,$filters);
        }
        return $query;
    }
    public static function buildInsertQuery(array $columns){
        // $query = "INSERT INTO users (";
        // $columnsName = "";
        // $questionMarks = "";
        // foreach($columns AS $index => $column){
        //     $columnsName .= "`{$column}`";
        //     $questionMarks .= "?";
        //     if($index != count($columns) - 1 ){
        //         $columnsName  .= ", " ;
        //         $questionMarks .= ", ";
        //     }
        // }
        // $query .= $columnsName;
        // $query .= ") VALUES (";
        // $query .= $questionMarks;
        // $query .= ")";
        // return $query;
        $databaseColumns = implode('`, `',$columns); // username , password
        $questionMarks = implode(', ',array_fill(1,count($columns),'?')); // username , password
        $query = "INSERT INTO ". model::getTableName()." (`{$databaseColumns}`) VALUES ($questionMarks) ";
        return $query;

    }
    public static function buildUpdateQuery(array $columns,$filters = null){
        $query = "UPDATE ". model::getTableName() ." SET ";
        $query .= implode(' = ? ,',$columns) . " = ? ";
        if($filters){
            $query = self::buildWhereQuery($query,$filters);
        }
        return $query;
    }
    public static function buildDeleteQuery($filters = null){
        $query = "DELETE FROM ". model::getTableName();
        if($filters){
            $query = self::buildWhereQuery($query,$filters);
        }
        return $query;
    }
    public static function buildWhereQuery(string $query,array $filters){
        $where = " WHERE ";
        if(is_array($filters[0])){
            foreach($filters AS $index=>$filter){
                $where .= "`{$filter[0]}` ";
                $where .= $filter[1];
                $where .= " ?";
                if($index != count($filters) - 1){
                    $where .= " AND ";
                }
            }
        }else{
            $where .= "`{$filters[0]}` {$filters[1]} ?";
        }
        $query .= $where;
        return $query;
    }
}

// where([['id','=','1'],['status','=','1']]); // WHERE id = ? and status = ?
// where([8,'=',1]); // WHERE id = ?