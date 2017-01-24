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

	<?php
		if(!isset($_SESSION['user'])){
		    header("Location: registro.php");
		}
	?>

	<main id="main" role="main">
		<div class="wrapper" style="padding-top:30px;">
			<div class="container-fluid">
				<div class="row">
					<section class="col-xs-12 col-sm-2 sidebar">
						<h2>Perfil</h2>
						<ul class="list">
							<li class="active"><a href="mis-publicaciones.php">Mis publicaciones</a></li>
							<li><a href="">Mi perfil</a></li>
						</ul>
					</section>
					<section class="col-xs-12 col-sm-10 editar-publicacion">
						<h2 class="blue">Editando publicación</h2>
						<div class="publicacion">
							<div id="mensaje" class="alert alert-danger" style="display: none"></div>
							<h3>Titulo de la publicación</h3>
							<input type="text" id="tituloPublicacion">
							<h3>Rubro</h3>
							<select name="rubro" id="rubroPublicacion"></select>
							<h3>Descripción de la publicación</h3>
							<textarea name="" id="descripcionPublicacion" cols="30" rows="10"></textarea>
							<button type="button" class="btn switch" id="editarPublicacion">Confirmar edición</button>
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
	<script src="js/editar.js"></script>

</body>

</html>
