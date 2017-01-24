$(document).ready(function() {
	var rubroSelect = $('#rubroPublicacion'),
		titulo = $('#tituloPublicacion'),
		descripcion = $('#descripcionPublicacion'),
		btn = $('#crearPublicacion'),
		mensaje = $('#mensaje');

	ajaxRequest({
		url: '../api/traer-Rubro.php',
		success: function(rta) {
			var respuesta = JSON.parse(rta);
			/**
			 *
			 * Si la respuesta es distinta a 0 muestra mensaje de error, sino de éxito.
			 *
			 */
			if(respuesta.status != 0){
				console.log(respuesta);
			}else{
				var options = '';
				for (var i in respuesta.data){
					options += '<option value="' + respuesta.data[i].id_rubro + '">' + respuesta.data[i].rubro + '</option>';
				}
				rubroSelect.html(options);
			}
		}
	});

	btn.click(function() {
		/**
		 *
		 * Llamada ajax por POST que llama al archivo PHP que inserta una publicacion en base de datos.
		 *
		 */
		ajaxRequest({
			method: 'POST',
			url: '../api/nueva-Publicacion.php',
			data: 'tit=' + titulo.val() + '&desc=' + descripcion.val()  + '&rub=' + rubroSelect.val(),
			success: function(rta) {
				var respuesta = JSON.parse(rta);
				/**
				 *
				 * Si la respuesta es distinta a 0 muestra mensaje de error, sino vuelve a listado de publicaciones.
				 *
				 */
				if(respuesta.status != 0){
					mensaje.addClass('alert-danger');
					mensaje.removeClass('alert-success');
				}else{
					window.location="mis-publicaciones.php"
				}
				mensaje.text(respuesta.message);
				mensaje.show();
			}
		});
	});
});