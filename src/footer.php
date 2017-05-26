<div  style="background-color:#eeeeee; height:200px; max-width:100%;">
<div class="wrapper">
		<div class="footer_convertite">
			<div>
				<img src="img/constructor.png" />
				<div class="txt_convertite">
					Convertite en prestador para que te lleguen presupuestos<br/> o 
					postulate a un trabajo.
					<a href="listado-publicaciones.php" class="btn switch" >Convertirse</a>
				</div>
			</div>
		</div>

		
	</div>
</div>

<!-- Button trigger modal -->



<!-- Modal Login-->
<div class="modal fade" id="modal_login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document" style="width:440px;">
    <div class="modal-content">
      <div class="modal-body" style="padding:5px;">
		<section class="col-xs-12 col-sm-12 form_registro">
		<div class="circulo_login"><img src="img/icon_usuario.png"></div>
		<div class="tabs_login"style="display:flex; justify-content: center;">
			<div data-toggle="modal" data-target="#modal_registrarse" class="pestaña_registro">Registrarme</div>
			<div class="active pestaña_login">Ya tengo una cuenta</div>
		</div>	
		<div class="div_inputs_login">
			<div class="label_modal">NOMBRE DE USUARIO</div>
			<input type="text"  id="usuarioLogin" />
			<div class="label_modal">CONTRASE&Ntilde;A</div>
			<input type="password"  id="passwordLogin" />
			<a href="#" class="forgot">Olvidé mi contraseña</a>
			<button type="button" class="btn switch" id="btnLogin">INGRESAR</button>
		</div>	
		
		<div class="div_modal_registrarse">
			<div class="div_flex_modal">
				<div>
					<label class="label_modal">Nombre de Usuario</label>
					<input type="text"  id="usuarioRegistro">
			
					<label class="label_modal">Apellido</label>
					<input type="text" placeholder="Apellido" id="apellidoRegistro">
			
					<label class="label_modal">Contraseña</label>
					<input type="password" placeholder="Contraseña" id="passwordRegistro">
				</div>
					
				<div>
					<label class="label_modal">Nombre</label>
					<input type="text" placeholder="Nombre" id="nombreRegistro">
			
					<label class="label_modal">Mail</label>
					<input type="email" placeholder="Mail" id="mailRegistro">
			
					<label class="label_modal">Repetir contrseña</label>
					<input type="password" placeholder="Repetir contraseña" id="password2Registro">
				</div>
			</div>
			
				
				
				<div style="padding:0px 20px 0px 20px;"><button type="button" class="btn switch btn_registro" id="btnRegistro">Registrarse</button></div>
			<div id="mensaje" class="alert alert-danger" style="display:none;"></div>
			<div class="link_ser_prestador"><a href="" >Quiero ser un prestador y brindar mis servicios</a></div>
			</div>
		</section>
      </div>
    </div>
  </div>
</div>



<footer>
	
	<div class="wrapper div_footer">
		<div>
			<span>Quienes somos </span>
			<span>&bull;</span>
			<span>Terminos y condiciones</span>
			<span>&bull;</span>
			<span>Ayuda</span>
			<div>
				<img src="img/redes_1.png" />
				<img src="img/redes_2.png" />
				<img src="img/redes_3.png" />
				<img src="img/redes_4.png" />
				<img src="img/redes_5.png" />
			</div>
			<span>2016 Hay Trabajo</span>

		
	</div>
	<script src="js/jquery.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/slider_index.js"></script>
<script>
/*ESTO ES PARA EL CALENDARIO DE LOS INPUTS   */
	document.write('<link href="css/scss/calendario.css" rel="stylesheet" type="text/css" />')
	jQuery(function($){ //on document.ready
        $('.input_fecha').datepicker();
    })
</script>
</footer>