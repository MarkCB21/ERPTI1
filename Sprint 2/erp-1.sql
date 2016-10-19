-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-10-2016 a las 05:01:33
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `erp-1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivo`
--

CREATE TABLE `archivo` (
  `ID_Archivo` int(11) NOT NULL,
  `Ruta_Archivo` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulob`
--

CREATE TABLE `articulob` (
  `ID_ArtB` int(11) NOT NULL,
  `ID_Inve` int(11) DEFAULT NULL,
  `ID_B` int(11) DEFAULT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `Descuento_Porcentaje` int(3) DEFAULT NULL,
  `Descuento` int(11) DEFAULT NULL,
  `Total_Inventario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `boleta`
--

CREATE TABLE `boleta` (
  `ID_B` int(11) NOT NULL,
  `ID_C` int(11) DEFAULT NULL,
  `Fecha_Emision` date DEFAULT NULL,
  `Precio_Unitario` int(11) DEFAULT NULL,
  `Monto_Operacion` int(11) DEFAULT NULL,
  `Condiciones_de_Venta` varchar(128) DEFAULT NULL,
  `IVA` int(11) DEFAULT NULL,
  `Giro_Actividad` varchar(32) DEFAULT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `Anulada` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `ID_Categoria` int(11) NOT NULL,
  `Nombre` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra_producto`
--

CREATE TABLE `compra_producto` (
  `ID_Compra` int(11) NOT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `Total` int(11) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `ID_Doc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Estructura de tabla para la tabla `datos_compania`
--

CREATE TABLE `datos_compania` (
  `ID_Com` int(11) NOT NULL,
  `Nombre` varchar(32) DEFAULT NULL,
  `Razon_Social` varchar(32) DEFAULT NULL,
  `Rut` varchar(10) NOT NULL,
  `ID_Direccion` int(11) NOT NULL,
  `Telefono` varchar(12) DEFAULT NULL,
  `Fax` varchar(12) DEFAULT NULL,
  `ID_Membrete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_comprador`
--

CREATE TABLE `datos_comprador` (
  `ID_C` int(11) NOT NULL,
  `Nombre` varchar(32) DEFAULT NULL,
  `Razon_Social` varchar(32) DEFAULT NULL,
  `Rut` varchar(10) DEFAULT NULL,
  `ID_Direccion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento`
--

CREATE TABLE `documento` (
  `ID_Doc` int(11) NOT NULL,
  `Descripcion` varchar(256) DEFAULT NULL,
  `ID_Archivo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `ID_F` int(11) NOT NULL,
  `Fecha_Emision` date DEFAULT NULL,
  `Total_Neto` int(11) NOT NULL,
  `ID_C` int(11) DEFAULT NULL,
  `ID_Com` int(11) NOT NULL,
  `Condiciones_de_Venta` varchar(128) DEFAULT NULL,
  `IVA` int(11) DEFAULT NULL,
  `Giro_Actividad` varchar(32) DEFAULT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `Anulada` tinyint(1) DEFAULT NULL,
  `ID_Doc` int(11) DEFAULT NULL,
  `IVA_adicional` int(11) DEFAULT NULL,
  `Total_Factura` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `ID_Inve` int(11) NOT NULL,
  `ID_Categoria` int(11) DEFAULT NULL,
  `Descripcion` varchar(256) DEFAULT NULL,
  `Costo_Unitario` int(11) DEFAULT NULL,
  `Medida` varchar(10) DEFAULT NULL,
  `Fecha_Entrada` date DEFAULT NULL,
  `Fecha_Salida` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_usuario`
--

CREATE TABLE `login_usuario` (
  `ID_L` int(11) NOT NULL,
  `Nombre_Cuenta` varchar(32) DEFAULT NULL,
  `Contrasena` varchar(32) DEFAULT NULL,
  `ID_Rut` varchar(10) NOT NULL,
  `Nombre_C` varchar(32) NOT NULL,
  `Apellido_P` varchar(32) NOT NULL,
  `Apellido_M` varchar(32) NOT NULL,
  `Correo` varchar(32) NOT NULL,
  `Telefono` varchar(12) NOT NULL,
  `ID_Direccion` int(11) NOT NULL,
  `Tipo` int(1) DEFAULT NULL,
  `Estado` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ID_Prod` int(11) NOT NULL,
  `ID_Categoria` int(11) DEFAULT NULL,
  `Nombre` varchar(32) DEFAULT NULL,
  `Precio_Unitario` int(11) DEFAULT NULL,
  `Fecha_Agregado` date DEFAULT NULL,
  `Fecha_Modificacion` date DEFAULT NULL,
  `Medida` varchar(10) DEFAULT NULL,
  `ID_Prov` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `produc_com`
--

CREATE TABLE `produc_com` (
  `ID_Produc` int(11) NOT NULL,
  `ID_Compra` int(11) DEFAULT NULL,
  `ID_Prod` int(11) DEFAULT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `Descuento_Porcentaje` int(3) DEFAULT NULL,
  `Descuento` int(11) DEFAULT NULL,
  `Total_Inventario` int(11) DEFAULT NULL,
  `Anulado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `ID_Prov` int(11) NOT NULL,
  `Nombre_Compania` varchar(32) DEFAULT NULL,
  `Tipo_Proveedor` int(11) DEFAULT NULL,
  `ID_Rut` varchar(10) NOT NULL,
  `Nombre_C` varchar(32) NOT NULL,
  `Apellido_P` varchar(32) NOT NULL,
  `Apellido_M` varchar(32) NOT NULL,
  `Correo` varchar(32) NOT NULL,
  `Telefono` varchar(12) NOT NULL,
  `ID_Direccion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  ADD PRIMARY KEY (`ID_ArtB`),
  ADD KEY `ID_Inve` (`ID_Inve`,`ID_B`),
  ADD KEY `ID_B` (`ID_B`);

--
-- Indices de la tabla `articulov`
--
ALTER TABLE `articulov`
  ADD PRIMARY KEY (`ID_ArtV`),
  ADD KEY `ID_Inve` (`ID_Inve`,`ID_F`),
  ADD KEY `ID_F` (`ID_F`);

--
-- Indices de la tabla `boleta`
--
ALTER TABLE `boleta`
  ADD PRIMARY KEY (`ID_B`),
  ADD KEY `ID_C` (`ID_C`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`ID_Categoria`);

--
-- Indices de la tabla `compra_producto`
--
ALTER TABLE `compra_producto`
  ADD PRIMARY KEY (`ID_Compra`),
  ADD KEY `ID_Doc` (`ID_Doc`);

--
-- Indices de la tabla `comuna`
--
ALTER TABLE `comuna`
  ADD PRIMARY KEY (`ID_Comuna`),
  ADD KEY `ID_Region` (`ID_Region`);

--
-- Indices de la tabla `datos_compania`
--
ALTER TABLE `datos_compania`
  ADD PRIMARY KEY (`ID_Com`),
  ADD KEY `ID_Direccion` (`ID_Direccion`),
  ADD KEY `ID_Membrete` (`ID_Membrete`);

--
-- Indices de la tabla `datos_comprador`
--
ALTER TABLE `datos_comprador`
  ADD PRIMARY KEY (`ID_C`),
  ADD KEY `ID_Direccion` (`ID_Direccion`);

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`ID_Direccion`),
  ADD KEY `ID_Comuna` (`ID_Comuna`);

--
-- Indices de la tabla `documento`
--
ALTER TABLE `documento`
  ADD PRIMARY KEY (`ID_Doc`),
  ADD KEY `ID_Archivo` (`ID_Archivo`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`ID_F`),
  ADD KEY `ID_C` (`ID_C`),
  ADD KEY `ID_Com` (`ID_Com`),
  ADD KEY `ID_Doc` (`ID_Doc`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`ID_Inve`),
  ADD KEY `ID_Categoria` (`ID_Categoria`);

--
-- Indices de la tabla `login_usuario`
--
ALTER TABLE `login_usuario`
  ADD PRIMARY KEY (`ID_L`),
  ADD KEY `ID_Direccion` (`ID_Direccion`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID_Prod`),
  ADD KEY `ID_Categoria` (`ID_Categoria`),
  ADD KEY `ID_Prov` (`ID_Prov`);

--
-- Indices de la tabla `produc_com`
--
ALTER TABLE `produc_com`
  ADD PRIMARY KEY (`ID_Produc`),
  ADD KEY `ID_Compra` (`ID_Compra`,`ID_Prod`),
  ADD KEY `ID_Prod` (`ID_Prod`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`ID_Prov`),
  ADD KEY `ID_Direccion` (`ID_Direccion`),
  ADD KEY `Tipo_Proveedor` (`Tipo_Proveedor`);

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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `archivo`
--
ALTER TABLE `archivo`
  MODIFY `ID_Archivo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `articulob`
--
ALTER TABLE `articulob`
  MODIFY `ID_ArtB` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `articulov`
--
ALTER TABLE `articulov`
  MODIFY `ID_ArtV` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `boleta`
--
ALTER TABLE `boleta`
  MODIFY `ID_B` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `ID_Categoria` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `compra_producto`
--
ALTER TABLE `compra_producto`
  MODIFY `ID_Compra` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `comuna`
--
ALTER TABLE `comuna`
  MODIFY `ID_Comuna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234;
--
-- AUTO_INCREMENT de la tabla `datos_compania`
--
ALTER TABLE `datos_compania`
  MODIFY `ID_Com` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `datos_comprador`
--
ALTER TABLE `datos_comprador`
  MODIFY `ID_C` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `direccion`
--
ALTER TABLE `direccion`
  MODIFY `ID_Direccion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `documento`
--
ALTER TABLE `documento`
  MODIFY `ID_Doc` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `ID_F` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `ID_Inve` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `login_usuario`
--
ALTER TABLE `login_usuario`
  MODIFY `ID_L` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `ID_Prod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `produc_com`
--
ALTER TABLE `produc_com`
  MODIFY `ID_Produc` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `ID_Prov` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `region`
--
ALTER TABLE `region`
  MODIFY `ID_Region` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `tipo_proveedores`
--
ALTER TABLE `tipo_proveedores`
  MODIFY `ID_Tipo_Proveedor` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulob`
--
ALTER TABLE `articulob`
  ADD CONSTRAINT `articulob_ibfk_1` FOREIGN KEY (`ID_Inve`) REFERENCES `inventario` (`ID_Inve`),
  ADD CONSTRAINT `articulob_ibfk_2` FOREIGN KEY (`ID_B`) REFERENCES `boleta` (`ID_B`);

--
-- Filtros para la tabla `articulov`
--
ALTER TABLE `articulov`
  ADD CONSTRAINT `articulov_ibfk_1` FOREIGN KEY (`ID_Inve`) REFERENCES `inventario` (`ID_Inve`),
  ADD CONSTRAINT `articulov_ibfk_2` FOREIGN KEY (`ID_F`) REFERENCES `factura` (`ID_F`);

--
-- Filtros para la tabla `boleta`
--
ALTER TABLE `boleta`
  ADD CONSTRAINT `boleta_ibfk_1` FOREIGN KEY (`ID_C`) REFERENCES `datos_comprador` (`ID_C`);

--
-- Filtros para la tabla `compra_producto`
--
ALTER TABLE `compra_producto`
  ADD CONSTRAINT `compra_producto_ibfk_1` FOREIGN KEY (`ID_Doc`) REFERENCES `documento` (`ID_Doc`);

--
-- Filtros para la tabla `comuna`
--
ALTER TABLE `comuna`
  ADD CONSTRAINT `comuna_ibfk_1` FOREIGN KEY (`ID_Region`) REFERENCES `region` (`ID_Region`);

--
-- Filtros para la tabla `datos_compania`
--
ALTER TABLE `datos_compania`
  ADD CONSTRAINT `datos_compania_ibfk_1` FOREIGN KEY (`ID_Direccion`) REFERENCES `direccion` (`ID_Direccion`),
  ADD CONSTRAINT `datos_compania_ibfk_2` FOREIGN KEY (`ID_Membrete`) REFERENCES `archivo` (`ID_Archivo`);

--
-- Filtros para la tabla `datos_comprador`
--
ALTER TABLE `datos_comprador`
  ADD CONSTRAINT `datos_comprador_ibfk_1` FOREIGN KEY (`ID_Direccion`) REFERENCES `direccion` (`ID_Direccion`);

--
-- Filtros para la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD CONSTRAINT `direccion_ibfk_1` FOREIGN KEY (`ID_Comuna`) REFERENCES `comuna` (`ID_Comuna`);

--
-- Filtros para la tabla `documento`
--
ALTER TABLE `documento`
  ADD CONSTRAINT `documento_ibfk_1` FOREIGN KEY (`ID_Archivo`) REFERENCES `archivo` (`ID_Archivo`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`ID_C`) REFERENCES `datos_comprador` (`ID_C`),
  ADD CONSTRAINT `factura_ibfk_2` FOREIGN KEY (`ID_Com`) REFERENCES `datos_compania` (`ID_Com`),
  ADD CONSTRAINT `factura_ibfk_3` FOREIGN KEY (`ID_Doc`) REFERENCES `documento` (`ID_Doc`);

--
-- Filtros para la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD CONSTRAINT `inventario_ibfk_1` FOREIGN KEY (`ID_Categoria`) REFERENCES `categoria` (`ID_Categoria`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`ID_Categoria`) REFERENCES `categoria` (`ID_Categoria`),
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`ID_Prov`) REFERENCES `proveedores` (`ID_Prov`);

--
-- Filtros para la tabla `produc_com`
--
ALTER TABLE `produc_com`
  ADD CONSTRAINT `produc_com_ibfk_1` FOREIGN KEY (`ID_Compra`) REFERENCES `compra_producto` (`ID_Compra`),
  ADD CONSTRAINT `produc_com_ibfk_2` FOREIGN KEY (`ID_Prod`) REFERENCES `productos` (`ID_Prod`);

--
-- Filtros para la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD CONSTRAINT `proveedores_ibfk_1` FOREIGN KEY (`Tipo_Proveedor`) REFERENCES `tipo_proveedores` (`ID_Tipo_Proveedor`),
  ADD CONSTRAINT `proveedores_ibfk_2` FOREIGN KEY (`ID_Direccion`) REFERENCES `direccion` (`ID_Direccion`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
