<?php
;
require_once 'service/ClienteService.php';

class ClienteController
{
    private $clienteService;

    public function __construct()
    {
        $this->clienteService = new ClienteService();
    }

    public function showClientes()
    {
        $users = $this->clienteService->getClientes();
        require 'view/Clientes.php';
    }


}