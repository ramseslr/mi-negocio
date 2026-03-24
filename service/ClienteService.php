<?php
require_once 'config/database.php';
include_once 'model/Cliente.php';

class ClienteService
{
    private $conn;

    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function getClientes()
    {
        $stmt = $this->conn->prepare("SELECT * FROM clientes");
        $stmt->execute();

        $users = [];
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($rows as $value) {

            $user = new User();
            $user->setId($value['id']);
            $user->setName($value['name']);
            $user->setApellido($value['apellido']);
            $user->setCuit($value['cuit']);
            $user->setEmail($value['email']);
            $user->setTelefono($value['telefono']);

            $users[] = $user;
        }


        return $users;
    }


}