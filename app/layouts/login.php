<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="midia/20.png" type="image/x-icon">    
    <link rel="stylesheet" href="../../public/assets/css/login.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">  
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<link rel="shortcut icon" href="midia/20.png" type="image/x-icon">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    
    

    <script src="js/login.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <title>One Pizza</title>
</head>
<body>

    <header class="cabecalho">
		<a href="#" class="logo"><img src="../../public/assets/img/logo.png" alt="logo"></a>
	
		<div class="h-icons">
			<a href="home.html"><i class='bx bx-home' ></i></a>
			<a href="#"><i class='bx bx-cart' ></i></a>
		</div>

	</header>

    <div id="universo">
        <section>
            <form action="/login" method="POST">
                <h1>Login</h1>
                <div class="inputbox" id="inputemail">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="email" required id="email" autocomplete="off" name="email_Cliente">
                    <label for="email_Cliente">Email</label>
                </div>
                <div class="inputbox" id="inputsenha">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" required id="senha" name="senha_Cliente">
                    <label for="senha_Cliente">Senha</label>
                </div>
                <div class="forget">
                    <label for="check"><input type="checkbox" name="check">Lembre de mim</label>
                </div>
                <input type="hidden" name="logincli" value="logarcli"> 
                <button onclick="verificar()">Entrar</button>
                <div class="register">
                    <p>Não possui Login? <a href="cadastro.html">Clique aqui</a></p>
                </div>
            </form>
        </section>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>