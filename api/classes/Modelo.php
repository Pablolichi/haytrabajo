<?php

class Modelo
{
	public static $table;

	protected static $primaryKey;

	protected static $fillable = [];
	
	public static function listar()
	{
		$query = "SELECT * FROM " . static::$table;
		//$stmt = $db->prepare($query);
		$stmt = DBConnection::getStatement($query);
		$stmt->execute();
		$salida = [];
		while($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$obj = new static;
			$obj->{static::$primaryKey} = $fila[static::$primaryKey];
			$obj->cargarDatos($fila);
			$salida[] = $obj;
		}
		return $salida;
	}

	public function obtenerPorPk($id)
	{
		$this->{static::$primaryKey} = $id;
		$query = "SELECT * FROM " . static::$table . "
					WHERE " . static::$primaryKey . " = ?";
		$stmt = DBConnection::getStatement($query);
		$stmt->execute([$id]);

		$this->cargarDatos($stmt->fetch(PDO::FETCH_ASSOC));
	}

	public function cargarDatos($datos)
	{
		foreach ($datos as $campo => $valor) {
			if(in_array($campo, static::$fillable)) {
				// $campo == "nombre";
				// $this->nombre = $valor;
				$this->{$campo} = $valor;
			}
		}
	}
}