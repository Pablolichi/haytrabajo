$(document).ready(function() {
	$('.slider-publicacion').slick({
	  centerMode: true,
	  centerPadding: '60px',
	  slidesToShow: 1,
	  dots: false
	});

	var num = 170; //number of pixels before modifying styles


jQuery(window).bind('scroll', function () {
    if (jQuery(window).scrollTop() > num) {
        jQuery('.OFERTAR').addClass('fixed');
    } else {
        jQuery('.OFERTAR').removeClass('fixed');
    }
});





	var id = location.search.split('id=')[1] ? location.search.split('id=')[1] : null;
		titulo = $('#tituloPublicacion'),
		descripcion = $('#descripcionPublicacion');

		
		
		
		
	/* ESTO REDIRECCIONABA if(id){
		ajaxRequest({
			url: '../api/listar-Publicacion.php',
			data: 'id=' + id,
			success: function(rta) {
				var respuesta = JSON.parse(rta);
				/**
				 *
				 * Si la respuesta es distinta de cero da error, sino llama a la funcion que lista el html para editar
				 *
				 
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
	} */
});



