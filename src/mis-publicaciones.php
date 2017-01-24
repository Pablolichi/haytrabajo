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

	<link rel="stylesheet" type="text/css" href="vendors/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="vendors/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="css/scss/styles.css" />
		<link rel="stylesheet" type="text/css" href="css/scss/styles_secciones.css" />
</head>

<body>
	<?php include 'header.php'; ?>

	

	<main id="main" role="main" class="perfil">
		<div class="wrapper" style="padding-top:30px;">
			<div class="container-fluid">
				<div class="row">
					<h2>Perfil</h2>
					<section class="col-xs-12 col-sm-2 sidebar">						
						<ul class="list">
							<li><a href="mis-datos.php">Mis datos</a></li>
							<li class="active"><a href="mis-publicaciones.php">Mis Publicaciones</a></li>
						</ul>
					</section>
					<section class="col-xs-12 col-sm-9 mis-publicaciones">
						<h2 class="blue">Mis publicaciones</h2>
						<div id="listadoPublicaciones"></div>
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
	<script src="js/mis-publicaciones.js"></script>

</body>

</html>
