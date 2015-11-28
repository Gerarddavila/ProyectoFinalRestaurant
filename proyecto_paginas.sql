-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-11-2015 a las 07:04:55
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `proyecto_paginas`
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
  `fecha_reserv` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `Motivo` varchar(45) NOT NULL,
  PRIMARY KEY (`idClientes`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

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
-- Estructura de tabla para la tabla `detalle_factura`
--

CREATE TABLE IF NOT EXISTS `detalle_factura` (
  `Platos_idPlatos` int(11) NOT NULL,
  `Factura_idFactura` int(11) NOT NULL,
  `idDetalle` varchar(45) NOT NULL,
  PRIMARY KEY (`idDetalle`),
  KEY `fk_Detalle_Factura_Platos1_idx` (`Platos_idPlatos`),
  KEY `fk_Detalle_Factura_Factura1_idx` (`Factura_idFactura`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`idEmpleados`, `Nombre_Empleado`, `Apellido_Empleado`, `Telefono`, `Direccion_Empleado`, `Cargo`, `usuario`, `password`) VALUES
(1, 'Exson Saqueo', 'Cardona Fuentes', '55153914', 'San Marcos', 'Gerente', 'Exson', '123'),
(2, 'Gerardo ', 'Davila', '54648694', 'San Marcos', 'Gerente Ventas', 'Gerardo', '123'),
(3, 'Exson Saqueo', 'Cardona Fuentes', '55153914', 'San Marcos', 'Gerente', 'Exson', '123'),
(4, 'Gerardo ', 'Davila', '54648694', 'San Marcos', 'Gerente Ventas', 'Gerardo', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `establecimiento`
--

CREATE TABLE IF NOT EXISTS `establecimiento` (
  `idEstablecimiento` int(11) NOT NULL,
  `Nombre_Establecimiento` varchar(45) DEFAULT NULL,
  `Telefono` varchar(45) DEFAULT NULL,
  `Direccion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idEstablecimiento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE IF NOT EXISTS `factura` (
  `idFactura` int(11) NOT NULL,
  `Fecha` varchar(45) DEFAULT NULL,
  `Clientes_idClientes` int(11) NOT NULL,
  `Empleados_idEmpleados` int(11) NOT NULL,
  PRIMARY KEY (`idFactura`),
  KEY `fk_Factura_Clientes1_idx` (`Clientes_idClientes`),
  KEY `fk_Factura_Empleados1_idx` (`Empleados_idEmpleados`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura_mesa`
--

CREATE TABLE IF NOT EXISTS `factura_mesa` (
  `Mesa_idMesa` int(11) NOT NULL,
  `Factura_idFactura` int(11) NOT NULL,
  KEY `fk_Mesa_has_Factura_Factura1_idx` (`Factura_idFactura`),
  KEY `fk_Mesa_has_Factura_Mesa1_idx` (`Mesa_idMesa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesa`
--

CREATE TABLE IF NOT EXISTS `mesa` (
  `idMesa` int(11) NOT NULL,
  `Numero_Mesa` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idMesa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platos`
--

CREATE TABLE IF NOT EXISTS `platos` (
  `idPlatos` int(11) NOT NULL,
  `Nombre_Plato` varchar(45) DEFAULT NULL,
  `Precio_Plato` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idPlatos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservaciones`
--

CREATE TABLE IF NOT EXISTS `reservaciones` (
  `idReservaciones` int(11) NOT NULL,
  `Fecha_Reservacion` varchar(45) DEFAULT NULL,
  `Clientes_idClientes` int(11) NOT NULL,
  `Mesa_idMesa` int(11) NOT NULL,
  `Establecimiento_idEstablecimiento` int(11) NOT NULL,
  PRIMARY KEY (`idReservaciones`),
  KEY `fk_Reservaciones_Clientes1_idx` (`Clientes_idClientes`),
  KEY `fk_Reservaciones_Mesa1_idx` (`Mesa_idMesa`),
  KEY `fk_Reservaciones_Establecimiento1_idx` (`Establecimiento_idEstablecimiento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  ADD CONSTRAINT `fk_Detalle_Factura_Platos1` FOREIGN KEY (`Platos_idPlatos`) REFERENCES `platos` (`idPlatos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Detalle_Factura_Factura1` FOREIGN KEY (`Factura_idFactura`) REFERENCES `factura` (`idFactura`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `fk_Factura_Clientes1` FOREIGN KEY (`Clientes_idClientes`) REFERENCES `clientes` (`idClientes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Factura_Empleados1` FOREIGN KEY (`Empleados_idEmpleados`) REFERENCES `empleados` (`idEmpleados`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `factura_mesa`
--
ALTER TABLE `factura_mesa`
  ADD CONSTRAINT `fk_Mesa_has_Factura_Mesa1` FOREIGN KEY (`Mesa_idMesa`) REFERENCES `mesa` (`idMesa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Mesa_has_Factura_Factura1` FOREIGN KEY (`Factura_idFactura`) REFERENCES `factura` (`idFactura`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `reservaciones`
--
ALTER TABLE `reservaciones`
  ADD CONSTRAINT `fk_Reservaciones_Clientes1` FOREIGN KEY (`Clientes_idClientes`) REFERENCES `clientes` (`idClientes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Reservaciones_Mesa1` FOREIGN KEY (`Mesa_idMesa`) REFERENCES `mesa` (`idMesa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Reservaciones_Establecimiento1` FOREIGN KEY (`Establecimiento_idEstablecimiento`) REFERENCES `establecimiento` (`idEstablecimiento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
