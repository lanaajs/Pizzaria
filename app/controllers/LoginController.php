<?php

namespace app\controllers;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['logincli']) && $_POST['logincli'] === 'logarli') {
        LoginController::validarLoginCli();
    } 
}

class LoginController
{
    function indexLogin(){
        require 'app/layouts/login.php';
    }

    public static function validarLoginCli()
    {
        // Obtenha o e-mail e a senha enviados pelo formulário
        $email = $_POST['email_Cliente'];
        $senha = $_POST['senha_Cliente'];

        // Conecte-se ao banco de dados (você já tem essa funcionalidade em sua classe Database)
        require_once __DIR__ . '/../../classes/Database.php';
        $db = new \classes\Database();
        $db->ligar();

        // Consulte o banco de dados para verificar se as credenciais são válidas
        $sql = "SELECT * FROM tbCliente WHERE email_Cliente = :email LIMIT 1";
        $parametros = [':email' => $email];
        $resultado = $db->select($sql, $parametros);

        if (!empty($resultado)) {
            // Um registro correspondente foi encontrado
            $cliente = $resultado[0];

            // Verifique se a senha fornecida coincide com a senha armazenada no banco de dados
            if (password_verify($senha, $cliente->senha_Cliente)) {
                // Senha válida
            
                // Inicie a sessão
                session_start();
            
                // Armazene o ID do cliente na variável de sessão
                $_SESSION['cliente_id'] = $cliente->id_Cliente;
            
                // Redirecione o cliente para a página de pedidos
                header("Location: /pedidos/{$_SESSION['cliente_id']}");
            
                // Encerre o script para evitar saída adicional
                exit();
            } else {
                // Senha incorreta
                echo "Senha incorreta. Tente novamente.";
            }
        } else {
            // Nenhum registro correspondente foi encontrado
            echo "E-mail não encontrado.";
        }

        $db->desligar();
    }
    

}