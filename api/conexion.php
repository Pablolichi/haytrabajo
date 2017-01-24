<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_base = "haytrabajo";
$db_dsn = "mysql:host=" . $db_host . ";dbname=" . $db_base . ";charset=utf8";

try {
	$db = new PDO($db_dsn, $db_user, $db_pass);
} catch(Exception $e) {
	die("Error de conexión");
}