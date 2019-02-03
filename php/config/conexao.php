<?php

try {
	$db = new PDO('mysql:host=localhost;dbname=news-portal;charset=utf8', 'root', '');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);	
} catch (PDOException $e) {
	if($e->getCode() == 1049)
		echo 'O banco de dados não existe';
	else
		echo $e->getMessage();
}