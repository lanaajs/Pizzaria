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

    $r->addRoute('GET', '/carrinho/{id:[0-9]+}', CarrinhoController::class . '@indexCarrinho');
    $r->addRoute('POST', '/carrinho/{id:[0-9]+}', CarrinhoController::class . '@finalizarCompra');

    $r->addRoute('GET', '/', HomeController::class . '@index');

    $r->addRoute('GET', '/login', LoginController::class . '@indexLogin');
    $r->addRoute('POST', '/login', LoginController::class . '@validarLoginCuid');

    $r->addRoute('GET', '/pedidos/{id:[0-9]+}',PedidosController::class . '@indexPedidos');
    $r->addRoute('POST', '/pedidos/{id:[0-9]+}', PedidosController::class . '@enviarPedidos');

    $r->addRoute('GET', '/perfil/{id:[0-9]+}', PerfilController::class . '@indexPerfil');
    $r->addRoute('POST', '/perfil/{id:[0-9]+}', PerfilController::class . '@alterarDados');

});

require 'Router.php';
