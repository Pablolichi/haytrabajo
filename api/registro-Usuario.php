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
 * Verifica si el valor $_POST['user'] no esta vació y sea un string
 */
if (!empty($_POST['user']) && is_string($_POST['user'])) {
	if(!empty($_POST['nombre']) && !empty($_POST['apellido'])) {
		/**
		 * Verifica si $_POST['mail'] es un formato de mail válido
		 */
		if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
			/**
			 * Verifica si el valor $_POST['pass'] es igual al valor de $_POST['pass2']
			 */
			if(!empty($_POST['pass']) && $_POST['pass'] == $_POST['pass2']){
				/**
				 * @var $registro        Contendrá el valor devuelto por el metodo insertar de la clase Usuario
				 */
				$registro = $user->insertar($_POST['user'], password_hash($_POST['pass'], PASSWORD_DEFAULT), $_POST['mail'], $_POST['nombre'], $_POST['apellido']);

				/**
				 * Si el valor devuelto es 0 es correcto, si es otro hubo error
				 */
			    if($registro == 0) {
					echo json_encode([
						'status' => 0,
						'message' => 'El usuario fue creado con exito.'
					]);
				}else if($registro == 2){
					echo json_encode([
						'status' => 2,
						'message' => 'El mail ya está en uso.'
					]);
				}else if($registro == 3){
					echo json_encode([
						'status' => 3,
						'message' => 'Accion no permitida.'
					]);
				}else{
					echo json_encode([
						'status' => 1,
						'message' => 'El usuario ya existe.'
					]);
				}
			}
			else{
				echo json_encode([
					'status' => 1,
					'message' => 'Las contraseñas no coinciden o están vacias.'
				]);
			}
		}
		else
		{
			echo json_encode([
				'status' => 1,
				'message' => 'Email inválido.'
			]);
		}
	}else{
		echo json_encode([
			'status' => 1,
			'message' => 'Debe ingresar nombre y apellido.'
		]);
	}
}
else{
	echo json_encode([
		'status' => 1,
		'message' => 'Ingrese un usuario correcto.'
	]);
}