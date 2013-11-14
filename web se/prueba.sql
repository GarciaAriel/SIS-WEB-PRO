-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 09-11-2013 a las 16:16:56
-- Versión del servidor: 5.6.12-log
-- Versión de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `prueba`
--
CREATE DATABASE IF NOT EXISTS `prueba` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `prueba`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_in` int(10) NOT NULL AUTO_INCREMENT,
  `login` text NOT NULL,
  `nombre` text NOT NULL,
  `telefono` int(10) NOT NULL,
  `direccion` text NOT NULL,
  `sexo` text NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id_in`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_in`, `login`, `nombre`, `telefono`, `direccion`, `sexo`, `password`) VALUES
(1, 'tinchex', 'martin ', 77777777, 'circunvalacion', 'masculino', 'tinchex'),
(2, 'pedro', 'pedro rojo', 72341212, 'america', '', ''),
(3, 'pedro', 'pedro rojo', 72341212, 'america', 'masculino', ''),
(4, 'coco', 'fernando', 74213243, 'juan de la rosa', 'masculino', 'nano'),
(5, 'tincho', 'marko ', 414232, 'colon', 'masculino', 'MD5(tinche'),
(6, 'marko', 'marko ', 4585852, 'juan', 'masculino', '243e61e941'),
(7, 'marko', 'jose', 402100, 'jdskaljas', 'masculino', '243e61e941'),
(8, 'dayne', 'dayne', 0, '', '', '243e61e9410a9f577d2d662c67025ee9');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
