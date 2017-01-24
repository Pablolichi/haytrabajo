$(document).ready(function() {
	var id = location.search.split('id=')[1] ? location.search.split('id=')[1] : null,
		rubroSelect = $('#rubroPublicacion'),
		titulo = $('#tituloPublicacion'),
		descripcion = $('#descripcionPublicacion'),
		btn = $('#editarPublicacion'),
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

	if(id){
		setTimeout(function(){
			ajaxRequest({
				url: '../api/listar-Publicacion.php',
				data: 'id=' + id,
				success: function(rta) {
					var respuesta = JSON.parse(rta);
					/**
					 *
					 * Si la respuesta es distinta de cero da error, sino llama a la funcion que lista el html para editar
					 *
					 */
					if(respuesta.status != 0){
						window.location="mis-publicaciones.php"
					}else{
						if(respuesta.user){
							titulo.val(respuesta.titulo);
							descripcion.val(respuesta.descripcion);
							rubroSelect.val(respuesta.id_rubro);
						}else{
							window.location="mis-publicaciones.php"
						}
					}
				}
			});
		}, 100)
	}else{
		window.location="mis-publicaciones.php"
	}

	btn.click(function() {
		ajaxRequest({
			method: 'POST',
			url: '../api/modificar-Publicacion.php',
			data: 'id=' + id + '&tit=' + titulo.val() + '&desc=' + descripcion.val() + '&rub=' + rubroSelect.val(),
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
	})
});