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

	<main id="main" role="main">
		<!--<section id="banner">
			<div class="wrapper">
				<?php
					//if(!empty($_SESSION['user'])) :
				?>
					<div>
						<h1>Mira Publicaciones y manda presupuestos</h1>
						<p>Buscá entre todas las publicaciones las que encajen con tu servicio y enviá presupuestos a los clientes para que te contraten.</p>
						<a href="listado-publicaciones.php" class="btn switch">Ver publicaciones</a>
					</div>
				<?php// else : ?>
					<div>
						<h1>Encontra el especialista que buscas</h1>
						<div class="col-sm-12 buscador_banner">
							<form>
								<select class="select_especialista">
									<option>Que especialista necesita?</option>
								</select>
								<select class="select_provincia_partido">
									<option>Provincia</option>
								</select>
								<select class="select_provincia_partido">
									<option>Partido</option>
								</select>
								<a href="registro.php" class="btn switch">Registrarse</a>
							</form>
						</div>
					</div>
				<?php //endif; ?>
			</div>
		</section>-->
		<div  style="margin-top:30px;">
			<div class="wrapper" style="height:340px; overflow:hidden;background-color: #fff;box-shadow: 0px 2px 3px -1px rgba(151, 171, 187, 0.7); ">
			
				<section class="col-xs-12 col-sm-4 buscador_home">
				<div>Busca al especialista que necesitas</div>
					<form>
								<select >
									<option>Que especialista necesita?</option>
								</select>
								<select >
									<option>Provincia</option>
								</select>
								<select >
									<option>Partido</option>
								</select>
								<a href="registro.php" class="btn switch">Registrarse</a>
							</form>
				</section>
		
				<section class="col-xs-12 col-sm-8 banner_">
					<span class="texto_banner">
                <span class="line">
                    Miles de publicaciones.
                </span>
                <br>
                <span class="line">
                    Encontra tu especialista
                </span>
                <br>
                <span class="line">
                   o tu cliente
                </span>
                <br>
            </span>
				</section>
		
				
	</div>
</div>
		
		<div  style="margin-top:30px;text-align:center;">
			<div class="wrapper" style="overflow:hidden;background-color: #fff;box-shadow: 0px 2px 3px -1px rgba(151, 171, 187, 0.7); ">
				<section class="col-xs-12 col-sm-3 textos_presentacion">
					
					<div>Miles de especialistas</div>
					<span>Mas de 800 especilistas<br/> a tu disposicion. </span>
				</section>
		
				<section class="col-xs-12 col-sm-5 textos_presentacion">
					
					<div>Crea tu propia publicacion</div>
					<span>Si no encontras el especialista que necesitas<br/> crea, tu publicacion y que ellos te busquen a vos.</span>
				</section>
		
				<section class="col-xs-12 col-sm-3 textos_presentacion">
					
					<div>Convertite en prestador</div>
					<span>Postulate en trabajos y mejora tu reputacion. </span>
				</section>
	</div>
</div>

		<div class="wrapper" style="padding-top:30px;">
			<div class="container-fluid">
				<?php
					if(!empty($_SESSION['user'])) :
				?>
					<div class="row">
						<section class="col-xs-12 col-sm-12">
							
							
							<div class="row" style="margin-top:30px; margin-bottom:30px;">
							<div style="border-top:1px solid #e6e6e6">
							<div class="titulo_seccion">
								PRESUPUESTOS PENDIENTES
							</div>
						</div>
								<div class="col-xs-12 col-sm-3 marco-publicacion">
									<img src="img/prestadores/prestador.jpg" alt="">
									<div class="descripcion_miniatura">
										<h2>Sarah Connor</h2>
										Se necesita pintar una habitacion de 5mts x 5mts y un techo.
									</div>
									<div class="footer_miniatura">
										Fecha: 22/12/2016
										<span>Ver Oferta</span>
									</div>
								</div>
								
								<div class="col-xs-12 col-sm-3 marco-publicacion">
									<img src="img/prestadores/prestador.jpg" alt="">
									<div class="descripcion_miniatura">
										<h2>Sarah Connor</h2>
										Se necesita pintar una habitacion de 5mts x 5mts y un techo.
									</div>
									<div class="footer_miniatura">
										Fecha: 22/12/2016
										<span>Ver Oferta</span>
									</div>
								</div>
								
							</div>
						</section>
						
					</div>
					
				<?php endif;  ?>
				
				
					<div class="row">
					<section class="col-xs-12 col-sm-12 " style="text-align:center; font-weight:bold;margin-bottom:30px; font-size:25px; color:#212121">
					TRABAJOS MAS BUSCADOS
					</section>
						<section class="col-xs-12 col-sm-3 buscar-especialista">
							
							<div class="row">
								<div class="div_buscar_por">
									<p class="buscar-por">CATEGORIA</p>
								</div>
								<div class="">
									<a href="listado-prestadores.php"> 
										<i class="fa fa-car" aria-hidden="true"></i>
										Automotores
									</a>
									<a href="">
										<i class="fa fa-truck" aria-hidden="true"></i>
										Mudanzas
									</a>
									<a href="">
										<i class="fa fa-television" aria-hidden="true"></i>
										Servicio tec. Tv
									</a>
								</div>
								<div class="">
									<a href="">
										<i class="fa fa-paint-brush" aria-hidden="true"></i>
										Pintura
									</a>
								</div>
								<div class="">
									<a href="">
										<i class="fa fa-cloud" aria-hidden="true"></i>
										Climatizacion
									</a>
									<a href="">
										<i class="fa fa-tint" aria-hidden="true"></i>
										Plomeria
									</a>
									<a href="">
										<i class="fa fa-wrench" aria-hidden="true"></i>
										Mecanico
									</a>
								</div>
								<div class="">
									<a href="">
										<i class="fa fa-bolt" aria-hidden="true"></i>
										Electricista
									</a>
									<a href="">
										<i class="fa fa-laptop" aria-hidden="true"></i>
										Servicio tec. PC
									</a>
								</div>
								<div class="">
									<a href="">
										<i class="fa fa-fire" aria-hidden="true"></i>
										Gasista
									</a>
								</div>
							</div>
							
							<div class="row" style="margin-top:20px;">
								<div>
									<p class="buscar-por">Provincia</p>
								</div>
								<div>
									<a href="">Buenos Aires</a>
									<a href="">Cordoba</a>
									<a href="">Entre Rios</a>
								</div>
								<div>
									<a href="">Mendoza</a>
									<a href="">Tucuman</a>
									<a href="">Tierra del fuego</a>
								</div>
								<div class="provincias_ocultas">
									<a href="">Jujuy</a>
									<a href="">San Juan</a>
									<a href="">San Luis</a>
								</div>
								<div class="provincias_ocultas">
									<a href="">Rio Negro</a>
									<a href="">Chubut</a>
									<a href="">Santa Cruz</a>
								</div>
								<div class="provincias_ocultas">
									<a href="">Catamarca</a>
									<a href="">Salta</a>
									<a href="">Chaco</a>
								</div>
								<div class="mas_provincias" style="text-align:center; margin-top:8px; margin-bottom:8px; font-size:12px; cursor:pointer; color:#767676">
									<span class="mostrar_mas">MOSTRAR M&Aacute;S</span>
									<span class="mostrar_menos">MOSTRAR MENOS</span>
								</div>
							</div>
							
						</section>
						
						<section class="col-xs-12 col-sm-4 categorias_destacadas">
							<div class="row">
								<img src="img/pub1.jpg" />
								<div class="txt_destacadas">
									<div>Electricista</div>
									<span>380 especialistas</span>
								</div>
							</div>
						</section>
						
						<section class="col-xs-12 col-sm-4 categorias_destacadas">
							<div class="row">
								<img src="img/pub2.jpg" />
								<div class="txt_destacadas">
									<div>Pintor</div>
									<span>579 especialistas</span>
								</div>
							</div>
						</section>
						
						<section class="col-xs-12 col-sm-4 categorias_destacadas">
							<div class="row">
								<img src="img/pub3.jpg" />
								<div class="txt_destacadas">
									<div>Plomeria</div>
									<span>300 especialistas</span>
								</div>
							</div>
						</section>
						
						<section class="col-xs-12 col-sm-4 categorias_destacadas">
							<div class="row">
								<img src="img/pub4.jpg" />
								<div class="txt_destacadas">
									<div>Mecanico</div>
									<span>489 especialistas</span>
								</div>
							</div>
						</section>
						
						<section class="col-xs-12 col-sm-4 categorias_destacadas">
							<div class="row">
								<img src="img/pub5.jpg" />
								<div class="txt_destacadas">
									<div>Climatizaci&oacute;n</div>
									<span>307 especialistas</span>
								</div>
							</div>
						</section>
						
						<section class="col-xs-12 col-sm-4 categorias_destacadas">
							<div class="row">
								<img src="img/pub6.jpg" />
								<div class="txt_destacadas">
									<div>Electricista</div>
									<span>Electricista</span>
								</div>
							</div>
						</section>
					
				
			</div>
		</div>
	</main>

	<?php include 'footer.php'; ?>

	<script src="vendors/jquery/jquery.min.js"></script>
	<script src="vendors/bootstrap/js/bootstrap.min.js"></script>
	<script src="js/ajax.js"></script>
	<script src="js/main.js"></script>
	<style>.buscador_header{display:none;}</style>
</body>

</html>
