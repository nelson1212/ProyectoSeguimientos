-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 16-03-2012 a las 04:20:12
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
-- Estructura de tabla para la tabla `frases`
--

CREATE TABLE IF NOT EXISTS `frases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `frase` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `frases`
--

INSERT INTO `frases` (`id`, `frase`, `created`, `updated`) VALUES
(1, 'Hobbial', '2012-03-16 03:48:20', '2012-03-16 03:48:20'),
(2, 'Alegre', '2012-03-16 03:48:25', '2012-03-16 03:48:25'),
(3, 'Divertido', '2012-03-16 03:48:37', '2012-03-16 03:48:37'),
(4, 'Lider', '2012-03-16 03:48:43', '2012-03-16 03:48:43'),
(5, 'ProActivo', '2012-03-16 03:48:55', '2012-03-16 03:48:55'),
(6, 'Inteligente', '2012-03-16 03:49:08', '2012-03-16 03:49:08');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
