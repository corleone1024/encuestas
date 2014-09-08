-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 22-07-2014 a las 17:05:20
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `formulario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE IF NOT EXISTS `formulario` (
  `cod_f` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `des` varchar(250) NOT NULL,
  `nro_preg` int(10) DEFAULT NULL,
  `fecha` date NOT NULL,
  `estado` varchar(25) NOT NULL,
  `cod_usr` int(10) NOT NULL,
  PRIMARY KEY (`cod_f`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Volcado de datos para la tabla `formulario`
--

INSERT INTO `formulario` (`cod_f`, `nombre`, `des`, `nro_preg`, `fecha`, `estado`, `cod_usr`) VALUES
(1, 'dsd', 'dsasdasd', NULL, '0000-00-00', 'habilitado', 1),
(4, 'dsda', 'dsasdasd', NULL, '2014-07-22', 'habilitado', 1),
(5, 'dsdas', 'dsasdasd', NULL, '2014-07-22', 'habilitado', 1),
(6, 'dsdass', 'dsasdasd', NULL, '2014-07-22', 'habilitado', 1),
(7, '', '', NULL, '2014-07-22', 'habilitado', 1),
(8, 'dasdsa', 'asdasdasd', NULL, '2014-07-22', 'habilitado', 1),
(9, 'formuno', 'asdasdasd', NULL, '2014-07-22', 'habilitado', 1),
(10, 'qqqqqq', 'qqqqq', NULL, '2014-07-22', 'habilitado', 1),
(11, 'formprueba', 'PRUEBA PRUEBA', NULL, '2014-07-22', 'habilitado', 1),
(12, 'lucho', 'myuchos luchos', NULL, '2014-07-22', 'habilitado', 1),
(14, 'luchoa', 'myuchos luchos2', NULL, '2014-07-22', 'habilitado', 1),
(15, 'juancho', 'form de juancho', NULL, '2014-07-22', 'habilitado', 1),
(16, 'lucho44', 'mucho lucho', NULL, '2014-07-22', 'habilitado', 1),
(17, 'form25', 'otro form', NULL, '2014-07-22', 'habilitado', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opcion`
--

CREATE TABLE IF NOT EXISTS `opcion` (
  `cod_opcion` int(10) NOT NULL AUTO_INCREMENT,
  `opcion` varchar(10) NOT NULL,
  `cod_multiple` int(10) NOT NULL,
  PRIMARY KEY (`cod_opcion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta`
--

CREATE TABLE IF NOT EXISTS `pregunta` (
  `cod_preg` int(10) NOT NULL AUTO_INCREMENT,
  `pregunta` varchar(200) NOT NULL,
  `cod_f` int(10) NOT NULL,
  `cod_tipo_preg` int(10) NOT NULL,
  PRIMARY KEY (`cod_preg`),
  UNIQUE KEY `pregunta` (`pregunta`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `pregunta`
--

INSERT INTO `pregunta` (`cod_preg`, `pregunta`, `cod_f`, `cod_tipo_preg`) VALUES
(1, 'cuantas carreras existen en la umsa?', 11, 1),
(3, 'mas pregunta 2', 11, 1),
(4, 'quien el lucho?', 12, 1),
(5, 'sigues aqui???', 12, 1),
(6, 'como lme llamo', 15, 1),
(7, 'mi pregunta 2', 15, 1),
(8, 'mi pregunta 1', 16, 1),
(9, 'mi preugnta 2', 16, 1),
(10, 'mipregunta 3', 16, 1),
(11, 'mi pregunta 4', 16, 1),
(12, 'pregunta numero1', 17, 1),
(13, 'preg 2', 17, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta_abierta`
--

CREATE TABLE IF NOT EXISTS `respuesta_abierta` (
  `cod_abierta` int(10) NOT NULL AUTO_INCREMENT,
  `respuesta` varchar(200) NOT NULL,
  `cod_preg` int(10) NOT NULL,
  `cod_usr` int(10) NOT NULL,
  PRIMARY KEY (`cod_abierta`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=77 ;

--
-- Volcado de datos para la tabla `respuesta_abierta`
--

INSERT INTO `respuesta_abierta` (`cod_abierta`, `respuesta`, `cod_preg`, `cod_usr`) VALUES
(1, '', 0, 0),
(2, '', 0, 0),
(3, 'respuesta 1', 0, 0),
(4, 'respuesta 2', 0, 0),
(5, 'respuesta 1', 12, 0),
(6, 'respuesta 2', 13, 0),
(7, '', 12, 0),
(8, '', 13, 0),
(9, 'resp1111', 12, 0),
(10, 'resp22222', 13, 0),
(11, 'resp111', 8, 0),
(12, 'resp2222', 9, 0),
(13, 'resp3333', 10, 0),
(14, 'reesp4444', 11, 0),
(15, '', 8, 0),
(16, '', 9, 0),
(17, '', 10, 0),
(18, '', 11, 0),
(19, 'juan2', 8, 0),
(20, 'juan2', 9, 0),
(21, 'juan2', 10, 0),
(22, 'juan2', 11, 0),
(23, 'juan2', 8, 0),
(24, 'juan2', 9, 0),
(25, 'juan2', 10, 0),
(26, 'juan2', 11, 0),
(27, 'juan2', 8, 0),
(28, 'juan2', 9, 0),
(29, 'juan2', 10, 0),
(30, 'juan2', 11, 0),
(31, 'juan2', 8, 0),
(32, 'juan2', 9, 0),
(33, 'juan2', 10, 0),
(34, 'juan2', 11, 0),
(35, 'juan2', 8, 0),
(36, 'juan2', 9, 0),
(37, 'juan2', 10, 0),
(38, 'juan2', 11, 0),
(39, 'juan2', 8, 0),
(40, 'juan2', 9, 0),
(41, 'juan2', 10, 0),
(42, 'juan2', 11, 0),
(43, 'juan2', 8, 0),
(44, 'juan2', 9, 0),
(45, 'juan2', 10, 0),
(46, 'juan2', 11, 0),
(47, 'juan2', 8, 10),
(48, 'juan2', 9, 10),
(49, 'juan2', 10, 10),
(50, 'juan2', 11, 10),
(51, 'juan2', 8, 10),
(52, 'juan2', 9, 10),
(53, 'juan2', 10, 10),
(54, 'juan2', 11, 10),
(55, 'juan2', 8, 10),
(56, 'juan2', 9, 10),
(57, 'juan2', 10, 10),
(58, 'juan2', 11, 10),
(59, 'juan2', 8, 10),
(60, 'juan2', 9, 10),
(61, 'juan2', 10, 10),
(62, 'juan2', 11, 10),
(63, 'juan2', 8, 10),
(64, 'juan2', 9, 10),
(65, 'juan2', 10, 10),
(66, 'juan2', 11, 10),
(67, 'juan7', 8, 10),
(68, 'juan7', 9, 10),
(69, 'juan7', 10, 10),
(70, 'juan7', 11, 10),
(71, 'hartasssss', 1, 11),
(72, 'si', 3, 11),
(73, 'si', 8, 11),
(74, 'no', 9, 11),
(75, 'tal vez', 10, 11),
(76, 'nose', 11, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta_multiple`
--

CREATE TABLE IF NOT EXISTS `respuesta_multiple` (
  `cod_multiple` int(10) NOT NULL AUTO_INCREMENT,
  `nro_respuesta` int(10) NOT NULL,
  `cod_preg` int(10) NOT NULL,
  PRIMARY KEY (`cod_multiple`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta_radio_button`
--

CREATE TABLE IF NOT EXISTS `respuesta_radio_button` (
  `cod_radio` int(10) NOT NULL AUTO_INCREMENT,
  `opcion` int(2) NOT NULL,
  `cod_preg` int(10) NOT NULL,
  PRIMARY KEY (`cod_radio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_pregunta`
--

CREATE TABLE IF NOT EXISTS `tipo_pregunta` (
  `cod_tipo_preg` int(10) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(25) NOT NULL,
  PRIMARY KEY (`cod_tipo_preg`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `cod_usr` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_usr` varchar(25) NOT NULL,
  `paterno` varchar(25) NOT NULL,
  `materno` varchar(25) NOT NULL,
  `login` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nivel` varchar(25) NOT NULL,
  `fono` int(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `img` varchar(200) NOT NULL,
  `estado` varchar(25) NOT NULL,
  PRIMARY KEY (`cod_usr`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`cod_usr`, `nombre_usr`, `paterno`, `materno`, `login`, `password`, `nivel`, `fono`, `email`, `img`, `estado`) VALUES
(1, 'Juan', 'Perez', 'Perez', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'administrador', 77766655, 'juan@gmail.com', '', 'habilitado'),
(2, 'Jose', 'Roca', 'Rodriguez', 'luchito', 'e10adc3949ba59abbe56e057f20f883e', 'Administrador', 77666555, 'joselito@gmail.com', '', 'habilitado'),
(3, 'asda', 'asd', 'asd', 'asdasd', 'sdasd', 'usuario', 123, 'asd@hotmail.com', 'asdasd', 'deshabilitado'),
(6, 'reynaldoaa', 'zeballos', 'zeballos', 'zeballos', '6226f7cbe59e99a90b5cef6f94f966fd', 'administrador', 123, 'asd@hotmail.com', 'asdasd', 'habilitado'),
(7, 'juancho', 'juacho2', 'noimporta', 'juan', 'a94652aa97c7211ba8954dd15a3cf838', 'administrador', 123123, 'asd@hotmail.com', 'asdasd', 'habilitado'),
(8, 'daads', 'adsdasd', 'asd', 'ddd', '0df01ae7dd51cec48fed56952f40842b', 'administrador', 0, 'asdas@asd.com', 'asdasd', 'habilitado'),
(10, 'juan2', 'juan', 'juan', 'juan2', 'a94652aa97c7211ba8954dd15a3cf838', 'Usuario', 111111, 'Juan@juan.juan', 'jaun', 'habilitado'),
(11, 'vico', 'vico', 'vico', 'vico', 'e10adc3949ba59abbe56e057f20f883e', 'Usuario', 465, 'vico@ivco.com', 'vico', 'habilitado');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
