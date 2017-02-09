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

	<link rel="stylesheet" type="text/css" href="vendors/slick/slick.css"" />
	<link rel="stylesheet" type="text/css" href="vendors/slick/slick-theme.css"" />
	<link rel="stylesheet" type="text/css" href="vendors/bootstrap/css/bootstrap.min.css"" />
	<link rel="stylesheet" type="text/css" href="vendors/font-awesome/css/font-awesome.min.css"" />
	<link rel="stylesheet" type="text/css" href="css/scss/styles.css" />
</head>

<body>
	<?php include 'header.php'; ?>

	<main id="main" role="main" class="publicacion">
		<div class="wrapper" style="padding-top:30px;">
			<div class="container-fluid">
				<div class="row">
					<section class="col-xs-12 col-sm-8 info listado-publicaciones">
						<div class="row">
							<div id="descripcionPublicacion" class="sombra_caja" style="overflow: hidden;">
								<div style="border-top:1px solid #e6e6e6">
									<div class="titulo_seccion">
										CONTACTO
									</div>
								</div>
							
								<form class="form_contacto">
									<div class="col-md-4 col-sm-4 col-xs-12">
										<label>Nombre</label>
										<input type="text" />
									</div>	
	
									<div class="col-md-4 col-sm-4 col-xs-12">
										<label>Email</label>
										<input type="text" />
									</div>
	
									<div class="col-md-12 col-sm-12 col-xs-12">
										<label>Su mensaje</label>
										<textarea></textarea>
									</div>
								</form>
							</div>
						</div>
					</section>
					
					<section class="col-xs-12 col-sm-4  buscar-especialista">
							
							<div class="row">
								<div class="div_buscar_por">
									<p class="buscar-por">Indice</p>
								</div>
								<div class="">
									<a href="listado-prestadores.php"> 
										
										1. Como contratar a un especialista
									</a>
									<a href="">
										
										2. Crear publicación
									</a>
									<a href="">
										
										3. Crear publicación
									</a>
								</div>
								<div class="">
									<a href="">
										
										4. Crear publicación
									</a>
								</div>
								
								
								
							</div>
							
							
							
						</section>
				</div>
			</div>
		</div>
</main>

	<?php include 'footer.php'; ?>

	<script src="vendors/jquery/jquery.min.js"></script>
	<script src="vendors/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendors/slick/slick.min.js"></script>
	<script src="js/ajax.js"></script>
	<script src="js/main.js"></script>
	<script src="js/publicacion_redirect.js"></script>

</body>

</html>