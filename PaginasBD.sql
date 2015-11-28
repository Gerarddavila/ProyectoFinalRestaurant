-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 28-11-2015 a las 00:39:31
-- Versión del servidor: 5.5.46-0ubuntu0.14.04.2
-- Versión de PHP: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `PaginasBD`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `idClientes` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Cliente` varchar(45) DEFAULT NULL,
  `Apellido_Cliente` varchar(45) DEFAULT NULL,
  `Direccion_Cliente` varchar(45) DEFAULT NULL,
  `Telefono_Cliente` varchar(45) DEFAULT NULL,
  `otro_telefono` varchar(45) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`idClientes`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idClientes`, `Nombre_Cliente`, `Apellido_Cliente`, `Direccion_Cliente`, `Telefono_Cliente`, `otro_telefono`, `usuario`, `email`, `password`) VALUES
(2, 'Gerardo', 'Davila', 'San Marcos', '56169662', '599133419', 'gerarddavila', 'gerarddavila@yahoo.com.mx', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `motivo` varchar(45) NOT NULL,
  `mensaje` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE IF NOT EXISTS `empleados` (
  `idEmpleados` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Empleado` varchar(45) DEFAULT NULL,
  `Apellido_Empleado` varchar(45) DEFAULT NULL,
  `Telefono` varchar(45) DEFAULT NULL,
  `Direccion_Empleado` varchar(45) DEFAULT NULL,
  `Cargo` varchar(45) DEFAULT NULL,
  `usuario` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`idEmpleados`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`idEmpleados`, `Nombre_Empleado`, `Apellido_Empleado`, `Telefono`, `Direccion_Empleado`, `Cargo`, `usuario`, `password`) VALUES
(5, 'Gerardo', 'Davila', '56169662', 'San Marcos', 'Gerente', 'gerardo.davila', 'gerardo1'),
(6, 'Exson', 'Cardona', '12345678', 'San Marcos', 'Gerente', 'exson.cardona', 'exson1'),
(7, 'Eleian', 'Lopez', '12345678', 'San Marcos', 'Gerente', 'eleian.lopez', 'eleian1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Movimientos`
--

CREATE TABLE IF NOT EXISTS `Movimientos` (
  `idFactura` int(11) NOT NULL,
  `reservaciones_idReservaciones` int(11) NOT NULL,
  `empleados_idEmpleados` int(11) NOT NULL,
  `clientes_idClientes` int(11) NOT NULL,
  PRIMARY KEY (`idFactura`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservaciones`
--

CREATE TABLE IF NOT EXISTS `reservaciones` (
  `idReservaciones` int(11) NOT NULL AUTO_INCREMENT,
  `Fecha_Reservacion` varchar(45) DEFAULT NULL,
  `No_personas` varchar(45) DEFAULT NULL,
  `categoria` varchar(45) DEFAULT NULL,
  `nom_reservacion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idReservaciones`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `reservaciones`
--

INSERT INTO `reservaciones` (`idReservaciones`, `Fecha_Reservacion`, `No_personas`, `categoria`, `nom_reservacion`) VALUES
(1, '11/05/2015', '4', '3', 'Gerardo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tipo`
--

CREATE TABLE IF NOT EXISTS `Tipo` (
  `idTipo` int(11) NOT NULL AUTO_INCREMENT,
  `Horario` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idTipo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `Tipo`
--

INSERT INTO `Tipo` (`idTipo`, `Horario`) VALUES
(1, 'Desayuno'),
(2, 'Refacciones'),
(3, 'Almuerzo'),
(4, 'Cena'),
(5, 'Aniversario'),
(6, 'Cita de Negocios'),
(7, 'Cumpleaños');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
