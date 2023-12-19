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
            $status_Pedido = 'Em andamento';
            $sabor1 = $_POST['sabor1'];
            $sabor2 = $_POST['sabor2'];
            $sabor3 = $_POST['sabor3'];
            $sabor4 = $_POST['sabor4'];
            $saboresDesejados = array();

            \var_dump($size);
            \var_dump($qtdsab);

            $saboresFiltrados = array("Margue Rita No Mi", "Chee Se No Mi", "Veg Veg no Mi", "Pe Pero no Mi");

            foreach ($_POST as $key => $value) {
                if (in_array($value, $saboresFiltrados)) {
                    $saboresDesejados[] = $value;
                }
            }

            $saboresString = implode(", ", $saboresDesejados);
            var_dump($saboresString);

            $saboresPrecosPequena = array( //valores de uma pizza pequena de 1 sabor
                "Margue Rita No Mi" => 35.00,
                "Chee Se No Mi" => 30.00,
                "Veg Veg no Mi" => 29.00,
                "Pe Pero no Mi" => 42.00
            );

            $saboresPrecosMedia = array( //valores de uma pizza média de 1 sabor
                "Margue Rita No Mi" => 45.00,
                "Chee Se No Mi" => 40.00,
                "Veg Veg no Mi" => 39.00,
                "Pe Pero no Mi" => 52.00
            );

            $saboresPrecosGrande = array( //valores de uma pizza grande de 1 sabor
                "Margue Rita No Mi" => 55.00,
                "Chee Se No Mi" => 50.00,
                "Veg Veg no Mi" => 59.00,
                "Pe Pero no Mi" => 62.00
            );

            $saboresPrecosFamilia = array( //valores de uma pizza família de 1 sabor
                "Margue Rita No Mi" => 65.00,
                "Chee Se No Mi" => 60.00,
                "Veg Veg no Mi" => 69.00,
                "Pe Pero no Mi" => 72.00
            );

            $valorTotal = 0;

            foreach ($saboresDesejados as $sabor) {
                // Verifique se o sabor existe nos arrays de preços para diferentes tamanhos
                if (
                    array_key_exists($sabor, $saboresPrecosPequena) &&
                    array_key_exists($sabor, $saboresPrecosMedia) &&
                    array_key_exists($sabor, $saboresPrecosGrande) &&
                    array_key_exists($sabor, $saboresPrecosFamilia)
                ) {

                    // Obtenha o preço do sabor com base no tamanho escolhido
                    switch ($size) {
                        case "Pequena":
                            $precoSabor = $saboresPrecosPequena[$sabor];
                            break;
                        case "Média":
                            $precoSabor = $saboresPrecosMedia[$sabor];
                            break;
                        case "Grande":
                            $precoSabor = $saboresPrecosGrande[$sabor];
                            break;
                        case "Família":
                            $precoSabor = $saboresPrecosFamilia[$sabor];
                            break;
                        default:
                            // Lide com o caso em que o tamanho não é reconhecido
                            echo "Erro: Tamanho de pizza não reconhecido.";
                            exit();
                    }

                    // Adicione o preço do sabor ao valor total
                    $valorTotal += $precoSabor / $qtdsab;
                    \var_dump($valorTotal);
                }
            }




            $db = new \classes\Database();
            $db->ligar();
            $db->iniciarTransacao();



            // Agora você pode inserir esses dados na tabela tbPedido
            $sqlPedido = "INSERT INTO tbPedido (
                id_Cliente_FK, id_Entregador_FK, id_Cartao_FK, data_Pedido, qtdsabores, tamanho_pizza, sabores, valorTotal, status_Pedido
            ) VALUES (
                :id_Cliente_FK, :id_Entregador_FK, :id_Cartao_FK, NOW(), :qtdsabores, :tamanho_pizza, :sabores, :valorTotal, :status_Pedido
            )";

            $parametrosPedido = array(
                ':id_Cliente_FK' => 1,
                ':id_Entregador_FK' => 1,
                ':id_Cartao_FK' => 1,
                ':tamanho_pizza' => $size,
                ':qtdsabores' => $qtdsab,
                ':sabores' => $saboresString,
                ':valorTotal' => $valorTotal,
                ':status_Pedido' => $status_Pedido
            );


            $resultadoPedido = $db->insert($sqlPedido, $parametrosPedido);
            var_dump($resultadoPedido);

            if (is_null($resultadoPedido)) {
                $db->confirmarTransacao();
                $db->desligar();
                header('Location: /carrinho');
            } else {
                $db->cancelarTransacao();
                $db->desligar();
                echo "Erro ao cadastrar. Por favor, tente novamente.";
            }
        } catch (\PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
}
