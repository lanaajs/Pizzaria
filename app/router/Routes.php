<?php

use app\controllers\CadastroController;
use app\controllers\CarrinhoController;
use app\controllers\HomeController;
use app\controllers\LoginController;
use app\controllers\PedidosController;
use app\controllers\PerfilController;
use FastRoute\RouteCollector;


require __DIR__ . '/../../vendor/autoload.php';

$dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $r) {
 
    $r->addRoute('GET', '/cadastro', CadastroController::class . '@indexCadastro');
    $r->addRoute('POST', '/cadastro', CadastroController::class . '@validarCadastro');

    $r->addRoute('GET', '/carrinho', CarrinhoController::class . '@indexCarrinho');
    $r->addRoute('POST', '/carrinho', CarrinhoController::class . '@finalizarCompra');

    $r->addRoute('GET', '/', HomeController::class . '@index');

    $r->addRoute('GET', '/login', LoginController::class . '@indexLogin');
    $r->addRoute('POST', '/login', LoginController::class . '@validarLoginCli');

    $r->addRoute('GET', '/pedidos',PedidosController::class . '@indexPedidos');
    $r->addRoute('POST', '/pedidos', PedidosController::class . '@validarPedido');

    $r->addRoute('GET', '/perfil/{id:[0-9]+}', PerfilController::class . '@indexPerfil');
    $r->addRoute('POST', '/perfil/{id:[0-9]+}', PerfilController::class . '@alterarDados');

});

require 'Router.php';
