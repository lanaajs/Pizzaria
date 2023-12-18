CREATE DATABASE pizzaria;
USE pizzaria;



-- ------------------------------------- TABELA CADASTRO CLIENTES -------------------------------------------------------------------------- --
CREATE TABLE tbCliente (
    id_Cliente INT AUTO_INCREMENT PRIMARY KEY,
    nome_Cliente VARCHAR(255),
    genero_Cliente ENUM('Masculino', 'Feminino', 'Fluido', 'Não Binário', 'Prefiro não informar'),
    email_Cliente VARCHAR(255),
    senha_Cliente VARCHAR(255),
    tel_Cliente VARCHAR(15),
    RG_Cliente VARCHAR(13),
    CPF_Cliente VARCHAR(15),
    dataNasc_Cliente DATE,
    estado_Cliente ENUM('AC', 'AL', 'AP', 'AM', 'BA', 'CE', 'DF', 'ES', 'GO', 'MA', 'MT', 'MS', 'MG', 'PA', 'PB', 'PR', 'PE', 'PI', 'RJ', 'RN', 'RS', 'RO', 'RR', 'SC', 'SP', 'SE', 'TO'),
    CEP_Cliente VARCHAR(10),
    cidade_Cliente VARCHAR(255),
    bairro_Cliente VARCHAR(255),
    endereco_Cliente VARCHAR(255),
    complemento_Cliente VARCHAR(255),
    numero_Cliente VARCHAR(5)
);

drop tab


-- ------------------------------------- TABELA ENTREGADOR -------------------------------------------------------------------------- --
CREATE TABLE tbEntregador (
    id_Entregador INT AUTO_INCREMENT PRIMARY KEY,
    nome_Entregador VARCHAR(255),
    genero_Entregador ENUM('Masculino', 'Feminino', 'Fluido', 'Não Binário', 'Não Informar'),
    email_Entregador VARCHAR(255),
    tel_Entregador VARCHAR(15),
    whatsapp_Entregador ENUM("S", "N"),
    RG_Entregador VARCHAR(13),
    CPF_Entregador VARCHAR(15),
    dataNasc_Entregador DATE
);

-- ------------------------------------- TABELA SABOR -------------------------------------------------------------------------- --
CREATE TABLE tbSabor (
    id_Sabor INT AUTO_INCREMENT PRIMARY KEY,
    nome_Sabor VARCHAR(255),
    ingredientes_Sabor VARCHAR(255)
);

-- ------------------------------------- TABELA PIZZA -------------------------------------------------------------------------- --
CREATE TABLE tbPizza (
    id_Pizza INT AUTO_INCREMENT PRIMARY KEY,
    id_Sabor_FK INT,
    FOREIGN KEY (id_Sabor_FK) REFERENCES tbSabor(id_Sabor),
    tamanho ENUM('P', 'M', 'G')
);

-- ------------------------------------- TABELA CARTÂO -------------------------------------------------------------------------- --
CREATE TABLE tbCartao (
    id_Cartao INT AUTO_INCREMENT PRIMARY KEY,
    id_Cliente_FK INT,
    numero_Cartao VARCHAR(16),
    nomeTitular_Cartao VARCHAR(255),
    validade_Cartao DATE,
    codigoSeguranca_Cartao VARCHAR(3),
    tipo_Cartao ENUM('Débito', 'Credito'), 
    FOREIGN KEY (id_Cliente_FK) REFERENCES tbCliente(id_Cliente)
);

-- ------------------------------------- TABELA PEDIDO -------------------------------------------------------------------------- --
CREATE TABLE tbPedido (
    id_Pedido INT AUTO_INCREMENT PRIMARY KEY,
    id_Cliente_FK INT,
    id_Entregador_FK INT,
    id_Cartao_FK INT,
    data_Pedido DATE,
    tamanho_pizza ENUM('Pequena', 'Média', 'Grande', 'Família'),
    sabores VARCHAR(70),
    valorTotal FLOAT,
    status_Pedido ENUM('Em andamento', 'Entregue', 'Cancelado'),
    FOREIGN KEY (id_Cliente_FK) REFERENCES tbCliente(id_Cliente),
    FOREIGN KEY (id_Entregador_FK) REFERENCES tbEntregador(id_Entregador),
    FOREIGN KEY (id_Cartao_FK) REFERENCES tbCartao(id_Cartao)
);





-- ------------------------------------- VIEW (AGRUPAMENTO) GASTO TOTAL POR CLIENTE ----------------------------------------------------- --
CREATE VIEW vwGastoTotalCliente AS
SELECT
    C.id_Cliente AS "ID do Cliente",
    C.nome_Cliente AS "Nome do Cliente",
    C.tel_Cliente AS "Telefone do Cliente",
    C.email_Cliente AS "Email do Cliente",
    P.valorTotal AS "Gasto Total"
FROM
    tbCliente C
LEFT JOIN
    tbPedido P ON C.id_Cliente = P.id_Cliente_FK
GROUP BY
    C.id_Cliente, C.nome_Cliente, C.tel_Cliente, C.email_Cliente;


-- ------------------------------------- VIEW (Between) PEDIDOS POR INTERVALO DE DATAS ----------------------------------------------- --
CREATE VIEW vwPedidosPorIntervalo AS
SELECT
    id_pedido AS "ID do Pedido",
    data_Pedido AS "Data do Pedido",
    tamanho_pizza AS "Tamanho da Pizza",
    status_Pedido AS "Status do Pedido"
FROM
    tbPedido
WHERE
    data_Pedido BETWEEN '2023-01-01' AND '2023-12-31';


-- ------------------------------------- VIEW (IN e AND) CLIENTES POR ID E NOME ----------------------------------------------- --
CREATE VIEW vwClientesPorIDENome AS
SELECT
    id_Cliente AS "ID do Cliente",
    nome_Cliente AS "Nome do Cliente",
    tel_Cliente AS "Telefone do Cliente",
    email_Cliente AS "Email do Cliente"
FROM
    tbCliente
WHERE
    id_Cliente IN (1, 2, 3) AND nome_Cliente LIKE '%Alefe%';


-- ------------------------------------- PROCEDURE DE ENTRADA -------------------------------------------------------------------------- --
DELIMITER //
CREATE PROCEDURE InserirCliente(
    IN p_nome VARCHAR(255),
    IN p_genero ENUM('Masculino', 'Feminino', 'Fluido', 'Não Binário', 'Não Informar'),
    IN p_email VARCHAR(255),
    IN p_senha VARCHAR(255),
    IN p_tel VARCHAR(15),
    IN p_whatsapp ENUM("S", "N"),
    IN p_RG VARCHAR(13),
    IN p_CPF VARCHAR(15),
    IN p_dataNasc DATE,
    IN p_estado ENUM('AC', 'AL', 'AP', 'AM', 'BA', 'CE', 'DF', 'ES', 'GO', 'MA', 'MT', 'MS', 'MG', 'PA', 'PB', 'PR', 'PE', 'PI', 'RJ', 'RN', 'RS', 'RO', 'RR', 'SC', 'SP', 'SE', 'TO'),
    IN p_CEP VARCHAR(10),
    IN p_cidade VARCHAR(255),
    IN p_bairro VARCHAR(255),
    IN p_endereco VARCHAR(255),
    IN p_complemento VARCHAR(255),
    IN p_numeroCasa VARCHAR(5)
)
BEGIN
    INSERT INTO tbCliente (nome_Cliente, genero_Cliente, email_Cliente, senha_Cliente, tel_Cliente, whatsapp_Cliente, RG_Cliente, CPF_Cliente, dataNasc_Cliente, estado_Cliente, CEP_Cliente, cidade_Cliente, bairro_Cliente, endereco_Cliente, complemento_Cliente, numeroCasa_Cliente)
    VALUES (p_nome, p_genero, p_email, p_senha, p_tel, p_whatsapp, p_RG, p_CPF, p_dataNasc, p_estado, p_CEP, p_cidade, p_bairro, p_endereco, p_complemento, p_numeroCasa);
END 
DELIMITER ;


-- ------------------------------------- PROCEDURE DE SAIDA -------------------------------------------------------------------------- --
DELIMITER //
CREATE PROCEDURE InfoCliente(IN p_cliente_id INT)
BEGIN
    SELECT * FROM tbCliente WHERE id_Cliente = p_cliente_id;
END 
DELIMITER ;


-- ------------------------------------- TRIGGER PARA ATUALIZAR STATUS DO PEDIDO -------------------------------------------------------------------------- --
DELIMITER //
CREATE TRIGGER trAtualizarStatusPedido
AFTER INSERT ON tbPedido
FOR EACH ROW
BEGIN
    DECLARE total_pedido DECIMAL(10, 2);

    SELECT SUM(quantidade * precoUnitario) INTO total_pedido
    FROM tbPizzaPedido
    WHERE id_Pedido = NEW.id_Pedido;

    IF total_pedido >= 50 THEN
        UPDATE tbPedido
        SET status = 'Entregue'
        WHERE id_pedido = NEW.id_Pedido;
    END IF;
END 
DELIMITER ;