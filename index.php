<?php
include_once 'pages/header.php';
include_once 'pages/jumbotron.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$url = str_replace('/projetos/news-portal', '', $uri);

if($url == '/' || $url == '/index')
	include_once 'pages/index.php';
else
	include_once '404.php';

include_once 'pages/footer.php'; ?>
