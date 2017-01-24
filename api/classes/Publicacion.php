<?php
/** Declaro la clase Publicacion */
class Publicacion extends Modelo
{
  /**
   * @var int $id        
   * @var string $titulo 	
   * @var date $fecha 	
   * @var string $descripcion 	
   * @var number $presupuesto 	
   * @var string $rubro 	
   * @var int $id_usuario 	
   */
	protected $id;
	protected $titulo;
	protected $fecha;
	protected $descripcion;
	protected $presupuesto;
	protected $rubro;
	protected $id_rubros;
	protected $id_usuarios;

  /**
   * @var string $table 	Contiene el nombre de la tabla en la base de datos        
   * @var array $fillable 	Contiene los valores que van a poder ser cargados por el metodo cargarDatos de la clase Modelo 	
   * @var string $primaryKey 	Contiene cual es la primary key en base de datos	
   */
	public static $table = "publicaciones";

	protected static $fillable = ['id', 'titulo', 'descripcion', 'id_rubros', 'rubro', 'id_usuarios'];

	protected static $primaryKey = "id";

   /**
    * @return int|null  retorna el número de ID o null si no está definido
    */
	public function getId()
	{
		return $this->id;
	}

   /**
    * @return string|null  retorna el titulo o null si no está definido
    */
	public function getTitulo()
	{
		return $this->titulo;
	}

   /**
    * @return string|null  retorna la descripcion o null si no está definido
    */
	public function getDescripcion()
	{
		return $this->descripcion;
	}
   
   /**
    * @return number|null  retorna el presupuesto o null si no está definido
    */
	public function getPresupuesto()
	{
		return $this->presupuesto;
	}

   /**
    * @return string|null  retorna el rubro o null si no está definido
    */
	public function getRubro()
	{
		return $this->rubro;
	}

	public function getIdRubro()
	{
		return $this->id_rubros;
	}

	public function getIdUsuario()
	{
		return $this->id_usuarios;
	}


	/**
	  * Inserta una publicacion en la base de datos
	  *
	  * @param string $titulo
	  * @param string $descripcion
	  * @param string $rubro
	  * @param int $userId
	  *
	  * @return int retorna un entero que define exito o error.
	  */
	public function insertar($titulo, $descripcion, $userId, $rubro)
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			$query = "INSERT INTO publicaciones (titulo, descripcion, id_rubros, id_usuarios) values (:tit, :des, :rub, :idu)";
			$stmt = DBConnection::getStatement($query);
			$stmt->execute([':tit' => $titulo, ':des' => $descripcion, ':rub' => $rubro, ':idu' => $userId]);
			return 0;
		}
		else{
			return 1;
		}
	}

	/**
	  * Modifica una publicacion en la base de datos
	  *
	  * @param int $id
	  * @param string $titulo
	  * @param date $fecha
	  * @param string $descripcion
	  * @param number $presupuesto
	  * @param string $rubro
	  * @param int $userId
	  *
	  * @return int retorna un entero que define exito o error.
	  */
	public function modificar($id, $titulo, $descripcion, $rubro, $userId)
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			$query = "UPDATE publicaciones SET titulo=:tit, descripcion=:des, id_rubros=:rub WHERE id_usuarios=:idu AND id=:id";
			$stmt = DBConnection::getStatement($query);
			$stmt->execute([':tit' => $titulo, ':des' => $descripcion, ':rub' => $rubro, ':idu' => $userId, ':id' => $id]);
			$pub = $stmt->fetch(PDO::FETCH_ASSOC);
			return 0;
		}
		else{
			return 1;
		}
	}

	/**
	  * Trae una publicacion de un usuario de la base de datos
	  *
	  * @param int $id
	  * @param int $userId
	  *
	  * @return int retorna un entero que define exito o error.
	  */
	public function listarPublicacion($id)
	{
		$query = "SELECT * FROM publicaciones LEFT JOIN rubros ON publicaciones.id_rubros = rubros.id_rubro WHERE id=:id";
		$stmt = DBConnection::getStatement($query);
		$stmt->execute([':id' => $id]);
		$pub = $stmt->fetch(PDO::FETCH_ASSOC);

		if($pub){
			$this->cargarDatos($pub);
			return 0;
		}
		else
		{
			return 1;
		}
	}

	/**
	  * Trae todas las publicaciones de un usuario de la base de datos
	  *
	  * @param int $userId
	  *
	  * @return int/array retorna un array con las publicaciones o entero si no hay.
	  */
	public function listarTodas($userId)
	{
		$query = "SELECT * FROM publicaciones LEFT JOIN rubros ON publicaciones.id_rubros = rubros.id_rubro WHERE id_usuarios=:idu";
		$stmt = DBConnection::getStatement($query);
		$stmt->execute([':idu' => $userId]);
		$pub = $stmt->fetchAll(PDO::FETCH_ASSOC);

		if($pub){
			return $pub;
		}
		else
		{
			return 1;
		}
	}

	/**
	  * Trae todas las publicaciones de la base de datos
	  *
	  * @return int/array retorna un array con las publicaciones o entero si no hay.
	  */
	public function listarTodasSinId()
	{
		$query = "SELECT * FROM publicaciones LEFT JOIN rubros ON publicaciones.id_rubros = rubros.id_rubro";
		$stmt = DBConnection::getStatement($query);
		$stmt->execute();
		$pub = $stmt->fetchAll(PDO::FETCH_ASSOC);

		if($pub){
			return $pub;
		}
		else
		{
			return 1;
		}
	}

	/**
	  * Elimina una publicacion de la base de datos
	  *
	  * @param int $userId
	  *
	  * @return int retorna un entero que define exito o error.
	  */
	public function eliminar($id, $userId)
	{
		$query = "SELECT id FROM publicaciones WHERE id_usuarios=:idu AND id=:id";
		$stmt = DBConnection::getStatement($query);
		$stmt->execute([':id' => $id, ':idu' => $userId]);
		$pub = $stmt->fetch(PDO::FETCH_ASSOC);

		if($pub){
			$query2 = "DELETE FROM publicaciones WHERE id_usuarios=:idu AND id=:id";
			$stmt2 = DBConnection::getStatement($query2);
			$stmt2->execute([':id' => $id, ':idu' => $userId]);
			return 0;
		}
		else
		{
			return 1;
		}
	}
}