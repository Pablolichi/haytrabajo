$(document).ready(function() {

	var btnLogout = $('#logout');
	btnLogout.click(function(event) {
		event.preventDefault();
		ajaxRequest({
			url: '../api/logout.php',
			success: function() {
				window.location="index.php"
			}
		});
	});

	/**
	 *
	 * Definicion de variables de campos y boton de registro que guardan los elementos html de cada uno.
	 *
	 */
	var btn = $('#btnRegistro'),
		userInput = $('#usuarioRegistro'),
		passInput = $('#passwordRegistro'),
		pass2Input = $('#password2Registro'),
		mailInput = $('#mailRegistro'),
		nombreInput = $('#nombreRegistro'),
		apellidoInput = $('#apellidoRegistro'),
		mensaje = $('#mensaje');

	btn.click(function() {
		/**
		 *
		 * Llamada ajax por POST que llama al archivo PHP que registra un usuario en base de datos.
		 *
		 */
		ajaxRequest({
			method: 'POST',
			url: '../api/registro-Usuario.php',
			data: 'user='+ userInput.val() + '&pass=' + passInput.val() + '&pass2=' + pass2Input.val() + '&mail=' + mailInput.val() + '&nombre=' + nombreInput.val() + '&apellido=' + apellidoInput.val(),
			success: function(rta) {
				console.log(rta);
				var respuesta = JSON.parse(rta);
				/**
				 *
				 * Si la respuesta es distinta a 0 muestra mensaje de error, sino de éxito.
				 *
				 */
				if(respuesta.status != 0){
					mensaje.addClass('alert-danger');
					mensaje.removeClass('alert-success');
				}else{
					window.location = "mensaje.php";
				}
				mensaje.text(respuesta.message);
				mensaje.show();
			}
		});
	});

	
	/**
	 *
	 * Definicion de variables de campos y boton de login que guardan los elementos html de cada uno.
	 *
	 */
	var btnLogin = $('#btnLogin'),
		userInput2 = $('#usuarioLogin'),
		passInput2 = $('#passwordLogin');

	/**
	 *
	 * Llamada ajax por GET que llama al archivo PHP hace el login de un usuario.
	 *
	 */
	btnLogin.click(function() {
		ajaxRequest({
			url: '../api/login-Usuario.php',
			data: 'user='+ userInput2.val() + '&pass=' + passInput2.val(),
			success: function(rta) {
				var respuesta = JSON.parse(rta);
				/**
				 *
				 * Si la respuesta es distinta a 0 muestra mensaje de error, sino redirecciona a la pagina de logueado.
				 *
				 */
				if(respuesta.status == 0) {
					window.location="index.php"
				}else{
					mensaje.addClass('alert-danger');
					mensaje.removeClass('alert-success');
					mensaje.text(respuesta.message);
					mensaje.show();
				}
			}
		});
	});
});


/**
	 *
	 * Muestra la descripcion o la reputacion en la publicacion
	 *
*/
	 
	 
$( "#btn_reputacion" ).click(function() {
	$( ".contenido_descripcion" ).css( "display", "none");
	$( ".contenido_reputacion" ).css( "display", "block");
	$( ".contenido_ubicacion" ).css( "display", "none");
	$( "#btn_reputacion" ).addClass( "menu_active" );
	$( "#btn_descripcion" ).removeClass( "menu_active" );
	$( "#btn_ubicacion" ).removeClass( "menu_active" );
});

$( "#btn_descripcion" ).click(function() {
	$( ".contenido_descripcion" ).css( "display", "block");
	$( ".contenido_reputacion" ).css( "display", "none");
	$( ".contenido_ubicacion" ).css( "display", "none");
	$( "#btn_descripcion" ).addClass( "menu_active" );
	$( "#btn_reputacion" ).removeClass( "menu_active" );
	$( "#btn_ubicacion" ).removeClass( "menu_active" );
});

$( "#btn_ubicacion" ).click(function() {
	$( ".contenido_descripcion" ).css( "display", "none");
	$( ".contenido_reputacion" ).css( "display", "none");
	$( ".contenido_ubicacion" ).css( "display", "block");
	$( "#btn_descripcion" ).removeClass( "menu_active" );
	$( "#btn_reputacion" ).removeClass( "menu_active" );
	$( "#btn_ubicacion" ).addClass( "menu_active" );
});

$( ".mas_provincias" ).click(function() {
  $( ".provincias_ocultas" ).toggle( "slow", function() {});
  $( ".mostrar_mas" ).toggle( "slow", function() {});
  $( ".mostrar_menos" ).toggle( "slow", function() {});
});


$( ".pestaña_login" ).click(function() {
	$( ".div_inputs_login" ).css("display" , "block");
	$( ".div_modal_registrarse" ).css("display" , "none");
	$( ".pestaña_login" ).addClass( "active" );
	$( ".pestaña_registro" ).removeClass( "active" );
});

$( ".pestaña_registro" ).click(function() {
	$( ".div_inputs_login" ).css("display" , "none");
	$( ".div_modal_registrarse" ).css("display" , "block");
	$( ".pestaña_registro" ).addClass( "active" );
	$( ".pestaña_login" ).removeClass( "active" );
	
});




