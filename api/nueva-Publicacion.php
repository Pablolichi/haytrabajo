<?php
date_default_timezone_set('America/Argentina/Buenos_Aires');

/**
 * Require de archivo de configuracion
 */
require('config.php');

/**
 * @var date $hoy        Contendrá la fecha actual para pasar como un parametro al metodo de la clase Publicacion
 */

/**
 * Instanciacion
 */
$pub = new Publicacion;

/**
 * Verifica si el valor $_POST['tit'] no esta vació
 */
if (!empty($_POST['tit'])){
	/**
	 * @var $nuevaPub        Contendrá el valor devuelto por el metodo insertar de la clase Publicacion
	 */
	$nuevaPub = $pub->insertar($_POST['tit'], $_POST['desc'], $_SESSION['user-id'], $_POST['rub']);
	
	/**
	 * Si el valor devuelto es 0 es correcto, si es otro hubo error
	 */
	if($nuevaPub == 0){
		echo json_encode([
			'status' => 0,
			'message' => 'Publicación creada con éxito.'
		]);
	}else{
		echo json_encode([
			'status' => 1,
			'message' => 'Accion no permitida.'
		]);
	}
}
else
{
	echo json_encode([
		'status' => 1,
		'message' => 'Debe ingresar un titulo.'
	]);
}