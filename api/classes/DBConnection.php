<?php

/**
 * Wrapper de PDO en modo Singleton.
 */
class DBConnection
{
	/** @var PDO */
	private static $db;

	/**
	 * Constructor privado para asegurar el Singleton.
	 */
	private function __construct() {}

	/**
	 * Abre la conexión con la base de datos.
	 */
	private static function openConnection()
	{	
		$db_host = "localhost";
		$db_user = "root";
		$db_pass = "";
		$db_name = "haytrabajo";
		$db_dsn = "mysql:host=" . $db_host . ";dbname=" . $db_name . ";charset=utf8";

		try {
			self::$db = new PDO($db_dsn, $db_user, $db_pass);
		} catch(Exception $e) {
			die("No andó :(");
		}
	}

	/**
	 * Retorna la conexión a la base de datos.
	 * @return PDO
	 */
	public static function getConnection()
	{
		if(!self::$db) {
			self::openConnection();
		}

		return self::$db;
	}

	/**
	 * Retorna un PDOStatement del $query.
	 * 
	 * @param string $query La consulta a preparar
	 * @return PDOStatement
	 */
	public static function getStatement($query)
	{
		return self::getConnection()->prepare($query);
	}
}