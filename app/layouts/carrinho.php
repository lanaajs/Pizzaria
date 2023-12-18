<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="shortcut icon" href="midia/20.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/assets/css/carrinho.css">
    <title>Carrinho</title>
</head>

<body>
    <main class="container-xl px-4 mt-4">
        <header>Carrinho<i class="btn-carrinho bx bx-cart"></i></header>
        <hr class="mt-3 mb-4">
        <div class="row" id="carrinhoSection">
            <div class="itens-carrinho-box col-xl-8">
                <div class="card-header1">Itens</div>
                <div class="itens-carrinho col-xl-12">
                    <div class="box-img-produto">
                        <img id="img-produto" src="../../public/assets/img/calabresa.jpg" alt="">
                    </div>
                    <div id="info-pedido">
                        <h3>Pizza de Calabresa</h3>
                        <button id="btn-excluir" type="button"><p>Excluir</p></button>
                        <div id="valor-quantidade">
                            <input type="number">
                            <h3>R$ 45.00</h3>
                        </div>
                    </div>
                </div>
                <div class="mb-4 mb-xl-0">
                </div>
            </div>
            <div class="col-xl-4">
                <div class="resumo-compra mb-4">
                    <div class="card-header2">Resumo do pedido</div>
                    <button type="button">Finalizar Pedido</button>
                </div>
            </div>
            <div class="row" id="img-nami">
                <div class="col-xl-8"></div>
                <div class="col-xl-4">
                    <img id="img" src="../../public/assets/img/nami-icon.png" alt="imagem-nami">
                </div>
            </div>
        </div>
    </main>
</body>

</html>