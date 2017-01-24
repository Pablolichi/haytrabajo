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
					<section class="col-xs-12 col-sm-3 ">
						<div class="filtro-categorias">
						<h2 style="">Categorias</h2>
						<div style="background: #fafbfb;border: 1px solid #e4e7e8; padding:15px;">
						<label><input type="checkbox" value="mecanico">Mecanico</label>
						<label><input type="checkbox" value="pintura">Pintura</label>
						<label><input type="checkbox" value="gasistas">Gasista</label>
						<label><input type="checkbox" value="electricista">Electricista</label>
						<label><input type="checkbox" value="plomería">Plomería</label>
						<label><input type="checkbox" value="albañilería">Albañilería</label>
						<label><input type="checkbox" value="servicePc">Servicio técnico PC</label>
						<label><input type="checkbox" value="serviceTv">Servicio técnico TV</label>
						<label><input type="checkbox" value="mudanzas">Mudanzas</label>
						</div>
						</div>
					</section>
					<section class="col-xs-12 col-sm-8 listado-publicaciones">
						<div class="row">
							<div class="resultados"><span class="total"></span> Resultados</div>
							<div id="listadoPublicaciones"></div>
							
							<div class="paginador">
								<span>< Anterior 1</span>
								<span class="pagina_activa">2</span>
								<span class="pagina_activa">3</span>
								<span class="pagina_activa">4</span> 
								<span class="pagina_activa">5</span>
								<span class="pagina_activa">6</span> 
								<span class="pagina_activa">Siguiente ></span>
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
	<script src="js/ajax.js"></script>
	<script src="js/main.js"></script>
	<script src="js/listado-publicaciones.js"></script>

</body>

</html>
