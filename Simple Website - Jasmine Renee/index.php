<!DOCTYPE html>
<html>
<head>
	<title>Loja Virtual</title>
	<link rel="stylesheet" href="estilo/all.css" rel="stylesheet"> <!--load all styles -->
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;600&display=swap" rel="stylesheet">
	<link href="estilo/style.css" rel="stylesheet"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="palavras chaves, do , meu, site">
	<meta name="description" content="Descrição do Site">
	<meta charset="utf-8" />
</head>
<body>

	<header>
		<div class="center">
			<div class="logo left">Jasmine Renee</div><!--logo-->
			<nav class="desktop right">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">Sobre</a></li>
					<li><a href="services.php">Serviços</a></li>
					<li><a href="">Contacto</a></li>
				</ul>
			</nav>
			<nav class="mobile right">
				<div class="botao-menu-mobile">
					<i class="fas fa-bars"></i>
				</div>
				<ul>
					<li><a href="">Home</a></li>
					<li><a href="">Sobre</a></li>
					<li><a href="">Serviços</a></li>
					<li><a href="">Contacto</a></li>
				</ul>
			</nav>
		<div class="clear"></div><!--clear-->
		</div><!--center-->
	</header>


	<section class="banner-principal">
	<div class="overlay"></div><!--overlay-->
		<div class="center">
			<form>
				<h2>Enter your email now and answer any questions with me.</h2>
				<input type="email" name="email" required />
				<input type="submit" name="acao" value="Cadastrar!">
			</form>
		</div><!--center-->
	</section> <!--banner-principal-->


	<section class="descricao-autor">

		<div class="center">
			<div class="w50 left">
				<h2>Jasmine Renee</h2>
				<p>Are you trying to sell your products but don't have an audience to sell them to?</p>
				<p>There are more and more people living on their own business, starting a business from scratch is not an easy task and that is why many people who want to start working choose to ask influencers to promote their products. </p>
				<p>Welcome to my page here you can contact me for a partnership proposal.</p>
			</div><!--w50-->
			<div class="w50 left">
				<!--Pegar imagem depois-->
				<img class="right" src="image/image.jpg" />
			</div><!--w50-->
			<div class="clear"></div><!--clear-->
		</div><!--center-->
	</section> <!--descricao-autor-->


	<section class="especialidades">

		<div class="center">
			<h2 class="title">Especialidades</h2>
			<div class="w33 left box-especialidade">
				<h3><i class="fas fa-cog"></i></h3>
				<h4>Vetting</h4>
				<p>All proposals are examined by my team. In this way, we can guarantee and certify that all interested parties that the proposal is profitable and that both parties are reliable.</p>
			</div><!--box-especialidade-->
			<div class="w33 left box-especialidade">
				<h3><i class="fas fa-business-time"></i></h3>
				<h4>Quality</h4>
				<p>We believe that all the products already announced by me represent a good business opportunity. Whether low or high value, they are all excellent opportunities for growth.</p>
			</div><!--box-Qualidade-->
			<div class="w33 left box-especialidade">
				<h3><i class="fas fa-lock"></i></h3>
				<h4>100% SECURE</h4>
				<p>All payments made through our security method are 100% secure. Buyers and sellers are protected by my team's years of experience.</p>
			</div><!--box-seguro-->
			<div class="clear"></div>
		</div><!--center-->
	</section><!--especialidades-->


	<section class="extras">

		<div class="center">
			<div class="w50 left depoimento-container">
				<h2 class="title">Depoimentos</h2>
				<div class="depoimento-single">
					<p class="depoimento-descricao">"Really a great platform for digital products selling. They have sold my Youtube channel with in 2 weeks. Fast and secure."</p>
					<p class="nome-autor">Marco Dos Anjos</p>
				</div><!--depoimento-single-->
				<div class="depoimento-single">
					<p class="depoimento-descricao">"Such a fast & professional service! Smoothly done & executed, clear direction. Recommended!"</p>
					<p class="nome-autor">Gabriela Moteiro</p>
				</div><!--depoimento-single-->
				<div class="depoimento-single">
					<p class="depoimento-descricao">"Serviço bastante rápido e de confiança!"</p>
					<p class="nome-autor">Alexandre Silva</p>
				</div><!--depoimento-single-->
			</div><!--w50-->
			<div class="w50 left servicos-container">
				<h2 class="title">Services</h2>
				<div class="servicos">
					<ul>
						<li>We are the best solution if you want to open your business and start promoting your products.</li>
						<li>We respond within 48 hours to all partnership requests.</li>
						<li>We already have more than 150 people who worked with us and evaluated our work.</li>
					</ul>
				</div><!--servicos-->
			</div><!--w50-->
			<div class="clear"></div>
		</div><!--center-->
	</section><!--extras-->

	<footer>
		<div class="center">
			<p>Rafael Sequeira © 2020 All Rights Reserved</p>
		</div><!--center-->
	</footer>

	<script src="js/jquery.js"></script>
	<script src="js/scripts.js">
	</script>
</body>
</html>