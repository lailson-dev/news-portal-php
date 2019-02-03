<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Portal de Notícias - PHP - Lailson Conceição</title>

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
		<!-- Bootstrap CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<!-- Custom CSS -->
		<link rel="stylesheet" href="assets/css/app.css">
		
	</head>
	<body>
		<!-- Header Page -->
		<header class="container py-3 news-header">
			<div class="row flex-nowrap justify-content-between align-items-center">
				<div class="col-4 pt-1">
					<a class="text-muted" href="#">Assine</a>
				</div>
				<div class="col-4 text-center">
					<form action="">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Pesquisar..." aria-label="Recipient's username" aria-describedby="button-addon2">
						    <div class="input-group-append">
						    	<button class="btn btn-outline-secondary" type="submyt" id="button-addon2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3" focusable="false" role="img"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg></button>
						    </div>
						</div>
					</form>					
				</div>
				<div class="col-4 d-flex justify-content-end align-items-center">					
					<a class="btn btn-sm btn-outline-secondary" href="#">Entrar</a>
				</div>
			</div>
	  	</header>
	  	<!-- End Header -->

	  	<!-- Main Page Call -->
	  	<section class="container jumbotron py-3 bg-dark text-white">
			<blockquote class="blockquote">
				<h1 class="display-3 mb-5">Travessia tem fluxo tranquilo e saídas a cada 30 minutos</h1>
				<p class="lead">Última embarcação deixa a capital às 19h30. No sentido contrário, última lancha sai às 18h30.</p>
				<footer class="blockquote-footer"><cite title="Source Title">Há 35 minutos</cite></footer>
			</blockquote>
			<a class="btn btn-primary btn-lg" href="#" role="button">Ler mais...</a>
		</section>
		<!-- End Main Page Call -->

		<!-- Posts Page - Noticies -->
		<section class="container p-0 mb-5">
			<h4 class="font-weight-bold">Notícia</h4>
			<hr class="mb-4 mt-0">
			<div class="row d-flex">				
				<div class="col-sm-4">
					<img src="assets/img/foto01.jpg" class="img-thumbnail" alt="">
					<h5 class="my-3 font-weight-bold"><a href="#">Inscrições abertas para curso técnico gratuito em agronegócio</a></h5>
					<p class="font-italic">Além da capital baiana, curso oferecido pelo Senar tem vagas para Barreiras e Juazeiro.</p>
					<small class="badge badge-pill badge-secondary">Há 35 minutos</small>
				</div>

				<div class="col-sm-4">
					<img src="assets/img/foto01.jpg" class="img-thumbnail" alt="">
					<h5 class="my-3 font-weight-bold"><a href="#">Inscrições abertas para curso técnico gratuito em agronegócio</a></h5>
					<p class="font-italic">Além da capital baiana, curso oferecido pelo Senar tem vagas para Barreiras e Juazeiro.</p>
					<small class="badge badge-pill badge-secondary">Há 35 minutos</small>
				</div>

				<div class="col-sm-4">
					<img src="assets/img/foto01.jpg" class="img-thumbnail" alt="">
					<h5 class="my-3 font-weight-bold"><a href="#">Inscrições abertas para curso técnico gratuito em agronegócio</a></h5>
					<p class="font-italic">Além da capital baiana, curso oferecido pelo Senar tem vagas para Barreiras e Juazeiro.</p>
					<small class="badge badge-pill badge-secondary">Há 35 minutos</small>
				</div>
			</div>
		</section>
		<!-- End Posts Page - Noticies -->

		<!-- Posts Page - Noticies -->
		<section class="container mb-5 p-0">
			<h4 class="font-weight-bold">Emprego</h4>
			<hr class="mb-4 mt-0">
			<div class="row d-flex">				
				<div class="col-sm-4">
					<img src="assets/img/foto02.jpeg" class="img-thumbnail" alt="">
					<h5 class="my-3 font-weight-bold"><a href="#">Concessionária Litoral Norte abre processo seletivo</a></h5>
					<p class="font-italic">A Concessionária Litoral Norte (CLN), uma empresa do grupo Invepar, está com processo seletivo aberto para o posto de gerente administrativo.</p>
					<small class="badge badge-pill badge-secondary">Há 39 minutos</small>
				</div>

				<div class="col-sm-4">
					<img src="assets/img/foto02.jpeg" class="img-thumbnail" alt="">
					<h5 class="my-3 font-weight-bold"><a href="#">Concessionária Litoral Norte abre processo seletivo</a></h5>
					<p class="font-italic">A Concessionária Litoral Norte (CLN), uma empresa do grupo Invepar, está com processo seletivo aberto para o posto de gerente administrativo.</p>
					<small class="badge badge-pill badge-secondary">Há 39 minutos</small>
				</div>

				<div class="col-sm-4">
					<img src="assets/img/foto02.jpeg" class="img-thumbnail" alt="">
					<h5 class="my-3 font-weight-bold"><a href="#">Concessionária Litoral Norte abre processo seletivo</a></h5>
					<p class="font-italic">A Concessionária Litoral Norte (CLN), uma empresa do grupo Invepar, está com processo seletivo aberto para o posto de gerente administrativo.</p>
					<small class="badge badge-pill badge-secondary">Há 39 minutos</small>
				</div>
			</div>
		</section>
		<!-- End Posts Page - Noticies -->
		<!-- Footer Page -->
		<section class="bg-gray">
			<footer class="container news-footer p-0">
				<div class="row">
					<div class="col-sm-4">
						<h5>Sobre nós</h5>
						<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, ipsam reprehenderit optio, voluptatum officia quia culpa atque odio quasi quibusdam aperiam.</p>
					</div>

					<div class="col-sm-4">
						<h5>Menu</h5>
						<div class="list-unstyled btn-group-vertical btn-block btn-group-lg">
							<a class="btn btn-link" href="#">Mundo</a>
							<a class="btn btn-link" href="#">Política</a>
							<a class="btn btn-link" href="#">Emprego</a>
						</div>
					</div>

					<div class="col-sm-4">
						<h5>Social</h5>
						<div class="btn-group-vertical btn-block btn-group-lg">
							<a class="btn btn-outline-primary" href="#"><i class="fa fa-facebook-official"></i> Facebook</a>
							<a class="btn btn-outline-info" href="#"><i class="fa fa-facebook-official"></i> Twitter</a>
							<a class="btn btn-outline-warning" href="#"><i class="fa fa-facebook-official"></i> Instagram</a>
						</div>
					</div>

					<div class="col-12 text-center mt-5">
						<blockquote class="blockquote text-center">
						  <p class="mb-0">Devagarzinho eu chego lá :)</p>
						  <footer class="blockquote-footer">Desenvolvido por <cite title="Source Title">Lailson Conceição</cite></footer>
						</blockquote>
					</div>
				</div>
			</footer>
		</section>
		<!-- End Footer Page -->
		

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="assets/js/bootstrap.bundle.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
	</body>
</html>