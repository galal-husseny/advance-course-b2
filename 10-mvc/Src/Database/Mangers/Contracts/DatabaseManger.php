<?php
namespace Src\Database\Mangers\Contracts;

interface DatabaseManger{
    public function connect() :\PDO;
    public function raw(string $query,array $values);
    public function create(array $data);
    public function read(array $columns = ['*'],$filter = null);
    public function update(array $data , $filter = null);
    public function delete($filter = null);
}


