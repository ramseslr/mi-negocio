<?php

require_once 'controller/UserController.php';

$controller = new UserController();

$action = $_GET['action'] ?? '';

switch ($action) {
    case 'addUser':
        $controller->addUser();
        break;
    default:
        $controller->showUsers();
        break;
}

?>