<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>One Pizza</title>

	<link rel="stylesheet" href="../../public/assets/css/pedidos.css">

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

		<div class="h-icons">
			<a href="login.html"><i class='bx bx-circle'></i></a>
			<a href="#"><i class='bx bx-cart'></i></a>
		</div>

	</header>

	<!-- home section -->
	<section class="home" id="home">
		<div class="home-text">
			<h1>Monte a sua pizza, <span>pirata!</span><br></h1>
			<p>
				Aventure-se na criação da <span>sua própria pizza</span> e embarque em uma jornada de sabores tão
				emocionante quanto a tripulação do Chapéu de Palha! Na nossa pizzaria, convidamos você a montar sua
				pizza única, <span>inspirada nos gostos mais incríveis</span> dos personagens cativantes de One Piece.
			</p>
			<a href="#" class="btn"><i class='bx bx-down-arrow-alt'></i></a>
		</div>
		</div>

		<div class="home-img">
			<img src="../../public/assets/img/montesuapizza.png" alt="home">
		</div>
	</section>

	<section class="container">
		<div class="main-text">
			<h2>Escolha o <span>tamanho </span> da sua fome</h2>
			<img src="" alt="">
			<p>Temos tamanhos variados para atender ao tamanho da sua fome em todos os momentos.</p>
		</div>
		<form id="form" action="/pedidos" method="POST">
			<div class="container-box">
				<div class="c-mainbox">
					<input type="radio" name="size" id="peq" value="Pequena" onclick="tamanho('Pequena')">
					<label for="peq" class="lbl lbl1"><span>Pequena <br> 3</span></label>
				</div>

				<div class="c-mainbox">
					<input type="radio" name="size" id="med" value="Média" onclick="tamanho('Média')">
					<label for="med" class="lbl lbl2"><span>Média 6</span></label>
				</div>

				<div class="c-mainbox">
					<input type="radio" name="size" id="gran" value="Grande" onclick="tamanho('Grande')">
					<label for="gran" class="lbl lbl3"><span>Grande <br> 9</span></label>
				</div>

				<div class="c-mainbox">
					<input type="radio" name="size" id="fam" value="Família" onclick="tamanho('Família')">
					<label for="fam" class="lbl lbl4"><span>Família <br> 12</span></label>
				</div>
			</div>

			<div class="main-text text2" id="titulo">
				<h2>Escolha a <span>quantidade de sabores</span> deliciosos</h2>
				<img src="" alt="">
				<p>Temos tamanhos variados para atender ao tamanho da sua fome em todos os momentos.</p>
			</div>

			<div class="container-box second" id="sbradios">
				<div class="c-mainbox" onclick="Select(1)">
					<input type="radio" name="qtdsab" value="1" id="1sbr" class="1">
					<label for="peq" class="lbll lbl5"><span>1 Sabor</span></label>
				</div>

				<div class="c-mainbox" onclick="Select(2)">
					<input type="radio" name="qtdsab" value="2" id="2sbr" class="2">
					<label for="med" class="lbll lbl6"><span>2 Sabores</span></label>
				</div>

				<div class="c-mainbox" onclick="Select(3)">
					<input type="radio" name="qtdsab" value="3" id="3sbr" class="3">
					<label for="gran" class="lbll lbl7"><span>3 Sabores</span></label>
				</div>

				<div class="c-mainbox" onclick="Select(4)">
					<input type="radio" name="qtdsab" value="4" id="4sbr" class="4">
					<label for="fam" class="lbll lbl8"><span>4 Sabores</span></label>
				</div>
			</div>
	</section>
	<section class="about insp" id="about">
		<div class="about-img">
			<div class="sabor sabor1"><img id="sab1" src="../../public/assets/img/pizza vegetariana 1-4.png" alt=""></div>
			<div class="sabor sabor2"><img id="sab2" src="../../public/assets/img/pizza calabresa 4-4.png" alt=""></div>
			<div class="sabor sabor3"><img id="sab3" src="../../public/assets/img/pizza queijo 2-4.png" alt=""></div>
			<div class="sabor sabor4"><img id="sab4" src="../../public/assets/img/pizza marguerita 3-4.png" alt=""></div>
		</div>

		<div class="about-text">
			<h2>Escolha o <span> melhor sabor </span>para você:</span></h2>
			<select class="sabores hidden" id="sabor1" name="sabor1" onchange="atualizarImagem('sabor1')">
				<option val="">Sabor 1</option>
				<option val="1.1">Margue Rita No Mi</option>
				<option val="2.1">Chee Se No Mi</option>
				<option val="3.1">Veg Veg no Mi</option>
				<option val="4.1">Pe Pero no Mi</option>
			</select>
			<select class="sabores hidden" id="sabor2" name="sabor2" onchange="atualizarImagem('sabor2')">
				<option val="">Sabor 2</option>
				<option val="1.2">Margue Rita No Mi</option>
				<option val="2.2">Chee Se No Mi</option>
				<option val="3.2">Veg Veg no Mi</option>
				<option val="4.2">Pe Pero no Mi</option>
			</select>
			<select class="sabores hidden" id="sabor3" name="sabor3" onchange="atualizarImagem('sabor3')">
				<option val="">Sabor 3</option>
				<option val="1.3">Margue Rita No Mi</option>
				<option val="2.3">Chee Se No Mi</option>
				<option val="3.3">Veg Veg no Mi</option>
				<option val="4.3">Pe Pero no Mi</option>
			</select>
			<select class="sabores hidden" id="sabor4" name="sabor4" onchange="atualizarImagem('sabor4')">
				<option val="">Sabor 4</option>
				<option val="1.4">Margue Rita No Mi</option>
				<option val="2.4">Chee Se No Mi</option>
				<option val="3.4">Veg Veg no Mi</option>
				<option val="4.4">Pe Pero no Mi</option>
			</select>
			<div class="addcart">
				<input type="hidden" id="selectedValue" name="selectedValue" value="selectValue">
				<input type="submit" class="btn" value="Adicionar ao Carrinho">
			</div>
		</div>
	</section>
	</form>

	<!-- contact section -->

	<!-- about section -->


	<!-- menu section -->

	<section class="menu" id="menu">
		<div class="main-text">
			<h2>Bebidas</h2>
			<p>As mais refrescantes bebidas que a Tripulação do Chapéu de Palha mais gosta!</p>
		</div>

		<div class="menu-content">
			<div class="row">
				<img src="../../public/assets/img/drink-2.jpg" alt="main-product2">
				<div class="menu-text">
					<div class="menu-left">
						<h4>Chá Gelado do <br> Zoro</h4>
					</div>
					<div class="menu-right">
						<h5>R$15.60</h5>
					</div>
				</div>
				<p>Ultra chá gelado temático do zoro sabor chá matte.</p>
				<div class="star">
					<a href="#"><i class='bx bxs-cart'></i></a>
					<a href="#"><i class='bx bx-plus'></i></a>
				</div>
			</div>

			<div class="row">
				<img src="../../public/assets/img/drink-1.jpg" alt="main-product2">
				<div class="menu-text">
					<div class="menu-left">
						<h4>Água com Gás do Luffy</h4>
					</div>
					<div class="menu-right">
						<h5>R$18.80</h5>
					</div>
				</div>
				<p>Água com gás temática do Luffy com sabor de yogurt.</p>
				<div class="star">
					<a href="#"><i class='bx bxs-cart'></i></a>
					<a href="#"><i class='bx bx-plus'></i></a>
				</div>
			</div>

			<div class="row">
				<img src="../../public/assets/img/drink-3.jpg" alt="main-product3">
				<div class="menu-text">
					<div class="menu-left">
						<h4>Água com Gás da Nami</h4>
					</div>
					<div class="menu-right">
						<h5>R$10.50</h5>
					</div>
				</div>
				<p>Água com gás temática da Nami com sabor de manga.</p>
				<div class="star">
					<a href="#"><i class='bx bxs-cart'></i></a>
					<a href="#"><i class='bx bx-plus'></i></a>
				</div>
			</div>

			<div class="row">
				<img src="../../public/assets/img/drink-4.jpg" alt="main-product4">
				<div class="menu-text">
					<div class="menu-left">
						<h4>Fanta Laranja do Luffy</h4>
					</div>
					<div class="menu-right">
						<h5>R$13.00</h5>
					</div>
				</div>
				<p>A famosa Fanta Laranja com o rosto do nosso rei dos piratas</p>
				<div class="star">
					<a href="#"><i class='bx bxs-cart'></i></a>
					<a href="#"><i class='bx bx-plus'></i></a>
				</div>
			</div>
		</div>

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
	<script src="../../public/assets/js/pedidos.js"></script>
	<script src="../../public/assets/js/teste.js"></script>
</body>

</html>