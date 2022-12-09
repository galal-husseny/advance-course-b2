<?php
namespace Src\Validation\Rules;

use Src\Validation\Rules\Contract\Rule;

class ExistsRule implements Rule{
    public function __construct(private $table ,private $column ) {
        
    }

    public function apply($field , $value , $data) : bool {
        $query = "SELECT {$this->column} FROM {$this->table} WHERE {$this->column} = ?";
        return (bool) app()->db->raw($query,[$value]);
    }
    public function message() :string {
         return ":attribute dosen't exists";
    }
    public function __toString() :string {
         return "exists";
    }
}