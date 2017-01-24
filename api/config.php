<?php

/**
 * Inicio de SESSION
 * Carga de classes PHP
 */

session_start();
spl_autoload_register(function($className) {
	if(file_exists('classes/' . $className . '.php')) {
		require_once 'classes/' . $className . '.php';
	}
});
