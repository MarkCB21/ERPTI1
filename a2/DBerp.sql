-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2016 a las 21:59:37
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dberp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivo`
--

CREATE TABLE `archivo` (
  `ID_Archivo` int(11) NOT NULL,
  `Ruta_Archivo` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `archivo`
--

INSERT INTO `archivo` (`ID_Archivo`, `Ruta_Archivo`) VALUES
(1, './uploads/documento1.pdf'),
(2, './uploads/documento2.pdf'),
(3, './uploads/documento3.pdf'),
(4, './uploads/documento4.pdf'),
(5, './uploads/documento5.pdf'),
(6, './uploads/documento6.pdf'),
(7, './uploads/documento7.pdf'),
(8, './uploads/documento8.pdf'),
(9, './uploads/documento9.pdf'),
(10, './uploads/documento10.pdf'),
(11, './uploads/documento11.pdf'),
(12, './uploads/documento12.pdf'),
(13, './uploads/documento13.pdf'),
(14, './uploads/documento14.pdf'),
(15, './uploads/documento15.pdf'),
(16, './uploads/documento16.pdf'),
(17, './uploads/documento17.pdf'),
(18, './uploads/documento18.pdf'),
(19, './uploads/documento19.pdf'),
(20, './uploads/documento20.pdf'),
(21, './uploads/documento21.pdf'),
(22, './uploads/documento22.pdf'),
(23, './uploads/documento23.pdf'),
(24, './uploads/documento24.pdf'),
(25, './uploads/documento25.pdf'),
(26, './uploads/documento26.pdf'),
(27, './uploads/documento27.pdf'),
(28, './uploads/documento28.pdf'),
(29, './uploads/documento29.pdf'),
(30, './uploads/documento30.pdf'),
(31, './uploads/documento31.pdf'),
(32, './uploads/documento32.pdf'),
(33, './uploads/documento33.pdf'),
(34, './uploads/documento34.pdf'),
(35, './uploads/documento35.pdf'),
(36, './uploads/documento36.pdf'),
(37, './uploads/documento37.pdf'),
(38, './uploads/documento38.pdf'),
(39, './uploads/documento39.pdf'),
(40, './uploads/documento40.pdf'),
(41, './uploads/documento41.pdf'),
(42, './uploads/documento42.pdf'),
(43, './uploads/documento43.pdf'),
(44, './uploads/documento44.pdf'),
(45, './uploads/documento45.pdf'),
(46, './uploads/documento46.pdf'),
(47, './uploads/documento47.pdf'),
(48, './uploads/documento48.pdf'),
(49, './uploads/documento49.pdf'),
(50, './uploads/documento50.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulob`
--

CREATE TABLE `articulob` (
  `ID_ArtB` int(11) NOT NULL,
  `ID_Inventario` int(11) NOT NULL,
  `ID_Boleta` int(11) NOT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `Descuento_Porcentaje` int(3) DEFAULT NULL,
  `Descuento` int(11) DEFAULT NULL,
  `Total_Inventario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articulob`
--

INSERT INTO `articulob` (`ID_ArtB`, `ID_Inventario`, `ID_Boleta`, `Cantidad`, `Descuento_Porcentaje`, `Descuento`, `Total_Inventario`) VALUES
(1, 41, 8, 1, 9, 2700, 24979),
(2, 27, 42, 6, 0, 43, 35221),
(3, 16, 50, 2, 0, 119, 83170),
(4, 21, 50, 7, 9, 5410, 51096),
(5, 6, 33, 1, 33, 11011, 22111),
(6, 4, 16, 6, 15, 4838, 26614),
(7, 12, 41, 4, 19, 10770, 43426),
(8, 37, 43, 9, 35, 6714, 12137),
(9, 20, 5, 3, 25, 1301, 3746),
(10, 27, 2, 10, 31, 11167, 24097),
(11, 17, 11, 2, 8, 58, 617),
(12, 38, 50, 3, 20, 17725, 68763),
(13, 31, 9, 8, 7, 3857, 50149),
(14, 30, 26, 5, 42, 11761, 15981),
(15, 16, 49, 3, 40, 33595, 49694),
(16, 9, 36, 1, 23, 9236, 30786),
(17, 37, 24, 2, 2, 521, 18330),
(18, 45, 37, 5, 22, 21584, 74105),
(19, 36, 39, 6, 0, 75, 8017),
(20, 14, 43, 2, 3, 1520, 39255),
(21, 4, 27, 9, 38, 12236, 19216),
(22, 10, 18, 9, 39, 3127, 4701),
(23, 18, 38, 8, 6, 2741, 36677),
(24, 39, 30, 8, 38, 11294, 17871),
(25, 37, 47, 1, 22, 4331, 14520),
(26, 47, 6, 6, 10, 7319, 65144),
(27, 42, 50, 9, 22, 4122, 13915),
(28, 17, 29, 10, 11, 79, 596),
(29, 22, 44, 5, 42, 40018, 54370),
(30, 37, 14, 6, 2, 379, 18472),
(31, 36, 50, 5, 45, 3681, 4411),
(32, 44, 32, 10, 28, 10280, 25311),
(33, 48, 47, 1, 33, 31498, 63235),
(34, 50, 35, 8, 37, 3220, 5407),
(35, 2, 19, 6, 45, 8452, 10065),
(36, 25, 15, 5, 26, 7188, 19911),
(37, 24, 20, 10, 29, 7918, 18521),
(38, 14, 10, 4, 43, 17865, 22910),
(39, 13, 19, 9, 25, 24818, 73232),
(40, 37, 20, 1, 9, 1885, 16966),
(41, 37, 16, 10, 0, 28, 18823),
(42, 33, 10, 2, 49, 5148, 5198),
(43, 17, 33, 4, 18, 122, 553),
(44, 31, 13, 5, 6, 3259, 50747),
(45, 28, 28, 7, 44, 9741, 12224),
(46, 8, 34, 9, 47, 42869, 46975),
(47, 32, 41, 6, 0, 125, 76293),
(48, 41, 11, 7, 35, 9810, 17869),
(49, 38, 18, 4, 19, 17122, 69366),
(50, 38, 10, 8, 24, 20869, 65619);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulov`
--

CREATE TABLE `articulov` (
  `ID_ArtV` int(11) NOT NULL,
  `ID_Inve` int(11) DEFAULT NULL,
  `ID_F` int(11) DEFAULT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `Descuento_Porcentaje` int(3) DEFAULT NULL,
  `Descuento` int(11) DEFAULT NULL,
  `Total_Inventario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articulov`
--

INSERT INTO `articulov` (`ID_ArtV`, `ID_Inve`, `ID_F`, `Cantidad`, `Descuento_Porcentaje`, `Descuento`, `Total_Inventario`) VALUES
(1, 9, 42, 8, 26, 10749, 29273),
(2, 41, 45, 2, 8, 2237, 25442),
(3, 12, 32, 1, 30, 16358, 37838),
(4, 35, 33, 7, 41, 24024, 34477),
(5, 30, 11, 4, 6, 1778, 25964),
(6, 31, 44, 3, 1, 919, 53087),
(7, 26, 17, 7, 49, 25849, 26652),
(8, 21, 38, 1, 24, 13903, 42603),
(9, 26, 24, 7, 25, 13369, 39132),
(10, 9, 8, 10, 49, 19791, 20231),
(11, 29, 33, 7, 39, 18669, 28567),
(12, 2, 42, 5, 9, 1822, 16695),
(13, 2, 47, 7, 14, 2640, 15877),
(14, 10, 2, 7, 0, 22, 7806),
(15, 42, 3, 7, 43, 7772, 10265),
(16, 4, 38, 4, 41, 12983, 18469),
(17, 33, 39, 5, 32, 3332, 7014),
(18, 18, 23, 2, 30, 12016, 27402),
(19, 26, 10, 2, 12, 6399, 46102),
(20, 32, 6, 4, 2, 2074, 74344),
(21, 29, 48, 1, 42, 20063, 27173),
(22, 9, 26, 5, 0, 123, 39899),
(23, 12, 50, 1, 26, 14258, 39938),
(24, 48, 6, 4, 20, 19559, 75174),
(25, 16, 19, 4, 10, 9037, 74252),
(26, 42, 35, 10, 46, 8455, 9582),
(27, 34, 16, 3, 10, 2846, 25235),
(28, 8, 6, 6, 16, 14402, 75442),
(29, 6, 5, 8, 25, 8428, 24694),
(30, 11, 38, 10, 13, 4688, 31281),
(31, 17, 28, 3, 19, 132, 543),
(32, 13, 25, 1, 43, 42678, 55372),
(33, 20, 44, 1, 46, 2343, 2704),
(34, 49, 39, 7, 41, 22309, 31393),
(35, 15, 37, 3, 28, 5020, 12432),
(36, 31, 38, 10, 31, 17153, 36853),
(37, 16, 25, 2, 28, 24142, 59147),
(38, 30, 49, 9, 12, 3395, 24347),
(39, 33, 15, 2, 4, 498, 9848),
(40, 48, 29, 2, 13, 13080, 81653),
(41, 43, 39, 6, 42, 15657, 20828),
(42, 24, 39, 8, 45, 11900, 14539),
(43, 3, 6, 2, 9, 7857, 71603),
(44, 24, 42, 3, 14, 3839, 22600),
(45, 13, 17, 1, 18, 17966, 80084),
(46, 5, 22, 4, 19, 4504, 18682),
(47, 35, 49, 1, 34, 20267, 38234),
(48, 29, 23, 2, 39, 18746, 28490),
(49, 2, 10, 5, 37, 6981, 11536),
(50, 43, 9, 5, 7, 2561, 33924);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `boleta`
--

CREATE TABLE `boleta` (
  `ID_Boleta` int(11) NOT NULL,
  `ID_Compania` int(11) DEFAULT NULL,
  `Fecha_Emision` date DEFAULT NULL,
  `ID_total_compras` int(11) DEFAULT NULL,
  `ID_login_usuario` int(11) DEFAULT NULL,
  `Giro_Actividad` varchar(32) DEFAULT NULL,
  `Condiciones_de_Venta` varchar(360) DEFAULT NULL,
  `Anulada` tinyint(1) DEFAULT NULL,
  `ID_Doc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `boleta`
--

INSERT INTO `boleta` (`ID_Boleta`, `ID_Compania`, `Fecha_Emision`, `ID_total_compras`, `ID_login_usuario`, `Giro_Actividad`, `Condiciones_de_Venta`, `Anulada`, `ID_Doc`) VALUES
(1, 1, '2012-10-16', 1, 45, 'CULTIVO DE OTRAS LEGUMBRES	', ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que este mas alla del control de la parte que la invoca, incluyendo, pero no limitandolo a las siguientes circunstancias: imposicion o sumision a una ley, regulacion, decreto, orden o solicitud de cualquier autoridad (nacional, estatal, ', 1, 1),
(2, 1, '2003-09-16', 2, 36, 'CULTIVO DE OTROS CEREALES', ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que este mas alla del control de la parte que la invoca, incluyendo, pero no limitandolo a las siguientes circunstancias: imposicion o sumision a una ley, regulacion, decreto, orden o solicitud de cualquier autoridad (nacional, estatal, ', 0, 2),
(3, 1, '2008-03-25', 3, 44, 'CULTIVO DE POROTOS O FRIJOL', ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que este mas alla del control de la parte que la invoca, incluyendo, pero no limitandolo a las siguientes circunstancias: imposicion o sumision a una ley, regulacion, decreto, orden o solicitud de cualquier autoridad (nacional, estatal, ', 0, 3),
(4, 1, '2011-04-14', 4, 45, 'CULTIVO DE POROTOS O FRIJOL', ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que este mas alla del control de la parte que la invoca, incluyendo, pero no limitandolo a las siguientes circunstancias: imposicion o sumision a una ley, regulacion, decreto, orden o solicitud de cualquier autoridad (nacional, estatal, ', 0, 4),
(5, 1, '2001-04-24', 5, 4, 'CULTIVO DE TRIGO', ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que este mas alla del control de la parte que la invoca, incluyendo, pero no limitandolo a las siguientes circunstancias: imposicion o sumision a una ley, regulacion, decreto, orden o solicitud de cualquier autoridad (nacional, estatal, ', 0, 5),
(6, 1, '2006-01-02', 6, 33, 'CULTIVO FORRAJEROS EN PRADERAS M', ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que este mas alla del control de la parte que la invoca, incluyendo, pero no limitandolo a las siguientes circunstancias: imposicion o sumision a una ley, regulacion, decreto, orden o solicitud de cualquier autoridad (nacional, estatal, ', 0, 6),
(7, 1, '2011-01-05', 7, 5, 'CULTIVO DE OTRAS LEGUMBRES	', ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que este mas alla del control de la parte que la invoca, incluyendo, pero no limitandolo a las siguientes circunstancias: imposicion o sumision a una ley, regulacion, decreto, orden o solicitud de cualquier autoridad (nacional, estatal, ', 0, 7),
(8, 1, '2005-01-26', 8, 23, 'CULTIVO DE TRIGO', ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que este mas alla del control de la parte que la invoca, incluyendo, pero no limitandolo a las siguientes circunstancias: imposicion o sumision a una ley, regulacion, decreto, orden o solicitud de cualquier autoridad (nacional, estatal, ', 1, 8),
(9, 1, '2000-02-07', 9, 9, 'CULTIVO DE CEBADA', ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que este mas alla del control de la parte que la invoca, incluyendo, pero no limitandolo a las siguientes circunstancias: imposicion o sumision a una ley, regulacion, decreto, orden o solicitud de cualquier autoridad (nacional, estatal, ', 0, 9),
(10, 1, '2011-05-20', 10, 2, 'CULTIVO DE OTROS CEREALES', ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que este mas alla del control de la parte que la invoca, incluyendo, pero no limitandolo a las siguientes circunstancias: imposicion o sumision a una ley, regulacion, decreto, orden o solicitud de cualquier autoridad (nacional, estatal, ', 1, 10),
(11, 1, '2005-06-11', 11, 42, 'CULTIVO DE PAPAS	', ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que este mas alla del control de la parte que la invoca, incluyendo, pero no limitandolo a las siguientes circunstancias: imposicion o sumision a una ley, regulacion, decreto, orden o solicitud de cualquier autoridad (nacional, estatal, ', 1, 11),
(12, 1, '2001-10-04', 12, 39, 'CULTIVO, PRODUCCION DE LUPINO', ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que este mas alla del control de la parte que la invoca, incluyendo, pero no limitandolo a las siguientes circunstancias: imposicion o sumision a una ley, regulacion, decreto, orden o solicitud de cualquier autoridad (nacional, estatal, ', 1, 12),
(13, 1, '2001-04-20', 13, 50, 'CULTIVO FORRAJEROS EN PRADERAS M', ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que este mas alla del control de la parte que la invoca, incluyendo, pero no limitandolo a las siguientes circunstancias: imposicion o sumision a una ley, regulacion, decreto, orden o solicitud de cualquier autoridad (nacional, estatal, ', 0, 13),
(14, 1, '2005-06-21', 14, 32, 'CULTIVO DE OTRAS LEGUMBRES	', ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que este mas alla del control de la parte que la invoca, incluyendo, pero no limitandolo a las siguientes circunstancias: imposicion o sumision a una ley, regulacion, decreto, orden o solicitud de cualquier autoridad (nacional, estatal, ', 0, 14),
(15, 1, '2003-10-12', 15, 6, 'CULTIVO, PRODUCCION DE LUPINO', ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que este mas alla del control de la parte que la invoca, incluyendo, pero no limitandolo a las siguientes circunstancias: imposicion o sumision a una ley, regulacion, decreto, orden o solicitud de cualquier autoridad (nacional, estatal, ', 0, 15),
(16, 1, '2004-02-11', 16, 13, 'CULTIVO DE TRIGO', ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que este mas alla del control de la parte que la invoca, incluyendo, pero no limitandolo a las siguientes circunstancias: imposicion o sumision a una ley, regulacion, decreto, orden o solicitud de cualquier autoridad (nacional, estatal, ', 0, 16),
(17, 1, '2005-07-02', 17, 14, 'CULTIVO DE CEBADA', ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que este mas alla del control de la parte que la invoca, incluyendo, pero no limitandolo a las siguientes circunstancias: imposicion o sumision a una ley, regulacion, decreto, orden o solicitud de cualquier autoridad (nacional, estatal, ', 0, 17),
(18, 1, '2002-08-12', 18, 2, 'CULTIVO FORRAJEROS EN PRADERAS M', ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que este mas alla del control de la parte que la invoca, incluyendo, pero no limitandolo a las siguientes circunstancias: imposicion o sumision a una ley, regulacion, decreto, orden o solicitud de cualquier autoridad (nacional, estatal, ', 1, 18),
(19, 1, '2003-01-07', 19, 3, 'CULTIVO DE ARROZ	', ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que este mas alla del control de la parte que la invoca, incluyendo, pero no limitandolo a las siguientes circunstancias: imposicion o sumision a una ley, regulacion, decreto, orden o solicitud de cualquier autoridad (nacional, estatal, ', 0, 19),
(20, 1, '2012-10-27', 20, 18, 'CULTIVO DE PAPAS	', ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que este mas alla del control de la parte que la invoca, incluyendo, pero no limitandolo a las siguientes circunstancias: imposicion o sumision a una ley, regulacion, decreto, orden o solicitud de cualquier autoridad (nacional, estatal, ', 0, 20),
(21, 1, '2014-07-12', 21, 46, 'CULTIVO DE PAPAS	', ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que este mas alla del control de la parte que la invoca, incluyendo, pero no limitandolo a las siguientes circunstancias: imposicion o sumision a una ley, regulacion, decreto, orden o solicitud de cualquier autoridad (nacional, estatal, ', 1, 21),
(22, 1, '2006-01-17', 22, 3, 'CULTIVO DE ARROZ	', ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que este mas alla del control de la parte que la invoca, incluyendo, pero no limitandolo a las siguientes circunstancias: imposicion o sumision a una ley, regulacion, decreto, orden o solicitud de cualquier autoridad (nacional, estatal, ', 1, 22),
(23, 1, '2009-03-22', 23, 35, 'CULTIVO FORRAJEROS EN PRADERAS N', ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que este mas alla del control de la parte que la invoca, incluyendo, pero no limitandolo a las siguientes circunstancias: imposicion o sumision a una ley, regulacion, decreto, orden o solicitud de cualquier autoridad (nacional, estatal, ', 1, 23),
(24, 1, '2009-07-24', 24, 3, 'CULTIVO DE MAIZ	', ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que este mas alla del control de la parte que la invoca, incluyendo, pero no limitandolo a las siguientes circunstancias: imposicion o sumision a una ley, regulacion, decreto, orden o solicitud de cualquier autoridad (nacional, estatal, ', 1, 24),
(25, 1, '2009-10-19', 25, 5, 'CULTIVO DE ARROZ	', ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que este mas alla del control de la parte que la invoca, incluyendo, pero no limitandolo a las siguientes circunstancias: imposicion o sumision a una ley, regulacion, decreto, orden o solicitud de cualquier autoridad (nacional, estatal, ', 0, 25),
(26, 1, '2008-06-27', 26, 31, 'CULTIVO FORRAJEROS EN PRADERAS M', ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que este mas alla del control de la parte que la invoca, incluyendo, pero no limitandolo a las siguientes circunstancias: imposicion o sumision a una ley, regulacion, decreto, orden o solicitud de cualquier autoridad (nacional, estatal, ', 1, 26),
(27, 1, '2000-01-20', 27, 40, 'CULTIVO FORRAJEROS EN PRADERAS N', ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que este mas alla del control de la parte que la invoca, incluyendo, pero no limitandolo a las siguientes circunstancias: imposicion o sumision a una ley, regulacion, decreto, orden o solicitud de cualquier autoridad (nacional, estatal, ', 1, 27),
(28, 1, '2002-05-01', 28, 10, 'CULTIVO DE TRIGO', ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que este mas alla del control de la parte que la invoca, incluyendo, pero no limitandolo a las siguientes circunstancias: imposicion o sumision a una ley, regulacion, decreto, orden o solicitud de cualquier autoridad (nacional, estatal, ', 1, 28),
(29, 1, '2000-02-23', 29, 43, 'CULTIVO DE ARROZ	', ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que este mas alla del control de la parte que la invoca, incluyendo, pero no limitandolo a las siguientes circunstancias: imposicion o sumision a una ley, regulacion, decreto, orden o solicitud de cualquier autoridad (nacional, estatal, ', 1, 29),
(30, 1, '2007-10-16', 30, 7, 'CULTIVO DE CEBADA', ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que este mas alla del control de la parte que la invoca, incluyendo, pero no limitandolo a las siguientes circunstancias: imposicion o sumision a una ley, regulacion, decreto, orden o solicitud de cualquier autoridad (nacional, estatal, ', 1, 30),
(31, 1, '2000-03-28', 31, 21, 'CULTIVO DE ARROZ	', ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que este mas alla del control de la parte que la invoca, incluyendo, pero no limitandolo a las siguientes circunstancias: imposicion o sumision a una ley, regulacion, decreto, orden o solicitud de cualquier autoridad (nacional, estatal, ', 0, 31),
(32, 1, '2002-03-23', 32, 3, 'CULTIVO DE TRIGO', ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que este mas alla del control de la parte que la invoca, incluyendo, pero no limitandolo a las siguientes circunstancias: imposicion o sumision a una ley, regulacion, decreto, orden o solicitud de cualquier autoridad (nacional, estatal, ', 1, 32),
(33, 1, '2004-04-13', 33, 15, 'CULTIVO FORRAJEROS EN PRADERAS M', ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que este mas alla del control de la parte que la invoca, incluyendo, pero no limitandolo a las siguientes circunstancias: imposicion o sumision a una ley, regulacion, decreto, orden o solicitud de cualquier autoridad (nacional, estatal, ', 1, 33),
(34, 1, '2002-07-15', 34, 32, 'CULTIVO FORRAJEROS EN PRADERAS M', ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que este mas alla del control de la parte que la invoca, incluyendo, pero no limitandolo a las siguientes circunstancias: imposicion o sumision a una ley, regulacion, decreto, orden o solicitud de cualquier autoridad (nacional, estatal, ', 0, 34),
(35, 1, '2013-07-10', 35, 24, 'CULTIVO DE POROTOS O FRIJOL', ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que este mas alla del control de la parte que la invoca, incluyendo, pero no limitandolo a las siguientes circunstancias: imposicion o sumision a una ley, regulacion, decreto, orden o solicitud de cualquier autoridad (nacional, estatal, ', 1, 35),
(36, 1, '2010-03-27', 36, 28, 'CULTIVO DE OTROS CEREALES', ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que este mas alla del control de la parte que la invoca, incluyendo, pero no limitandolo a las siguientes circunstancias: imposicion o sumision a una ley, regulacion, decreto, orden o solicitud de cualquier autoridad (nacional, estatal, ', 0, 36),
(37, 1, '2011-06-15', 37, 34, 'CULTIVO DE MAIZ	', ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que este mas alla del control de la parte que la invoca, incluyendo, pero no limitandolo a las siguientes circunstancias: imposicion o sumision a una ley, regulacion, decreto, orden o solicitud de cualquier autoridad (nacional, estatal, ', 0, 37),
(38, 1, '2004-07-16', 38, 45, 'CULTIVO DE PAPAS	', ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que este mas alla del control de la parte que la invoca, incluyendo, pero no limitandolo a las siguientes circunstancias: imposicion o sumision a una ley, regulacion, decreto, orden o solicitud de cualquier autoridad (nacional, estatal, ', 1, 38),
(39, 1, '2000-06-28', 39, 48, 'CULTIVO FORRAJEROS EN PRADERAS N', ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que este mas alla del control de la parte que la invoca, incluyendo, pero no limitandolo a las siguientes circunstancias: imposicion o sumision a una ley, regulacion, decreto, orden o solicitud de cualquier autoridad (nacional, estatal, ', 0, 39),
(40, 1, '2013-10-07', 40, 48, 'CULTIVO DE PAPAS	', ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que este mas alla del control de la parte que la invoca, incluyendo, pero no limitandolo a las siguientes circunstancias: imposicion o sumision a una ley, regulacion, decreto, orden o solicitud de cualquier autoridad (nacional, estatal, ', 1, 40),
(41, 1, '2000-09-22', 41, 34, 'CULTIVO DE POROTOS O FRIJOL', ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que este mas alla del control de la parte que la invoca, incluyendo, pero no limitandolo a las siguientes circunstancias: imposicion o sumision a una ley, regulacion, decreto, orden o solicitud de cualquier autoridad (nacional, estatal, ', 1, 41),
(42, 1, '2006-03-07', 42, 8, 'CULTIVO DE ARROZ	', ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que este mas alla del control de la parte que la invoca, incluyendo, pero no limitandolo a las siguientes circunstancias: imposicion o sumision a una ley, regulacion, decreto, orden o solicitud de cualquier autoridad (nacional, estatal, ', 0, 42),
(43, 1, '2011-10-12', 43, 3, 'CULTIVO DE POROTOS O FRIJOL', ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que este mas alla del control de la parte que la invoca, incluyendo, pero no limitandolo a las siguientes circunstancias: imposicion o sumision a una ley, regulacion, decreto, orden o solicitud de cualquier autoridad (nacional, estatal, ', 0, 43),
(44, 1, '2013-09-04', 44, 33, 'CULTIVO, PRODUCCION DE LUPINO', ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que este mas alla del control de la parte que la invoca, incluyendo, pero no limitandolo a las siguientes circunstancias: imposicion o sumision a una ley, regulacion, decreto, orden o solicitud de cualquier autoridad (nacional, estatal, ', 0, 44),
(45, 1, '2014-09-25', 45, 36, 'CULTIVO DE PAPAS	', ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que este mas alla del control de la parte que la invoca, incluyendo, pero no limitandolo a las siguientes circunstancias: imposicion o sumision a una ley, regulacion, decreto, orden o solicitud de cualquier autoridad (nacional, estatal, ', 0, 45),
(46, 1, '2007-09-24', 46, 27, 'CULTIVO FORRAJEROS EN PRADERAS N', ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que este mas alla del control de la parte que la invoca, incluyendo, pero no limitandolo a las siguientes circunstancias: imposicion o sumision a una ley, regulacion, decreto, orden o solicitud de cualquier autoridad (nacional, estatal, ', 1, 46),
(47, 1, '2004-10-14', 47, 12, 'CULTIVO DE ARROZ	', ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que este mas alla del control de la parte que la invoca, incluyendo, pero no limitandolo a las siguientes circunstancias: imposicion o sumision a una ley, regulacion, decreto, orden o solicitud de cualquier autoridad (nacional, estatal, ', 1, 47),
(48, 1, '2003-05-13', 48, 49, 'CULTIVO DE OTROS CEREALES', ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que este mas alla del control de la parte que la invoca, incluyendo, pero no limitandolo a las siguientes circunstancias: imposicion o sumision a una ley, regulacion, decreto, orden o solicitud de cualquier autoridad (nacional, estatal, ', 0, 48),
(49, 1, '2014-03-17', 49, 17, 'CULTIVO DE CEBADA', ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que este mas alla del control de la parte que la invoca, incluyendo, pero no limitandolo a las siguientes circunstancias: imposicion o sumision a una ley, regulacion, decreto, orden o solicitud de cualquier autoridad (nacional, estatal, ', 1, 49),
(50, 1, '2006-08-16', 50, 18, 'CULTIVO DE ARROZ	', ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que este mas alla del control de la parte que la invoca, incluyendo, pero no limitandolo a las siguientes circunstancias: imposicion o sumision a una ley, regulacion, decreto, orden o solicitud de cualquier autoridad (nacional, estatal, ', 1, 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `ID_Categoria` int(11) NOT NULL,
  `Nombre` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`ID_Categoria`, `Nombre`) VALUES
(1, 'Fruta'),
(2, 'comida'),
(3, 'verdura'),
(4, 'limpieza'),
(5, 'inmueble'),
(6, 'electronico'),
(7, 'bebida'),
(8, 'ropa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra_producto`
--

CREATE TABLE `compra_producto` (
  `ID_Compra` int(11) NOT NULL,
  `Fecha_emision` date DEFAULT NULL,
  `ID_Doc` int(11) DEFAULT NULL,
  `ID_login_usuario` int(10) NOT NULL,
  `ID_Compañia` int(11) NOT NULL,
  `ID_proveedor` int(11) NOT NULL,
  `anulado` int(11) NOT NULL,
  `ID_Total_compras` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `compra_producto`
--

INSERT INTO `compra_producto` (`ID_Compra`, `Fecha_emision`, `ID_Doc`, `ID_login_usuario`, `ID_Compañia`, `ID_proveedor`, `anulado`, `ID_Total_compras`) VALUES
(1, '2006-06-11', 101, 46, 1, 47, 1, 101),
(2, '2011-05-02', 102, 13, 1, 34, 0, 102),
(3, '2011-04-16', 103, 5, 1, 48, 0, 103),
(4, '2002-05-03', 104, 39, 1, 24, 0, 104),
(5, '2004-04-14', 105, 5, 1, 47, 0, 105),
(6, '2008-04-08', 106, 23, 1, 38, 1, 106),
(7, '2002-06-06', 107, 36, 1, 4, 1, 107),
(8, '2010-10-06', 108, 41, 1, 20, 0, 108),
(9, '2010-03-19', 109, 14, 1, 27, 0, 109),
(10, '2004-08-06', 110, 25, 1, 16, 0, 110),
(11, '2002-02-16', 111, 48, 1, 22, 0, 111),
(12, '2006-09-07', 112, 5, 1, 34, 0, 112),
(13, '2002-06-25', 113, 11, 1, 13, 1, 113),
(14, '2011-10-03', 114, 18, 1, 31, 0, 114),
(15, '2000-06-04', 115, 30, 1, 15, 1, 115),
(16, '2011-01-23', 116, 33, 1, 30, 1, 116),
(17, '2003-10-10', 117, 6, 1, 15, 0, 117),
(18, '2014-04-16', 118, 50, 1, 4, 0, 118),
(19, '2000-01-16', 119, 24, 1, 20, 1, 119),
(20, '2004-04-11', 120, 44, 1, 30, 0, 120),
(21, '2007-07-04', 121, 22, 1, 22, 0, 121),
(22, '2003-06-27', 122, 46, 1, 38, 1, 122),
(23, '2004-04-28', 123, 6, 1, 8, 0, 123),
(24, '2013-03-26', 124, 12, 1, 7, 0, 124),
(25, '2014-06-06', 125, 46, 1, 17, 1, 125),
(26, '2009-05-11', 126, 38, 1, 14, 0, 126),
(27, '2001-01-15', 127, 14, 1, 13, 1, 127),
(28, '2004-10-23', 128, 46, 1, 24, 1, 128),
(29, '2000-03-24', 129, 26, 1, 10, 1, 129),
(30, '2013-02-02', 130, 40, 1, 44, 0, 130),
(31, '2011-01-16', 131, 37, 1, 29, 1, 131),
(32, '2001-09-10', 132, 20, 1, 10, 0, 132),
(33, '2014-04-15', 133, 41, 1, 10, 0, 133),
(34, '2007-04-14', 134, 46, 1, 6, 1, 134),
(35, '2004-03-04', 135, 42, 1, 11, 0, 135),
(36, '2002-05-26', 136, 38, 1, 25, 1, 136),
(37, '2005-02-28', 137, 39, 1, 25, 0, 137),
(38, '2001-03-20', 138, 19, 1, 32, 0, 138),
(39, '2000-05-11', 139, 50, 1, 35, 1, 139),
(40, '2013-06-09', 140, 17, 1, 28, 0, 140),
(41, '2009-07-22', 141, 36, 1, 17, 0, 141),
(42, '2003-07-27', 142, 40, 1, 43, 0, 142),
(43, '2001-08-24', 143, 20, 1, 34, 1, 143),
(44, '2011-07-16', 144, 13, 1, 48, 0, 144),
(45, '2014-09-02', 145, 35, 1, 11, 1, 145),
(46, '2013-10-10', 146, 7, 1, 19, 1, 146),
(47, '2005-02-20', 147, 20, 1, 4, 0, 147),
(48, '2003-04-07', 148, 28, 1, 49, 0, 148),
(49, '2011-03-18', 149, 49, 1, 27, 1, 149),
(50, '2013-06-23', 150, 47, 1, 19, 0, 150);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comuna`
--

CREATE TABLE `comuna` (
  `ID_Comuna` int(11) NOT NULL,
  `Nombre_Comuna` varchar(32) DEFAULT NULL,
  `ID_Region` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comuna`
--

INSERT INTO `comuna` (`ID_Comuna`, `Nombre_Comuna`, `ID_Region`) VALUES
(1, 'Arica', 1),
(2, 'Iquique', 2),
(3, 'Alto Hospicio', 2),
(4, 'Pozo Almonte', 2),
(5, 'Antofagasta', 3),
(6, 'Calama', 3),
(7, 'Tocopilla', 3),
(8, 'Taltal', 3),
(9, 'Mejillones', 3),
(10, 'Maria Elena', 3),
(11, 'Copiapo', 4),
(12, 'Caldera', 4),
(13, 'Tierra Amarilla', 4),
(14, 'Chanaral', 4),
(15, 'Diego de Almagro', 4),
(16, 'El Salvador', 4),
(17, 'Vallenar', 4),
(18, 'Huasco', 4),
(19, 'La Serena', 5),
(20, 'Coquimbo', 5),
(21, 'Punitaqui', 5),
(22, 'Andacollo', 5),
(23, 'Vicuna', 5),
(24, 'Illapel', 5),
(25, 'Los Vilos', 5),
(26, 'Salamanca', 5),
(27, 'Ovalle', 5),
(28, 'Combarbala', 5),
(29, 'Monte Patria', 5),
(30, 'El Palqui', 5),
(31, 'Valparaiso', 6),
(32, 'Concon', 6),
(33, 'Vina del Mar', 6),
(34, 'Villa Alemana', 6),
(35, 'Quilpue', 6),
(36, 'Placilla de Panuelas', 6),
(37, 'San Antonio', 6),
(38, 'Santo Domingo', 6),
(39, 'Cartagena', 6),
(40, 'Quillota', 6),
(41, 'Hijuelas', 6),
(42, 'La Calera', 6),
(43, 'La Cruz', 6),
(44, 'San Felipe', 6),
(45, 'Casablanca', 6),
(46, 'Las Ventanas', 6),
(47, 'Quintero', 6),
(48, 'Los Andes', 6),
(49, 'Calle Larga', 6),
(50, 'Rinconada', 6),
(51, 'San Esteban', 6),
(52, 'La Ligua', 6),
(53, 'Cabildo', 6),
(54, 'Limache', 6),
(55, 'Nogales', 6),
(56, 'El Melon', 6),
(57, 'Olmue', 6),
(58, 'Algarrobo', 6),
(59, 'El Quisco', 6),
(60, 'El Tabo', 6),
(61, 'Catemu', 6),
(62, 'Llaillai', 6),
(63, 'Putaendo', 6),
(64, 'Villa los Almendros', 6),
(65, 'Santa Maria', 6),
(66, 'Rancagua', 8),
(67, 'Machali', 8),
(68, 'Gultro', 8),
(69, 'Codegua', 8),
(70, 'donihue', 8),
(71, 'Lo Miranda', 8),
(72, 'Graneros', 8),
(73, 'Las Cabras', 8),
(74, 'San Francisco de Mostazal', 8),
(75, 'Peumo', 8),
(76, 'Punta Diamante', 8),
(77, 'Quinta de Tilcoco', 8),
(78, 'Rengo', 8),
(79, 'Requinoa', 8),
(80, 'San Vicente de Tagua Tagua', 8),
(81, 'Pichilemu', 8),
(82, 'San Fernando', 8),
(83, 'Chimbarongo', 8),
(84, 'Nancagua', 8),
(85, 'Palmilla', 8),
(86, 'Santa Cruz', 8),
(87, 'Talca', 9),
(88, 'Curico', 9),
(89, 'Linares', 9),
(90, 'Constitucion', 9),
(91, 'San Clemente', 9),
(92, 'Cauquenes', 9),
(93, 'Hualane', 9),
(94, 'Molina', 9),
(95, 'Teno', 9),
(96, 'Longavi', 9),
(97, 'Parral', 9),
(98, 'San Javier', 9),
(99, 'Villa Alegre', 9),
(100, 'Concepcion', 10),
(101, 'Talcahuano', 10),
(102, 'Chiguayante', 10),
(103, 'Coronel', 10),
(104, 'Hualqui', 10),
(105, 'Lota', 10),
(106, 'Penco', 10),
(107, 'Tome', 10),
(108, 'Hualpen', 10),
(109, 'San Pedro de la Paz', 10),
(110, 'Chillan', 10),
(111, 'Chillan Viejo', 10),
(112, 'Los Angeles', 10),
(113, 'Santa Juana', 10),
(114, 'Lebu', 10),
(115, 'Arauco', 10),
(116, 'Canete', 10),
(117, 'Curanilahue', 10),
(118, 'Los Alamos', 10),
(119, 'Cabrero', 10),
(120, 'Monte Aguila', 10),
(121, 'La Laja-San Rosendo', 10),
(122, 'Mulchen', 10),
(123, 'Nacimiento', 10),
(124, 'Santa Barbara', 10),
(125, 'huepil', 10),
(126, 'Yumbel', 10),
(127, 'Bulnes', 10),
(128, 'Coelemu', 10),
(129, 'Coihueco', 10),
(130, 'Quillon', 10),
(131, 'Quirihue', 10),
(132, 'San Carlos', 10),
(133, 'Yungay', 10),
(134, 'Temuco', 11),
(135, 'Padre las Casas', 11),
(136, 'Labranza', 11),
(137, 'Carahue', 11),
(138, 'Cunco', 11),
(139, 'Freire', 11),
(140, 'Gorbea', 11),
(141, 'Lautaro', 11),
(142, 'Loncoche', 11),
(143, 'Nueva Imperial', 11),
(144, 'Pitrufquen', 11),
(145, 'Pucon', 11),
(146, 'Villarrica', 11),
(147, 'Angol', 11),
(148, 'Collipulli', 11),
(149, 'Curacautin', 11),
(150, 'Puren', 11),
(151, 'Renaico', 11),
(152, 'Traiguen', 11),
(153, 'Victoria', 11),
(154, 'Valdivia', 12),
(155, 'Futrono', 12),
(156, 'La Union', 12),
(157, 'Lanco', 12),
(158, 'Los Lagos', 12),
(159, 'San Jose de la Mariquina', 12),
(160, 'Paillaco', 12),
(161, 'Panguipulli', 12),
(162, 'Rio Bueno', 12),
(163, 'Puerto Montt', 13),
(164, 'Puerto Varas', 13),
(165, 'Calbuco', 13),
(166, 'Fresia', 13),
(167, 'Frutillar', 13),
(168, 'Los Muermos', 13),
(169, 'Llanquihue', 13),
(170, 'Castro', 13),
(171, 'Ancud', 13),
(172, 'Quellon', 13),
(173, 'Osorno', 13),
(174, 'Purranque', 13),
(175, 'Rio Negro', 13),
(176, 'Coyhaique', 14),
(177, 'Puerto Aysen', 14),
(178, 'Punta Arenas', 15),
(179, 'Puerto Natales', 15),
(180, 'Santiago', 7),
(181, 'Cerrillos', 7),
(182, 'Cerro Navia', 7),
(183, 'Conchali', 7),
(184, 'El Bosque', 7),
(185, 'Estacion Central', 7),
(186, 'Huechuraba', 7),
(187, 'Independencia', 7),
(188, 'La Cisterna', 7),
(189, 'La Florida', 7),
(190, 'La Granja', 7),
(191, 'La Pintana', 7),
(192, 'La Reina', 7),
(193, 'Las Condes', 7),
(194, 'Lo Barnechea', 7),
(195, 'Lo Espejo', 7),
(196, 'Lo Prado', 7),
(197, 'Macul', 7),
(198, 'Maipu', 7),
(199, 'Nunoa', 7),
(200, 'Pedro Aguirre Cerda', 7),
(201, 'Penalolen', 7),
(202, 'Providencia', 7),
(203, 'Pudahuel', 7),
(204, 'Quilicura', 7),
(205, 'Quinta Normal', 7),
(206, 'Recoleta', 7),
(207, 'Renca', 7),
(208, 'San Juaquin', 7),
(209, 'San Miguel', 7),
(210, 'San Ramon', 7),
(211, 'Vitacura', 7),
(212, 'Puente Alto', 7),
(213, 'San Bernardo', 7),
(214, 'Padre Hurtado', 7),
(215, 'Pirque', 7),
(216, 'San Jose de Maipo', 7),
(217, 'Colina', 7),
(218, 'Lampa', 7),
(219, 'Batuco', 7),
(220, 'Tiltil', 7),
(221, 'Buin', 7),
(222, 'Alto Jahuel', 7),
(223, 'Bajos de San Agustin', 7),
(224, 'Paine', 7),
(225, 'Hospital', 7),
(226, 'Melipilla', 7),
(227, 'Curacavi', 7),
(228, 'Calera de Tango', 7),
(229, 'Talagante', 7),
(230, 'El Monte', 7),
(231, 'Isla de Maipo', 7),
(232, 'La Islita', 7),
(233, 'Penaflor', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `ID_Datos` int(10) NOT NULL,
  `rut` varchar(32) NOT NULL,
  `Nombres` varchar(32) NOT NULL,
  `Apellidop` varchar(32) NOT NULL,
  `ApellidoM` varchar(32) NOT NULL,
  `Correo` varchar(32) NOT NULL,
  `Telefono` varchar(32) NOT NULL,
  `ID_direccion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`ID_Datos`, `rut`, `Nombres`, `Apellidop`, `ApellidoM`, `Correo`, `Telefono`, `ID_direccion`) VALUES
(1, '13.281.334-5', 'Lucas', 'Fernandez', 'Morcillo', 'Lucas_Fernandez5.gmail.com', '755439595', 1),
(2, '7.766.133-6', 'Gael', 'Valero', 'Moya', 'Gael_Valero6.gmail.com', '843873335', 2),
(3, '8.418.525-6', 'Felipe', 'Sanchez', 'Gomez', 'Felipe_Sanchez6.gmail.com', '823111819', 3),
(4, '12.247.664-2', 'Ignacio', 'Lozano', 'Rodriguez', 'Ignacio_Lozano2.gmail.com', '696996249', 4),
(5, '6.853.132-2', 'Francisco', 'Gonzalez', 'Torres', 'Francisco_Gonzalez2.gmail.com', '968663278', 5),
(6, '12.237.421-1', 'Thiago', 'Ramirez', 'Jimenez', 'Thiago_Ramirez1.gmail.com', '852754964', 6),
(7, '12.671.212-k', 'Hugo', 'Morcillo', 'Fernandez', 'Hugo_Morcillok.gmail.com', '866564731', 7),
(8, '7.137.821-7', 'Felipe', 'Torres', 'Munoz', 'Felipe_Torres7.gmail.com', '959938576', 8),
(9, '12.327.156-4', 'Leonardo', 'Navarro', 'Nunez', 'Leonardo_Navarro4.gmail.com', '819139462', 9),
(10, '7.317.814-2', 'Marcos', 'Garcia', 'Gil', 'Marcos_Garcia2.gmail.com', '954155622', 10),
(11, '7.646.835-4', 'Iker', 'Perez', 'Valero', 'Iker_Perez4.gmail.com', '934499225', 11),
(12, '12.743.235-k', 'Dante', 'Munoz', 'Corcoles', 'Dante_Munozk.gmail.com', '818833367', 12),
(13, '6.468.538-4', 'Iker', 'Torres', 'Fernandez', 'Iker_Torres4.gmail.com', '624658862', 13),
(14, '12.658.143-2', 'Joaquin', 'Ortega', 'Cebrian', 'Joaquin_Ortega2.gmail.com', '829432316', 14),
(15, '13.478.364-8', 'Agustin', 'Ballesteros', 'Calero', 'Agustin_Ballesteros8.gmail.com', '965737944', 15),
(16, '7.787.336-8', 'Hugo', 'Alfaro', 'Ortiz', 'Hugo_Alfaro8.gmail.com', '635789268', 16),
(17, '6.656.221-2', 'Iker', 'Pardo', 'Valero', 'Iker_Pardo2.gmail.com', '836725279', 17),
(18, '7.322.415-2', 'Mario', 'Nunez', 'Alarcon', 'Mario_Nunez2.gmail.com', '615279986', 18),
(19, '12.836.568-0', 'Daniel', 'Romero', 'Blazquez', 'Daniel_Romero0.gmail.com', '643378178', 19),
(20, '7.746.743-2', 'Felipe', 'Requena', 'Pardo', 'Felipe_Requena2.gmail.com', '972254551', 20),
(21, '7.378.253-8', 'Tomas', 'Lopez', 'Ramirez', 'Tomas_Lopez8.gmail.com', '924599755', 21),
(22, '8.133.884-1', 'Mario', 'Saez', 'Garcia', 'Mario_Saez1.gmail.com', '783377415', 22),
(23, '13.873.735-7', 'Carlos', 'Ortega', 'Moya', 'Carlos_Ortega7.gmail.com', '665745588', 23),
(24, '11.671.526-0', 'Dylan', 'Requena', 'Alarcon', 'Dylan_Requena0.gmail.com', '818123817', 24),
(25, '8.284.186-5', 'Marcos', 'Garrido', 'Hernandez', 'Marcos_Garrido5.gmail.com', '699658493', 25),
(26, '7.555.773-6', 'Aaron', 'Blazquez', 'Ortega', 'Aaron_Blazquez6.gmail.com', '678736424', 26),
(27, '12.877.382-7', 'Leo', 'Sanchez', 'Ruiz', 'Leo_Sanchez7.gmail.com', '953751556', 27),
(28, '7.842.388-9', 'Leo', 'Morcillo', 'Morcillo', 'Leo_Morcillo9.gmail.com', '972442738', 28),
(29, '12.847.753-5', 'Pedro', 'Molina', 'Morcillo', 'Pedro_Molina5.gmail.com', '611168484', 29),
(30, '7.846.424-0', 'Rodrigo', 'Gomez', 'Cano', 'Rodrigo_Gomez0.gmail.com', '665274181', 30),
(31, '6.227.465-4', 'Adrian', 'Blazquez', 'Sanchez', 'Adrian_Blazquez4.gmail.com', '929233577', 31),
(32, '6.421.337-7', 'Thiago', 'Gonzalez', 'Gomez', 'Thiago_Gonzalez7.gmail.com', '729513116', 32),
(33, '13.885.811-1', 'Lucas', 'Molina', 'Rodriguez', 'Lucas_Molina1.gmail.com', '974795635', 33),
(34, '11.228.516-4', 'Rafael', 'Cebrian', 'Moya', 'Rafael_Cebrian4.gmail.com', '862152232', 34),
(35, '11.647.247-3', 'Ian', 'Rodenas', 'Tebar', 'Ian_Rodenas3.gmail.com', '758876187', 35),
(36, '8.777.664-6', 'Emiliano', 'Marin', 'Diaz', 'Emiliano_Marin6.gmail.com', '932381555', 36),
(37, '12.688.254-8', 'Luca', 'Morcillo', 'Marin', 'Luca_Morcillo8.gmail.com', '712255685', 37),
(38, '8.344.287-5', 'Rodrigo', 'Garrido', 'Lozano', 'Rodrigo_Garrido5.gmail.com', '797539315', 38),
(39, '6.181.877-4', 'Luca', 'Lozano', 'Ballesteros', 'Luca_Lozano4.gmail.com', '865753549', 39),
(40, '12.574.657-8', 'Iker', 'Cebrian', 'Ortiz', 'Iker_Cebrian8.gmail.com', '694669866', 40),
(41, '8.383.577-k', 'Alex', 'Moreno', 'Cano', 'Alex_Morenok.gmail.com', '832338244', 41),
(42, '7.386.444-5', 'Marcos', 'Alfaro', 'Ortega', 'Marcos_Alfaro5.gmail.com', '935574867', 42),
(43, '12.261.426-3', 'Gabriel', 'Lozano', 'Gil', 'Gabriel_Lozano3.gmail.com', '927449715', 43),
(44, '13.327.556-8', 'Lorenzo', 'Alfaro', 'Hernandez', 'Lorenzo_Alfaro8.gmail.com', '844276195', 44),
(45, '12.116.347-0', 'Angel', 'Corcoles', 'Moreno', 'Angel_Corcoles0.gmail.com', '857872348', 45),
(46, '13.217.484-9', 'Iker', 'Ballesteros', 'Ballesteros', 'Iker_Ballesteros9.gmail.com', '719137322', 46),
(47, '12.552.843-0', 'Pablo', 'Marin', 'Rodenas', 'Pablo_Marin0.gmail.com', '691618827', 47),
(48, '6.721.435-8', 'Agustin', 'Fernandez', 'Martinez', 'Agustin_Fernandez8.gmail.com', '936356146', 48),
(49, '6.457.888-k', 'Ignacio', 'Serrano', 'Garrido', 'Ignacio_Serranok.gmail.com', '687888581', 49),
(50, '6.656.771-0', 'Daniel', 'Rubio', 'Romero', 'Daniel_Rubio0.gmail.com', '745233458', 50),
(51, '6.173.461-9', 'Gael', 'Munoz', 'Morcillo', 'Gael_Munoz9.gmail.com', '984855963', 51),
(52, '13.224.484-7', 'Samuel', 'Molina', 'Jimenez', 'Samuel_Molina7.gmail.com', '882972463', 52),
(53, '12.581.858-7', 'Maximiliano', 'Alfaro', 'Sanchez', 'Maximiliano_Alfaro7.gmail.com', '775877657', 53),
(54, '12.261.814-5', 'Angel', 'Calero', 'Alarcon', 'Angel_Calero5.gmail.com', '864673187', 54),
(55, '7.525.432-6', 'Joaquin', 'Castillo', 'Diaz', 'Joaquin_Castillo6.gmail.com', '668611694', 55),
(56, '8.241.568-8', 'Alvaro', 'Blazquez', 'Saez', 'Alvaro_Blazquez8.gmail.com', '778112174', 56),
(57, '12.574.375-7', 'Ian', 'Ortega', 'Tebar', 'Ian_Ortega7.gmail.com', '855241594', 57),
(58, '8.227.376-k', 'Marcos', 'Gil', 'Ruiz', 'Marcos_Gilk.gmail.com', '932428553', 58),
(59, '11.318.273-3', 'David', 'Tebar', 'Cuenca', 'David_Tebar3.gmail.com', '782215697', 59),
(60, '11.523.742-k', 'Samuel', 'Blazquez', 'Castillo', 'Samuel_Blazquezk.gmail.com', '826221147', 60),
(61, '12.145.252-9', 'Alvaro', 'Romero', 'Garrido', 'Alvaro_Romero9.gmail.com', '918326256', 61),
(62, '13.775.275-1', 'Leonardo', 'Calero', 'Rodenas', 'Leonardo_Calero1.gmail.com', '927258162', 62),
(63, '8.735.427-k', 'Christopher', 'Rodriguez', 'Cuenca', 'Christopher_Rodriguezk.gmail.com', '735762926', 63),
(64, '8.742.852-4', 'Leo', 'Martinez', 'Moreno', 'Leo_Martinez4.gmail.com', '952881526', 64),
(65, '8.735.632-9', 'Pablo', 'Calero', 'Serrano', 'Pablo_Calero9.gmail.com', '697686458', 65),
(66, '13.477.256-5', 'Marcos', 'Romero', 'Diaz', 'Marcos_Romero5.gmail.com', '615688816', 66),
(67, '13.233.426-9', 'Santino', 'Moreno', 'Serrano', 'Santino_Moreno9.gmail.com', '618119593', 67),
(68, '7.422.568-3', 'Ian', 'Rodenas', 'Ballesteros', 'Ian_Rodenas3.gmail.com', '889852959', 68),
(69, '13.586.134-0', 'Luca', 'Ruiz', 'Perez', 'Luca_Ruiz0.gmail.com', '776722934', 69),
(70, '6.214.317-7', 'Gael', 'Tebar', 'Ballesteros', 'Gael_Tebar7.gmail.com', '621293198', 70),
(71, '12.241.537-6', 'Agustin', 'Saez', 'Ballesteros', 'Agustin_Saez6.gmail.com', '828965226', 71),
(72, '12.722.636-9', 'Aaron', 'Sanchez', 'Gil', 'Aaron_Sanchez9.gmail.com', '956427633', 72),
(73, '6.642.514-2', 'Leonardo', 'Calero', 'Fernandez', 'Leonardo_Calero2.gmail.com', '658847879', 73),
(74, '7.215.613-7', 'Gael', 'Ortiz', 'Jimenez', 'Gael_Ortiz7.gmail.com', '658322377', 74),
(75, '8.267.472-1', 'Santino', 'Moya', 'Lozano', 'Santino_Moya1.gmail.com', '759918437', 75),
(76, '7.541.265-7', 'Bruno', 'Alarcon', 'Ballesteros', 'Bruno_Alarcon7.gmail.com', '618266715', 76),
(77, '13.671.642-5', 'Franco', 'Moya', 'Hernandez', 'Franco_Moya5.gmail.com', '816293142', 77),
(78, '7.655.462-5', 'Hugo', 'Marin', 'Rodenas', 'Hugo_Marin5.gmail.com', '857584756', 78),
(79, '13.571.733-9', 'Hugo', 'Molina', 'Blazquez', 'Hugo_Molina9.gmail.com', '879387242', 79),
(80, '6.474.734-7', 'Dylan', 'Ortiz', 'Moreno', 'Dylan_Ortiz7.gmail.com', '774997232', 80),
(81, '8.581.733-7', 'Thiago', 'Cano', 'Garcia', 'Thiago_Cano7.gmail.com', '815944853', 81),
(82, '7.512.432-5', 'Liam', 'Perez', 'Blazquez', 'Liam_Perez5.gmail.com', '776838564', 82),
(83, '8.564.776-8', 'Gael', 'Fernandez', 'Romero', 'Gael_Fernandez8.gmail.com', '911564886', 83),
(84, '11.375.545-8', 'Mario', 'Blazquez', 'Jimenez', 'Mario_Blazquez8.gmail.com', '766159544', 84),
(85, '6.225.717-2', 'Adrian', 'Lozano', 'Cebrian', 'Adrian_Lozano2.gmail.com', '819472716', 85),
(86, '13.612.746-2', 'Isaac', 'Ortega', 'Gonzalez', 'Isaac_Ortega2.gmail.com', '643951439', 86),
(87, '6.811.186-2', 'Manuel', 'Hernandez', 'Munoz', 'Manuel_Hernandez2.gmail.com', '655334922', 87),
(88, '7.254.238-k', 'Rodrigo', 'Rubio', 'Castillo', 'Rodrigo_Rubiok.gmail.com', '679862882', 88),
(89, '8.333.515-7', 'Lucas', 'Navarro', 'Perez', 'Lucas_Navarro7.gmail.com', '988529119', 89),
(90, '7.272.748-7', 'Tomas', 'Corcoles', 'Valero', 'Tomas_Corcoles7.gmail.com', '875797753', 90),
(91, '11.161.623-k', 'Adrian', 'Torres', 'Corcoles', 'Adrian_Torresk.gmail.com', '695379781', 91),
(92, '11.865.214-2', 'Tomas', 'Molina', 'Collado', 'Tomas_Molina2.gmail.com', '923218786', 92),
(93, '6.543.375-3', 'Gael', 'Molina', 'Collado', 'Gael_Molina3.gmail.com', '643857931', 93),
(94, '11.362.188-5', 'Daniel', 'Ortega', 'Alarcon', 'Daniel_Ortega5.gmail.com', '663722896', 94),
(95, '7.483.428-0', 'Daniel', 'Rodriguez', 'Serrano', 'Daniel_Rodriguez0.gmail.com', '943448566', 95),
(96, '6.572.328-k', 'Rafael', 'Corcoles', 'Rubio', 'Rafael_Corcolesk.gmail.com', '834665982', 96),
(97, '6.264.448-6', 'Vicente', 'Ramirez', 'Tebar', 'Vicente_Ramirez6.gmail.com', '667614232', 97),
(98, '11.424.284-5', 'Vicente', 'Perez', 'Munoz', 'Vicente_Perez5.gmail.com', '676496562', 98),
(99, '12.127.262-8', 'Leo', 'Cano', 'Nunez', 'Leo_Cano8.gmail.com', '883858978', 99),
(100, '6.472.781-8', 'Adrian', 'Rodenas', 'Cano', 'Adrian_Rodenas8.gmail.com', '856936447', 100),
(101, '13.376.845-9', 'Manuel', 'Castillo', 'Moya', 'Manuel_Castillo9.gmail.com', '946173631', 101),
(102, '11.518.743-0', 'Mario', 'Diaz', 'Ballesteros', 'Mario_Diaz0.gmail.com', '911759176', 102),
(103, '7.325.587-2', 'Ian', 'Romero', 'Lopez', 'Ian_Romero2.gmail.com', '988971782', 103),
(104, '11.612.844-6', 'Lorenzo', 'Castillo', 'Moreno', 'Lorenzo_Castillo6.gmail.com', '825341481', 104),
(105, '11.356.426-1', 'Franco', 'Pardo', 'Ruiz', 'Franco_Pardo1.gmail.com', '955395588', 105),
(106, '7.463.766-3', 'Hugo', 'Romero', 'Moreno', 'Hugo_Romero3.gmail.com', '614414555', 106),
(107, '13.328.343-9', 'Rodrigo', 'Valero', 'Perez', 'Rodrigo_Valero9.gmail.com', '797262375', 107),
(108, '7.685.647-8', 'Jeronimo', 'Ballesteros', 'Jimenez', 'Jeronimo_Ballesteros8.gmail.com', '741592784', 108),
(109, '6.537.422-6', 'Rafael', 'Hernandez', 'Gil', 'Rafael_Hernandez6.gmail.com', '615645125', 109),
(110, '6.783.825-4', 'Aaron', 'Molina', 'Sanchez', 'Aaron_Molina4.gmail.com', '899476459', 110),
(111, '11.622.611-1', 'Aaron', 'Munoz', 'Gomez', 'Aaron_Munoz1.gmail.com', '628966946', 111),
(112, '7.381.745-5', 'Hugo', 'Moya', 'Castillo', 'Hugo_Moya5.gmail.com', '775669776', 112),
(113, '11.784.447-1', 'Lucas', 'Alfaro', 'Gomez', 'Lucas_Alfaro1.gmail.com', '694428392', 113),
(114, '8.862.868-3', 'Angel', 'Morcillo', 'Garcia', 'Angel_Morcillo3.gmail.com', '682693993', 114),
(115, '11.881.722-2', 'David', 'Ballesteros', 'Picazo', 'David_Ballesteros2.gmail.com', '717576331', 115),
(116, '11.234.587-6', 'Joaquin', 'Requena', 'Garrido', 'Joaquin_Requena6.gmail.com', '835463897', 116),
(117, '11.153.857-3', 'Tomas', 'Tebar', 'Gomez', 'Tomas_Tebar3.gmail.com', '632556756', 117),
(118, '7.738.177-5', 'Alex', 'Moya', 'Molina', 'Alex_Moya5.gmail.com', '731284239', 118),
(119, '6.116.618-1', 'Christopher', 'Moya', 'Ballesteros', 'Christopher_Moya1.gmail.com', '882739461', 119),
(120, '11.664.545-9', 'Franco', 'Garcia', 'Ballesteros', 'Franco_Garcia9.gmail.com', '672121844', 120),
(121, '11.486.435-8', 'Joaquin', 'Moreno', 'Sanchez', 'Joaquin_Moreno8.gmail.com', '639952137', 121),
(122, '7.577.635-7', 'Bautista', 'Saez', 'Valero', 'Bautista_Saez7.gmail.com', '936114538', 122),
(123, '7.785.187-9', 'Manuel', 'Cebrian', 'Saez', 'Manuel_Cebrian9.gmail.com', '655955889', 123),
(124, '12.837.151-6', 'Leonardo', 'Cuenca', 'Collado', 'Leonardo_Cuenca6.gmail.com', '848294429', 124),
(125, '8.773.186-3', 'Emiliano', 'Picazo', 'Molina', 'Emiliano_Picazo3.gmail.com', '934576564', 125),
(126, '11.512.727-6', 'Alex', 'Alarcon', 'Romero', 'Alex_Alarcon6.gmail.com', '734885444', 126),
(127, '12.276.445-1', 'Joaquin', 'Lozano', 'Valero', 'Joaquin_Lozano1.gmail.com', '644566289', 127),
(128, '8.683.877-k', 'Samuel', 'Gomez', 'Hernandez', 'Samuel_Gomezk.gmail.com', '738151996', 128),
(129, '7.751.242-k', 'Leonardo', 'Garrido', 'Gomez', 'Leonardo_Garridok.gmail.com', '754631744', 129),
(130, '11.144.337-8', 'Ian', 'Blazquez', 'Jimenez', 'Ian_Blazquez8.gmail.com', '737624166', 130),
(131, '7.225.841-k', 'Pablo', 'Lopez', 'Diaz', 'Pablo_Lopezk.gmail.com', '723575225', 131),
(132, '11.242.767-8', 'Thiago', 'Gil', 'Gil', 'Thiago_Gil8.gmail.com', '986291727', 132),
(133, '12.864.211-0', 'Dante', 'Cuenca', 'Collado', 'Dante_Cuenca0.gmail.com', '839271721', 133),
(134, '11.268.646-0', 'Rodrigo', 'Moreno', 'Navarro', 'Rodrigo_Moreno0.gmail.com', '731995385', 134),
(135, '13.338.112-0', 'Santino', 'Lopez', 'Fernandez', 'Santino_Lopez0.gmail.com', '796226546', 135),
(136, '13.565.554-6', 'Christopher', 'Corcoles', 'Garrido', 'Christopher_Corcoles6.gmail.com', '651783285', 136),
(137, '8.386.388-9', 'Ignacio', 'Castillo', 'Garrido', 'Ignacio_Castillo9.gmail.com', '676423839', 137),
(138, '11.856.248-8', 'Thiago', 'Collado', 'Calero', 'Thiago_Collado8.gmail.com', '724549765', 138),
(139, '12.435.547-8', 'Daniel', 'Valero', 'Ortiz', 'Daniel_Valero8.gmail.com', '659484453', 139),
(140, '7.714.817-5', 'Angel', 'Serrano', 'Requena', 'Angel_Serrano5.gmail.com', '711164688', 140),
(141, '12.233.215-2', 'Christopher', 'Jimenez', 'Ramirez', 'Christopher_Jimenez2.gmail.com', '688838434', 141),
(142, '7.156.238-7', 'Valentino', 'Lozano', 'Lopez', 'Valentino_Lozano7.gmail.com', '745844154', 142),
(143, '6.618.338-6', 'Alvaro', 'Molina', 'Cebrian', 'Alvaro_Molina6.gmail.com', '786757474', 143),
(144, '12.777.567-2', 'Dylan', 'Gomez', 'Jimenez', 'Dylan_Gomez2.gmail.com', '645148761', 144),
(145, '12.136.255-4', 'Carlos', 'Rubio', 'Gonzalez', 'Carlos_Rubio4.gmail.com', '728974938', 145),
(146, '7.547.255-2', 'Vicente', 'Gonzalez', 'Navarro', 'Vicente_Gonzalez2.gmail.com', '778798175', 146),
(147, '6.377.232-1', 'Liam', 'Ortiz', 'Munoz', 'Liam_Ortiz1.gmail.com', '834115227', 147),
(148, '7.872.626-1', 'Joaquin', 'Munoz', 'Alarcon', 'Joaquin_Munoz1.gmail.com', '695925958', 148),
(149, '13.455.723-0', 'Agustin', 'Garrido', 'Picazo', 'Agustin_Garrido0.gmail.com', '755671553', 149),
(150, '8.658.137-k', 'Gabriel', 'Martinez', 'Munoz', 'Gabriel_Martinezk.gmail.com', '665111294', 150);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_compania`
--

CREATE TABLE `datos_compania` (
  `ID_Compania` int(11) NOT NULL,
  `Razon_Social` varchar(32) DEFAULT NULL,
  `Rut` varchar(10) NOT NULL,
  `ID_Direccion` int(11) NOT NULL,
  `Telefono` varchar(12) DEFAULT NULL,
  `Fax` varchar(12) DEFAULT NULL,
  `ID_Membrete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos_compania`
--

INSERT INTO `datos_compania` (`ID_Compania`, `Razon_Social`, `Rut`, `ID_Direccion`, `Telefono`, `Fax`, `ID_Membrete`) VALUES
(1, 'Los CasYs ltda.', '984854-5', 1, '3743948', '299 456678', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_comprador`
--

CREATE TABLE `datos_comprador` (
  `ID_Comprador` int(11) NOT NULL,
  `Razon_Social` varchar(32) DEFAULT NULL,
  `ID_Datos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos_comprador`
--

INSERT INTO `datos_comprador` (`ID_Comprador`, `Razon_Social`, `ID_Datos`) VALUES
(1, 'comprador1', 101),
(2, 'comprador2', 102),
(3, 'comprador3', 103),
(4, 'comprador4', 104),
(5, 'comprador5', 105),
(6, 'comprador6', 106),
(7, 'comprador7', 107),
(8, 'comprador8', 108),
(9, 'comprador9', 109),
(10, 'comprador10', 110),
(11, 'comprador11', 111),
(12, 'comprador12', 112),
(13, 'comprador13', 113),
(14, 'comprador14', 114),
(15, 'comprador15', 115),
(16, 'comprador16', 116),
(17, 'comprador17', 117),
(18, 'comprador18', 118),
(19, 'comprador19', 119),
(20, 'comprador20', 120),
(21, 'comprador21', 121),
(22, 'comprador22', 122),
(23, 'comprador23', 123),
(24, 'comprador24', 124),
(25, 'comprador25', 125),
(26, 'comprador26', 126),
(27, 'comprador27', 127),
(28, 'comprador28', 128),
(29, 'comprador29', 129),
(30, 'comprador30', 130),
(31, 'comprador31', 131),
(32, 'comprador32', 132),
(33, 'comprador33', 133),
(34, 'comprador34', 134),
(35, 'comprador35', 135),
(36, 'comprador36', 136),
(37, 'comprador37', 137),
(38, 'comprador38', 138),
(39, 'comprador39', 139),
(40, 'comprador40', 140),
(41, 'comprador41', 141),
(42, 'comprador42', 142),
(43, 'comprador43', 143),
(44, 'comprador44', 144),
(45, 'comprador45', 145),
(46, 'comprador46', 146),
(47, 'comprador47', 147),
(48, 'comprador48', 148),
(49, 'comprador49', 149),
(50, 'comprador50', 150);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `ID_Direccion` int(11) NOT NULL,
  `Direccion` varchar(32) DEFAULT NULL,
  `Nombre_Local` varchar(32) DEFAULT NULL,
  `ID_Comuna` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `direccion`
--

INSERT INTO `direccion` (`ID_Direccion`, `Direccion`, `Nombre_Local`, `ID_Comuna`) VALUES
(1, 'Gral. Vicente Moreno N 54', 'local1', 11),
(2, 'Gral. Pablo Ruiz N 01', 'local2', 47),
(3, 'Gral. Lucas Valero N 32', 'local3', 40),
(4, 'Gral. Vicente Rodriguez N 54', 'local4', 31),
(5, 'Gral. Leo Gonzalez N 03', 'local5', 37),
(6, 'Gral. Manuel Perez N 62', 'local6', 0),
(7, 'Gral. Dylan Corcoles N 16', 'local7', 32),
(8, 'Gral. Marcos Ortega N 00', 'local8', 49),
(9, 'Gral. Agustin Alarcon N 70', 'local9', 13),
(10, 'Gral. Jeronimo Molina N 55', 'local10', 27),
(11, 'Gral. Ignacio Navarro N 63', 'local11', 9),
(12, 'Gral. Gabriel Collado N 47', 'local12', 36),
(13, 'Gral. Manuel Hernandez N 38', 'local13', 9),
(14, 'Gral. Liam Munoz N 71', 'local14', 12),
(15, 'Gral. Agustin Rodenas N 83', 'local15', 4),
(16, 'Gral. Aaron Gonzalez N 83', 'local16', 17),
(17, 'Gral. Bautista Ramirez N 20', 'local17', 11),
(18, 'Gral. Manuel Ballesteros N 65', 'local18', 12),
(19, 'Gral. Santino Ramirez N 33', 'local19', 33),
(20, 'Gral. Aaron Rodriguez N 08', 'local20', 21),
(21, 'Gral. Mario Cebrian N 14', 'local21', 3),
(22, 'Gral. Gabriel Torres N 02', 'local22', 29),
(23, 'Gral. Vicente Valero N 45', 'local23', 7),
(24, 'Gral. Jeronimo Ballesteros N 88', 'local24', 18),
(25, 'Gral. Alonso Fernandez N 41', 'local25', 44),
(26, 'Gral. Jeronimo Ortiz N 86', 'local26', 13),
(27, 'Gral. Aaron Gonzalez N 74', 'local27', 48),
(28, 'Gral. Angel Lozano N 68', 'local28', 25),
(29, 'Gral. Leo Corcoles N 33', 'local29', 19),
(30, 'Gral. Ian Ruiz N 36', 'local30', 22),
(31, 'Gral. Manuel Torres N 85', 'local31', 42),
(32, 'Gral. Maximiliano Garcia N 04', 'local32', 5),
(33, 'Gral. Marcos Collado N 03', 'local33', 23),
(34, 'Gral. Marcos Ruiz N 87', 'local34', 34),
(35, 'Gral. Liam Corcoles N 53', 'local35', 4),
(36, 'Gral. David Moya N 41', 'local36', 46),
(37, 'Gral. Marcos Ortega N 17', 'local37', 20),
(38, 'Gral. Francisco Ruiz N 81', 'local38', 28),
(39, 'Gral. David Molina N 86', 'local39', 22),
(40, 'Gral. Gabriel Cuenca N 85', 'local40', 45),
(41, 'Gral. Vicente Rubio N 53', 'local41', 10),
(42, 'Gral. Lucas Cebrian N 27', 'local42', 43),
(43, 'Gral. Hugo Ballesteros N 50', 'local43', 22),
(44, 'Gral. Jeronimo Rubio N 87', 'local44', 17),
(45, 'Gral. Felipe Jimenez N 13', 'local45', 8),
(46, 'Gral. Gael Martinez N 23', 'local46', 36),
(47, 'Gral. Juan Pablo Gomez N 22', 'local47', 43),
(48, 'Gral. Gael Ruiz N 76', 'local48', 39),
(49, 'Gral. Gabriel Marin N 12', 'local49', 7),
(50, 'Gral. Juan Pablo Blazquez N 77', 'local50', 39),
(51, 'Gral. Emiliano Pardo N 36', 'local51', 41),
(52, 'Gral. Emiliano Gonzalez N 42', 'local52', 7),
(53, 'Gral. Liam Romero N 61', 'local53', 40),
(54, 'Gral. Dylan Cuenca N 38', 'local54', 18),
(55, 'Gral. Christopher Picazo N 26', 'local55', 41),
(56, 'Gral. Valentino Collado N 45', 'local56', 41),
(57, 'Gral. Iker Pardo N 77', 'local57', 47),
(58, 'Gral. Mario Requena N 30', 'local58', 19),
(59, 'Gral. Samuel Cuenca N 60', 'local59', 12),
(60, 'Gral. Joaquin Pardo N 05', 'local60', 25),
(61, 'Gral. Bruno Cano N 33', 'local61', 38),
(62, 'Gral. Felipe Fernandez N 76', 'local62', 10),
(63, 'Gral. Iker Diaz N 40', 'local63', 47),
(64, 'Gral. Liam Rodriguez N 54', 'local64', 42),
(65, 'Gral. Iker Serrano N 54', 'local65', 18),
(66, 'Gral. Thiago Saez N 52', 'local66', 17),
(67, 'Gral. Gael Lopez N 51', 'local67', 26),
(68, 'Gral. Felipe Navarro N 28', 'local68', 38),
(69, 'Gral. Rodrigo Lozano N 37', 'local69', 46),
(70, 'Gral. Samuel Cebrian N 10', 'local70', 10),
(71, 'Gral. Vicente Garcia N 08', 'local71', 43),
(72, 'Gral. Isaac Gomez N 03', 'local72', 18),
(73, 'Gral. Juan Pablo Gomez N 53', 'local73', 4),
(74, 'Gral. Thiago Cano N 67', 'local74', 17),
(75, 'Gral. Luca Alfaro N 33', 'local75', 37),
(76, 'Gral. Lorenzo Ortega N 20', 'local76', 11),
(77, 'Gral. Emiliano Ballesteros N 04', 'local77', 39),
(78, 'Gral. Aaron Ortega N 87', 'local78', 18),
(79, 'Gral. Luca Ortiz N 58', 'local79', 25),
(80, 'Gral. Adrian Diaz N 88', 'local80', 13),
(81, 'Gral. Joaquin Alarcon N 84', 'local81', 49),
(82, 'Gral. Samuel Lopez N 01', 'local82', 11),
(83, 'Gral. Emiliano Moya N 57', 'local83', 1),
(84, 'Gral. Manuel Ruiz N 68', 'local84', 35),
(85, 'Gral. Agustin Collado N 02', 'local85', 38),
(86, 'Gral. Thiago Alarcon N 60', 'local86', 7),
(87, 'Gral. Leo Alarcon N 67', 'local87', 47),
(88, 'Gral. Felipe Diaz N 06', 'local88', 30),
(89, 'Gral. Bruno Saez N 80', 'local89', 27),
(90, 'Gral. Vicente Calero N 63', 'local90', 2),
(91, 'Gral. Liam Ramirez N 67', 'local91', 30),
(92, 'Gral. Lorenzo Calero N 40', 'local92', 44),
(93, 'Gral. Isaac Fernandez N 08', 'local93', 24),
(94, 'Gral. Leo Valero N 02', 'local94', 30),
(95, 'Gral. Hugo Blazquez N 18', 'local95', 45),
(96, 'Gral. Samuel Castillo N 52', 'local96', 32),
(97, 'Gral. Adrian Rodriguez N 28', 'local97', 21),
(98, 'Gral. Valentino Rodenas N 14', 'local98', 4),
(99, 'Gral. Lorenzo Martinez N 67', 'local99', 24),
(100, 'Gral. Rafael Rubio N 27', 'local100', 19),
(101, 'Gral. Gael Rubio N 03', 'local101', 20),
(102, 'Gral. Jeronimo Blazquez N 02', 'local102', 22),
(103, 'Gral. Isaac Ortega N 00', 'local103', 46),
(104, 'Gral. Adrian Gomez N 41', 'local104', 32),
(105, 'Gral. Angel Sanchez N 50', 'local105', 45),
(106, 'Gral. Adrian Rubio N 78', 'local106', 46),
(107, 'Gral. Jeronimo Garrido N 86', 'local107', 42),
(108, 'Gral. Bautista Picazo N 21', 'local108', 7),
(109, 'Gral. Pedro Moreno N 21', 'local109', 26),
(110, 'Gral. Samuel Garrido N 06', 'local110', 28),
(111, 'Gral. Alex Garrido N 88', 'local111', 29),
(112, 'Gral. Rodrigo Pardo N 56', 'local112', 4),
(113, 'Gral. Vicente Rubio N 23', 'local113', 36),
(114, 'Gral. Alex Tebar N 08', 'local114', 26),
(115, 'Gral. Gabriel Hernandez N 62', 'local115', 45),
(116, 'Gral. Alonso Sanchez N 52', 'local116', 17),
(117, 'Gral. Francisco Requena N 55', 'local117', 4),
(118, 'Gral. Rafael Jimenez N 06', 'local118', 29),
(119, 'Gral. Christopher Molina N 27', 'local119', 1),
(120, 'Gral. Bruno Requena N 06', 'local120', 8),
(121, 'Gral. Thiago Jimenez N 61', 'local121', 45),
(122, 'Gral. Agustin Cuenca N 27', 'local122', 43),
(123, 'Gral. Dante Rodenas N 54', 'local123', 45),
(124, 'Gral. Rafael Sanchez N 67', 'local124', 18),
(125, 'Gral. Bruno Garcia N 73', 'local125', 8),
(126, 'Gral. Thiago Alfaro N 14', 'local126', 18),
(127, 'Gral. Leonardo Ramirez N 24', 'local127', 48),
(128, 'Gral. Rafael Ballesteros N 77', 'local128', 14),
(129, 'Gral. Felipe Ballesteros N 06', 'local129', 7),
(130, 'Gral. Pablo Picazo N 61', 'local130', 5),
(131, 'Gral. Manuel Tebar N 87', 'local131', 19),
(132, 'Gral. Emiliano Nunez N 65', 'local132', 21),
(133, 'Gral. Dylan Valero N 46', 'local133', 19),
(134, 'Gral. Santino Requena N 86', 'local134', 40),
(135, 'Gral. Maximiliano Rubio N 03', 'local135', 47),
(136, 'Gral. Agustin Calero N 63', 'local136', 4),
(137, 'Gral. Gael Hernandez N 68', 'local137', 36),
(138, 'Gral. Marcos Romero N 70', 'local138', 9),
(139, 'Gral. Rafael Martinez N 88', 'local139', 3),
(140, 'Gral. Franco Diaz N 12', 'local140', 3),
(141, 'Gral. Christopher Castillo N 16', 'local141', 20),
(142, 'Gral. Alonso Ruiz N 05', 'local142', 28),
(143, 'Gral. Marcos Garcia N 58', 'local143', 46),
(144, 'Gral. Rafael Cuenca N 82', 'local144', 4),
(145, 'Gral. Alonso Perez N 20', 'local145', 11),
(146, 'Gral. Mario Tebar N 66', 'local146', 16),
(147, 'Gral. Santino Collado N 44', 'local147', 11),
(148, 'Gral. Aaron Saez N 00', 'local148', 11),
(149, 'Gral. Christopher Gomez N 65', 'local149', 36),
(150, 'Gral. Angel Ortega N 23', 'local150', 46);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento`
--

CREATE TABLE `documento` (
  `ID_Doc` int(11) NOT NULL,
  `Descripcion` varchar(256) DEFAULT NULL,
  `ID_Archivo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `documento`
--

INSERT INTO `documento` (`ID_Doc`, `Descripcion`, `ID_Archivo`) VALUES
(1, 'documento1', 1),
(2, 'documento2', 2),
(3, 'documento3', 3),
(4, 'documento4', 4),
(5, 'documento5', 5),
(6, 'documento6', 6),
(7, 'documento7', 7),
(8, 'documento8', 8),
(9, 'documento9', 9),
(10, 'documento10', 10),
(11, 'documento11', 11),
(12, 'documento12', 12),
(13, 'documento13', 13),
(14, 'documento14', 14),
(15, 'documento15', 15),
(16, 'documento16', 16),
(17, 'documento17', 17),
(18, 'documento18', 18),
(19, 'documento19', 19),
(20, 'documento20', 20),
(21, 'documento21', 21),
(22, 'documento22', 22),
(23, 'documento23', 23),
(24, 'documento24', 24),
(25, 'documento25', 25),
(26, 'documento26', 26),
(27, 'documento27', 27),
(28, 'documento28', 28),
(29, 'documento29', 29),
(30, 'documento30', 30),
(31, 'documento31', 31),
(32, 'documento32', 32),
(33, 'documento33', 33),
(34, 'documento34', 34),
(35, 'documento35', 35),
(36, 'documento36', 36),
(37, 'documento37', 37),
(38, 'documento38', 38),
(39, 'documento39', 39),
(40, 'documento40', 40),
(41, 'documento41', 41),
(42, 'documento42', 42),
(43, 'documento43', 43),
(44, 'documento44', 44),
(45, 'documento45', 45),
(46, 'documento46', 46),
(47, 'documento47', 47),
(48, 'documento48', 48),
(49, 'documento49', 49),
(50, 'documento50', 50),
(51, 'documento51', 51),
(52, 'documento52', 52),
(53, 'documento53', 53),
(54, 'documento54', 54),
(55, 'documento55', 55),
(56, 'documento56', 56),
(57, 'documento57', 57),
(58, 'documento58', 58),
(59, 'documento59', 59),
(60, 'documento60', 60),
(61, 'documento61', 61),
(62, 'documento62', 62),
(63, 'documento63', 63),
(64, 'documento64', 64),
(65, 'documento65', 65),
(66, 'documento66', 66),
(67, 'documento67', 67),
(68, 'documento68', 68),
(69, 'documento69', 69),
(70, 'documento70', 70),
(71, 'documento71', 71),
(72, 'documento72', 72),
(73, 'documento73', 73),
(74, 'documento74', 74),
(75, 'documento75', 75),
(76, 'documento76', 76),
(77, 'documento77', 77),
(78, 'documento78', 78),
(79, 'documento79', 79),
(80, 'documento80', 80),
(81, 'documento81', 81),
(82, 'documento82', 82),
(83, 'documento83', 83),
(84, 'documento84', 84),
(85, 'documento85', 85),
(86, 'documento86', 86),
(87, 'documento87', 87),
(88, 'documento88', 88),
(89, 'documento89', 89),
(90, 'documento90', 90),
(91, 'documento91', 91),
(92, 'documento92', 92),
(93, 'documento93', 93),
(94, 'documento94', 94),
(95, 'documento95', 95),
(96, 'documento96', 96),
(97, 'documento97', 97),
(98, 'documento98', 98),
(99, 'documento99', 99),
(100, 'documento100', 100),
(101, 'documento101', 101),
(102, 'documento102', 102),
(103, 'documento103', 103),
(104, 'documento104', 104),
(105, 'documento105', 105),
(106, 'documento106', 106),
(107, 'documento107', 107),
(108, 'documento108', 108),
(109, 'documento109', 109),
(110, 'documento110', 110),
(111, 'documento111', 111),
(112, 'documento112', 112),
(113, 'documento113', 113),
(114, 'documento114', 114),
(115, 'documento115', 115),
(116, 'documento116', 116),
(117, 'documento117', 117),
(118, 'documento118', 118),
(119, 'documento119', 119),
(120, 'documento120', 120),
(121, 'documento121', 121),
(122, 'documento122', 122),
(123, 'documento123', 123),
(124, 'documento124', 124),
(125, 'documento125', 125),
(126, 'documento126', 126),
(127, 'documento127', 127),
(128, 'documento128', 128),
(129, 'documento129', 129),
(130, 'documento130', 130),
(131, 'documento131', 131),
(132, 'documento132', 132),
(133, 'documento133', 133),
(134, 'documento134', 134),
(135, 'documento135', 135),
(136, 'documento136', 136),
(137, 'documento137', 137),
(138, 'documento138', 138),
(139, 'documento139', 139),
(140, 'documento140', 140),
(141, 'documento141', 141),
(142, 'documento142', 142),
(143, 'documento143', 143),
(144, 'documento144', 144),
(145, 'documento145', 145),
(146, 'documento146', 146),
(147, 'documento147', 147),
(148, 'documento148', 148),
(149, 'documento149', 149),
(150, 'documento150', 150);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `ID_Factura` int(11) NOT NULL,
  `Fecha_Emision` date DEFAULT NULL,
  `ID_Comprador` int(11) DEFAULT NULL,
  `ID_Compania` int(11) NOT NULL,
  `Condiciones_de_Venta` varchar(128) DEFAULT NULL,
  `Giro_Actividad` varchar(32) DEFAULT NULL,
  `Anulada` tinyint(1) DEFAULT NULL,
  `ID_Doc` int(11) DEFAULT NULL,
  `ID_total_compras` int(10) NOT NULL,
  `ID_login_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`ID_Factura`, `Fecha_Emision`, `ID_Comprador`, `ID_Compania`, `Condiciones_de_Venta`, `Giro_Actividad`, `Anulada`, `ID_Doc`, `ID_total_compras`, `ID_login_usuario`) VALUES
(1, '2007-08-11', NULL, 1, ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que e', 'CULTIVO DE TRIGO', 1, 51, 51, 6),
(2, '2003-08-14', NULL, 1, ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que e', 'CULTIVO DE AVENA	', 0, 52, 52, 32),
(3, '2002-07-21', NULL, 1, ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que e', 'CULTIVO, PRODUCCION DE LUPINO', 1, 53, 53, 44),
(4, '2001-05-18', NULL, 1, ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que e', 'CULTIVO DE TRIGO', 0, 54, 54, 3),
(5, '2005-07-08', NULL, 1, ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que e', 'CULTIVO DE CEBADA', 1, 55, 55, 38),
(6, '2010-06-19', NULL, 1, ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que e', 'CULTIVO FORRAJEROS EN PRADERAS N', 0, 56, 56, 41),
(7, '2008-10-10', NULL, 1, ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que e', 'CULTIVO DE MAIZ	', 1, 57, 57, 3),
(8, '2007-03-09', NULL, 1, ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que e', 'CULTIVO DE OTROS CEREALES', 1, 58, 58, 31),
(9, '2009-09-11', NULL, 1, ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que e', 'CULTIVO DE POROTOS O FRIJOL', 1, 59, 59, 35),
(10, '2001-02-01', NULL, 1, ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que e', 'CULTIVO DE CEBADA', 1, 60, 60, 29),
(11, '2013-06-21', NULL, 1, ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que e', 'CULTIVO DE OTROS CEREALES', 1, 61, 61, 25),
(12, '2003-02-21', NULL, 1, ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que e', 'CULTIVO DE MAIZ	', 1, 62, 62, 40),
(13, '2000-07-08', NULL, 1, ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que e', 'CULTIVO FORRAJEROS EN PRADERAS M', 1, 63, 63, 41),
(14, '2002-01-26', NULL, 1, ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que e', 'CULTIVO DE ARROZ	', 1, 64, 64, 49),
(15, '2011-05-06', NULL, 1, ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que e', 'CULTIVO DE OTRAS LEGUMBRES	', 1, 65, 65, 34),
(16, '2009-01-11', NULL, 1, ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que e', 'CULTIVO DE MAIZ	', 0, 66, 66, 38),
(17, '2013-06-24', NULL, 1, ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que e', 'CULTIVO DE OTRAS LEGUMBRES	', 0, 67, 67, 45),
(18, '2006-01-09', NULL, 1, ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que e', 'CULTIVO DE TRIGO', 0, 68, 68, 47),
(19, '2013-07-27', NULL, 1, ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que e', 'CULTIVO DE MAIZ	', 0, 69, 69, 22),
(20, '2005-06-02', NULL, 1, ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que e', 'CULTIVO FORRAJEROS EN PRADERAS M', 0, 70, 70, 45),
(21, '2009-08-20', NULL, 1, ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que e', 'CULTIVO DE AVENA	', 1, 71, 71, 2),
(22, '2002-08-03', NULL, 1, ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que e', 'CULTIVO DE TRIGO', 1, 72, 72, 50),
(23, '2011-05-20', NULL, 1, ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que e', 'CULTIVO DE OTRAS LEGUMBRES	', 1, 73, 73, 26),
(24, '2005-03-13', NULL, 1, ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que e', 'CULTIVO DE POROTOS O FRIJOL', 1, 74, 74, 25),
(25, '2012-02-09', NULL, 1, ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que e', 'CULTIVO FORRAJEROS EN PRADERAS M', 1, 75, 75, 47),
(26, '2011-03-26', NULL, 1, ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que e', 'CULTIVO DE CEBADA', 1, 76, 76, 11),
(27, '2011-08-09', NULL, 1, ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que e', 'CULTIVO DE ARROZ	', 0, 77, 77, 8),
(28, '2004-03-05', NULL, 1, ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que e', 'CULTIVO DE POROTOS O FRIJOL', 1, 78, 78, 3),
(29, '2002-07-20', NULL, 1, ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que e', 'CULTIVO DE CEBADA', 0, 79, 79, 10),
(30, '2005-02-07', NULL, 1, ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que e', 'CULTIVO DE OTROS CEREALES', 1, 80, 80, 11),
(31, '2009-10-06', NULL, 1, ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que e', 'CULTIVO DE TRIGO', 1, 81, 81, 42),
(32, '2010-02-02', NULL, 1, ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que e', 'CULTIVO, PRODUCCION DE LUPINO', 1, 82, 82, 9),
(33, '2001-01-19', NULL, 1, ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que e', 'CULTIVO FORRAJEROS EN PRADERAS N', 0, 83, 83, 49),
(34, '2014-01-15', NULL, 1, ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que e', 'CULTIVO DE OTRAS LEGUMBRES	', 1, 84, 84, 16),
(35, '2009-05-17', NULL, 1, ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que e', 'CULTIVO DE AVENA	', 1, 85, 85, 4),
(36, '2008-07-19', NULL, 1, ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que e', 'CULTIVO DE ARROZ	', 1, 86, 86, 43),
(37, '2006-05-01', NULL, 1, ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que e', 'CULTIVO DE OTROS CEREALES', 1, 87, 87, 5),
(38, '2004-01-03', NULL, 1, ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que e', 'CULTIVO DE MAIZ	', 0, 88, 88, 29),
(39, '2011-10-05', NULL, 1, ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que e', 'CULTIVO DE AVENA	', 0, 89, 89, 18),
(40, '2010-04-16', NULL, 1, ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que e', 'CULTIVO FORRAJEROS EN PRADERAS M', 0, 90, 90, 24),
(41, '2003-10-23', NULL, 1, ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que e', 'CULTIVO DE PAPAS	', 0, 91, 91, 47),
(42, '2000-07-18', NULL, 1, ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que e', 'CULTIVO DE MAIZ	', 1, 92, 92, 16),
(43, '2011-06-27', NULL, 1, ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que e', 'CULTIVO DE AVENA	', 1, 93, 93, 42),
(44, '2003-10-27', NULL, 1, ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que e', 'CULTIVO DE ARROZ	', 0, 94, 94, 24),
(45, '2010-02-15', NULL, 1, ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que e', 'CULTIVO DE TRIGO', 0, 95, 95, 6),
(46, '2006-05-18', NULL, 1, ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que e', 'CULTIVO FORRAJEROS EN PRADERAS N', 0, 96, 96, 38),
(47, '2011-04-09', NULL, 1, ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que e', 'CULTIVO FORRAJEROS EN PRADERAS N', 1, 97, 97, 42),
(48, '2010-01-27', NULL, 1, ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que e', 'CULTIVO DE POROTOS O FRIJOL', 0, 98, 98, 29),
(49, '2013-10-04', NULL, 1, ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que e', 'CULTIVO FORRAJEROS EN PRADERAS N', 1, 99, 99, 29),
(50, '2001-09-26', NULL, 1, ' Fuerza Mayor significa a los efectos del presente contrato la existencia de cualquier contingencia, circunstancia o causa que e', 'CULTIVO DE MAIZ	', 0, 100, 100, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `ID_Inve` int(11) NOT NULL,
  `ID_Categoria` int(11) DEFAULT NULL,
  `Descripcion` varchar(256) DEFAULT NULL,
  `Costo_Unitario` int(11) DEFAULT NULL,
  `Fecha_Entrada` date DEFAULT NULL,
  `Fecha_Salida` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`ID_Inve`, `ID_Categoria`, `Descripcion`, `Costo_Unitario`, `Fecha_Entrada`, `Fecha_Salida`) VALUES
(1, 6, 'inventario1', 44073, '2012-10-27', NULL),
(2, 1, 'inventario2', 18518, '2005-02-06', NULL),
(3, 8, 'inventario3', 79461, '2014-06-09', NULL),
(4, 3, 'inventario4', 31453, '2003-04-24', NULL),
(5, 6, 'inventario5', 23187, '2010-07-26', NULL),
(6, 6, 'inventario6', 33123, '2000-06-06', NULL),
(7, 6, 'inventario7', 73824, '2005-03-23', NULL),
(8, 8, 'inventario8', 89845, '2004-10-11', NULL),
(9, 4, 'inventario9', 40023, '2014-08-03', NULL),
(10, 8, 'inventario10', 7829, '2004-01-03', NULL),
(11, 3, 'inventario11', 35970, '2001-09-28', NULL),
(12, 1, 'inventario12', 54197, '2005-05-05', NULL),
(13, 1, 'inventario13', 98051, '2000-03-09', NULL),
(14, 4, 'inventario14', 40776, '2006-07-09', NULL),
(15, 7, 'inventario15', 17453, '2014-08-05', NULL),
(16, 5, 'inventario16', 83290, '2007-10-23', NULL),
(17, 1, 'inventario17', 676, '2002-01-28', NULL),
(18, 2, 'inventario18', 39419, '2000-05-20', NULL),
(19, 7, 'inventario19', 94796, '2004-02-02', NULL),
(20, 7, 'inventario20', 5048, '2005-07-12', NULL),
(21, 5, 'inventario21', 56507, '2008-03-25', NULL),
(22, 4, 'inventario22', 94389, '2012-02-06', NULL),
(23, 6, 'inventario23', 54784, '2010-05-19', NULL),
(24, 4, 'inventario24', 26440, '2008-06-25', NULL),
(25, 3, 'inventario25', 27100, '2004-08-14', NULL),
(26, 6, 'inventario26', 52502, '2004-02-03', NULL),
(27, 1, 'inventario27', 35265, '2008-09-13', NULL),
(28, 2, 'inventario28', 21966, '2006-10-02', NULL),
(29, 2, 'inventario29', 47237, '2012-10-05', NULL),
(30, 6, 'inventario30', 27743, '2011-09-23', NULL),
(31, 2, 'inventario31', 54007, '2013-07-09', NULL),
(32, 5, 'inventario32', 76419, '2005-05-28', NULL),
(33, 1, 'inventario33', 10347, '2013-06-26', NULL),
(34, 7, 'inventario34', 28082, '2000-09-09', NULL),
(35, 7, 'inventario35', 58502, '2004-05-17', NULL),
(36, 5, 'inventario36', 8093, '2006-08-22', NULL),
(37, 3, 'inventario37', 18852, '2005-05-06', NULL),
(38, 6, 'inventario38', 86489, '2013-06-16', NULL),
(39, 3, 'inventario39', 29166, '2010-10-12', NULL),
(40, 7, 'inventario40', 38803, '2003-03-05', NULL),
(41, 6, 'inventario41', 27680, '2007-04-06', NULL),
(42, 2, 'inventario42', 18038, '2003-06-22', NULL),
(43, 7, 'inventario43', 36486, '2008-01-10', NULL),
(44, 8, 'inventario44', 35592, '2011-01-26', NULL),
(45, 4, 'inventario45', 95690, '2011-08-06', NULL),
(46, 4, 'inventario46', 45500, '2012-10-20', NULL),
(47, 4, 'inventario47', 72464, '2007-05-05', NULL),
(48, 2, 'inventario48', 94734, '2008-05-15', NULL),
(49, 2, 'inventario49', 53703, '2006-06-18', NULL),
(50, 6, 'inventario50', 8628, '2009-02-03', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_usuario`
--

CREATE TABLE `login_usuario` (
  `ID_L` int(11) NOT NULL,
  `Nombre_Cuenta` varchar(32) DEFAULT NULL,
  `Contrasena` varchar(32) DEFAULT NULL,
  `Tipo` int(1) DEFAULT NULL,
  `Estado` int(1) DEFAULT NULL,
  `ID_Datos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login_usuario`
--

INSERT INTO `login_usuario` (`ID_L`, `Nombre_Cuenta`, `Contrasena`, `Tipo`, `Estado`, `ID_Datos`) VALUES
(1, 'Lucas_Fernandez', '8a9b9949f67acd8bcfdea808ef464851', 2, 0, 1),
(2, 'Gael_Valero', '8a7fbfbb03308f5e8ff4ecea1b80d561', 2, 0, 2),
(3, 'Felipe_Sanchez', '5e4f5f9dcb97db3bf3c9093f518fade4', 1, 0, 3),
(4, 'Ignacio_Lozano', '3c31a642927cf90adfce8e94bc3ab80e', 1, 0, 4),
(5, 'Francisco_Gonzalez', '551898bddbaf1285c67adc6b2f6d8ffb', 1, 0, 5),
(6, 'Thiago_Ramirez', '08011326e9c1b2a00c3391948b1e8442', 2, 0, 6),
(7, 'Hugo_Morcillo', '0a4c05f844994e3018a1446c73b3fd49', 1, 0, 7),
(8, 'Felipe_Torres', '97867a7be95733d1e0f8dd9e6400d509', 2, 0, 8),
(9, 'Leonardo_Navarro', '3e738d48b1ea27eef2dcdd7bdb33e46a', 2, 0, 9),
(10, 'Marcos_Garcia', 'e445d2a2bca5c18d252e5853e18cb4bb', 1, 0, 10),
(11, 'Iker_Perez', 'cb325c9cfac8d9c0a8f4a19ca2a2745b', 1, 0, 11),
(12, 'Dante_Munoz', 'be493cc92f981c39a246be2d08de6478', 2, 0, 12),
(13, 'Iker_Torres', '0a4c05f844994e3018a1446c73b3fd49', 2, 0, 13),
(14, 'Joaquin_Ortega', '95d9c496544e559e9a5b254fc0c55999', 1, 0, 14),
(15, 'Agustin_Ballesteros', '56c1050afedc32998d724ce865097ab9', 2, 0, 15),
(16, 'Hugo_Alfaro', '4b8ecf40ca5cf56b894bc522e794830a', 1, 0, 16),
(17, 'Iker_Pardo', 'cb325c9cfac8d9c0a8f4a19ca2a2745b', 2, 0, 17),
(18, 'Mario_Nunez', '014556d2553af9f9b7d62a9e13b14e68', 2, 0, 18),
(19, 'Daniel_Romero', 'e310e4a6abc078cded1db6e0dbd77433', 2, 0, 19),
(20, 'Felipe_Requena', '9a0a992b75c4e5262b570f5ccbba507d', 1, 0, 20),
(21, 'Tomas_Lopez', 'dd1f532c6b7ab2b9742af79b4966c859', 2, 0, 21),
(22, 'Mario_Saez', '7013dd8caf235788ddedee06ff8ad0ed', 1, 0, 22),
(23, 'Carlos_Ortega', '8a7fbfbb03308f5e8ff4ecea1b80d561', 1, 0, 23),
(24, 'Dylan_Requena', '014556d2553af9f9b7d62a9e13b14e68', 1, 0, 24),
(25, 'Marcos_Garrido', '387316d0d18d75aefa50ad1cadc39742', 2, 0, 25),
(26, 'Aaron_Blazquez', '6e59674c42d92fa0d083b3642e048833', 2, 0, 26),
(27, 'Leo_Sanchez', '87fda93ab58d7443a9355f298ce7c696', 1, 0, 27),
(28, 'Leo_Morcillo', '8a9b9949f67acd8bcfdea808ef464851', 2, 0, 28),
(29, 'Pedro_Molina', '8a9b9949f67acd8bcfdea808ef464851', 2, 0, 29),
(30, 'Rodrigo_Gomez', 'f277193538277f1ced756dac3f942af6', 1, 0, 30),
(31, 'Adrian_Blazquez', '0edfd99ad72057d07ca45e03a385bc65', 1, 0, 31),
(32, 'Thiago_Gonzalez', '5e4f5f9dcb97db3bf3c9093f518fade4', 2, 0, 32),
(33, 'Lucas_Molina', '3c31a642927cf90adfce8e94bc3ab80e', 1, 0, 33),
(34, 'Rafael_Cebrian', '8a7fbfbb03308f5e8ff4ecea1b80d561', 1, 0, 34),
(35, 'Ian_Rodenas', '4c5b61832f61fdbe8af093a2e8a5f0c6', 2, 0, 35),
(36, 'Emiliano_Marin', '325ba0be16b1db8711e860e8d0c91542', 2, 0, 36),
(37, 'Luca_Morcillo', '921743c94661e11a3705e08aa1654c97', 2, 0, 37),
(38, 'Rodrigo_Garrido', '8dcd0915302cad6907410a92b55ec6e2', 1, 0, 38),
(39, 'Luca_Lozano', 'cef7fe36d58e07ec7c18b532f11de3e1', 1, 0, 39),
(40, 'Iker_Cebrian', '4b8ecf40ca5cf56b894bc522e794830a', 1, 0, 40),
(41, 'Alex_Moreno', 'f277193538277f1ced756dac3f942af6', 1, 0, 41),
(42, 'Marcos_Alfaro', '6e59674c42d92fa0d083b3642e048833', 1, 0, 42),
(43, 'Gabriel_Lozano', 'e445d2a2bca5c18d252e5853e18cb4bb', 2, 0, 43),
(44, 'Lorenzo_Alfaro', '387316d0d18d75aefa50ad1cadc39742', 2, 0, 44),
(45, 'Angel_Corcoles', '2bb21607cab3ea4f87a4a41ac6d22243', 1, 0, 45),
(46, 'Iker_Ballesteros', 'cef7fe36d58e07ec7c18b532f11de3e1', 1, 0, 46),
(47, 'Pablo_Marin', '85404e94466ba1dbd517055474b345b1', 1, 0, 47),
(48, 'Agustin_Fernandez', '67d36db472159fcb8c55e03a052bcb74', 1, 0, 48),
(49, 'Ignacio_Serrano', 'dda91e72cad3a8c07a8e39587cb7917b', 2, 0, 49),
(50, 'Daniel_Rubio', 'abcde0e7c550cceda7b4c99c43c7ff89', 2, 0, 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ID_Prod` int(11) NOT NULL,
  `ID_Categoria` int(11) DEFAULT NULL,
  `Descripcion` varchar(32) DEFAULT NULL,
  `Precio_Unitario` int(11) DEFAULT NULL,
  `Fecha_Agregado` date DEFAULT NULL,
  `ID_Prov` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`ID_Prod`, `ID_Categoria`, `Descripcion`, `Precio_Unitario`, `Fecha_Agregado`, `ID_Prov`) VALUES
(1, 2, 'producto1', 62419, '2009-08-11', 30),
(2, 1, 'producto2', 65769, '2004-06-17', 21),
(3, 5, 'producto3', 85339, '2013-02-01', 30),
(4, 5, 'producto4', 35765, '2010-06-17', 5),
(5, 4, 'producto5', 64924, '2008-02-03', 39),
(6, 6, 'producto6', 70924, '2000-03-27', 42),
(7, 4, 'producto7', 17759, '2013-04-18', 22),
(8, 8, 'producto8', 76771, '2008-09-27', 19),
(9, 4, 'producto9', 53295, '2014-10-13', 23),
(10, 6, 'producto10', 29391, '2001-01-14', 12),
(11, 7, 'producto11', 55581, '2007-08-04', 46),
(12, 6, 'producto12', 29263, '2004-08-06', 9),
(13, 2, 'producto13', 81904, '2009-09-08', 1),
(14, 8, 'producto14', 16930, '2014-06-10', 5),
(15, 4, 'producto15', 53636, '2011-02-15', 12),
(16, 5, 'producto16', 65446, '2008-02-25', 43),
(17, 3, 'producto17', 81767, '2005-01-19', 16),
(18, 6, 'producto18', 3003, '2004-10-21', 30),
(19, 1, 'producto19', 70916, '2010-06-21', 38),
(20, 3, 'producto20', 23702, '2000-07-07', 26),
(21, 1, 'producto21', 1511, '2007-01-12', 24),
(22, 6, 'producto22', 93818, '2013-10-06', 10),
(23, 1, 'producto23', 11538, '2010-06-08', 44),
(24, 4, 'producto24', 45948, '2009-04-21', 14),
(25, 2, 'producto25', 60407, '2001-04-12', 40),
(26, 6, 'producto26', 79893, '2003-03-27', 39),
(27, 7, 'producto27', 18152, '2004-01-04', 14),
(28, 6, 'producto28', 95182, '2008-07-21', 25),
(29, 2, 'producto29', 27123, '2001-10-17', 40),
(30, 1, 'producto30', 17073, '2012-08-12', 4),
(31, 1, 'producto31', 8424, '2008-08-17', 26),
(32, 7, 'producto32', 18625, '2014-09-28', 43),
(33, 5, 'producto33', 34527, '2006-02-06', 16),
(34, 8, 'producto34', 16008, '2012-05-22', 28),
(35, 7, 'producto35', 54872, '2009-04-24', 27),
(36, 8, 'producto36', 13682, '2011-03-19', 20),
(37, 3, 'producto37', 53051, '2010-07-16', 35),
(38, 4, 'producto38', 25316, '2001-08-05', 3),
(39, 4, 'producto39', 54621, '2002-04-22', 31),
(40, 2, 'producto40', 39651, '2010-04-10', 9),
(41, 4, 'producto41', 5753, '2004-10-09', 46),
(42, 4, 'producto42', 32791, '2007-10-06', 23),
(43, 2, 'producto43', 1187, '2005-09-18', 27),
(44, 6, 'producto44', 66946, '2004-03-27', 35),
(45, 7, 'producto45', 34426, '2006-09-24', 16),
(46, 7, 'producto46', 2354, '2007-10-10', 18),
(47, 5, 'producto47', 81359, '2005-09-05', 11),
(48, 1, 'producto48', 31921, '2011-05-11', 14),
(49, 4, 'producto49', 17015, '2010-09-21', 25),
(50, 2, 'producto50', 50849, '2006-04-22', 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `produc_com`
--

CREATE TABLE `produc_com` (
  `ID_Compraproducto` int(11) NOT NULL,
  `ID_Compra` int(11) DEFAULT NULL,
  `ID_Prod` int(11) DEFAULT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `Descuento_Porcentaje` int(3) DEFAULT NULL,
  `Descuento` int(11) DEFAULT NULL,
  `Total_Producto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `produc_com`
--

INSERT INTO `produc_com` (`ID_Compraproducto`, `ID_Compra`, `ID_Prod`, `Cantidad`, `Descuento_Porcentaje`, `Descuento`, `Total_Producto`) VALUES
(1, 32, 41, 7, 8, 500, 5252),
(2, 36, 46, 4, 40, 959, 1394),
(3, 50, 28, 2, 20, 19349, 75832),
(4, 4, 34, 8, 31, 5117, 10890),
(5, 19, 30, 5, 3, 597, 16475),
(6, 22, 20, 3, 29, 7013, 16688),
(7, 43, 44, 10, 49, 33005, 33940),
(8, 39, 10, 8, 3, 934, 28456),
(9, 48, 6, 4, 9, 6786, 64137),
(10, 20, 10, 4, 46, 13680, 15710),
(11, 23, 38, 6, 23, 5849, 19466),
(12, 31, 26, 1, 38, 30403, 49489),
(13, 26, 15, 1, 41, 22235, 31400),
(14, 16, 47, 4, 11, 9634, 71724),
(15, 19, 11, 3, 27, 15478, 40102),
(16, 15, 12, 3, 3, 971, 28291),
(17, 37, 12, 7, 3, 938, 28324),
(18, 5, 28, 7, 27, 25796, 69385),
(19, 23, 33, 5, 6, 2280, 32246),
(20, 7, 47, 3, 11, 9345, 72013),
(21, 5, 24, 3, 21, 9662, 36285),
(22, 12, 4, 5, 49, 17845, 17919),
(23, 44, 19, 4, 26, 18805, 52110),
(24, 13, 20, 3, 41, 9930, 13771),
(25, 16, 17, 4, 4, 3464, 78302),
(26, 21, 15, 4, 21, 11463, 42172),
(27, 35, 43, 1, 48, 573, 613),
(28, 21, 47, 1, 31, 25257, 56101),
(29, 36, 11, 1, 29, 16171, 39409),
(30, 43, 31, 8, 29, 2488, 5935),
(31, 48, 41, 3, 16, 972, 4780),
(32, 11, 14, 3, 14, 2416, 14513),
(33, 32, 9, 2, 12, 6402, 46892),
(34, 32, 48, 5, 31, 9967, 21953),
(35, 23, 33, 2, 38, 13138, 21388),
(36, 31, 41, 9, 23, 1339, 4413),
(37, 3, 44, 9, 41, 27451, 39494),
(38, 4, 40, 1, 48, 19428, 20222),
(39, 36, 42, 7, 29, 9538, 23252),
(40, 7, 38, 7, 17, 4329, 20986),
(41, 12, 43, 2, 25, 306, 880),
(42, 38, 15, 8, 42, 22994, 30641),
(43, 29, 50, 6, 15, 7776, 43072),
(44, 38, 24, 2, 44, 20633, 25314),
(45, 33, 16, 1, 47, 31336, 34109),
(46, 7, 13, 4, 45, 37099, 44804),
(47, 12, 40, 1, 35, 14235, 25415),
(48, 36, 19, 4, 2, 2002, 68913),
(49, 46, 25, 8, 12, 7818, 52588),
(50, 36, 16, 1, 25, 16835, 48610);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `ID_Prov` int(11) NOT NULL,
  `Nombre_Compania` varchar(32) DEFAULT NULL,
  `Tipo_Proveedor` int(11) DEFAULT NULL,
  `ID_Rut` varchar(14) NOT NULL,
  `ID_Datos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`ID_Prov`, `Nombre_Compania`, `Tipo_Proveedor`, `ID_Rut`, `ID_Datos`) VALUES
(1, 'compania1', 1, '8.332.343-4', 51),
(2, 'compania2', 3, '13.526.444-k', 52),
(3, 'compania3', 7, '7.774.318-9', 53),
(4, 'compania4', 1, '8.428.774-1', 54),
(5, 'compania5', 6, '13.151.664-9', 55),
(6, 'compania6', 2, '6.616.215-k', 56),
(7, 'compania7', 6, '12.316.244-7', 57),
(8, 'compania8', 5, '7.166.458-9', 58),
(9, 'compania9', 3, '13.853.317-4', 59),
(10, 'compania10', 5, '7.474.348-k', 60),
(11, 'compania11', 7, '13.474.745-5', 61),
(12, 'compania12', 1, '7.554.145-7', 62),
(13, 'compania13', 4, '13.478.718-k', 63),
(14, 'compania14', 7, '11.227.838-9', 64),
(15, 'compania15', 7, '6.425.417-0', 65),
(16, 'compania16', 5, '12.166.758-4', 66),
(17, 'compania17', 3, '13.237.844-4', 67),
(18, 'compania18', 1, '13.138.555-2', 68),
(19, 'compania19', 2, '8.171.866-0', 69),
(20, 'compania20', 1, '8.577.852-8', 70),
(21, 'compania21', 4, '6.787.437-4', 71),
(22, 'compania22', 5, '11.763.261-k', 72),
(23, 'compania23', 5, '7.888.263-8', 73),
(24, 'compania24', 4, '12.811.673-7', 74),
(25, 'compania25', 1, '6.721.458-7', 75),
(26, 'compania26', 1, '7.333.748-8', 76),
(27, 'compania27', 2, '11.451.248-6', 77),
(28, 'compania28', 4, '7.255.664-k', 78),
(29, 'compania29', 7, '11.362.738-7', 79),
(30, 'compania30', 7, '11.468.457-0', 80),
(31, 'compania31', 2, '13.641.317-1', 81),
(32, 'compania32', 7, '8.218.723-5', 82),
(33, 'compania33', 4, '8.381.644-9', 83),
(34, 'compania34', 4, '7.525.581-0', 84),
(35, 'compania35', 5, '6.782.853-4', 85),
(36, 'compania36', 2, '12.714.225-4', 86),
(37, 'compania37', 1, '6.118.436-8', 87),
(38, 'compania38', 3, '12.465.542-0', 88),
(39, 'compania39', 1, '8.633.655-3', 89),
(40, 'compania40', 6, '6.455.511-1', 90),
(41, 'compania41', 1, '13.254.371-2', 91),
(42, 'compania42', 2, '8.844.616-k', 92),
(43, 'compania43', 1, '6.182.211-9', 93),
(44, 'compania44', 3, '7.751.475-9', 94),
(45, 'compania45', 7, '13.311.782-2', 95),
(46, 'compania46', 1, '13.148.576-k', 96),
(47, 'compania47', 3, '7.248.174-7', 97),
(48, 'compania48', 5, '12.817.376-5', 98),
(49, 'compania49', 1, '7.648.864-9', 99),
(50, 'compania50', 1, '8.356.445-8', 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `region`
--

CREATE TABLE `region` (
  `ID_Region` int(11) NOT NULL,
  `Nombre_Region` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `region`
--

INSERT INTO `region` (`ID_Region`, `Nombre_Region`) VALUES
(1, 'XV - Arica y Parinacota'),
(2, 'I - Tarapaca'),
(3, 'II - Antofagasta'),
(4, 'III - Atacama'),
(5, 'IV - Coquimbo'),
(6, 'V - Valparaiso'),
(7, 'XIII - Metropolitana de Santiago'),
(8, 'VI - O Higgins'),
(9, 'VII - Maule'),
(10, 'VIII - Bio-Bio'),
(11, 'IX - La Araucania'),
(12, 'XIV - Los Rios'),
(13, 'X - Los Lagos'),
(14, 'XI - Aysen'),
(15, 'XII - Magallanes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_proveedores`
--

CREATE TABLE `tipo_proveedores` (
  `ID_Tipo_Proveedor` int(11) NOT NULL,
  `Nombre` varchar(32) DEFAULT NULL,
  `Descripcion` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_proveedores`
--

INSERT INTO `tipo_proveedores` (`ID_Tipo_Proveedor`, `Nombre`, `Descripcion`) VALUES
(1, 'Proveedor de bienes', 'Empresa o persona, que se refiere a la internacionalización o elaboración de algún producto'),
(2, 'Proveedor de Servicios', 'Un proveedor está clasificado como interno si las mercancías que se están entregando ya han sido introducidas previamente. El procedimiento trata del tráfico de mercancías en forma de pedido de traslado o de entrega.'),
(3, 'Proveedor de Bienes', 'Buscan responder las obligaciones del cliente, que por su particularidad principal de servicio es intangible, es decir que no se pude tocar, pero así mismo el servicio está apoyado por bienes tangibles para lograr dicha actividad.'),
(4, 'Proveedores Normales', 'Son proveedores los cuales no están registrados en el \r\nRegistro de proveedores, en donde se deben realizar 3\r\ncotizaciones, una por cada proveedor, en donde se \r\ndetermina según los criterios estipulados por la empresa, \r\na cuál de ellos realizar la compr'),
(5, 'Proveedores Confiables', 'Son aquellos que según la evaluación, es importante mantener, ya que reúnen características que consideramos claves para nuestro trabajo, cómo son los criterios de evaluación.\r\nPor esto solo es necesario realizar solo una cotización'),
(6, 'Proveedores Específicos', 'Son Proveedores cuyos productos que por su nivel de \r\nespecialización (Especificaciones Técnicas), se hace difícil \r\nencontrar alternativas. '),
(7, 'Proveedor Externo', 'Lo más común es el de un proveedor externo que posee un conjunto exclusivo de mercancías en oferta. Cuando se proponen las clausulas diferentes para algunas partes del surtido, el surtido puede dividirse en surtidos parciales.'),
(8, 'Proveedor Interno', 'la mercancia que esta entregando ya han sido introducidas previamente ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `total_compras`
--

CREATE TABLE `total_compras` (
  `ID_total_compras` int(11) NOT NULL,
  `Total_Iva` int(30) DEFAULT NULL,
  `Total_sin_iva` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `total_compras`
--

INSERT INTO `total_compras` (`ID_total_compras`, `Total_Iva`, `Total_sin_iva`) VALUES
(1, NULL, NULL),
(2, NULL, NULL),
(3, NULL, NULL),
(4, NULL, NULL),
(5, NULL, NULL),
(6, NULL, NULL),
(7, NULL, NULL),
(8, NULL, NULL),
(9, NULL, NULL),
(10, NULL, NULL),
(11, NULL, NULL),
(12, NULL, NULL),
(13, NULL, NULL),
(14, NULL, NULL),
(15, NULL, NULL),
(16, NULL, NULL),
(17, NULL, NULL),
(18, NULL, NULL),
(19, NULL, NULL),
(20, NULL, NULL),
(21, NULL, NULL),
(22, NULL, NULL),
(23, NULL, NULL),
(24, NULL, NULL),
(25, NULL, NULL),
(26, NULL, NULL),
(27, NULL, NULL),
(28, NULL, NULL),
(29, NULL, NULL),
(30, NULL, NULL),
(31, NULL, NULL),
(32, NULL, NULL),
(33, NULL, NULL),
(34, NULL, NULL),
(35, NULL, NULL),
(36, NULL, NULL),
(37, NULL, NULL),
(38, NULL, NULL),
(39, NULL, NULL),
(40, NULL, NULL),
(41, NULL, NULL),
(42, NULL, NULL),
(43, NULL, NULL),
(44, NULL, NULL),
(45, NULL, NULL),
(46, NULL, NULL),
(47, NULL, NULL),
(48, NULL, NULL),
(49, NULL, NULL),
(50, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `archivo`
--
ALTER TABLE `archivo`
  ADD PRIMARY KEY (`ID_Archivo`);

--
-- Indices de la tabla `articulob`
--
ALTER TABLE `articulob`
  ADD PRIMARY KEY (`ID_ArtB`);

--
-- Indices de la tabla `articulov`
--
ALTER TABLE `articulov`
  ADD PRIMARY KEY (`ID_ArtV`);

--
-- Indices de la tabla `boleta`
--
ALTER TABLE `boleta`
  ADD PRIMARY KEY (`ID_Boleta`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`ID_Categoria`);

--
-- Indices de la tabla `compra_producto`
--
ALTER TABLE `compra_producto`
  ADD PRIMARY KEY (`ID_Compra`);

--
-- Indices de la tabla `comuna`
--
ALTER TABLE `comuna`
  ADD PRIMARY KEY (`ID_Comuna`);

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`ID_Datos`);

--
-- Indices de la tabla `datos_compania`
--
ALTER TABLE `datos_compania`
  ADD PRIMARY KEY (`ID_Compania`);

--
-- Indices de la tabla `datos_comprador`
--
ALTER TABLE `datos_comprador`
  ADD PRIMARY KEY (`ID_Comprador`);

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`ID_Direccion`);

--
-- Indices de la tabla `documento`
--
ALTER TABLE `documento`
  ADD PRIMARY KEY (`ID_Doc`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`ID_Inve`);

--
-- Indices de la tabla `login_usuario`
--
ALTER TABLE `login_usuario`
  ADD PRIMARY KEY (`ID_L`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID_Prod`);

--
-- Indices de la tabla `produc_com`
--
ALTER TABLE `produc_com`
  ADD PRIMARY KEY (`ID_Compraproducto`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`ID_Prov`);

--
-- Indices de la tabla `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`ID_Region`);

--
-- Indices de la tabla `tipo_proveedores`
--
ALTER TABLE `tipo_proveedores`
  ADD PRIMARY KEY (`ID_Tipo_Proveedor`);

--
-- Indices de la tabla `total_compras`
--
ALTER TABLE `total_compras`
  ADD PRIMARY KEY (`ID_total_compras`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `archivo`
--
ALTER TABLE `archivo`
  MODIFY `ID_Archivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT de la tabla `articulob`
--
ALTER TABLE `articulob`
  MODIFY `ID_ArtB` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT de la tabla `articulov`
--
ALTER TABLE `articulov`
  MODIFY `ID_ArtV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT de la tabla `boleta`
--
ALTER TABLE `boleta`
  MODIFY `ID_Boleta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `ID_Categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `compra_producto`
--
ALTER TABLE `compra_producto`
  MODIFY `ID_Compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT de la tabla `comuna`
--
ALTER TABLE `comuna`
  MODIFY `ID_Comuna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234;
--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `ID_Datos` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;
--
-- AUTO_INCREMENT de la tabla `datos_compania`
--
ALTER TABLE `datos_compania`
  MODIFY `ID_Compania` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `datos_comprador`
--
ALTER TABLE `datos_comprador`
  MODIFY `ID_Comprador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT de la tabla `direccion`
--
ALTER TABLE `direccion`
  MODIFY `ID_Direccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;
--
-- AUTO_INCREMENT de la tabla `documento`
--
ALTER TABLE `documento`
  MODIFY `ID_Doc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;
--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `ID_Inve` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT de la tabla `login_usuario`
--
ALTER TABLE `login_usuario`
  MODIFY `ID_L` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `ID_Prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT de la tabla `produc_com`
--
ALTER TABLE `produc_com`
  MODIFY `ID_Compraproducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `ID_Prov` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT de la tabla `region`
--
ALTER TABLE `region`
  MODIFY `ID_Region` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `tipo_proveedores`
--
ALTER TABLE `tipo_proveedores`
  MODIFY `ID_Tipo_Proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `total_compras`
--
ALTER TABLE `total_compras`
  MODIFY `ID_total_compras` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
