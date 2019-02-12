<?php
$lastPost = $db->prepare('SELECT * FROM post ORDER BY id_post DESC LIMIT 1');
$lastPost->execute();

$lastPostResult = $lastPost->fetch();
?>
<!-- Main Page Call -->
<section class="container jumbotron py-3 bg-dark text-white">
	<blockquote class="blockquote">
		<h1 class="display-3 mb-5"><?= $lastPostResult->title_post ?></h1>
		<p class="lead"><?= $lastPostResult->subtitle_post ?></p>
		<footer class="blockquote-footer"><cite title="Source Title"><?= date('d/m/Y h:s', strtotime($lastPostResult->date_post)) ?></cite></footer>
	</blockquote>
	<a class="btn btn-primary btn-lg" href="materia?title=<?= strtolower(clearStr($lastPostResult->title_post)) ?>&id=<?= $lastPostResult->id_post ?>" role="button">Ler mais...</a>
</section>
<!-- End Main Page Call -->