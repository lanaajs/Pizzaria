<?php

namespace app\controllers;

class PedidosController
{
    function indexPedidos(int $id){
        require 'app/layouts/pedidos.php';
    }
}