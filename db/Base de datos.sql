CREATE DATABASE IF NOT EXISTS `haytrabajo` DEFAULT CHARACTER SET utf8;
USE `haytrabajo` ;

CREATE TABLE IF NOT EXISTS `provincias` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `localidades` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `id_provincia` int(2),
  PRIMARY KEY (`id`),
  FOREIGN KEY (`id_provincia`) REFERENCES `provincias` (`id`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `rubros` (
  `id_rubro` int(2) NOT NULL AUTO_INCREMENT,
  `rubro` varchar(25) NOT NULL,
  PRIMARY KEY (`id_rubro`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(20) NOT NULL,
  `pass` varchar(75) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `telefono` tinytext,
  `pic_perfil` varchar(250),
  `id_localidades` int(3),
  PRIMARY KEY (`id`),
  FOREIGN KEY (`id_localidades`) REFERENCES `localidades` (`id`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `prestadores` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `id_usuarios` int(5),
  `id_rubros` int(2),
  FOREIGN KEY (`id_usuarios`) REFERENCES `usuarios` (`id`),
  FOREIGN KEY (`id_rubros`) REFERENCES `rubros` (`id_rubro`),
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `experiencias` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(250) NOT NULL,
  `descripcion` text(1000) NOT NULL,
  `inicio` date NOT NULL,
  `fin` date NOT NULL,
  `id_prestadores` int(5),
  FOREIGN KEY (`id_prestadores`) REFERENCES `prestadores` (`id`),
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `publicaciones` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(140) NOT NULL,
  `descripcion` text(1000),
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_usuarios` int(5),
  `id_rubros` int(2),
  FOREIGN KEY (`id_usuarios`) REFERENCES `usuarios` (`id`),
  FOREIGN KEY (`id_rubros`) REFERENCES `rubros` (`id_rubro`),
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `presupuestos` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `presupuesto` int(6) NOT NULL,
  `estado` int(1) NOT NULL,
  `id_publicaciones` int(8),
  `id_prestadores` int(5),
  FOREIGN KEY (`id_publicaciones`) REFERENCES `publicaciones` (`id`),
  FOREIGN KEY (`id_prestadores`) REFERENCES `prestadores` (`id`),
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `valoraciones` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `valoracion` int(1) NOT NULL,
  `id_presupuestos` int(8),
  FOREIGN KEY (`id_presupuestos`) REFERENCES `presupuestos` (`id`),
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `denuncias` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `denuncia` text(1000) NOT NULL,
  `id_usuarios` int(5),
  `id_prestadores` int(5),
  FOREIGN KEY (`id_usuarios`) REFERENCES `usuarios` (`id`),
  FOREIGN KEY (`id_prestadores`) REFERENCES `prestadores` (`id`),
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `mensajes` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `mensaje` text(1000) NOT NULL,
  `fecha` datetime NOT NULL,
  `emisor` int(5),
  `receptor` int(5),
  FOREIGN KEY (`emisor`) REFERENCES `usuarios` (`id`),
  FOREIGN KEY (`receptor`) REFERENCES `usuarios` (`id`),
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `fotos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `url` text(500) NOT NULL,
  `id_publicacion` int(8),
  FOREIGN KEY (`id_publicacion`) REFERENCES `publicaciones` (`id`),
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

INSERT INTO `provincias` (`nombre`) VALUES
('Buenos aires'),
('Cordoba'),
('Santa Fe'),
('Mendoza'),
('Tucuman');

INSERT INTO `localidades` (`nombre`, `id_provincia`) VALUES
('Capital Federal', 1),
('La Plata', 1),
('Cordoba', 2),
('Villa Carlos Paz', 2),
('Santa Fe', 3),
('Rosario', 3);

INSERT INTO `rubros` (`rubro`) VALUES
('Albañilería'),
('Pintura'),
('Electricidad'),
('Plomería');

INSERT INTO `usuarios` (`usuario`, `pass`, `nombre`, `apellido`, `mail`, `telefono`, `pic_perfil`, `id_localidades`) VALUES
('admin', 'adminHT1234', 'admin', 'admin', 'admin@haytrabajo.com.ar', '45590012', 'http://google.com.ar/admin.jpg', 1),
('pablo19', '123456', 'Pablo', 'Ortiz', 'pablo.ortiz@gmail.com', '45454545', 'http://google.com.ar/foto.jpg', 1),
('juancostela', '999000', 'Juan', 'Costela', 'juan.costela@gmail.com', '45679900', 'http://google.com.ar/foto.jpg', 2);

INSERT INTO `prestadores` (`id_usuarios`, `id_rubros`) VALUES
(3, 1);

INSERT INTO `experiencias` (`titulo`, `descripcion`, `inicio`, `fin`, `id_prestadores`) VALUES
('Arreglo de casa', 'A fin de año pasado hice el arreglo de una casa de 100mts2 bla bla bla', '20110312', '20110406', 1);

INSERT INTO `publicaciones` (`titulo`, `descripcion`, `fecha`, `id_usuarios`, `id_rubros`) VALUES
('Busco albañil para arreglo de casa', 'Tengo esta casa toda rota y necesito arreglarla', '2012-06-18 10:34:09', 3, 1);

INSERT INTO `presupuestos` (`presupuesto`, `estado`, `id_publicaciones`, `id_prestadores`) VALUES
('4000', 1, 1, 1);

INSERT INTO `valoraciones` (`valoracion`, `id_presupuestos`) VALUES
(5, 1);

INSERT INTO `denuncias` (`denuncia`, `id_usuarios`, `id_prestadores`) VALUES
('Este trabajador entro a mi casa a realizar una tarea y se robo mis joyas', 3, 1);

INSERT INTO `mensajes` (`mensaje`, `fecha`, `emisor`, `receptor`) VALUES
('Hola, como estas?', '2015-09-20 14:40:09', 3, 1),
('Bien vos?', '2015-09-20 14:49:54', 3, 1),
('Bien, cuando vas a pasar a realizar el trabajo?', '2015-09-20 15:00:01', 3, 1);