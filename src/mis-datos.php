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
</head>

<body>
	<?php include 'header.php'; ?>

		


	<main id="main" role="main" class="perfil">
	
	
		<div class="wrapper" style="padding-top:30px;">
			<div class="container-fluid">
				<div class="row">
					
					
					<section class="col-xs-12 col-sm-2 sidebar">
					
						<ul class="list">
							<li class="active"><a href="mis-datos.php">Editar Perfil</a></li>
							<li><a href="mis-publicaciones.php">Mis Publicaciones</a></li>
						</ul>
					</section>
					
					
					<section class="col-xs-12 col-sm-9 mis-publicaciones">
						<div style="border-top:1px solid #e6e6e6">
							<div class="titulo_seccion">
								Mis Datos
							</div>
						</div>
						<div id="listadoPublicaciones">
							<div class="col-xs-12 col-sm-12 editar_imagen_perfil">
								<img src="img/prestador.jpg" alt="" style="display:inline-block;">
								<div class="nombre_miperfil">
									<div class="nombre_editarmiperfil">Juan Costela</div>
									<a class="btn btn_edit_perfil">
										<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
										Editar foto
									</a>
								</div>
							</div>
							
							<div class="col-xs-12 col-sm-12 editar_imagen_perfil">
								<form>
									<div class="col-xs-12 col-sm-6" >
										<div>
											<label>Nombre Usuario</label>
											<input type="text" />
										</div>
									
										<div>
											<label>Nombre</label>
											<input type="text" />
										</div>
									</div>
									
									<div class="col-xs-12 col-sm-6" >
										<div>
											<label>Fecha Nacimiento</label>
											<input type="text" />
										</div>
									
										<div>
											<label>Apellido</label>
											<input type="text" />
										</div>
									</div>
									
									
									
								
							</div>
							
							<div class="col-xs-12 col-sm-12 editar_imagen_perfil" style="border:none;">
								
									
										<div>
											<div class="col-xs-12 col-sm-6">
												<label>Contraseña Actual</label>
												<input type="text" />
											</div>
											<div class="col-xs-12 col-sm-6">
												
											</div>
										</div>
										
										<div>
											<div class="col-xs-12 col-sm-6">
												<label>Contraseña nueva</label>
												<input type="text" />
											</div>
											<div class="col-xs-12 col-sm-6">
												<label>Repetir contraseña</label>
												<input type="text" />
											</div>
										</div>
									
									
									
									
								<a class="btn btn_edit">
								Guardar Cambios
							</a>
							</div>
							
							
							
							
						
						</form>
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

</body>

</html>
