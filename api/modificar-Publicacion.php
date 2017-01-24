<?php
date_default_timezone_set('America/Argentina/Buenos_Aires');

/**
 * Require de archivo de configuracion
 */
require('config.php');

/**
 * Instanciacion
 */
$pub = new Publicacion;

/**
 * Verifica si el valor $_POST['tit'] no esta vació
 */
if (!empty($_POST['tit'])){
	/**
	 * @var $nuevaPub        Contendrá el valor devuelto por el metodo modificar de la clase Publicacion
	 */
	$nuevaPub = $pub->modificar($_POST['id'], $_POST['tit'], $_POST['desc'], $_POST['rub'], $_SESSION['user-id']);
	
	/**
	 * Si el valor devuelto es 0 es correcto, si es otro hubo error
	 */
	if($nuevaPub == 0){
		echo json_encode([
			'status' => 0,
			'message' => 'Publicación modificada con éxito.'
		]);
	}
	else if($nuevaPub == 1)
	{
		echo json_encode([
			'status' => 1,
			'message' => 'Accion no permitida.'
		]);
	}
	else
	{
		echo json_encode([
			'status' => 2,
			'message' => 'Publicación inexistente o no corresponde al usuario.'
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