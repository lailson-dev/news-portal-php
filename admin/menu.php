<?php
$linksHome = [
	'inicio' => 'index',
	'postagem' => 'pages/cadastro-postagem',
	'categoria' => 'pages/cadastro-categoria',
	'tag' => 'pages/cadastro-tag',
	'user' => 'pages/cadastro-user'
];
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Cadastro de Postagens - Painel Administrativo - Portal de Notícias - PHP - Lailson Conceição</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?= ($css) ? $css : '../assets/css/bootstrap.min.css'; ?>">
	</head>
	<body>
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-between">
				<div></div>
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="<?= (isset($links)) ? $links['inicio'] : $linksHome['inicio'] ?>">Início</a>
					</li>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= (isset($links)) ? $links['postagem'] : $linksHome['postagem'] ?>">Postagens</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= (isset($links)) ? $links['categoria'] : $linksHome['categoria'] ?>">Categorias</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= (isset($links)) ? $links['tag'] : $linksHome['tag'] ?>">Tags</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= (isset($links)) ? $links['user'] : $linksHome['user'] ?>">Usuários</a>
					</li>
				</ul>
				<div></div>
			</nav>
		</header>