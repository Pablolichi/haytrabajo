<?php
/**
 * Require de archivo de configuracion
 */
require('config.php');

/**
 * Instanciacion
 */
$user = new Usuario;

/**
 * @var $login        Contendrá el valor devuelto por el metodo login de la clase Usuario
 */
$login = $user->login($_GET['user'], $_GET['pass']);

/**
 * Si el valor devuelto es 0 es correcto, si es otro hubo error
 */
if($login == 0) {
	echo json_encode([
		'status' => 0
	]);
}else if($login == 2){
	echo json_encode([
		'status' => 2,
		'message' => 'La contraseña es incorrecta.'
	]);
}else{
	echo json_encode([
		'status' => 1,
		'message' => 'El usuario no existe.'
	]);
}