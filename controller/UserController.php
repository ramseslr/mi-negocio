<?php
;
require_once 'service/UserService.php';

class UserController
{
    private $userService;

    public function __construct()
    {
        $this->userService = new UserService();
    }

    public function showUsers()
    {
        $users = $this->userService->getUsers();
        require 'view/User.php';
    }

    public function addUser() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['name'])) {
            $name = trim($_POST['name']);
            $this->userService->createUser($name);
             $this->showUsers();
        } else {
            echo "Invalid input!";
        }
    }

    public function updateUser() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['name'])) {
            $name = trim($_POST['name']);
            $this->userService->updateUser($_POST['id'],$name);
             $this->showUsers();
        } else {
            echo "Invalid input!";
        }
    }

    public function deleteUser() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' ) {
        
            $this->userService->deleteUser($_POST['id']);
             $this->showUsers();
        } else {
            echo "Invalid input!";
        }
    }
}