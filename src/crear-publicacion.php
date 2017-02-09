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
		<!--<div class="wrapper" style="padding-top:30px;">
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
		</div>-->
		<div class="wrapper crear_publicacion" style="padding-top:30px;">
			<div class="container-fluid container-fluid_publicacion">
			<section class="form">
				<div class="progressbar_div">
					<ul class="progressbar">
						<li class="step_1 active"><span>Categoria</span></li>
						<li class="step_2"><span>Datos</span></li>
						<li class="step_3"><span>Ubicacion</span></li>
						<li class="step_4"><span>Crear</span></li>
					</ul>
				</div>
				
			<div class="primer_paso">
				<div class="titulos_pasos">
					¿Que tipo de especialista esta buscando?
				</div>
			
				<div class="flex_crear_publicacion">
					<div class="btn_opcion">
						<div class="checkbox_categorias">
							<input type="checkbox" id="web" name="web" value="web">
							<label class="contenedor_categoria_crear" for="web"><i class="fa fa-code fa-2x" aria-hidden="true"></i><br/>Desarrollador Web</label>
						</div>	
					</div>
			
					<div class="btn_opcion">
						<div class="checkbox_categorias">
							<input type="checkbox" id="grafico" name="grafico" value="grafico">
							<label class="contenedor_categoria_crear" for="grafico"><i class="fa fa-mouse-pointer fa-2x" aria-hidden="true"></i><br/>Diseño grafico</label>
						</div>	
					</div>
			
					<div class="btn_opcion">
						<div class="checkbox_categorias">
							<input type="checkbox" id="albanil" name="albanil" value="albanil">
							<label class="contenedor_categoria_crear" for="albanil">
								<i class="fa fa-home fa-2x" aria-hidden="true"></i><br/>
								Albanil
							</label>
						</div>	
					</div>
			
					<div class="btn_opcion">
						<div class="checkbox_categorias">
							<input type="checkbox" id="plomeria" name="plomeria" value="plomeria">
							<label class="contenedor_categoria_crear" for="plomeria"><i class="fa fa-tint fa-2x" aria-hidden="true"></i><br/>Plomeria</label>
						</div>	
					</div>
				</div>
		
				<div class="flex_crear_publicacion">
					<div class="btn_opcion">
						<div class="checkbox_categorias">
							<input type="checkbox" id="jardinero" name="jardinero" value="jardinero">
							<label class="contenedor_categoria_crear" for="jardinero"><i class="fa fa-leaf fa-2x" aria-hidden="true"></i><br/>Jardinero</label>
						</div>	
					</div>
					
					<div class="btn_opcion">
						<div class="checkbox_categorias">
							<input type="checkbox" id="Mudanzas" name="Mudanzas" value="mudanzas">
							<label class="contenedor_categoria_crear" for="Mudanzas"><i class="fa fa-truck fa-2x" aria-hidden="true"></i><br/>Mudanzas</label>
						</div>	
					</div>
					
					<div class="btn_opcion">
						<div class="checkbox_categorias">
							<input type="checkbox" id="serv_tv" name="serv_tv" value="serv_tv">
							<label class="contenedor_categoria_crear" for="serv_tv"><i class="fa fa-car fa-2x" aria-hidden="true"></i><br/>Carpintero</label>
						</div>	
					</div>
			
					<div class="btn_opcion">
						<div class="checkbox_categorias">
							<input type="checkbox" id="electricista" name="electricista" value="electricista">
							<label class="contenedor_categoria_crear" for="electricista"><i class="fa fa-bolt fa-2x" aria-hidden="true"></i><br/>Electricista</label>
						</div>	
					</div>
				</div>
		
				<div class="flex_crear_publicacion">
					<div class="btn_opcion">
						<div class="checkbox_categorias">
							<input type="checkbox" id="pintor" name="pintor" value="pintor">
							<label class="contenedor_categoria_crear" for="pintor"><i class="fa fa-paint-brush fa-2x" aria-hidden="true"></i><br/>Pintor</label>
						</div>	
					</div>
			
					<div class="btn_opcion">
						<div class="checkbox_categorias">
							<input type="checkbox" id="climatizacion" name="climatizacion" value="climatizacion">
							<label class="contenedor_categoria_crear" for="climatizacion"><i class="fa fa-cloud fa-2x" aria-hidden="true"></i><br/> Climatizacion</label>
						</div>	
					</div>
			
					<div class="btn_opcion">
						<div class="checkbox_categorias">
							<input type="checkbox" id="serv pc" name="serv pc" value="serv_pc">
							<label class="contenedor_categoria_crear" for="serv pc"><i class="fa fa-laptop fa-2x" aria-hidden="true"></i><br/> Servici tec. Pc</label>
						</div>	
					</div>
			
					<div class="btn_opcion">
						<div class="checkbox_categorias">
							<input type="checkbox" id="gasista" name="gasista" value="gasista">
							<label class="contenedor_categoria_crear" for="gasista"><i class="fa fa-fire fa-2x" aria-hidden="true"></i><br/>Gasista</label>
						</div>	
					</div>
				</div>
				
				<button id="btn_siguiente_crear_1" type="button" class="btn switch">Siguiente</button>
			</div>
			
			
			<div class="segundo_paso sombra_caja">
				<div class="titulos_pasos">
					Datos de la publicacion
				</div>
				
				<div class="margin_inputs">
					<label>Titulo Publicacion</label>
					<input type="text" />
				</div>	
				
				<div class="input_web inputs_ocultos">
					<label>Estudios minimos requeridos</label>
					<select>
						<option>Terciario en curso</option>
						<option>Titulo completo</option>
					</select>
				</div>
				
				<div class="input_web inputs_ocultos">
					<label>Necesario para</label>
					<select>
						<option>Front End</option>
						<option>Back End</option>
						<option>Ambos</option>
					</select>
				</div>
				
				<div class="input_web inputs_ocultos">
					<label>Conocimientos requeridos</label>
					<select>
						<option>HTML</option>
						<option>CSS</option>
						<option>PHP</option>
						<option>JQuery</option>
						<option>Angular</option>
					</select>
				</div>
				
				<div class="input_grafico inputs_ocultos">
					<label>Programas requeridos</label>
					<select>
						<option>Photoshop</option>
					</select>
				</div>
				
				<div class="input_habitaciones inputs_ocultos">
					<label>Habitaciones</label>
					<input type="text" />
				</div>
				
				<div class="input_habitaciones inputs_ocultos">
					<label>Mts aprox</label>
					<input type="text" />
				</div>
				
				<div class="input_habitaciones inputs_ocultos">
					<label>Experiencia minima requerida</label>
					<select>
						<option>1 año</option>
						<option>2 año</option>
						<option>3 año</option>
					</select>
				</div>
				
				
				
				<label>Descripcion de la publicacion</label>
				<textarea></textarea>
				
				<div>
					<button id="btn_siguiente_publicacion_2" type="button" class="btn switch">Siguiente Paso</button>
				</div>
			</div>
			
			<div class="tercer_paso sombra_caja">
				<div class="titulos_pasos">
					Ubicacion
				</div>
				
				<label>Provincia</label>
				<select>
					<option>Buenos Aires</option>
				</select>
				
				<label>Partido</label>
				<select>
					<option>Quilmes</option>
				</select>
				
				<label>Direccion</label>
				<input type="text" />
				
				<div class="contenedor_mapa">
				<img src="img/googlemap.jpg" />
				</div>
				
				<div>
					<button id="btn_crear_publicacion" type="button" class="btn switch">Siguiente Paso</button>
				</div>
			</div>
			
			
			</section>
			</div>
		</div>
	</main>

	<?php include 'footer.php'; ?>
<script>

 $("#btn_siguiente_crear_1").click(function() {  
        if($("#web").is(':checked')) {  
            $(".input_web").css("display","block");
        }  
		
		if($("#grafico").is(':checked')) {  
            $(".input_grafico").css("display","block");
        } 
		
		if($("#plomeria").is(':checked') || $("#albanil").is(':checked') || $("#pintor").is(':checked') ) {  
            $(".input_habitaciones").css("display","block");
        } 
		
    });  
  
  
</script>
	<script src="vendors/jquery/jquery.min.js"></script>
	<script src="vendors/bootstrap/js/bootstrap.min.js"></script>
	<script src="js/ajax.js"></script>
	<script src="js/main.js"></script>
	<script src="js/crear-publicacion.js"></script>

</body>

</html>
