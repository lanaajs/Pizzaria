<?php

namespace app\controllers;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['selectedValue']) && $_POST['selectedValue'] === 'selectValue') {
        PedidosController::validarPedido();
    }
}

class PedidosController
{
    function indexPedidos(int $id)
    {
        require 'app/layouts/pedidos.php';
    }

    public static function validarPedido()
    {
        require_once __DIR__ . '/../../classes/Database.php';
        try {
            $size = $_POST['size'];
            $qtdsab = $_POST['qtdsab'];
            $selectedValue = $_POST['selectedValue'];
            $status_Pedido = 'Em andamento'; // Ou qualquer valor padrão que você deseje

            // Agora você pode inserir esses dados no banco de dados

            $db = new \classes\Database();
            $db->ligar();
            $db->iniciarTransacao();



            // Agora você pode inserir esses dados na tabela tbPedido
            $sqlPedido = "INSERT INTO tbPedido (
                id_Cliente_FK, id_Entregador_FK, id_Cartao_FK, data_Pedido, tamanho_pizza, sabores, valorTotal, status_Pedido
            ) VALUES (
                :id_Cliente_FK, :id_Entregador_FK, :id_Cartao_FK, NOW(), :tamanho_pizza, :sabores, :valorTotal, :status_Pedido
            )";

            $parametrosPedido = array(
                ':id_Cliente_FK' => 1,
                ':id_Entregador_FK' => 1,
                ':id_Cartao_FK' => 1,
                ':tamanho_pizza' => $size,
                ':qtdsabores' => $qtdsab,
                ':sabores' => $selectedValue,
                ':valorTotal' => mt_rand(4000, 9000) / 100,
                ':status_Pedido' => $status_Pedido
            );

            $resultadoPedido = $db->insert($sqlPedido, $parametrosPedido);

            if ($resultadoPedido !== false) {
                $db->confirmarTransacao();
                header('Location: /login');
                exit();
            } else {
                $db->cancelarTransacao();
                echo "Erro ao cadastrar o pedido. Por favor, tente novamente.";
            }

            $db->desligar();
        } catch (\PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
}
