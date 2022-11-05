<?php
namespace Database;
class User extends Model{
   public function create(array $data)
   {
        $query = "INSERT INTO users (name,age) VALUES (:first_name , :age)";
        $stmt = $this->connection->prepare($query);
        $stmt->execute($data);
   }
   public function update(array $data)
   {
        $query = "UPDATE users SET name = :name , age = :age WHERE id = :id ";
        $stmt = $this->connection->prepare($query);
        $stmt->execute($data);
   }

   public function delete(array $data)
   {
        $query = "DELETE FROM users WHERE id = :id ";
        $stmt = $this->connection->prepare($query);
        $stmt->execute($data);
   }

   public function read()
   {
        $query = "SELECT * FROM users";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
   }
}