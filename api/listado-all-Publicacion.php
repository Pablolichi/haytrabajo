<?php

/**
 * Require de archivo de configuracion
 */
require('config.php');

/**
 * Instanciacion
 */
$pub = new Publicacion;

/**
 * @var $listadoPub        Contendrá el valor devuelto por el metodo listarTodas de la clase Publicacion
 */
$listadoPub = $pub->listarTodasSinId();

/**
 * Si el valor devuelto es 0 es correcto, si es otro hubo error
 */
if($listadoPub != 1){
	/**
	 * Devuelve un array de Objetos con todas las publicaciones
	 */
	echo json_encode([
		'status' => 0,
		'data' => $listadoPub
	]);
}
else
{
	echo json_encode([
		'status' => 1,
		'message' => 'No tenes publicaciones creadas.'
	]);
}