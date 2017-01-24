<?php
/** Declaro la clase Usuario */
class Usuario extends Modelo
{
  /**     
   * @var string $usuario 	
   * @var string $password 	
   * @var string $mail	
   */
	protected $usuario;
	protected $password;
	protected $mail;
	protected $nombre;
	protected $apellido;

  /**
   * @var string $table 	Contiene el nombre de la tabla en la base de datos        
   * @var array $fillable 	Contiene los valores que van a poder ser cargados por el metodo cargarDatos de la clase Modelo 	
   * @var string $primaryKey 	Contiene cual es la primary key en base de datos	
   */
	public static $table = "usuarios";

	protected static $fillable = ['usuario', 'pass', 'mail', 'nombre', 'apellido'];

	protected static $primaryKey = "usuario";


	/**
	  * Inserta un usuario en la base de datos
	  *
	  * @param string $usuario
	  * @param string $pass
	  * @param string $mail
	  *
	  * @return int retorna un entero que define exito o error.
	  */
	public function insertar($usuario, $pass, $mail, $nombre, $apellido)
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			$query = "SELECT * FROM usuarios WHERE usuario = ?";
			$stmt = DBConnection::getStatement($query);
			$stmt->execute([$usuario]);
			$user = $stmt->fetch(PDO::FETCH_ASSOC);

			if(empty($user))
			{
				$query2 = "SELECT * FROM usuarios WHERE mail = ?";
				$stmt2 = DBConnection::getStatement($query2);
				$stmt2->execute([$mail]);
				$mail2 = $stmt2->fetch(PDO::FETCH_ASSOC);

				if(empty($mail2)){
					$query3 = "INSERT INTO usuarios (usuario, pass, mail, nombre, apellido) values (:u , :pass, :mail, :nombre, :apellido)";
					$stmt3 = DBConnection::getStatement($query3);
					$stmt3->execute([':u' => $usuario, ':pass' => $pass, ':mail' => $mail, ':nombre' => $nombre, ':apellido' => $apellido]);

					return 0;	
				}
				else
				{
					return 2;	
				}
			}
			else
			{
				return 1;
			}
		}
		else{
			return 3;
		}
	}

	/**
	  * Login de usuario
	  *
	  * @param string $usuario
	  * @param string $pass
	  *
	  * @return int retorna un entero que define exito o error.
	  */
	public function login($usuario, $pass)
	{
		$query = "SELECT * FROM usuarios WHERE usuario = ?";
		$stmt = DBConnection::getStatement($query);
		$stmt->execute([$usuario]);
		$user = $stmt->fetch(PDO::FETCH_ASSOC);

		if($user)
		{
			if(password_verify($pass, $user['pass']))
			{
				$this->cargarDatos($user);
				$_SESSION['logged'] = 'yes';
				$_SESSION['user'] = $user['usuario'];
				$_SESSION['user-id'] = $user['id'];
				return 0;
			}
			else
			{
				return 2;
			}
		}
		else
		{
			return 1;
		}
	}
}