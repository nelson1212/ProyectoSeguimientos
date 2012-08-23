-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 08-08-2012 a las 12:46:02
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `base_datos_ceai`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actainstructores`
--

CREATE TABLE IF NOT EXISTS `actainstructores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `acta_id` int(11) NOT NULL,
  `instructore_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_actainstructores_actas1` (`acta_id`),
  KEY `fk_actainstructores_instructores1` (`instructore_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Volcado de datos para la tabla `actainstructores`
--

INSERT INTO `actainstructores` (`id`, `acta_id`, `instructore_id`, `created`, `updated`) VALUES
(28, 36, 3, '2012-02-10 15:53:44', '2012-02-10 15:53:44'),
(29, 36, 1, '2012-02-10 15:53:44', '2012-02-10 15:53:44'),
(30, 37, 1, '2012-02-10 15:54:36', '2012-02-10 15:54:36'),
(31, 42, 1, '2012-02-28 21:33:29', '2012-02-28 21:33:29'),
(32, 43, 3, '2012-02-28 21:34:17', '2012-02-28 21:34:17'),
(33, 43, 2, '2012-02-28 21:34:17', '2012-02-28 21:34:17'),
(34, 44, 3, '2012-02-28 21:34:36', '2012-02-28 21:34:36'),
(35, 44, 2, '2012-02-28 21:34:36', '2012-02-28 21:34:36'),
(36, 45, 2, '2012-07-20 00:43:14', '2012-07-20 00:43:14'),
(37, 46, 3, '2012-07-20 00:43:44', '2012-07-20 00:43:44'),
(38, 47, 3, '2012-07-20 00:44:27', '2012-07-20 00:44:27'),
(39, 48, 1, '2012-07-20 00:51:54', '2012-07-20 00:51:54'),
(40, 49, 3, '2012-07-20 00:52:17', '2012-07-20 00:52:17'),
(41, 50, 1, '2012-07-20 00:56:36', '2012-07-20 00:56:36'),
(42, 51, 3, '2012-07-20 00:57:21', '2012-07-20 00:57:21'),
(43, 52, 3, '2012-07-20 00:58:51', '2012-07-20 00:58:51'),
(44, 53, 1, '2012-07-20 01:00:14', '2012-07-20 01:00:14'),
(45, 54, 2, '2012-07-20 01:13:51', '2012-07-20 01:13:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actas`
--

CREATE TABLE IF NOT EXISTS `actas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` varchar(50) DEFAULT NULL COMMENT 'DateTime para saber la fecha y la hora en que se hizo el seguimiento\n',
  `tipo_id` int(11) NOT NULL,
  `grupo_id` int(11) NOT NULL,
  `etapa_id` int(11) NOT NULL,
  `trimestre_id` int(11) NOT NULL,
  `observaciones` text,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_actas_trimestres2` (`trimestre_id`),
  KEY `fk_actas_etapas2` (`etapa_id`),
  KEY `fk_acta_grupos` (`grupo_id`),
  KEY `fk_actas_tipos1` (`tipo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Volcado de datos para la tabla `actas`
--

INSERT INTO `actas` (`id`, `fecha`, `tipo_id`, `grupo_id`, `etapa_id`, `trimestre_id`, `observaciones`, `created`, `updated`) VALUES
(36, '02/04/2012 10:36 ', 1, 1, 1, 1, NULL, '2012-02-10 15:53:44', '2012-02-10 15:53:44'),
(37, '02/11/2012 08:38 ', 1, 2, 1, 1, NULL, '2012-02-10 15:54:36', '2012-02-10 15:54:36'),
(40, '02/24/2012 00:00 ', 1, 1, 1, 1, NULL, '2012-02-28 21:31:35', '2012-02-28 21:31:35'),
(41, '02/24/2012 00:00 ', 1, 1, 1, 1, NULL, '2012-02-28 21:32:08', '2012-02-28 21:32:08'),
(42, '02/23/2012 00:00 ', 1, 2, 1, 1, NULL, '2012-02-28 21:33:29', '2012-02-28 21:33:29'),
(43, '02/17/2012 00:00 ', 1, 1, 1, 2, NULL, '2012-02-28 21:34:17', '2012-02-28 21:34:17'),
(44, '02/17/2012 00:00 ', 1, 1, 1, 2, NULL, '2012-02-28 21:34:36', '2012-02-28 21:34:36'),
(45, '04-07-2012 17:43:05', 1, 1, 2, 1, NULL, '2012-07-20 00:43:14', '2012-07-20 00:43:14'),
(46, '25-07-2012 17:43:35', 2, 1, 2, 1, NULL, '2012-07-20 00:43:44', '2012-07-20 00:43:44'),
(47, '02-07-2012 17:44:17', 1, 1, 2, 1, NULL, '2012-07-20 00:44:27', '2012-07-20 00:44:27'),
(48, '02-07-2012 17:51:44', 1, 1, 2, 1, NULL, '2012-07-20 00:51:54', '2012-07-20 00:51:54'),
(49, '02-07-2012 17:52:08', 1, 3, 2, 1, NULL, '2012-07-20 00:52:17', '2012-07-20 00:52:17'),
(50, '24-07-2012 17:56:26', 1, 1, 2, 1, NULL, '2012-07-20 00:56:36', '2012-07-20 00:56:36'),
(51, '24-07-2012 17:57:08', 2, 4, 2, 1, NULL, '2012-07-20 00:57:21', '2012-07-20 00:57:21'),
(52, '17-07-2012 17:58:41', 1, 4, 2, 2, NULL, '2012-07-20 00:58:51', '2012-07-20 00:58:51'),
(53, '24-07-2012 18:00:04', 1, 4, 2, 3, NULL, '2012-07-20 01:00:14', '2012-07-20 01:00:14'),
(54, '31-07-2012 18:13:42', 1, 4, 2, 1, NULL, '2012-07-20 01:13:51', '2012-07-20 01:13:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actausuarios`
--

CREATE TABLE IF NOT EXISTS `actausuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `acta_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_actafuncionarios_actas1` (`acta_id`),
  KEY `fk_actafuncionarios_usuarios1` (`usuario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Volcado de datos para la tabla `actausuarios`
--

INSERT INTO `actausuarios` (`id`, `acta_id`, `usuario_id`, `created`, `updated`) VALUES
(37, 36, 1, '2012-02-10 15:53:44', '2012-02-10 15:53:44'),
(38, 36, 2, '2012-02-10 15:53:44', '2012-02-10 15:53:44'),
(39, 37, 1, '2012-02-10 15:54:36', '2012-02-10 15:54:36'),
(40, 37, 2, '2012-02-10 15:54:36', '2012-02-10 15:54:36'),
(41, 44, 2, '2012-02-28 21:34:36', '2012-02-28 21:34:36'),
(42, 45, 1, '2012-07-20 00:43:14', '2012-07-20 00:43:14'),
(43, 46, 2, '2012-07-20 00:43:44', '2012-07-20 00:43:44'),
(44, 47, 2, '2012-07-20 00:44:27', '2012-07-20 00:44:27'),
(45, 48, 1, '2012-07-20 00:51:54', '2012-07-20 00:51:54'),
(46, 49, 2, '2012-07-20 00:52:17', '2012-07-20 00:52:17'),
(47, 50, 1, '2012-07-20 00:56:36', '2012-07-20 00:56:36'),
(48, 51, 2, '2012-07-20 00:57:21', '2012-07-20 00:57:21'),
(49, 52, 2, '2012-07-20 00:58:51', '2012-07-20 00:58:51'),
(50, 53, 1, '2012-07-20 01:00:14', '2012-07-20 01:00:14'),
(51, 54, 2, '2012-07-20 01:13:51', '2012-07-20 01:13:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acudienteaprendices`
--

CREATE TABLE IF NOT EXISTS `acudienteaprendices` (
  `int` int(11) NOT NULL AUTO_INCREMENT,
  `aprendice_id` int(11) NOT NULL,
  `acudiente_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`int`),
  KEY `fk_acudienteaprendices_acudientes1` (`acudiente_id`),
  KEY `fk_acudienteaprendices_aprendices1` (`aprendice_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acudientes`
--

CREATE TABLE IF NOT EXISTS `acudientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `documento` varchar(45) DEFAULT NULL,
  `nombres` varchar(45) DEFAULT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ambientes`
--

CREATE TABLE IF NOT EXISTS `ambientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `siglas` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `centro_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_ambientes_centros2` (`centro_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aplicativos`
--

CREATE TABLE IF NOT EXISTS `aplicativos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_apli` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aplicativousuarios`
--

CREATE TABLE IF NOT EXISTS `aplicativousuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `aplicativo_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_aplicativousuarios_usuarios1` (`usuario_id`),
  KEY `fk_aplicativousuarios_aplicativos1` (`aplicativo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aprendiceempresas`
--

CREATE TABLE IF NOT EXISTS `aprendiceempresas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aprendice_id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_aprendiceempresas_empresas1` (`empresa_id`),
  KEY `fk_aprendiceempresas_aprendices1` (`aprendice_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aprendicegrupos`
--

CREATE TABLE IF NOT EXISTS `aprendicegrupos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grupo_id` int(11) NOT NULL,
  `aprendice_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_aprendicegrupos_aprendices1` (`aprendice_id`),
  KEY `fk_aprendicegrupos_grupos1` (`grupo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `aprendicegrupos`
--

INSERT INTO `aprendicegrupos` (`id`, `grupo_id`, `aprendice_id`, `created`, `updated`) VALUES
(1, 1, 1, '2012-02-21 00:00:00', '2012-02-28 00:00:00'),
(2, 1, 2, '2012-02-07 00:00:00', '2012-02-23 00:00:00'),
(3, 1, 3, '2012-02-14 00:00:00', NULL),
(4, 1, 4, NULL, NULL),
(5, 1, 5, NULL, NULL),
(6, 2, 6, NULL, NULL),
(7, 1, 7, NULL, NULL),
(8, 1, 8, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aprendices`
--

CREATE TABLE IF NOT EXISTS `aprendices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `documento` varchar(45) DEFAULT NULL,
  `nombres` varchar(45) DEFAULT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `barrio_id` int(11) NOT NULL,
  `sexo_aprendiz` tinyint(4) DEFAULT NULL COMMENT '0 = hombre\n1 =  mujer',
  `correo_aprendiz` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_aprendices_barrios2` (`barrio_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `aprendices`
--

INSERT INTO `aprendices` (`id`, `documento`, `nombres`, `apellidos`, `direccion`, `telefono`, `fecha_nacimiento`, `barrio_id`, `sexo_aprendiz`, `correo_aprendiz`, `created`, `updated`) VALUES
(1, '1256336', 'Pedro Alberto', 'Rojas Cordoba', 'Cra 49 # 52 - 39', '3653326', '2012-02-08', 1, 1, 'jjjjjjjj@gmail.com', '2012-02-02 00:00:00', '2012-02-02 00:00:00'),
(2, '362336323', 'Fernando Esteban', 'Palacios Castro', 'cra 45 # 25 - 96', '9656363', '2012-02-21', 1, 1, 'fernando@gmail.com', '2012-02-29 00:00:00', '2012-02-17 00:00:00'),
(3, '362336321', 'Fernando1 Esteban1', 'Palacios1 Castro1', 'cra 45 # 25 - 96', '9656363', '2012-02-21', 1, 1, 'fernando@gmail.com', '2012-02-29 00:00:00', '2012-02-17 00:00:00'),
(4, '362336322', 'Fernando2 Esteban2', 'Palacios2 Castro2', 'cra 45 # 25 - 96', '9656363', '2012-02-21', 1, 1, 'fernando@gmail.com', '2012-02-29 00:00:00', '2012-02-17 00:00:00'),
(5, '362336322', 'Fernando3 Esteban3', 'Palacios3 Castro3', 'cra 45 # 25 - 96', '9656363', '2012-02-21', 1, 1, 'fernando@gmail.com', '2012-02-29 00:00:00', '2012-02-17 00:00:00'),
(6, '362336324', 'Fernando4 Esteban4', 'Palacios4 Castro4', 'cra 45 # 25 - 96', '9656363', '2012-02-21', 1, 1, 'fernando@gmail.com', '2012-02-29 00:00:00', '2012-02-17 00:00:00'),
(7, '362336325', 'Fernando5 Esteban5', 'Palacios5 Castro5', 'cra 45 # 25 - 96', '9656363', '2012-02-21', 1, 1, 'fernando@gmail.com', '2012-02-29 00:00:00', '2012-02-17 00:00:00'),
(8, '362336326', 'Fernando6 Esteban6', 'Palacios6 Castro6', 'cra 45 # 25 - 96', '9656363', '2012-02-21', 1, 1, 'fernando@gmail.com', '2012-02-29 00:00:00', '2012-02-17 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aprendicesolicitudes`
--

CREATE TABLE IF NOT EXISTS `aprendicesolicitudes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `acta_id` int(11) NOT NULL,
  `solicitude_id` int(11) NOT NULL,
  `aprendice_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_aprendicesolicitudes_solicitudes1` (`solicitude_id`),
  KEY `fk_aprendicesolicitudes_aprendices1` (`aprendice_id`),
  KEY `fk_aprendicesolicitudes_actas1` (`acta_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barrios`
--

CREATE TABLE IF NOT EXISTS `barrios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `ciudade_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_barrios_ciudades2` (`ciudade_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `barrios`
--

INSERT INTO `barrios` (`id`, `nombre`, `ciudade_id`, `created`, `updated`) VALUES
(1, 'Manuela beltran', 1, '2012-02-03 02:22:13', '2012-02-03 02:22:13'),
(2, 'Ciudad modelo', 1, '2012-02-03 02:22:46', '2012-02-03 02:22:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calendarioacademicos`
--

CREATE TABLE IF NOT EXISTS `calendarioacademicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion_trimestre` varchar(45) DEFAULT NULL,
  `fecha_inicial_trime` date DEFAULT NULL,
  `fecha_final_trime` date DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciones`
--

CREATE TABLE IF NOT EXISTS `calificaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aprobado` tinyint(4) DEFAULT NULL,
  `cal_num` varchar(45) DEFAULT NULL COMMENT 'Valor numerico de la calificaicón',
  `acta_id` int(11) NOT NULL,
  `aprendice_id` int(11) NOT NULL,
  `resultadoaprendizaje_id` int(11) NOT NULL,
  `total_horas_excusadas` varchar(45) DEFAULT NULL,
  `total_horas_noexcusadas` varchar(45) DEFAULT NULL,
  `instructore_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_calificaciones_resultadoaprendizajes2` (`resultadoaprendizaje_id`),
  KEY `fk_calificaciones_actas2` (`acta_id`),
  KEY `fk_calificaciones_aprendices2` (`aprendice_id`),
  KEY `fk_calificaciones_instructores2` (`instructore_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `calificaciones`
--

INSERT INTO `calificaciones` (`id`, `aprobado`, `cal_num`, `acta_id`, `aprendice_id`, `resultadoaprendizaje_id`, `total_horas_excusadas`, `total_horas_noexcusadas`, `instructore_id`, `created`, `updated`) VALUES
(1, 0, '1', 36, 1, 1, NULL, NULL, 2, '2012-06-27 01:03:32', '2012-07-19 23:47:12'),
(2, 0, '1', 36, 2, 1, NULL, NULL, 2, '2012-06-27 01:43:17', '2012-07-19 23:47:14'),
(3, 1, '4', 36, 3, 1, NULL, NULL, 2, '2012-06-27 01:43:19', '2012-07-05 04:14:33'),
(4, 0, '3', 36, 4, 1, NULL, NULL, 2, '2012-06-27 01:43:22', '2012-07-19 23:47:17'),
(5, 0, '2', 36, 5, 1, NULL, NULL, 2, '2012-06-27 01:43:25', '2012-07-19 23:47:19'),
(6, 1, '5', 36, 7, 1, NULL, NULL, 2, '2012-06-27 01:43:28', '2012-06-27 01:43:38'),
(7, 0, '2', 36, 8, 1, NULL, NULL, 2, '2012-06-27 01:43:30', '2012-06-27 01:43:33'),
(8, 0, '2', 36, 1, 2, NULL, NULL, 3, '2012-06-27 01:52:52', '2012-06-27 01:52:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centros`
--

CREATE TABLE IF NOT EXISTS `centros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL COMMENT 'Cual es el enfasis y el enfoque del centro\n',
  `ciudade_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_centros_ciudades2` (`ciudade_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `centros`
--

INSERT INTO `centros` (`id`, `nombre`, `descripcion`, `ciudade_id`, `created`, `updated`) VALUES
(1, 'CEAI', 'Centro de electricidad y Automatización industrial', 1, '2012-02-02 00:00:00', '2012-02-02 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE IF NOT EXISTS `ciudades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `departamento_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_ciudades_departamentos2` (`departamento_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`id`, `nombre`, `departamento_id`, `created`, `updated`) VALUES
(1, 'Candelaria', 1, '2012-02-02 00:00:00', '2012-02-02 00:00:00'),
(2, 'Cali', 1, '2012-02-02 00:00:00', '2012-02-02 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `competencias`
--

CREATE TABLE IF NOT EXISTS `competencias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(45) DEFAULT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `numero_horas` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `competencias`
--

INSERT INTO `competencias` (`id`, `codigo`, `nombre`, `numero_horas`, `created`, `updated`) VALUES
(1, '220501006', 'Definir los requerimientos necesarios para construir el sistema de  información de acuerdo con las necesidades del cliente', '120', '2012-02-24 00:00:00', '2012-02-11 00:00:00'),
(2, '220501032 ', 'Analizar los requerimientos del cliente para construir el  sistema de información', '400', '2012-02-22 00:00:00', '2012-02-18 00:00:00'),
(3, '220501007 ', 'Desarrollar el sistema de información que cumpla con  los requerimientos de la solución informática ', '600', '2012-02-08 00:00:00', '2012-02-25 00:00:00'),
(4, '220501033 ', 'Diseñar  el sistema de acuerdo con los requerimientos  del  cliente ', '350', '2012-02-07 00:00:00', '2012-02-24 00:00:00'),
(5, '220501034 ', 'Implantar la solución que cumpla con los requerimientos  para su operación', '360', '2012-02-06 00:00:00', '2012-02-21 00:00:00'),
(6, '220501009', 'Participar en el proceso de negociación de  Tecnología  informática para permitir la implementación del sistema  de información ', '140', '2012-02-05 00:00:00', '2012-02-29 00:00:00'),
(7, '220501035 ', 'Aplicar buenas prácticas de calidad en el proceso de desarrollo  de software, de acuerdo con el referente adoptado en la  empresa ', '200', '2012-02-07 00:00:00', '2012-02-25 00:00:00'),
(8, '240201500 ', 'Promover la interacción idónea consigo mismo, con los  demás y con la naturaleza en los contextos laboral y  social', NULL, '2012-02-01 00:00:00', '2012-02-25 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `competenciaversionespecialidades`
--

CREATE TABLE IF NOT EXISTS `competenciaversionespecialidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `versionespecialidade_id` int(11) NOT NULL,
  `competencia_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_competenciaversionespecialidades_competencias1` (`competencia_id`),
  KEY `fk_competenciaversionespecialidades_versionespecialidades1` (`versionespecialidade_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conceptualaprendices`
--

CREATE TABLE IF NOT EXISTS `conceptualaprendices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aprendice_id` int(11) NOT NULL,
  `acta_id` int(11) NOT NULL,
  `concepto` text,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_conceptualaprendices_actas1` (`acta_id`),
  KEY `fk_conceptualaprendices_aprendices1` (`aprendice_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `conceptualaprendices`
--

INSERT INTO `conceptualaprendices` (`id`, `aprendice_id`, `acta_id`, `concepto`, `created`, `updated`) VALUES
(1, 1, 36, 'Hola', '2012-06-27 02:45:38', '2012-06-27 02:45:38'),
(2, 2, 36, 'buen estudiante, gran capacidad para gestionar conocimientos, se destaca del aprendiz lo siguiente:Disciplinado,Líder,Responsable,Comprometido,Puntual', '2012-06-27 02:47:28', '2012-06-27 03:11:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conceptualgrupos`
--

CREATE TABLE IF NOT EXISTS `conceptualgrupos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `acta_id` int(11) NOT NULL,
  `concepto` text,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_conceptualgrupos_actas1` (`acta_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contratos`
--

CREATE TABLE IF NOT EXISTS `contratos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `instructore_id` int(11) NOT NULL,
  `tipocontrato_id` int(11) NOT NULL,
  `numero_contrato` varchar(45) DEFAULT NULL,
  `cantidad_horas` varchar(45) DEFAULT NULL,
  `fecha_inicial_contra` date DEFAULT NULL,
  `fecha_final_contra` date DEFAULT NULL,
  `valor_contrato_total` varchar(45) DEFAULT NULL,
  `valor_contrato_mensual` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_contratos_instructores2` (`instructore_id`),
  KEY `fk_contratos_tipocontratos1` (`tipocontrato_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE IF NOT EXISTS `departamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id`, `nombre`, `created`, `updated`) VALUES
(1, 'Valle', '2012-02-02 00:00:00', '2012-02-02 00:00:00'),
(2, 'Nariño', '2012-02-02 00:00:00', '2012-02-02 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE IF NOT EXISTS `empresas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_empresa` varchar(45) DEFAULT NULL,
  `nit` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `correo_empresa` varchar(45) DEFAULT NULL,
  `contacto` varchar(45) DEFAULT NULL,
  `numero_contacto` varchar(45) DEFAULT NULL,
  `extension_contacto` varchar(45) DEFAULT NULL,
  `correo_contacto` varchar(45) DEFAULT NULL,
  `sectore_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_empresas_sectores2` (`sectore_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidades`
--

CREATE TABLE IF NOT EXISTS `especialidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(45) DEFAULT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `identificador_sigla` varchar(45) DEFAULT NULL,
  `tipoformacione_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_especialidades_tipoformaciones1` (`tipoformacione_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `especialidades`
--

INSERT INTO `especialidades` (`id`, `codigo`, `nombre`, `identificador_sigla`, `tipoformacione_id`, `created`, `updated`) VALUES
(1, '3535', 'Análisis y Desarrollo de Sistemas de Información', 'ADSI', 1, '2012-02-02 00:00:00', '2012-02-02 00:00:00'),
(2, '3636', 'Tecnología en Automatización Industrial', 'TAI', 1, '2012-02-02 00:00:00', '2012-02-02 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etapas`
--

CREATE TABLE IF NOT EXISTS `etapas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `etapas`
--

INSERT INTO `etapas` (`id`, `descripcion`, `created`, `updated`) VALUES
(1, 'Lectiva', '2012-02-02 00:00:00', '2012-02-02 00:00:00'),
(2, 'Productiva', '2012-02-02 00:00:00', '2012-02-02 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frases`
--

CREATE TABLE IF NOT EXISTS `frases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `frase` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `frases`
--

INSERT INTO `frases` (`id`, `frase`, `created`, `updated`) VALUES
(1, 'Puntual', '2012-06-27 02:46:05', '2012-06-27 02:46:05'),
(2, 'Comprometido', '2012-06-27 02:46:13', '2012-06-27 02:46:13'),
(3, 'Responsable', '2012-06-27 02:46:18', '2012-06-27 02:46:18'),
(4, 'Lider', '2012-06-27 02:46:23', '2012-06-27 02:46:23'),
(5, 'Disciplinado', '2012-06-27 02:46:31', '2012-06-27 02:46:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE IF NOT EXISTS `grupos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL COMMENT 'nombre de las siglas + el consecutivo',
  `consecutivo` varchar(45) DEFAULT NULL,
  `fecha_inicial` date DEFAULT NULL,
  `fecha_final` date DEFAULT NULL,
  `versionespecialidade_id` int(11) NOT NULL,
  `numero_ficha` varchar(45) DEFAULT NULL,
  `numero_solicitud` varchar(45) DEFAULT NULL,
  `instructore_id` int(11) NOT NULL,
  `id_aprendiz_lider` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_grupos_instructores2` (`instructore_id`),
  KEY `fk_grupos_versionespecialidades1` (`versionespecialidade_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`id`, `nombre`, `consecutivo`, `fecha_inicial`, `fecha_final`, `versionespecialidade_id`, `numero_ficha`, `numero_solicitud`, `instructore_id`, `id_aprendiz_lider`, `created`, `updated`) VALUES
(1, 'ADSI 14', '14', '2012-02-06', '2012-02-18', 1, '2566332', '6985566', 1, 1422563, '2012-02-15 00:00:00', '2012-02-02 00:00:00'),
(2, 'TAI 1', '2', '2012-02-07', '2012-02-18', 2, '365226', '366565', 3, 1522112, '2012-02-15 00:00:00', '2012-02-18 00:00:00'),
(3, 'ADSI 15', '15', '2012-02-06', '2012-02-24', 1, '236596', '45896', 1, 12566263, '2012-02-08 00:00:00', '2012-02-25 00:00:00'),
(4, 'ADSI 16', '16', '2012-02-23', '2012-02-06', 1, '9896596', '3652152', 1, 1526226, '2012-02-06 00:00:00', '2012-02-25 00:00:00'),
(5, 'ADSI 8', '8', '2012-02-06', '2012-02-24', 3, '3655696', '45454545', 1, 121212, '2012-02-07 00:00:00', '2012-02-23 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarioadministrativos`
--

CREATE TABLE IF NOT EXISTS `horarioadministrativos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grupo_id` varchar(300) DEFAULT NULL,
  `instructore_id` int(11) NOT NULL,
  `ambiente_id` varchar(300) DEFAULT NULL,
  `calendario_academico_id` varchar(300) DEFAULT NULL,
  `usuario_creador` varchar(300) DEFAULT NULL,
  `hora_inicial_horario` time DEFAULT NULL,
  `hora_final_horario` time DEFAULT NULL,
  `fecha_cita_horario` date DEFAULT NULL,
  `numero_indicador_horario` varchar(300) DEFAULT NULL,
  `actividad_horarios` varchar(300) DEFAULT NULL,
  `competencia_id` varchar(300) DEFAULT NULL,
  `resultados_aprendizaje` varchar(300) DEFAULT NULL,
  `para_final_fechas_horarios` varchar(300) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_horarioadministrativos_instructores1` (`instructore_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarioespeciales`
--

CREATE TABLE IF NOT EXISTS `horarioespeciales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grupo_id` varchar(300) DEFAULT NULL,
  `instructore_id` int(11) DEFAULT NULL,
  `ambiente_id` varchar(300) DEFAULT NULL,
  `calendario_academico_id` varchar(300) DEFAULT NULL,
  `usuario_creador` varchar(300) DEFAULT NULL,
  `hora_inicial_horario` time DEFAULT NULL,
  `hora_final_horario` time DEFAULT NULL,
  `fecha_cita_horario` date DEFAULT NULL,
  `numero_indicador_horario` varchar(300) DEFAULT NULL,
  `actividad_horarios` varchar(300) DEFAULT NULL,
  `competencia_id` varchar(300) DEFAULT NULL,
  `resultados_aprendizaje` varchar(300) DEFAULT NULL,
  `para_final_fechas_horarios` varchar(300) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE IF NOT EXISTS `horarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grupo_id` int(11) NOT NULL,
  `instructore_id` int(11) NOT NULL,
  `ambiente_id` int(11) NOT NULL,
  `calendarioacademico_id` int(11) NOT NULL,
  `usuario_creador` varchar(300) DEFAULT NULL,
  `hora_inicial_horario` time DEFAULT NULL,
  `hora_final_horario` time DEFAULT NULL,
  `fecha_cita_horario` date DEFAULT NULL,
  `numero_indicador_horario` int(11) DEFAULT NULL,
  `actividad_horarios` varchar(300) DEFAULT NULL,
  `competencia_id` int(11) NOT NULL,
  `resultadoaprendizaje_id` int(11) NOT NULL,
  `para_final_fechas_horarios` varchar(300) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_horarios_instructores2` (`instructore_id`),
  KEY `fk_horarios_resultadoaprendizajes2` (`resultadoaprendizaje_id`),
  KEY `fk_horarios_competencias2` (`competencia_id`),
  KEY `fk_horarios_calendarioacademicos1` (`calendarioacademico_id`),
  KEY `fk_horarios_ambientes2` (`ambiente_id`),
  KEY `fk_horarios_grupos2` (`grupo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inasistencias`
--

CREATE TABLE IF NOT EXISTS `inasistencias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `calificacione_id` int(11) NOT NULL,
  `fecha_falta` date DEFAULT NULL,
  `num_horas` varchar(45) NOT NULL,
  `excusa` tinyint(1) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_inasistencias_calificaciones2` (`calificacione_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instructoreespecialidades`
--

CREATE TABLE IF NOT EXISTS `instructoreespecialidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `instructore_id` int(11) NOT NULL,
  `especialidade_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_instructoreespecialidades_instructores1` (`instructore_id`),
  KEY `fk_instructoreespecialidades_especialidades1` (`especialidade_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `instructoreespecialidades`
--

INSERT INTO `instructoreespecialidades` (`id`, `instructore_id`, `especialidade_id`, `created`, `updated`) VALUES
(1, 1, 1, '2012-02-04 00:00:00', '2012-02-04 00:00:00'),
(2, 1, 2, '2012-02-04 00:00:00', '2012-02-04 00:00:00'),
(3, 2, 1, '2012-02-04 00:00:00', '2012-02-04 00:00:00'),
(4, 2, 2, '2012-02-04 00:00:00', '2012-02-04 00:00:00'),
(5, 3, 1, '2012-02-04 00:00:00', '2012-02-04 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instructores`
--

CREATE TABLE IF NOT EXISTS `instructores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `documento` varchar(20) DEFAULT NULL,
  `nombres` varchar(45) DEFAULT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `vinculo_id` int(11) NOT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `cruzador` tinyint(4) DEFAULT '0' COMMENT 'es cuando el instructor es de integralidad o emprendimiento y puede hacer traslapes con otros instructores...... 0 es que no es cruzador y 1 que si es cruzador',
  `pass` varchar(100) DEFAULT NULL,
  `centro_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_instructores_centros2` (`centro_id`),
  KEY `fk_instructores_vinculos1` (`vinculo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `instructores`
--

INSERT INTO `instructores` (`id`, `documento`, `nombres`, `apellidos`, `direccion`, `telefono`, `correo`, `vinculo_id`, `celular`, `cruzador`, `pass`, `centro_id`, `created`, `updated`) VALUES
(1, '222111333', 'Carlos Alberto', 'Rojas Perdomo', 'Cra 49 # 52 - 39', '67415226', 'nnnnnnnn@gmail.com', 1, '365566325', 0, '123456', 1, '2012-02-02 00:00:00', '2012-02-02 00:00:00'),
(2, '151515', 'Andres', 'Gonzales Bonilla', 'cra 25 # 89 - 96', '6714923', 'nnnnnnnn@gmail.com', 1, '36225363', 0, '123456', 1, '2012-02-04 00:00:00', '2012-02-04 00:00:00'),
(3, '161616', 'Pedro Antonio', 'Rosso bejarano', 'cra 58 # 36 - 96', '6545454', 'nelson.hidalgo@gmail.com', 2, '965633325', 0, '3623362', 1, '2012-02-04 00:00:00', '2012-02-04 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planemejoramientos`
--

CREATE TABLE IF NOT EXISTS `planemejoramientos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `calificacione_id` int(11) NOT NULL,
  `resultado_numerico` varchar(45) DEFAULT NULL,
  `observaciones` varchar(45) DEFAULT NULL,
  `aprobado` tinyint(4) DEFAULT NULL,
  `fecha_entrega` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_planemejoramientos_calificaciones1` (`calificacione_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE IF NOT EXISTS `proyectos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_proyecto` varchar(300) DEFAULT NULL,
  `descripcion_proyecto` varchar(300) DEFAULT NULL,
  `ruta_proyecto_url` varchar(300) DEFAULT NULL,
  `grupo_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`,`grupo_id`),
  KEY `fk_proyectos_grupos1` (`grupo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id`, `nombre_proyecto`, `descripcion_proyecto`, `ruta_proyecto_url`, `grupo_id`, `created`, `updated`) VALUES
(1, 'Sistema de información X1', 'blblablablabla', '15151515', 1, '2012-06-05 00:00:00', '2012-06-15 00:00:00'),
(2, 'Sistema de información X2', 'dadasdasdasda', 'dasdasdasdas', 2, '2012-06-03 00:00:00', '2012-06-03 00:00:00'),
(3, 'Sistema de información X3', 'sdfsfsdfsdfsdfsdfsdfsdf', 'sdfsdfsfsdfsdfsdfsd', 3, '2012-06-03 00:00:00', '2012-06-03 00:00:00'),
(4, 'Sistema de información X4', 'dasdasdasdasdasd', 'asdasdasdasdasd', 3, '2012-06-03 00:00:00', '2012-06-03 00:00:00'),
(5, 'Sistema de información X5', 'dasdasdasdasdasdasd', 'sdfsdfsfsdfsdfsdfsd', 4, '2012-06-03 00:00:00', '2012-06-03 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultadoaprendizajes`
--

CREATE TABLE IF NOT EXISTS `resultadoaprendizajes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(45) DEFAULT NULL,
  `descripcion` text,
  `competencia_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_resultadoaprendizajes_competencias2` (`competencia_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `resultadoaprendizajes`
--

INSERT INTO `resultadoaprendizajes` (`id`, `codigo`, `descripcion`, `competencia_id`, `created`, `updated`) VALUES
(1, '22050100601', 'Aplicar las técnicas de recolección de datos , diseñando  los \r\ninstrumentos necesarios para el procesamiento de información, de \r\nacuerdo con la situación planteada por la empresa', 1, '2012-02-09 00:00:00', '2012-02-01 00:00:00'),
(2, '22050100602', 'Elaborar mapas de procesos que permitan identificar las áreas \r\ninvolucradas en un sistema de información, utilizando herramientas \r\ninformáticas y las Tic’s, para generar informes según las necesidades de \r\nla empresa', 1, '2012-02-01 00:00:00', '2012-02-25 00:00:00'),
(3, '22050100603', 'Plantear diferentes alternativas, de modelos tecnológicos de información \r\nempresarial, teniendo en cuenta la plataforma tecnológica de la empresa \r\ny las tendencias del mercado, para dar solución a las situaciones \r\nrelacionadas con el manejo de la información de la organización ', 1, '2012-02-01 00:00:00', '2012-02-17 00:00:00'),
(4, '22050103201', 'Interpretar el informe de requerimientos, para determinar las \r\nnecesidades tecnológicas en el manejo de la información, de acuerdo \r\ncon las normas y protocolos establecidos en la empresa.', 2, '2012-02-07 00:00:00', '2012-02-25 00:00:00'),
(5, '22050103202', 'Representa el bosquejo de la solución al problema presentado por el\r\ncliente, mediante la elaboración de diagramas de casos de uso, apoyado\r\nen el análisis del informe de requerimientos, al confrontar la situación\r\nproblemica con el usuario según normas y protocolos de la organización ', 2, '2012-02-01 00:00:00', '2012-02-25 00:00:00'),
(6, '22050103203', 'Construir el modelo conceptual del macrosistema frente a los \r\nrequerimientos del cliente, mediante el uso e interpretación de la \r\ninformación levantada, representado en diagramas de clase, de \r\ninteracción, colaboración y contratos de operación, de acuerdo con las \r\ndiferentes secuencias, fases y procedimientos del sistema ', 2, '2012-02-01 00:00:00', '2012-02-18 00:00:00'),
(7, '22050103204', 'Valorar la incidencia de los datos en los procesos del macrosistema, \r\ntomando como referente el diccionario de datos y las \r\nminiespecificaciones, para la consolidación de los datos que intervienen, \r\nde acuerdo con parámetros establecidos ', 2, '2012-02-01 00:00:00', '2012-02-29 00:00:00'),
(8, '22050103205', 'Elaborar el informe de los resultados del análisis del sistema de \r\ninformación, de acuerdo con los requerimientos del cliente  según \r\nnormas y protocolos establecidos ', 2, '2012-02-01 00:00:00', '2012-02-29 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultadoproyectos`
--

CREATE TABLE IF NOT EXISTS `resultadoproyectos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proyecto_id` int(11) NOT NULL,
  `instructore_id` int(11) NOT NULL,
  `resultadoaprendizaje_id` int(11) NOT NULL,
  `actividad_matriz` varchar(300) DEFAULT NULL,
  `trimestre_matriz` int(11) DEFAULT NULL,
  `codigo_guia` varchar(300) DEFAULT NULL,
  `fecha_inicio_matriz` date DEFAULT NULL,
  `fecha_final_matriz` date DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_resultadoproyectos_proyectos2` (`proyecto_id`),
  KEY `fk_resultadoproyectos_resultadoaprendizajes2` (`resultadoaprendizaje_id`),
  KEY `fk_resultadoproyectos_instructores2` (`instructore_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `resultadoproyectos`
--

INSERT INTO `resultadoproyectos` (`id`, `proyecto_id`, `instructore_id`, `resultadoaprendizaje_id`, `actividad_matriz`, `trimestre_matriz`, `codigo_guia`, `fecha_inicio_matriz`, `fecha_final_matriz`, `created`, `updated`) VALUES
(2, 1, 1, 1, 'dfsdf', 1, 'dfdfdf', '2012-06-03', '2012-06-01', '2012-06-03 00:00:00', '2012-06-03 00:00:00'),
(3, 1, 1, 2, 'dasdasdasdsa', 2, '5545454', '2012-06-04', '2012-06-04', '2012-06-13 00:00:00', '2012-06-27 00:00:00'),
(4, 1, 2, 3, 'dfsdf', 3, '1212252', '2012-06-05', '2012-06-04', '2012-06-04 00:00:00', '2012-06-03 00:00:00'),
(5, 1, 2, 4, 'dasdasdasdsa', 4, '5545454', '2012-06-04', '2012-06-19', '2012-06-11 00:00:00', '2012-06-27 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sectores`
--

CREATE TABLE IF NOT EXISTS `sectores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes`
--

CREATE TABLE IF NOT EXISTS `solicitudes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipocontratos`
--

CREATE TABLE IF NOT EXISTS `tipocontratos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoformaciones`
--

CREATE TABLE IF NOT EXISTS `tipoformaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `usuarios_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tipoformaciones_usuarios1` (`usuarios_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tipoformaciones`
--

INSERT INTO `tipoformaciones` (`id`, `descripcion`, `created`, `updated`, `usuarios_id`) VALUES
(1, 'Titulada', '2012-02-02 00:00:00', '2012-02-02 00:00:00', 0),
(2, 'Complementaria', '2012-02-02 00:00:00', '2012-02-02 00:00:00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos`
--

CREATE TABLE IF NOT EXISTS `tipos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tipos`
--

INSERT INTO `tipos` (`id`, `nombre`) VALUES
(1, 'Ordinario'),
(2, 'Extraordinario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trimestres`
--

CREATE TABLE IF NOT EXISTS `trimestres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `trimestres`
--

INSERT INTO `trimestres` (`id`, `nombre`, `created`, `updated`) VALUES
(1, 'Primero', '2012-02-02 00:00:00', '2012-02-02 00:00:00'),
(2, 'Segundo', '2012-02-02 00:00:00', '2012-02-02 00:00:00'),
(3, 'Tercero', '2012-02-02 00:00:00', '2012-02-02 00:00:00'),
(4, 'Cuarto', '2012-02-02 00:00:00', '2012-02-02 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `documento` varchar(100) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `nombres` varchar(45) DEFAULT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `documento`, `pass`, `nombres`, `apellidos`, `created`, `updated`) VALUES
(1, '1965265', '123456', 'Perdro', 'Valderrama', '2012-02-06 00:00:00', '2012-02-06 00:00:00'),
(2, '363226', '123456', 'Alba', 'Valencia', '2012-02-06 00:00:00', '2012-02-06 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `versionespecialidades`
--

CREATE TABLE IF NOT EXISTS `versionespecialidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `version` varchar(45) DEFAULT NULL,
  `especialidade_id` int(11) NOT NULL,
  `horas_lectiva` int(11) DEFAULT NULL,
  `haras_productiva` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_versionespecialidades_especialidades1` (`especialidade_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `versionespecialidades`
--

INSERT INTO `versionespecialidades` (`id`, `version`, `especialidade_id`, `horas_lectiva`, `haras_productiva`, `created`, `updated`) VALUES
(1, '101', 1, 1200, 600, '2012-02-02 00:00:00', '2012-02-02 00:00:00'),
(2, '55', 2, 2000, 500, '2012-02-02 00:00:00', '2012-02-02 00:00:00'),
(3, '102', 1, 1900, 600, '2012-02-01 00:00:00', '2012-02-25 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vinculos`
--

CREATE TABLE IF NOT EXISTS `vinculos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `vinculos`
--

INSERT INTO `vinculos` (`id`, `descripcion`, `created`, `updated`) VALUES
(1, 'Contratista', '2012-02-02 00:00:00', '2012-02-02 00:00:00'),
(2, 'Planta', '2012-02-02 00:00:00', '2012-02-02 00:00:00');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actainstructores`
--
ALTER TABLE `actainstructores`
  ADD CONSTRAINT `fk_actainstructores_actas1` FOREIGN KEY (`acta_id`) REFERENCES `actas` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_actainstructores_instructores1` FOREIGN KEY (`instructore_id`) REFERENCES `instructores` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `actas`
--
ALTER TABLE `actas`
  ADD CONSTRAINT `fk_actas_etapas2` FOREIGN KEY (`etapa_id`) REFERENCES `etapas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_actas_tipos1` FOREIGN KEY (`tipo_id`) REFERENCES `tipos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_actas_trimestres2` FOREIGN KEY (`trimestre_id`) REFERENCES `trimestres` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_acta_grupos` FOREIGN KEY (`grupo_id`) REFERENCES `grupos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `actausuarios`
--
ALTER TABLE `actausuarios`
  ADD CONSTRAINT `fk_actafuncionarios_actas1` FOREIGN KEY (`acta_id`) REFERENCES `actas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_actafuncionarios_usuarios1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `acudienteaprendices`
--
ALTER TABLE `acudienteaprendices`
  ADD CONSTRAINT `fk_acudienteaprendices_acudientes1` FOREIGN KEY (`acudiente_id`) REFERENCES `acudientes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_acudienteaprendices_aprendices1` FOREIGN KEY (`aprendice_id`) REFERENCES `aprendices` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ambientes`
--
ALTER TABLE `ambientes`
  ADD CONSTRAINT `fk_ambientes_centros2` FOREIGN KEY (`centro_id`) REFERENCES `centros` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `aplicativousuarios`
--
ALTER TABLE `aplicativousuarios`
  ADD CONSTRAINT `fk_aplicativousuarios_aplicativos1` FOREIGN KEY (`aplicativo_id`) REFERENCES `aplicativos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_aplicativousuarios_usuarios1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `aprendiceempresas`
--
ALTER TABLE `aprendiceempresas`
  ADD CONSTRAINT `fk_aprendiceempresas_aprendices1` FOREIGN KEY (`aprendice_id`) REFERENCES `aprendices` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_aprendiceempresas_empresas1` FOREIGN KEY (`empresa_id`) REFERENCES `empresas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `aprendicegrupos`
--
ALTER TABLE `aprendicegrupos`
  ADD CONSTRAINT `fk_aprendicegrupos_aprendices1` FOREIGN KEY (`aprendice_id`) REFERENCES `aprendices` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_aprendicegrupos_grupos1` FOREIGN KEY (`grupo_id`) REFERENCES `grupos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `aprendices`
--
ALTER TABLE `aprendices`
  ADD CONSTRAINT `fk_aprendices_barrios2` FOREIGN KEY (`barrio_id`) REFERENCES `barrios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `aprendicesolicitudes`
--
ALTER TABLE `aprendicesolicitudes`
  ADD CONSTRAINT `fk_aprendicesolicitudes_actas1` FOREIGN KEY (`acta_id`) REFERENCES `actas` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_aprendicesolicitudes_aprendices1` FOREIGN KEY (`aprendice_id`) REFERENCES `aprendices` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_aprendicesolicitudes_solicitudes1` FOREIGN KEY (`solicitude_id`) REFERENCES `solicitudes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `barrios`
--
ALTER TABLE `barrios`
  ADD CONSTRAINT `fk_barrios_ciudades2` FOREIGN KEY (`ciudade_id`) REFERENCES `ciudades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD CONSTRAINT `fk_calificaciones_actas2` FOREIGN KEY (`acta_id`) REFERENCES `actas` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_calificaciones_aprendices2` FOREIGN KEY (`aprendice_id`) REFERENCES `aprendices` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_calificaciones_instructores2` FOREIGN KEY (`instructore_id`) REFERENCES `instructores` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_calificaciones_resultadoaprendizajes2` FOREIGN KEY (`resultadoaprendizaje_id`) REFERENCES `resultadoaprendizajes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `centros`
--
ALTER TABLE `centros`
  ADD CONSTRAINT `fk_centros_ciudades2` FOREIGN KEY (`ciudade_id`) REFERENCES `ciudades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD CONSTRAINT `fk_ciudades_departamentos2` FOREIGN KEY (`departamento_id`) REFERENCES `departamentos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `competenciaversionespecialidades`
--
ALTER TABLE `competenciaversionespecialidades`
  ADD CONSTRAINT `fk_competenciaversionespecialidades_competencias1` FOREIGN KEY (`competencia_id`) REFERENCES `competencias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_competenciaversionespecialidades_versionespecialidades1` FOREIGN KEY (`versionespecialidade_id`) REFERENCES `versionespecialidades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `conceptualaprendices`
--
ALTER TABLE `conceptualaprendices`
  ADD CONSTRAINT `fk_conceptualaprendices_actas1` FOREIGN KEY (`acta_id`) REFERENCES `actas` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_conceptualaprendices_aprendices1` FOREIGN KEY (`aprendice_id`) REFERENCES `aprendices` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `conceptualgrupos`
--
ALTER TABLE `conceptualgrupos`
  ADD CONSTRAINT `fk_conceptualgrupos_actas1` FOREIGN KEY (`acta_id`) REFERENCES `actas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `contratos`
--
ALTER TABLE `contratos`
  ADD CONSTRAINT `fk_contratos_instructores2` FOREIGN KEY (`instructore_id`) REFERENCES `instructores` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_contratos_tipocontratos1` FOREIGN KEY (`tipocontrato_id`) REFERENCES `tipocontratos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD CONSTRAINT `fk_empresas_sectores2` FOREIGN KEY (`sectore_id`) REFERENCES `sectores` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `especialidades`
--
ALTER TABLE `especialidades`
  ADD CONSTRAINT `fk_especialidades_tipoformaciones1` FOREIGN KEY (`tipoformacione_id`) REFERENCES `tipoformaciones` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD CONSTRAINT `fk_grupos_instructores2` FOREIGN KEY (`instructore_id`) REFERENCES `instructores` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_grupos_versionespecialidades1` FOREIGN KEY (`versionespecialidade_id`) REFERENCES `versionespecialidades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `horarioadministrativos`
--
ALTER TABLE `horarioadministrativos`
  ADD CONSTRAINT `fk_horarioadministrativos_instructores1` FOREIGN KEY (`instructore_id`) REFERENCES `instructores` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD CONSTRAINT `fk_horarios_ambientes2` FOREIGN KEY (`ambiente_id`) REFERENCES `ambientes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_horarios_calendarioacademicos1` FOREIGN KEY (`calendarioacademico_id`) REFERENCES `calendarioacademicos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_horarios_competencias2` FOREIGN KEY (`competencia_id`) REFERENCES `competencias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_horarios_grupos2` FOREIGN KEY (`grupo_id`) REFERENCES `grupos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_horarios_instructores2` FOREIGN KEY (`instructore_id`) REFERENCES `instructores` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_horarios_resultadoaprendizajes2` FOREIGN KEY (`resultadoaprendizaje_id`) REFERENCES `resultadoaprendizajes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `inasistencias`
--
ALTER TABLE `inasistencias`
  ADD CONSTRAINT `fk_inasistencias_calificaciones2` FOREIGN KEY (`calificacione_id`) REFERENCES `calificaciones` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `instructoreespecialidades`
--
ALTER TABLE `instructoreespecialidades`
  ADD CONSTRAINT `fk_instructoreespecialidades_especialidades1` FOREIGN KEY (`especialidade_id`) REFERENCES `especialidades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_instructoreespecialidades_instructores1` FOREIGN KEY (`instructore_id`) REFERENCES `instructores` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `instructores`
--
ALTER TABLE `instructores`
  ADD CONSTRAINT `fk_instructores_centros2` FOREIGN KEY (`centro_id`) REFERENCES `centros` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_instructores_vinculos1` FOREIGN KEY (`vinculo_id`) REFERENCES `vinculos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `planemejoramientos`
--
ALTER TABLE `planemejoramientos`
  ADD CONSTRAINT `fk_planemejoramientos_calificaciones1` FOREIGN KEY (`calificacione_id`) REFERENCES `calificaciones` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD CONSTRAINT `fk_proyectos_grupos1` FOREIGN KEY (`grupo_id`) REFERENCES `grupos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `resultadoaprendizajes`
--
ALTER TABLE `resultadoaprendizajes`
  ADD CONSTRAINT `fk_resultadoaprendizajes_competencias2` FOREIGN KEY (`competencia_id`) REFERENCES `competencias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `resultadoproyectos`
--
ALTER TABLE `resultadoproyectos`
  ADD CONSTRAINT `fk_resultadoproyectos_instructores2` FOREIGN KEY (`instructore_id`) REFERENCES `instructores` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_resultadoproyectos_proyectos2` FOREIGN KEY (`proyecto_id`) REFERENCES `proyectos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_resultadoproyectos_resultadoaprendizajes2` FOREIGN KEY (`resultadoaprendizaje_id`) REFERENCES `resultadoaprendizajes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
