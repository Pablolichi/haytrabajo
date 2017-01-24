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
 * @var $listarPub        Contendrá el valor devuelto por el metodo listarPublicacion de la clase Publicacion
 */
$listarPub = $pub->listarPublicacion($_GET['id']);

/**
 * Si el valor devuelto es 0 es correcto, si es otro hubo error
 */
if($listarPub == 0){
	if(empty($_SESSION['user-id'])){
		echo json_encode([
			'status' => 0,
			'id' => $pub->getId(),
			'titulo' => $pub->getTitulo(),
			'descripcion' => $pub->getDescripcion(),
			'rubro' => $pub->getRubro(),
			'id_rubro' => $pub->getIdRubro()
		]);
	}else{
		if($_SESSION['user-id'] == $pub->getIdUsuario()){
			/**
			 * Devuelve los valores haciendo llamando a un getter de cada uno
			 */
			echo json_encode([
				'status' => 0,
				'id' => $pub->getId(),
				'titulo' => $pub->getTitulo(),
				'descripcion' => $pub->getDescripcion(),
				'rubro' => $pub->getRubro(),
				'id_rubro' => $pub->getIdRubro(),
				'user' => true
			]);
		}else{
			/**
			 * Devuelve los valores haciendo llamando a un getter de cada uno
			 */
			echo json_encode([
				'status' => 0,
				'id' => $pub->getId(),
				'titulo' => $pub->getTitulo(),
				'descripcion' => $pub->getDescripcion(),
				'rubro' => $pub->getRubro(),
				'id_rubro' => $pub->getIdRubro()
			]);
		}
	}
}
else
{
	echo json_encode([
		'status' => 1,
		'message' => 'Publicación inexistente o no corresponde al usuario.'
	]);
}