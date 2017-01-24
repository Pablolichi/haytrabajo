$(document).ready(function() {
	listarPublicaciones();

	/**
	 *
	 * Funcion que hace una llamada AJAX que lista las publicaciones
	 *
	 */
	function listarPublicaciones(){
		ajaxRequest({
			url: '../api/listado-all-Publicacion.php',
			success: function(rta) {
				var respuesta = JSON.parse(rta);
				/**
				 *
				 * Llama a la funcion que define el html para el listado de publicaciones y a una segunda funcion que asigna eventos al editar y eliminar
				 *
				 */
				console.log(respuesta.data);
				htmlListadoPub(respuesta.data);
				asignarEventosListado();
			}
		});
	}

	/**
	 *
	 * Funcion que define el html para el listado de publicaciones
	 *
	 */
	function htmlListadoPub(pub){
		var parent = $('#listadoPublicaciones'),
			html = '',
			btnEditar,
			btnEliminar;

		$('.total').html(pub.length);

		if(!pub){
			html = 'No tenes publicaciones activas. Creá una <a href="crear-publicacion.php">acá</a>.'
		}else{
			for(var i = 0; i < pub.length; i++){
				html += '<div data-id="' + pub[i].id + '" class="publicacion">';
				html += '<div class="col-xs-3"><img src="img/foto3.jpg" alt=""></div>';
				html += '<div class="col-xs-9">';
				html += '<h2>' + pub[i].titulo + '</h2>';
				html += '<p>' + pub[i].descripcion + '</p>';
				html += '<p><b>Rubro: </b>' + pub[i].rubro + '</p>';
				html += '</div>';
				html += '</div>';
			}
		}

		parent.html(html);
	};

	/**
	 *
	 * Funcion que asigna el evento click al eliminar y editar de cada publicacion
	 *
	 */
	function asignarEventosListado(){
		$('.publicacion').click(function(){
			id = $(this).attr('data-id');
			window.location = 'publicacion.php?id=' + id;
		});
	};
});