<?php 
	$worldPost = $db->prepare("SELECT * FROM `post` WHERE id_category = 1 LIMIT 3");
	$worldPost->execute();
	$worldNoticies = $worldPost->fetchAll();

	$jobPost = $db->prepare("SELECT * FROM `post` WHERE id_category = 3 LIMIT 3");
	$jobPost->execute();
	$jobNoticies = $jobPost->fetchAll();
?>
<!-- Posts Page - Noticies -->
<section class="container p-0 mb-5">
	<h4 class="font-weight-bold">Mundo</h4>
	<hr class="mb-4 mt-0">
	<div class="row d-flex">
		<?php foreach ($worldNoticies as $key => $value): ?>
		<div class="col-sm-4">
			<img src="assets/img/<?= $value->photo_post ?>" class="img-thumbnail" style="width: 360px; max-height: 207.033px" alt="<?= $value->title_post ?>" title="<?= $value->title_post ?>">
			<h5 class="my-3 font-weight-bold"><a href="materia?title=<?= strtolower(clearStr($value->title_post)) ?>&id=<?= $value->id_post ?>"><?= $value->title_post ?></a></h5>
			<p class="font-italic"><?= $value->subtitle_post ?></p>
			<small class="badge badge-pill badge-secondary"><?= date('d/m/Y h:i', strtotime($value->date_post)); ?></small>
		</div>
		<?php endforeach; ?>
	</div>
</section>
<!-- End Posts Page - Noticies -->

<!-- Posts Page - Noticies -->
<section class="container mb-5 p-0">
	<h4 class="font-weight-bold">Emprego</h4>
	<hr class="mb-4 mt-0">
	<div class="row d-flex">
		<?php foreach ($jobNoticies as $key => $value): ?>
		<div class="col-sm-4">
			<img src="assets/img/<?= $value->photo_post ?>" class="img-thumbnail" style="width: 360px; max-height: 207.033px" alt="<?= $value->title_post ?>" title="<?= $value->title_post ?>">
			<h5 class="my-3 font-weight-bold"><a href="materia?title=<?= strtolower(clearStr($value->title_post)) ?>&id=<?= $value->id_post ?>"><?= $value->title_post ?></a></h5>
			<p class="font-italic"><?= $value->subtitle_post ?></p>
			<small class="badge badge-pill badge-secondary"><?= date('d/m/Y h:i', strtotime($value->date_post)); ?></small>
		</div>			
		<?php endforeach; ?>
	</div>
</section>
<!-- End Posts Page - Noticies -->