<?php
/**
 * Require de archivo de configuracion
 */
require('config.php');

$rubros = new Rubro;

/**
 * @var $listarPub        Contendrá el valor devuelto por el metodo listarPublicacion de la clase Publicacion
 */
$listarRubros = $rubros->traerTodos();

/**
 * Si el valor devuelto es 0 es correcto, si es otro hubo error
 */
if($listarRubros){
	/**
	 * Devuelve los valores haciendo llamando a un getter de cada uno
	 */
	echo json_encode([
		'status' => 0,
		'data' => $listarRubros
	]);
}