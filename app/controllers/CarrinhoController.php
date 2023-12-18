<?php

namespace app\controllers;

class CarrinhoController
{
    function indexCarrinho(int $id){
        require 'app/layouts/carrinho.php';
    }
}