<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>One Pizza</title>

	<link rel="stylesheet" href="../../public/assets/css/home.css">

	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<link rel="shortcut icon" href="midia/20.png" type="image/x-icon">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">

</head>

<body>

	<!-- header section -->
	<header class="cabecalho">
		<a href="#" class="logo"><img src="../../public/assets/img/logo.png" alt="logo"></a>
		<ul class="navbar">
			<li><a href="#home">Home</a></li>
			<li><a href="#about">Sobre Nós</a></li>
			<li><a href="#menu">Sabores</a></li>
			<li><a href="#contact">Contato</a></li>
		</ul>

		<div class="h-icons">
			<a href="login.html"><i class='bx bx-log-in'></i></a>
			<a href="/carrinho/1"><i class='bx bx-cart'></i></a>
		</div>

	</header>

	<!-- home section -->
	<section class="home" id="home">
		<div class="home-text">
			<h1>Bem-vindo(a) ao <span>One Pizza!</span><br></h1>
			<p>Em cada pedaço, uma aventura deliciosa! Conheça a One Pizza, onde os sabores do mar encontram a <span>magia</span> da mastigação. A pizza dos <span>piratas</span>, feita para os verdadeiros amantes de <span>tesouros</span> gastronômicos!</p>
			<a href="login.html" class="btn">Faça seu pedido</a>
		</div>
		</div>

		<div class="home-img">
			<img src="../../public/assets/img/peperonomi.png" alt="home">
		</div>
	</section>

	<section class="about insp" id="about">
		<div class="about-img">
			<img src="../../public/assets/img/gif.gif" id="luffyakm" alt="">
		</div>

		<div class="about-text">
			<h2>Pizzas inspiradas no anime <span> One Piece!</span></h2>
			<p>Nossas pizzas são uma explosão de sabores inspirados no emocionante universo de One Piece! Cada fatia é uma homenagem aos personagens cativantes e às aventuras épicas do anime. Além disso, incorporamos a magia das Akumas no Mi, criando combinações únicas que prometem uma experiência culinária verdadeiramente extraordinária.</p>
		</div>

	</section>

	<!-- contact section -->
	<section class="container">
		<div class="main-text">
			<h2>Ingredientes</h2>
			<img src="" alt="">
			<p>Os melhores ingredientes para você. Diretamente do East Blue!</p>
		</div>

		<div class="container-box">
			<div class="c-mainbox">
				<div class="container-img">
					<img src="../../public/assets/img/b1.png" alt="box1">
				</div>
				<div class="container-text">
					<p>Massa de Fermentação Natural</p>
				</div>
			</div>

			<div class="c-mainbox">
				<div class="container-img">
					<img src="../../public/assets/img/b2.png" alt="box2">
				</div>
				<div class="container-text">
					<p>Tomates Frescos</p>
				</div>
			</div>

			<div class="c-mainbox">
				<div class="container-img">
					<img src="../../public/assets/img/b3.png" alt="box3">
				</div>
				<div class="container-text">
					<p>Queijo Mussarela</p>
				</div>
			</div>

			<div class="c-mainbox">
				<div class="container-img">
					<img src="../../public/assets/img/b4.png" alt="box4">
				</div>
				<div class="container-text">
					<p>Peperoni Italiano</p>
				</div>
			</div>
			<div class="c-mainbox">

				<img src="../../public/assets/img/b5.png" id="manjericao" alt="box5">

				<div class="container-text">
					<p>Manjericão da nossa horta</p>
				</div>
			</div>
			<div class="c-mainbox">

				<img src="../../public/assets/img/b6.png" id="azeitona" alt="box6">

				<div class="container-text">
					<p>Azeitonas fresquinhas</p>
				</div>
			</div>
		</div>

	</section>

	<!-- about section -->
	<section class="about" id="about">
		<div class="about-img">
			<img src="../../public/assets/img/sanji.png" alt="">
		</div>

		<div class="about-text">
			<h2>Novidades saindo do forno do <span>Chef Sanji!</span></h2>
			<p>Sanji, o cozinheiro habilidoso e cavalheiro do famoso anime "One Piece", é muito mais do que apenas um mestre na arte da culinária. Nascido em um restaurante flutuante, Baratie, ele desenvolveu um amor pela culinária desde tenra idade.</p>
			<a href="login.html" class="btn">Faça seu pedido</a>
		</div>

	</section>

	<!-- menu section -->

	<section class="menu" id="menu">
		<div class="main-text">
			<h2>Pizzas mais populares</h2>
			<p>As pizzas carro-chefe da nossa tripulação e feitas pelo melhor chef do mundo!</p>
		</div>

		<div class="menu-content">
			<form action="/carrinho" method="POST">
			<?php
			require_once(__DIR__ . '/../../classes/Database.php');
			$db = new classes\Database();
			$db->ligar();

			$query = 'SELECT nome_produto, preco, imagem, descricao FROM tbPizzas';

			$statement = $db->ligacao->prepare($query);

			$statement->execute();

			$result = $statement->fetchAll(PDO::FETCH_CLASS);
			if (!empty($result)) {
				foreach ($result as $row) {
			?>
					<div class="row">
						<img src="../../public/assets/img/<?php echo $row->imagem ?>" alt="main-product1">
						<div class="menu-text">
							<div class="menu-left">
								<h4><?php echo $row->nome_produto ?></h4>
							</div>
							<div class="menu-right">
								<h5>à partir de <?php echo $row->preco ?></h5>
							</div>
						</div>
						<p><?php echo $row->descricao ?></p>
						<div class="star">
							<a href="#"><i class='bx bxs-star'></i></a>
							<a href="#"><i class='bx bxs-star'></i></a>
							<a href="#"><i class='bx bxs-star'></i></a>
							<a href="#"><i class='bx bxs-star'></i></a>
							<a href="#"><i class='bx bxs-star'></i></a>
						</div>
						<br>
						<div class="star">
						<a href="cotroller/carrinho" class="btn">Adicione ao Carrinho</a>
					</div>
					</div>
			<?php
				}
			} else {
				echo "Nenhum resultado encontrado";
			}

			$db->desligar();
			?>
			</form>
		</div>
	</section>


	<section class="menu" id="menu">
		<div class="main-text">
			<h2>Drinks Temáticos</h2>
			<p>As mais refrescantes bebidas que a Tripulação do Chapéu de Palha mais gosta!</p>
		</div>

		<div class="menu-content">
		<form action="/carrinho" method="POST">
			<?php
			require_once(__DIR__ . '/../../classes/Database.php');
			$db = new classes\Database();
			$db->ligar();

			$query = 'SELECT nome_produto, preco, imagem, descricao FROM tbDrinks';

			$statement = $db->ligacao->prepare($query);

			$statement->execute();

			$result = $statement->fetchAll(PDO::FETCH_CLASS);
			if (!empty($result)) {
				foreach ($result as $row) {
			?>
					<div class="row">
						<img src="../../public/assets/img/<?php echo $row->imagem ?>" alt="main-product2">
						<div class="menu-text">
							<div class="menu-left">
								<h4><?php echo $row->nome_produto ?></h4>
							</div>
							<div class="menu-right">
								<h5>R$<?php echo $row->preco ?></h5>
							</div>
						</div>
						<p><?php echo $row->descricao ?></p>
						<a href="login.html" class="btn">Adicione ao Carrinho</a>
					</div>
			<?php
				}
			} else {
				echo "Nenhum resultado encontrado";
			}

			$db->desligar();
			?>
		</div>
		<form action="/carrinho" method="POST">
	</section>

	<!-- contact section -->

	<section class="contact" id="contact">
		<div class="main-contact">
			<div class="contact-content">
				<h4>Serviços</h4>
				<li><a href="#home">Home</a></li>
				<li><a href="#about">Sobre nós</a></li>
				<li><a href="#menu">Sabores</a></li>
				<li><a href="#contact">Contato</a></li>
			</div>

			<div class="contact-content">
				<h4>Delivery</h4>
				<li><a href="#">Uber Eats</a></li>
				<li><a href="#">Ifood</a></li>
				<li><a href="#">Rappi</a></li>
				<li><a href="#">Zé Delivery</a></li>
			</div>

			<div class="contact-content">
				<h4>Contato</h4>
				<li><a href="#">Contate-nos</a></li>
				<li><a href="#">Carreiras</a></li>
				<li><a href="#">FAQ</a></li>
				<li><a href="#">Canal de Atendimento</a></li>
			</div>

			<div class="contact-content">
				<h4>Siga-nos</h4>
				<li><a href="#">TikTok</a></li>
				<li><a href="#">Twitter</a></li>
				<li><a href="#">Facebook</a></li>
				<li><a href="#">Instagram</a></li>
			</div>
		</div>

	</section>

	<div class="last-text">
		<p>© Todos os direitos reservados - One Pizza </p>
	</div>
	<!-- scroll top -->
	<a href="#home" class="scroll-top">
		<i class='bx bx-up-arrow-alt'></i>
	</a>

	<!-- custom scrollreveal link -->

	<script src="https://unpkg.com/scrollreveal"></script>

	<!-- custom js link -->
	<script type="text/javascript" src="../../public/assets/js/home.js"></script>

</body>

</html>