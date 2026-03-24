<?php

require_once 'controller/UserController.php';
require_once 'controller/ClienteController.php';

$controller = new UserController();
$clientecontroller = new ClienteController();

$action = $_GET['action'] ?? '';

switch ($action) {
    case 'addUser':

        $controller->addUser();
        break;
    case 'updateUser':

        $controller->updateUser();
        break;
    case 'deleteUser':

        $controller->deleteUser();
        break;
    case 'showUser':
        $controller->showUsers();
        break;
    case 'showClientes':
        $clientecontroller->showClientes();
        break;


    default:
        $controller->showUsers();
        break;
}

?>