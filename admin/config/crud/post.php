<?php

if(isset($_POST)) {
	$author 	= 'Lailson Conceição';
	$title 		= filter_input(INPUT_POST, 'input-title', FILTER_SANITIZE_SPECIAL_CHARS);
	$subTitle 	= filter_input(INPUT_POST, 'input-subtitle', FILTER_SANITIZE_SPECIAL_CHARS);
	$content 	= filter_input(INPUT_POST, 'input-content', FILTER_SANITIZE_SPECIAL_CHARS);
	$photo		= $_FILES['input-photo'];
	$category	= $_POST['input-category'];
	$tag		= implode(', ', $_POST['input-tag']);
	$date 		= date('Y-d-m h:i:s');

	$filters = array('jpeg', 'jpg');
	$extFile = pathinfo($photo['name'], PATHINFO_EXTENSION);

	include_once '../../../php/helpers/functions.php';

	if(!in_array($extFile, $filters)) {
		header('Location: ../../pages/cadastro-postagem?e=true');
	}

	$folder   = "../../../assets/img/";
	$tempName = $photo['tmp_name'];
	$c = clearStr(strtolower($title));
	$newName  = "{$c}.{$extFile}";

	if(move_uploaded_file($tempName, $folder.$newName)) {
		require_once '../db.php';

		$insert = $db->prepare("INSERT INTO `post` (`author_post`, `title_post`, `subtitle_post`, `content_post`, `photo_post`, `date_post`, `tag_post`, `id_category`) VALUES (:author_post, :title_post, :subtitle_post, :content_post, :photo_post, :date_post, :tag_post, :id_category)");
		$insert->bindParam(':author_post', $author, PDO::PARAM_STR);
		$insert->bindParam(':title_post', $title, PDO::PARAM_STR);
		$insert->bindParam(':subtitle_post', $subTitle, PDO::PARAM_STR);
		$insert->bindParam(':content_post', $content, PDO::PARAM_STR);
		$insert->bindParam(':photo_post', $newName, PDO::PARAM_STR);
		$insert->bindParam(':date_post', $date, PDO::PARAM_STR);
		$insert->bindParam(':tag_post', $tag, PDO::PARAM_STR);
		$insert->bindParam(':id_category', $category, PDO::PARAM_INT);

		if($insert->execute())
			header('Location: ../../pages/cadastro-postagem?c=true');
	}



}