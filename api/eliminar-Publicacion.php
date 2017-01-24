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
 * @var $eliminarPub        Contendrá el valor devuelto por el metodo eliminar de la clase Publicacion
 */
$eliminarPub = $pub->eliminar($_GET['id'], $_SESSION['user-id']);

/**
 * Si el valor devuelto es 0 es correcto, si es otro hubo error
 */
if($eliminarPub == 0){
	echo json_encode([
		'status' => 0,
		'message' => 'Publicación eliminada con éxito.'
	]);
}
else
{
	echo json_encode([
		'status' => 1,
		'message' => 'Publicación inexistente o no corresponde al usuario.'
	]);
}