<?php
require_once 'config/database.php';
include_once 'model/User.php';

class UserService
{
    private $conn;

    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function getUsers()
    {
        $stmt = $this->conn->prepare("SELECT * FROM users");
        $stmt->execute();

        $users = [];
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($rows as $value) {
            $user = new User();
            $user->setId($value['id']);
            $user->setName($value['name']);
            $users[] = $user;
        }


        return $users;
    }

    public function createUser($name)
    {
        $stmt = $this->conn->prepare("INSERT INTO users (name) values ('".$name."')");
        // $stmt->execute();

       /* $users = [];
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($rows as $value) {
            $user = new User();
            $user->setId($value['id']);
            $user->setName($value['name']);
            $users[] = $user; 
        }
        */

        return $stmt->execute();
    }

    public function updateUser($id,$name)
    {
        $stmt = $this->conn->prepare("UPDATE  users SET name = '".$name."' WHERE id = '".$id."'");
        // $stmt->execute();

       /* $users = [];
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($rows as $value) {
            $user = new User();
            $user->setId($value['id']);
            $user->setName($value['name']);
            $users[] = $user; 
        }
        */

        return $stmt->execute();
    }

    public function deleteUser($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM  users WHERE id = '".$id."'");
        // $stmt->execute();

       /* $users = [];
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($rows as $value) {
            $user = new User();
            $user->setId($value['id']);
            $user->setName($value['name']);
            $users[] = $user; 
        }
        */

        return $stmt->execute();
    }
}