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
					<div id="mensaje" class="alert alert-danger" style="display:none;"></div>
					<section class="col-xs-12 col-sm-6 form registro">
						<h2>Registrate</h2>
						<p>Crea publicaciones y contrata a el especialista que buscas</p>
							<input type="text" placeholder="Nombre de usuario" id="usuarioRegistro">
							<input type="text" placeholder="Nombre" id="nombreRegistro">
							<input type="text" placeholder="Apellido" id="apellidoRegistro">
							<input type="email" placeholder="Mail" id="mailRegistro">
							<input type="password" placeholder="Contraseña" id="passwordRegistro">
							<input type="password" placeholder="Repetir contraseña" id="password2Registro">
							<!--<label for=""><input type="checkbox"> Acepto los términos y condiciones</label>-->
							<button type="button" class="btn switch" id="btnRegistro">Registrarse</button>
						<a href="" class="btn btn2">Quiero ser un prestador</a>
					</section>
					<section class="col-xs-12 col-sm-6 form login">
						<h2>Iniciar sesion</h2>
						<p>Ingresa tus datos para iniciar sesion.</p>
							<input type="text" placeholder="Nombre de usuario" id="usuarioLogin">
							<input type="password" placeholder="Contraseña" id="passwordLogin">
							<a href="" class="forgot">Olvidé mi contraseña</a>
							<button type="button" class="btn switch" id="btnLogin">Ingresar</button>
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
