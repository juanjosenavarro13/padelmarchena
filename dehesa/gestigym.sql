-- phpMyAdmin SQL Dump
-- version 3.3.2deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-07-2011 a las 12:58:04
-- Versión del servidor: 5.1.41
-- Versión de PHP: 5.3.2-1ubuntu4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `gestigym`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bloque`
--

CREATE TABLE IF NOT EXISTS `bloque` (
  `id_bloque` int(11) NOT NULL,
  `nombre` varchar(16) DEFAULT NULL,
  `descripcion` text,
  PRIMARY KEY (`id_bloque`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `bloque`
--

INSERT INTO `bloque` (`id_bloque`, `nombre`, `descripcion`) VALUES
(1, '75 minutos', 'Bloque de 75 minutos, general para todas las pistas'),
(3, 'DIAS DE FIESTA', 'solo para dias de fiesta'),
(2, 'BLOQUE 2', 'fin de semana');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientesbonos`
--

CREATE TABLE IF NOT EXISTS `clientesbonos` (
  `Id` int(10) NOT NULL,
  `Tarjeta` decimal(20,0) NOT NULL,
  `IdPago` int(10) NOT NULL,
  `IdBanco` int(10) DEFAULT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apodo` varchar(50) NOT NULL DEFAULT '.',
  `Apellidos` varchar(50) DEFAULT NULL,
  `Sexo` tinyint(3) unsigned DEFAULT NULL,
  `Historico` tinyint(1) NOT NULL DEFAULT '0',
  `Direccion` varchar(150) DEFAULT NULL,
  `Poblacion` varchar(50) DEFAULT NULL,
  `Cp` varchar(50) DEFAULT NULL,
  `Provincia` varchar(50) DEFAULT NULL,
  `Telefono` varchar(50) DEFAULT NULL,
  `Telefono2` varchar(50) DEFAULT NULL,
  `Movil` varchar(50) DEFAULT NULL,
  `Fax` varchar(50) DEFAULT NULL,
  `Activo` tinyint(1) NOT NULL DEFAULT '0',
  `Nif` varchar(9) DEFAULT NULL,
  `FechaNacimiento` datetime DEFAULT NULL,
  `Profesion` varchar(50) DEFAULT NULL,
  `FechaAlta` datetime NOT NULL,
  `FechaBaja` datetime DEFAULT NULL,
  `BajaAutomatica` datetime DEFAULT NULL,
  `DiaLimite` tinyint(3) unsigned DEFAULT NULL,
  `Matricula` decimal(19,4) DEFAULT NULL,
  `TitularCuenta` varchar(50) DEFAULT NULL,
  `NumeroCuenta` varchar(50) DEFAULT NULL,
  `Observaciones` longtext,
  `DiaNacio` varchar(9) DEFAULT NULL,
  `InicioReserva` datetime DEFAULT NULL,
  `FinReserva` datetime DEFAULT NULL,
  `FormaPago` tinyint(3) unsigned DEFAULT NULL,
  `CuotaReserva` int(10) DEFAULT NULL,
  `EnReserva` tinyint(1) NOT NULL DEFAULT '0',
  `Referencia` varchar(10) NOT NULL DEFAULT '0000000000',
  `Facturar` tinyint(1) NOT NULL DEFAULT '0',
  `Email` varchar(255) DEFAULT NULL,
  `IdGrupo` int(10) NOT NULL,
  `IdEmpleado` int(10) DEFAULT NULL,
  `Metas` tinyint(1) NOT NULL DEFAULT '0',
  `Publicidad` tinyint(3) unsigned DEFAULT NULL,
  `Seleccion` tinyint(1) NOT NULL DEFAULT '0',
  `Pass` varchar(32) NOT NULL,
  `Privilegios` int(3) NOT NULL,
  `Nivel` int(2) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AVG_ROW_LENGTH=648;

--
-- Volcar la base de datos para la tabla `clientesbonos`
--

INSERT INTO `clientesbonos` (`Id`, `Tarjeta`, `IdPago`, `IdBanco`, `Nombre`, `Apodo`, `Apellidos`, `Sexo`, `Historico`, `Direccion`, `Poblacion`, `Cp`, `Provincia`, `Telefono`, `Telefono2`, `Movil`, `Fax`, `Activo`, `Nif`, `FechaNacimiento`, `Profesion`, `FechaAlta`, `FechaBaja`, `BajaAutomatica`, `DiaLimite`, `Matricula`, `TitularCuenta`, `NumeroCuenta`, `Observaciones`, `DiaNacio`, `InicioReserva`, `FinReserva`, `FormaPago`, `CuotaReserva`, `EnReserva`, `Referencia`, `Facturar`, `Email`, `IdGrupo`, `IdEmpleado`, `Metas`, `Publicidad`, `Seleccion`, `Pass`, `Privilegios`, `Nivel`) VALUES
(1, '234', 1, NULL, 'JOSE MANUEL', 'xurrero', 'GUISADO HORMIGO', 1, 0, 'MADRE DE DIOS, 14', 'MARCHENA', '41620', 'SEVILLA', '635915151', '954844262', NULL, NULL, 1, '14614811J', '1987-06-27 00:00:00', 'INFORMÁTICO', '2011-06-01 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '0000000000', 0, 'josemanuelciclo@gmail.com', 2, NULL, 0, NULL, 0, '74ffa6c018ae69e491691e363fff05e3', 1, 3),
(2, '524', 2, NULL, 'ANGEL', 'ANGEL', 'NAJOCAMON', 1, 0, 'TRAVESIA DE SAN IGNACIO S/N', 'MARCHENA', '41620', 'SEVILLA', '958487585', '', NULL, NULL, 1, '12345678Z', '2001-06-14 00:00:00', 'TABERNERO', '2011-06-14 09:58:58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '0000000000', 0, 'angel@najocamon.com', 0, NULL, 0, NULL, 0, '81dc9bdb52d04dc20036dbd8313ed055', 2, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE IF NOT EXISTS `horarios` (
  `id_horario` int(11) NOT NULL,
  `inicio` time DEFAULT NULL,
  `fin` time DEFAULT NULL,
  `bloque` int(11) DEFAULT NULL,
  `precio_soc` decimal(19,4) NOT NULL,
  `precio_nosoc` decimal(19,4) NOT NULL,
  PRIMARY KEY (`id_horario`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`id_horario`, `inicio`, `fin`, `bloque`, `precio_soc`, `precio_nosoc`) VALUES
(4, '16:00:00', '17:15:00', 1, '1.5000', '6.5000'),
(3, '12:45:00', '14:00:00', 1, '1.5000', '6.5000'),
(2, '11:30:00', '12:45:00', 1, '1.5000', '6.5000'),
(12, '10:15:00', '11:30:00', 1, '1.5000', '6.5000'),
(23, '11:00:00', '12:00:00', 3, '2.0000', '7.0000'),
(6, '18:30:00', '19:45:00', 1, '1.5000', '6.5000'),
(7, '19:45:00', '21:00:00', 1, '1.5000', '6.5000'),
(8, '21:00:00', '22:15:00', 1, '1.5000', '6.5000'),
(11, '21:30:00', '23:00:00', 2, '1.0000', '6.0000'),
(25, '09:00:00', '10:00:00', 3, '2.0000', '7.0000'),
(22, '17:15:00', '18:30:00', 1, '1.5000', '6.5000'),
(24, '10:00:00', '11:00:00', 3, '2.0000', '7.0000'),
(13, '09:30:00', '11:00:00', 2, '1.0000', '6.0000'),
(18, '12:30:00', '14:00:00', 2, '1.0000', '6.0000'),
(17, '17:00:00', '18:30:00', 2, '1.0000', '6.0000'),
(21, '11:00:00', '12:30:00', 2, '1.0000', '6.0000'),
(10, '18:30:00', '20:00:00', 2, '1.0000', '6.0000'),
(27, '12:00:00', '13:00:00', 3, '2.0000', '7.0000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugador_reserva`
--

CREATE TABLE IF NOT EXISTS `jugador_reserva` (
  `id_jugador_reserva` int(11) NOT NULL,
  `id_jugador` int(11) NOT NULL,
  `id_reserva` int(11) NOT NULL,
  `nombre_jugador` varchar(32) NOT NULL,
  `precio` int(11) NOT NULL,
  `socio` int(1) NOT NULL,
  `fecha` date NOT NULL,
  `tipo_partido` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `jugador_reserva`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `meapunto`
--

CREATE TABLE IF NOT EXISTS `meapunto` (
  `id_meapunto` int(11) NOT NULL,
  `pista` int(11) NOT NULL,
  `horario` int(11) NOT NULL,
  `dia` date NOT NULL,
  `hora_inicio` int(11) NOT NULL,
  `completo` int(1) NOT NULL,
  `nivel_desde` int(4) NOT NULL,
  `nivel_hasta` int(4) NOT NULL,
  `creador` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `meapunto`
--

INSERT INTO `meapunto` (`id_meapunto`, `pista`, `horario`, `dia`, `hora_inicio`, `completo`, `nivel_desde`, `nivel_hasta`, `creador`) VALUES
(2, 4, 8, '2011-06-13', 1307992500, 0, 1, 1, 0),
(1, 3, 7, '2011-06-13', 1307985345, 0, 3, 3, 0),
(5, 1, 4, '2011-07-01', 1309529700, 1, 3, 3, 1),
(3, 4, 7, '2011-06-22', 1308762945, 0, 3, 3, 1),
(4, 2, 8, '2011-06-22', 1308770100, 0, 3, 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `niveles`
--

CREATE TABLE IF NOT EXISTS `niveles` (
  `nivel` int(3) NOT NULL,
  `nombre` varchar(32) NOT NULL,
  `abreviatura` varchar(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `niveles`
--

INSERT INTO `niveles` (`nivel`, `nombre`, `abreviatura`) VALUES
(1, 'MASCULINO BÁSICO', 'MB'),
(2, 'MASCULINO INICIACIÓN', 'MI'),
(3, 'MASCULINO MEDIO', 'MM'),
(4, 'MASCULINO AVANZADO', 'MA'),
(5, 'FEMENINO INICIACIÓN', 'FI'),
(6, 'FEMENINO MEDIO', 'FM'),
(7, 'FEMENINO AVANZADO', 'FA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pistas`
--

CREATE TABLE IF NOT EXISTS `pistas` (
  `id_pista` int(11) NOT NULL,
  `nombre` varchar(16) DEFAULT NULL,
  `descripcion` text,
  `bloque` int(11) DEFAULT NULL,
  `bloque_fs` int(11) NOT NULL,
  PRIMARY KEY (`id_pista`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `pistas`
--

INSERT INTO `pistas` (`id_pista`, `nombre`, `descripcion`, `bloque`, `bloque_fs`) VALUES
(1, 'CAJASUR', 'Pista Cajasur', 1, 3),
(2, 'BENETTON', 'Pista exterior patrocinada por Benetton', 1, 2),
(3, 'FLORENCIO ANTOLI', 'Pista exterior', 1, 2),
(4, 'FONTCALPE', 'Pista Fontcalpe exterior acristalada', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `privilegios`
--

CREATE TABLE IF NOT EXISTS `privilegios` (
  `id_privilegio` int(3) NOT NULL,
  `nombre` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `privilegios`
--

INSERT INTO `privilegios` (`id_privilegio`, `nombre`) VALUES
(0, 'socio'),
(1, 'administrador'),
(2, 'empleado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE IF NOT EXISTS `reservas` (
  `id_reserva` int(11) NOT NULL,
  `usuario` int(11) DEFAULT NULL,
  `pista` int(11) DEFAULT NULL,
  `horario` int(11) DEFAULT NULL,
  `dia` date DEFAULT NULL,
  `hora_inicio` int(11) NOT NULL,
  PRIMARY KEY (`id_reserva`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `reservas`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas_meapunto`
--

CREATE TABLE IF NOT EXISTS `reservas_meapunto` (
  `id_cliente_meapunto` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_meapunto` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `reservas_meapunto`
--

INSERT INTO `reservas_meapunto` (`id_cliente_meapunto`, `id_cliente`, `id_meapunto`) VALUES
(4, 2, 5),
(7, 1, 5),
(6, 4, 5),
(5, 3, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE IF NOT EXISTS `solicitud` (
  `id_solicitud` int(11) NOT NULL,
  `mail` varchar(32) DEFAULT NULL,
  `nick` varchar(20) NOT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `nombre` varchar(32) DEFAULT NULL,
  `apellido1` varchar(32) DEFAULT NULL,
  `apellido2` varchar(32) DEFAULT NULL,
  `dni` varchar(16) DEFAULT NULL,
  `telefono1` varchar(16) DEFAULT NULL,
  `telefono2` varchar(16) DEFAULT NULL,
  `calle` varchar(32) DEFAULT NULL,
  `numero` varchar(8) DEFAULT NULL,
  `bloque` varchar(8) DEFAULT NULL,
  `puerta` varchar(8) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `dia_alta` date DEFAULT NULL,
  `hora_alta` time DEFAULT NULL,
  `estado_solicitud` int(11) DEFAULT NULL,
  `localidad` varchar(32) NOT NULL,
  PRIMARY KEY (`id_solicitud`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `solicitud`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarifas`
--

CREATE TABLE IF NOT EXISTS `tarifas` (
  `id_tarifa` int(3) NOT NULL,
  `precio_soc` decimal(19,4) NOT NULL,
  `precio_nosoc` decimal(19,4) NOT NULL,
  `descripcion` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `tarifas`
--

INSERT INTO `tarifas` (`id_tarifa`, `precio_soc`, `precio_nosoc`, `descripcion`) VALUES
(2, '1.5000', '6.2500', 'tarifa media'),
(1, '1.0000', '5.0000', 'tarifa baja'),
(3, '2.0000', '7.0000', 'tarifa alta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipopago`
--

CREATE TABLE IF NOT EXISTS `tipopago` (
  `Id` int(10) NOT NULL,
  `Tipo` varchar(255) NOT NULL,
  `Baja` tinyint(1) NOT NULL DEFAULT '0',
  `Puntos` tinyint(1) NOT NULL DEFAULT '0',
  `NPuntos` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id`),
  KEY `Id` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `tipopago`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE IF NOT EXISTS `ventas` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `id1` int(10) DEFAULT NULL,
  `idTipo` tinyint(3) unsigned DEFAULT NULL,
  `idPuesto` int(10) DEFAULT NULL,
  `IdCuota` int(10) DEFAULT NULL,
  `IdSocio` int(10) DEFAULT NULL,
  `idcodigo` varchar(255) DEFAULT NULL,
  `idventa` int(10) DEFAULT NULL,
  `idtaquilla` int(10) DEFAULT NULL,
  `idArea` int(10) DEFAULT NULL,
  `idFamilia` int(10) DEFAULT NULL,
  `FactCuota` tinyint(3) unsigned DEFAULT NULL,
  `vendedor` int(10) DEFAULT NULL,
  `Fecha` datetime DEFAULT NULL,
  `FechaEmisio` datetime DEFAULT NULL,
  `Facturacion` tinyint(3) unsigned DEFAULT NULL,
  `Concepto` varchar(255) NOT NULL,
  `Precio` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `Cantidad` int(10) NOT NULL DEFAULT '1',
  `Total` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `Pagado` tinyint(1) NOT NULL DEFAULT '0',
  `Seleccion` tinyint(1) NOT NULL DEFAULT '0',
  `Descuento` smallint(5) NOT NULL DEFAULT '0',
  `FormaPago` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `Recargo` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `Remesa` int(10) DEFAULT NULL,
  `Base` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `Iva` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `IdBanco` int(10) DEFAULT NULL,
  `IvaVenta` tinyint(3) unsigned DEFAULT NULL,
  `NumeroFactura` int(10) DEFAULT NULL,
  `Devuelto` tinyint(1) NOT NULL DEFAULT '0',
  `Serie` varchar(50) DEFAULT NULL,
  `Hora` datetime DEFAULT NULL,
  `Almacen` tinyint(1) NOT NULL DEFAULT '0',
  `Anulada` tinyint(1) NOT NULL DEFAULT '0',
  `EC` tinyint(1) NOT NULL DEFAULT '0',
  `FechaCuota` datetime DEFAULT NULL,
  `TipoFactura` tinyint(3) unsigned DEFAULT NULL,
  `PendienteEC` decimal(19,4) DEFAULT NULL,
  `TicketTPV` int(10) DEFAULT NULL,
  `IdSocioPago` int(10) DEFAULT NULL,
  `ReciboDevolucion` tinyint(1) NOT NULL DEFAULT '0',
  `FechaFactura` datetime DEFAULT NULL,
  `idempleado` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `Concepto` (`Concepto`),
  KEY `Id` (`Id`),
  KEY `id1` (`id1`),
  KEY `idArea` (`idArea`),
  KEY `IdBanco` (`IdBanco`),
  KEY `idcodigo` (`idcodigo`),
  KEY `idFamilia` (`idFamilia`),
  KEY `IdMensualidad` (`IdCuota`),
  KEY `idPuesto` (`idPuesto`),
  KEY `IdSocio` (`IdSocio`),
  KEY `IdSocioPago` (`IdSocioPago`),
  KEY `idtaquilla` (`idtaquilla`),
  KEY `idTipo` (`idTipo`),
  KEY `idventa` (`idventa`),
  KEY `VentasFecha` (`Fecha`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Volcar la base de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`Id`, `id1`, `idTipo`, `idPuesto`, `IdCuota`, `IdSocio`, `idcodigo`, `idventa`, `idtaquilla`, `idArea`, `idFamilia`, `FactCuota`, `vendedor`, `Fecha`, `FechaEmisio`, `Facturacion`, `Concepto`, `Precio`, `Cantidad`, `Total`, `Pagado`, `Seleccion`, `Descuento`, `FormaPago`, `Recargo`, `Remesa`, `Base`, `Iva`, `IdBanco`, `IvaVenta`, `NumeroFactura`, `Devuelto`, `Serie`, `Hora`, `Almacen`, `Anulada`, `EC`, `FechaCuota`, `TipoFactura`, `PendienteEC`, `TicketTPV`, `IdSocioPago`, `ReciboDevolucion`, `FechaFactura`, `idempleado`) VALUES
(11, NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2011-07-01 12:24:12', NULL, 'Reserva de la pista BENETTON el dia 2011-07-01 a las 19:45:00', '1.5000', 1, '1.5000', 0, 0, 0, 1, '0.0000', NULL, '1.2712', '0.2288', NULL, 18, NULL, 0, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, 2, 0, NULL, NULL),
(12, NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2011-07-01 12:24:12', NULL, 'Reserva de la pista BENETTON el dia 2011-07-01 a las 19:45:00', '1.5000', 1, '1.5000', 0, 0, 0, 1, '0.0000', NULL, '1.2712', '0.2288', NULL, 18, NULL, 0, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL),
(13, NULL, NULL, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2011-07-01 12:24:12', NULL, 'Reserva de la pista BENETTON el dia 2011-07-01 a las 19:45:00', '6.5000', 1, '6.5000', 0, 0, 0, 1, '0.0000', NULL, '5.5085', '0.9915', NULL, 18, NULL, 0, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(14, NULL, NULL, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2011-07-01 12:24:12', NULL, 'Reserva de la pista BENETTON el dia 2011-07-01 a las 19:45:00', '6.5000', 1, '6.5000', 0, 0, 0, 1, '0.0000', NULL, '5.5085', '0.9915', NULL, 18, NULL, 0, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(15, NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2011-07-01 13:27:43', NULL, 'Reserva de la pista BENETTON el dia 2011-07-01 a las 18:30:00', '1.5000', 1, '1.5000', 0, 0, 0, 1, '0.0000', NULL, '1.2712', '0.2288', NULL, 18, NULL, 0, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, 2, 0, NULL, NULL),
(16, NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2011-07-01 13:27:43', NULL, 'Reserva de la pista BENETTON el dia 2011-07-01 a las 18:30:00', '1.5000', 1, '1.5000', 0, 0, 0, 1, '0.0000', NULL, '1.2712', '0.2288', NULL, 18, NULL, 0, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL),
(17, NULL, NULL, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2011-07-01 13:27:43', NULL, 'Reserva de la pista BENETTON el dia 2011-07-01 a las 18:30:00', '6.5000', 1, '6.5000', 0, 0, 0, 1, '0.0000', NULL, '5.5085', '0.9915', NULL, 18, NULL, 0, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(18, NULL, NULL, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2011-07-01 13:27:43', NULL, 'Reserva de la pista BENETTON el dia 2011-07-01 a las 18:30:00', '6.5000', 1, '6.5000', 0, 0, 0, 1, '0.0000', NULL, '5.5085', '0.9915', NULL, 18, NULL, 0, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(19, NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2011-07-01 13:31:54', NULL, 'Reserva de la pista BENETTON el dia 2011-07-01 a las 18:30:00', '1.5000', 1, '1.5000', 0, 0, 0, 1, '0.0000', NULL, '1.2712', '0.2288', NULL, 18, NULL, 0, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, 2, 0, NULL, NULL),
(20, NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2011-07-01 13:31:54', NULL, 'Reserva de la pista BENETTON el dia 2011-07-01 a las 18:30:00', '1.5000', 1, '1.5000', 0, 0, 0, 1, '0.0000', NULL, '1.2712', '0.2288', NULL, 18, NULL, 0, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL),
(21, NULL, NULL, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2011-07-01 13:31:54', NULL, 'Reserva de la pista BENETTON el dia 2011-07-01 a las 18:30:00', '6.5000', 1, '6.5000', 0, 0, 0, 1, '0.0000', NULL, '5.5085', '0.9915', NULL, 18, NULL, 0, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(22, NULL, NULL, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2011-07-01 13:31:54', NULL, 'Reserva de la pista BENETTON el dia 2011-07-01 a las 18:30:00', '6.5000', 1, '6.5000', 0, 0, 0, 1, '0.0000', NULL, '5.5085', '0.9915', NULL, 18, NULL, 0, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(23, NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2011-07-01 13:35:26', NULL, 'Reserva de la pista BENETTON el dia 2011-07-01 a las 17:15:00', '1.5000', 1, '1.5000', 0, 0, 0, 1, '0.0000', NULL, '1.2712', '0.2288', NULL, 18, NULL, 0, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, 2, 0, NULL, NULL),
(24, NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2011-07-01 13:35:26', NULL, 'Reserva de la pista BENETTON el dia 2011-07-01 a las 17:15:00', '1.5000', 1, '1.5000', 0, 0, 0, 1, '0.0000', NULL, '1.2712', '0.2288', NULL, 18, NULL, 0, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL),
(25, NULL, NULL, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2011-07-01 13:35:26', NULL, 'Reserva de la pista BENETTON el dia 2011-07-01 a las 17:15:00', '6.5000', 1, '6.5000', 0, 0, 0, 1, '0.0000', NULL, '5.5085', '0.9915', NULL, 18, NULL, 0, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(26, NULL, NULL, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2011-07-01 13:35:26', NULL, 'Reserva de la pista BENETTON el dia 2011-07-01 a las 17:15:00', '6.5000', 1, '6.5000', 0, 0, 0, 1, '0.0000', NULL, '5.5085', '0.9915', NULL, 18, NULL, 0, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL);
