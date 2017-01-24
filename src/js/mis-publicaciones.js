$(document).ready(function() {
	listarPublicaciones();

	/**
	 *
	 * Funcion que hace una llamada AJAX que lista las publicaciones
	 *
	 */
	function listarPublicaciones(){
		ajaxRequest({
			url: '../api/listado-Publicacion.php',
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

		if(!pub){
			html = 'No tenes publicaciones activas. Creá una <a href="crear-publicacion.php">acá</a>.'
		}else{
			for(var i = 0; i < pub.length; i++){
				html += '<a href="publicacion.php?id=' + pub[i].id + '">';
				html += '<div data-id="' + pub[i].id + '" class="publicacion">';
				html += '<div class="col-xs-3"><img src="img/foto3.jpg" alt=""></div>';
				html += '<div class="col-xs-9">';
				html += '<h2>' + pub[i].titulo + '</h2>';
				html += '<p>' + pub[i].descripcion + '</p>';
				html += '<p><b>Rubro: </b>' + pub[i].rubro + '</p>';
				html += '</div>';
				html += '<div class="acciones"><a href="editar.php?id='+pub[i].id+'" class="btn editar"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Editar</a>';
				html += '<a class="btn eliminar"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Eliminar</a></div>';
				html += '</div></a>';
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
		var btnEditar = document.querySelectorAll('.editar'),
			btnEliminar = document.querySelectorAll('.eliminar'),
			idEditar,
			idEliminar;

		for (var i = 0; i < btnEditar.length; i++) {
			btnEliminar[i].addEventListener('click', function(event) {
				idEliminar = getPubId(event.target);
				/**
				 *
				 * Hace una llamada AJAX que elimina una publicacion en concreto
				 *
				 */
				ajaxRequest({
					url: '../api/eliminar-Publicacion.php',
					data: 'id=' + idEliminar,
					success: function(rta) {
						var respuesta = JSON.parse(rta);
						/**
						 *
						 * Si la respuesta es distinta de cero da error, sino llama a la funcion que lista el html para editar
						 *
						 */
						if(respuesta.status != 0){
							console.log(respuesta.message)
						}else{
							$(event.target.parentElement.parentElement).slideUp('slow', function(){ $(this).remove(); });
						}
					}
				});
			});
		};
	};

	/**
	 *
	 * Funcion que obtiene el id de la publicacion a eliminar/editar
	 *
	 */
	function getPubId(value){
		return value.parentElement.parentElement.getAttribute('data-id');
	}
});