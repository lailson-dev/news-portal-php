<?php require_once 'php/config/conexao.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Nome da notícia - Portal de Notícias - PHP- Lailson Conceição</title>

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
		<!-- Bootstrap CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<!-- Custom CSS -->
		<link rel="stylesheet" href="assets/css/app.css">
		
	</head>
	<body>
		<!-- Header Page -->
		<header class="container py-3 news-header mb-5">
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