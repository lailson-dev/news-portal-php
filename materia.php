<?php
include_once 'pages/header.php';

if(isset($_GET['title']) && !empty($_GET['title']) && isset($_GET['id']) && !empty($_GET['id'])) {
	$title_post = filter_var($_GET['title'], FILTER_SANITIZE_STRING);
	$id_post	= filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

	$list = $db->prepare("SELECT * FROM post WHERE id_post = :id");
	$list->bindParam(':id', $id_post, PDO::PARAM_INT);
	$list->execute();

	$result = $list->fetch();
}
?>

<!-- Posts Page - Noticies -->
<section class="container p-0 mb-5">
	<h1 class=" display-3 font-weight-bold mb-5"><?= $result->title_post ?></h1>
	<h2><?= $result->subtitle_post ?></h2>

	<small class="d-block my-3"><em><?= date('d/m/Y h:i', strtotime($result->date_post)) ?></em> - <strong><?= $result->author_post ?></strong></small>
	<hr class="mb-4 mt-0">
	<div class="row d-flex justify-content-center">				
		<div class="col-sm-8 text-center">
			<p class="lead"><?= $result->content_post ?></p>
		</div>
	</div>
</section>
<!-- End Posts Page - Noticies -->

<!-- Posts Page - Noticies -->
<section class="container mb-5 p-0">
	<h4 class="font-weight-bold">Relacionados</h4>
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
<?php include_once 'pages/footer.php'; ?>