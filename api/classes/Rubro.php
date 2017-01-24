<?php
/** Declaro la clase Usuario */
class Rubro extends Modelo
{
  /**     
   * @var string $nombre
   */
	protected $rubro;

  /**
   * @var string $table 	Contiene el nombre de la tabla en la base de datos        
   * @var array $fillable 	Contiene los valores que van a poder ser cargados por el metodo cargarDatos de la clase Modelo 	
   * @var string $primaryKey 	Contiene cual es la primary key en base de datos	
   */
	public static $table = "rubros";

	protected static $fillable = ['rubro'];

	protected static $primaryKey = "id_rubro";

	public function traerTodos()
	{
		$query = "SELECT * FROM rubros";
		$stmt = DBConnection::getStatement($query);
		$stmt->execute();
		$rubros = $stmt->fetchAll(PDO::FETCH_ASSOC);

		if($rubros){
			return $rubros;
		}
		else
		{
			return 1;
		}
	}
}