<header>
<link href="https://fonts.googleapis.com/css?family=Lato|Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
	
	<div class="col-sm-12 barra_superior_header">
		<div class="wrapper">
		<div class="row">
		<div class="col-md-10">
			Tiene alguna pregunta? Mande un mail a mail@
		</div>
			<div class="col-md-2" style="text-align:right">
			
				
				<?php
				session_start();
				if(!empty($_SESSION['user'])) :
				?>
				<div class="notificaciones_header" style="display:inline; font-size:15px; margin-right:10px;">
				<i class="fa fa-bullhorn" aria-hidden="true"></i>
				</div>
				
				<div class="dropdown">
				<button class="dropdown-toggle dropdown_header" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
					<img src="img/perfil.jpg" class="img_usuario_barra_header"/>
					<span class="caret dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"></span>
				</button>
		
				<ul class="dropdown-menu dropdown-menu_header" aria-labelledby="dropdownMenu1">
					<div style="padding-left:5px; padding-bottom:5px;   border-bottom: 1px solid #ccc;"><?php print $_SESSION['user']; ?></div>
					<li><a href="#">Perfil</a></li>
					<li><a href="#" id="logout">Cerrar sesion</a></li>
				</ul>
				</div>
				<?php else : ?>
				<i class="fa fa-user" aria-hidden="true"></i> 
				<a data-toggle="modal" data-target="#modal_login">Login/Registrarse</a>
				<?php endif; ?>
				</div>
				
			
			</div>
			</div>
		</div>

	
	<div class="col-sm-12">
	<div class="wrapper" >
	
		
		<div class="col-md-3">
			<a href="index.php"><img class="logo" src="img/logo.png" alt="Hay trabajo logo"></a>
			</div>
		

		
			<?php
				if(!empty($_SESSION['user'])) :
			?>
			<div class="col-md-9 menu_header">
			<a href="index.php" class="link_header"> 
				<i class="fa fa-home" aria-hidden="true"></i>
				HOME
			</a>
			<a class="link_header" href="crear-publicacion.php">
				<i class="fa fa-briefcase" aria-hidden="true"></i>
				Crear Publicacion
			</a>
			<a class="link_header" href="mis-publicaciones.php">
				<i class="fa fa-user" aria-hidden="true"></i>
				Perfil
			</a>
			<a class="link_header" href="contacto.php">
				<i class="fa fa-envelope-o" aria-hidden="true"></i>
					Contacto
			</a>
			</div>	 
			
				
				
			<?php else : ?>
			<div class="col-md-9 menu_header">
			<a href="index.php" class="link_header"> 
				<i class="fa fa-home" aria-hidden="true"></i>
				HOME
			</a>
			<a data-toggle="modal" data-target="#modal_login" class="link_header">
				<i class="fa fa-briefcase" aria-hidden="true"></i>
				CREAR PUBLICACION
			</a>
			<a href="contacto.php" class="link_header">
				<i class="fa fa-envelope-o" aria-hidden="true"></i>
				CONTACTO
			</a>
				<!--<a href="registro.php" class="btn_convertise_header" style="border:1px solid #aaaaaa; border-radius:2px;">Convertirse en prestador</a>
				<a data-toggle="modal" data-target="#modal_login">Login</a>
				<a  data-toggle="modal" data-target="#modal_registrarse">Registrarse</a>-->
			<?php endif; ?>
			<!--<a href="listado-prestadores.php">Buscar trabajador</a>-->
			<!--<a href="crear-publicacion.php" class="btn">Crear publicación</a>-->
		</div>
		
		
	</div>
	</div>
	<div class="col-sm-12 buscador_header">
		<div class="wrapper" style="padding-top:15px; ">
            <div class="col-sm-4">
              <div class="form-group">
                <select class="form-control" id="provincia" name="provincia">
                  <option value="0" selected="selected">
                    ¿Que especialista necesita?
                  </option>
                </select>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <select class="form-control" id="provincia" name="provincia">
                  <option value="0" selected="selected">
                    Seleccione su Provincia
                  </option>
                </select>
              </div>
            </div>
           
            <div class="col-sm-3">
              <select class="form-control ">
                <option value="0" selected="selected">
                  Seleccione el partido
                </option>
              </select>
            </div>
            
            <div class="col-sm-2">
              <a class="btn btn-raised ripple-effect btn-success btn-block" href="results.html">
                Buscar
              </a>
            </div>
          
          </div>
	</div>
	
	
</header>