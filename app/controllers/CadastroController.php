<?php

namespace app\controllers;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['cadastrocli']) && $_POST['cadastrocli'] === 'cadastrarcli') {
        CadastroController::validarCadastroCli();
    } 
}

class CadastroController
{
    function indexCadastro(){
        require 'app/layouts/cadastro.php';
    }

    public static function validarCadastroCli()
    {
        require_once __DIR__ . '/../../classes/Database.php';
        try {
            $nome = $_POST['nome_Cliente'];
            $genero = $_POST['genero_Cliente'];
            $email = $_POST['email_Cliente'];
            $senha = password_hash($_POST['senha_Cliente'], PASSWORD_DEFAULT);
            $telefone = $_POST['tel_Cliente'];
            $rg = $_POST['RG_Cliente'];
            $cpf = $_POST['CPF_Cliente'];
            $dataNasc = $_POST['dataNasc_Cliente'];
            $estado = $_POST['estado_Cliente'];
            $cep = $_POST['CEP_Cliente'];
            $cidade = $_POST['cidade_Cliente'];
            $bairro = $_POST['bairro_Cliente'];
            $endereco = $_POST['endereco_Cliente'];
            $complemento = $_POST['complemento_Cliente'];
            $numero = $_POST['numero_Cliente'];

            // Agora você pode inserir esses dados no banco de dados

            $db = new \classes\Database();
            $db->ligar();
            $db->iniciarTransacao();

            $sql = "INSERT INTO tbCliente (
                        nome_Cliente, genero_Cliente, email_Cliente, senha_Cliente, tel_Cliente, RG_Cliente, CPF_Cliente, dataNasc_Cliente,
                        estado_Cliente, CEP_Cliente, cidade_Cliente, bairro_Cliente, endereco_Cliente, complemento_Cliente, numero_Cliente
                    ) VALUES (
                        :nome, :genero, :email, :senha, :telefone, :rg, :cpf, :dataNasc, :estado, :cep, :cidade, :bairro, :endereco, :complemento, :numero
                    )";

            $parametros = array(
                ':nome' => $nome,
                ':genero' => $genero,
                ':email' => $email,
                ':senha' => $senha,
                ':telefone' => $telefone,
                ':rg' => $rg,
                ':cpf' => $cpf,
                ':dataNasc' => $dataNasc,
                ':estado' => $estado,
                ':cep' => $cep,
                ':cidade' => $cidade,
                ':bairro' => $bairro,
                ':endereco' => $endereco,
                ':complemento' => $complemento,
                ':numero' => $numero
            );

            $resultado = $db->insert($sql, $parametros);

            if ($resultado !== false) {
                $db->confirmarTransacao();
                header('Location: /login');
            } else {
                $db->cancelarTransacao();
                echo "Erro ao cadastrar. Por favor, tente novamente.";
            }

            $db->desligar();
        } catch (\PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    
}