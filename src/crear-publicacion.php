<!doctype html>
<!--[if IE 7]>    <html class="no-js lt-ie10 lt-ie9 lt-ie8 ie7" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie10 lt-ie9 ie8" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js lt-ie10 ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<title>Hay trabajo</title>

	<link rel="stylesheet" type="text/css" href="vendors/bootstrap/css/bootstrap.min.css"" />
	<link rel="stylesheet" type="text/css" href="vendors/font-awesome/css/font-awesome.min.css"" />
	<link rel="stylesheet" type="text/css" href="css/scss/styles.css" />
</head>

<body>
	<?php include 'header.php'; ?>

	

	<main id="main" role="main">
		<div class="wrapper" style="padding-top:30px;">
			<div class="container-fluid">
				<div class="row">
					<section class="form">
						<div class="box crearPublicacion">
							<div id="mensaje" class="alert alert-danger" style="display: none"></div>
							<img src="img/categoria-busqueda.png" alt="Selecciona categoria de busqueda">
							<h1>Selecciona la categoría de tu busqueda</h1>
							<select name="rubro" id="rubroPublicacion">
								<option value="electricidad">Electricidad</option>
							</select>
							<label for="tituloPublicacion">Titulo de la publicación</label>
							<input type="text" id="tituloPublicacion">
							<label for="descripcionPublicacion">Descripción de la publicación</label>
							<textarea id="descripcionPublicacion"></textarea>
							<button type="button" class="btn switch" id="crearPublicacion">Crear publicacion</button>
						</div>
					</section>
				</div>
			</div>
		</div>
	</main>

	<?php include 'footer.php'; ?>

	<script src="vendors/jquery/jquery.min.js"></script>
	<script src="vendors/bootstrap/js/bootstrap.min.js"></script>
	<script src="js/ajax.js"></script>
	<script src="js/main.js"></script>
	<script src="js/crear-publicacion.js"></script>

</body>

</html>
