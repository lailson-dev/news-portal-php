<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Cadastro de Postagens - Painel Administrativo - Portal de Notícias - PHP - Lailson Conceição</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
	</head>
	<body>
		<section class="container">
			<div class="row d-flex justify-content-center">				
				<div class="col-sm-12 my-5">
					<h1 class="display-4 my-5 text-center">Cadastrar Postagem</h1>
				</div>
				<div class="col-sm-8">
					<form action="" method="POST" enctype="multipart/form-data">
						<div class="form-group row">
							<label for="input-title" class="col-sm-2 form-control-label">Título</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="input-title" name="input-title" placeholder="Título da matéria">
							</div>
						</div>
						<div class="form-group row">
							<label for="input-subtitle" class="col-sm-2 form-control-label">Subtítulo</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="input-subtitle" name="input-subtitle" placeholder="Subtítulo da matéria">
							</div>
						</div>
						<div class="form-group row">
							<label for="input-content" class="col-sm-2 form-control-label">Conteúdo</label>
							<div class="col-sm-10">
								<textarea class="form-control" id="input-content" name="input-content" placeholder="Conteúdo"></textarea>
							</div>
						</div>
						<div class="form-group row">
							<label for="input-photo" class="col-sm-2 form-control-label">Foto</label>
							<div class="custom-file col-sm-10">
								<input type="file" class="custom-file-input" id="input-photo" name="input-photo">
								<label class="custom-file-label" for="input-photo" style="width: 95.5%;margin-left: 15px;">Carregar arquivo</label>
							</div>
						</div>
						<div class="form-group row">
							<label for="input-tag" class="col-sm-2 form-control-label">Categoria</label>
					 		<div class="col-sm-10">
					 			<select class="custom-select" id="input-tag">
								    <option selected>Escolha...</option>
								    <option value="1">Mundo</option>
								    <option value="2">Futebol</option>
								    <option value="3">Emprego</option>
						    	</select>
					 		</div>
						</div>
						<div class="form-group row">
							<label for="input-tag" class="col-sm-2 form-control-label">Tags</label>
							<div class="col-sm-10">
								<label>
									<input type="checkbox" class="form-control" id="input-tag" name="input-photo[]"> assassinato
								</label>
								<label>
									<input type="checkbox" class="form-control" id="input-tag" name="input-photo[]"> neymar
								</label>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-secondary">Cadastrar</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="../../assets/js/bootstrap.bundle.min.js"></script>
		<script src="../../assets/js/bootstrap.min.js"></script>
	</body>
</html>