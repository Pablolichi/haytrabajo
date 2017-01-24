$(document).ready(function() {
	$('.slider-publicacion').slick({
	  centerMode: true,
	  centerPadding: '60px',
	  slidesToShow: 1,
	  dots: false
	});

	var id = location.search.split('id=')[1] ? location.search.split('id=')[1] : null;
		titulo = $('#tituloPublicacion'),
		descripcion = $('#descripcionPublicacion');

	if(id){
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
					titulo.html(respuesta.titulo);
					descripcion.html(respuesta.descripcion);
				}
			}
		});
	}else{
		window.location="mis-publicaciones.php"
	}
});