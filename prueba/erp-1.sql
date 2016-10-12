-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-10-2016 a las 03:13:39
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `erp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `active_guests`
--

CREATE TABLE `active_guests` (
  `ip` varchar(15) NOT NULL,
  `timestamp` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `active_users`
--

CREATE TABLE `active_users` (
  `username` varchar(30) NOT NULL,
  `timestamp` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `active_users`
--

INSERT INTO `active_users` (`username`, `timestamp`) VALUES
('admin', 1476061847),
('master1', 1476061248);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulob`
--

CREATE TABLE `articulob` (
  `ID_Artiv` int(11) NOT NULL,
  `ID_Inve` int(11) NOT NULL,
  `ID_B` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articulob`
--

INSERT INTO `articulob` (`ID_Artiv`, `ID_Inve`, `ID_B`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulov`
--

CREATE TABLE `articulov` (
  `ID_Artiv` int(11) NOT NULL,
  `ID_Inve` int(11) DEFAULT NULL,
  `ID_F` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articulov`
--

INSERT INTO `articulov` (`ID_Artiv`, `ID_Inve`, `ID_F`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banned_users`
--

CREATE TABLE `banned_users` (
  `username` varchar(30) NOT NULL,
  `timestamp` int(11) UNSIGNED NOT NULL
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
  `Condiciones_de_venta` varchar(30) DEFAULT NULL,
  `IVA` varchar(30) DEFAULT NULL,
  `Giro_Actividad` varchar(30) DEFAULT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `Anulada` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `boleta`
--

INSERT INTO `boleta` (`ID_B`, `ID_C`, `Fecha_Emision`, `Precio_Unitario`, `Monto_Operacion`, `Condiciones_de_venta`, `IVA`, `Giro_Actividad`, `Cantidad`, `Anulada`) VALUES
(1, 1, '2016-09-26', 500, 500, 'sin', 'venia', '360', 10, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `ID_Categoria` int(11) NOT NULL,
  `NOMBRE` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`ID_Categoria`, `NOMBRE`) VALUES
(1, 'Frutas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra_poducto`
--

CREATE TABLE `compra_poducto` (
  `ID_Compra` int(11) NOT NULL,
  `Cantidad` int(20) DEFAULT NULL,
  `Total` int(40) DEFAULT NULL,
  `Fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `compra_poducto`
--

INSERT INTO `compra_poducto` (`ID_Compra`, `Cantidad`, `Total`, `Fecha`) VALUES
(1, 5, 500, '2016-09-26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `ID_D` int(30) NOT NULL,
  `Nombre_C` varchar(30) DEFAULT NULL,
  `Correo` varchar(30) DEFAULT NULL,
  `Telefono` varchar(30) DEFAULT NULL,
  `Direccion` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`ID_D`, `Nombre_C`, `Correo`, `Telefono`, `Direccion`) VALUES
(1, 'root', 'admin123@jefe.com', '12345678', 'CasaDelJefe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_bolefac`
--

CREATE TABLE `datos_bolefac` (
  `ID_C` int(11) NOT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `Razon_Social` varchar(30) DEFAULT NULL,
  `Rut` varchar(30) DEFAULT NULL,
  `Domicilio_Comuna_Ciudad` varchar(30) DEFAULT NULL,
  `Tipo` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos_bolefac`
--

INSERT INTO `datos_bolefac` (`ID_C`, `Nombre`, `Razon_Social`, `Rut`, `Domicilio_Comuna_Ciudad`, `Tipo`) VALUES
(1, 'Sinc', 'Sinc inc.', '76.133.982-k', 'Centro 339', 'Sociedad Colectiva');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `ID_F` int(11) NOT NULL,
  `Fecha_Emision` date DEFAULT NULL,
  `Precio_Unitario` int(11) DEFAULT NULL,
  `Monto_Operacion` int(11) DEFAULT NULL,
  `ID_Compañia` int(11) DEFAULT NULL,
  `ID_Comprador` int(11) DEFAULT NULL,
  `Condiciones_de_venta` varchar(30) DEFAULT NULL,
  `Iva` varchar(30) DEFAULT NULL,
  `Giro_actividad` varchar(30) DEFAULT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `Anulada` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`ID_F`, `Fecha_Emision`, `Precio_Unitario`, `Monto_Operacion`, `ID_Compañia`, `ID_Comprador`, `Condiciones_de_venta`, `Iva`, `Giro_actividad`, `Cantidad`, `Anulada`) VALUES
(1, '2016-09-26', 500, 500, 1, 1, 'sin', 'venia', '360', 20, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `ID_Inve` int(30) NOT NULL,
  `ID_Categoria` int(30) DEFAULT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `Precio` int(30) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `Stock` smallint(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`ID_Inve`, `ID_Categoria`, `Nombre`, `Precio`, `Fecha`, `Stock`) VALUES
(1, 1, 'Manzanas', 100, '2016-09-26', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_usuarios`
--

CREATE TABLE `login_usuarios` (
  `username` varchar(30) NOT NULL,
  `password` varchar(32) DEFAULT NULL,
  `userid` varchar(32) NOT NULL,
  `userlevel` tinyint(1) UNSIGNED NOT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login_usuarios`
--

INSERT INTO `login_usuarios` (`username`, `password`, `userid`, `userlevel`, `email`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', '477f2ac46843eee280b77f98bef1c347', 2, 'arman@3g.com'),
('master2', '5b9de42bf3fa2534e0d7ae695b12aeab', '', 1, 'dnh11@outlook.es'),
('prueba2', '96080775c113b0e5c3e32bdd26214aec', '', 1, 'asgsag@sagag.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ID_Prod` int(11) NOT NULL,
  `ID_Categoria` int(10) DEFAULT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `Precio` int(30) DEFAULT NULL,
  `Stock` int(30) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `ID_Prov` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`ID_Prod`, `ID_Categoria`, `Nombre`, `Precio`, `Stock`, `Fecha`, `ID_Prov`) VALUES
(1, 1, 'Manzana', 200, 10, '2016-09-26', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_com`
--

CREATE TABLE `product_com` (
  `ID_Product` int(11) NOT NULL,
  `ID_Compra` int(11) DEFAULT NULL,
  `ID_Prod` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `product_com`
--

INSERT INTO `product_com` (`ID_Product`, `ID_Compra`, `ID_Prod`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `ID_Prov` int(10) NOT NULL,
  `Nombre_Compañia` varchar(30) DEFAULT NULL,
  `ID_D` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`ID_Prov`, `Nombre_Compañia`, `ID_D`) VALUES
(1, 'Manzaneitor', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `active_guests`
--
ALTER TABLE `active_guests`
  ADD PRIMARY KEY (`ip`);

--
-- Indices de la tabla `active_users`
--
ALTER TABLE `active_users`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `articulob`
--
ALTER TABLE `articulob`
  ADD PRIMARY KEY (`ID_Artiv`),
  ADD KEY `ID_Inve` (`ID_Inve`),
  ADD KEY `ID_B` (`ID_B`);

--
-- Indices de la tabla `articulov`
--
ALTER TABLE `articulov`
  ADD PRIMARY KEY (`ID_Artiv`),
  ADD KEY `ID_Inve` (`ID_Inve`),
  ADD KEY `ID_F` (`ID_F`);

--
-- Indices de la tabla `banned_users`
--
ALTER TABLE `banned_users`
  ADD PRIMARY KEY (`username`);

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
-- Indices de la tabla `compra_poducto`
--
ALTER TABLE `compra_poducto`
  ADD PRIMARY KEY (`ID_Compra`);

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`ID_D`);

--
-- Indices de la tabla `datos_bolefac`
--
ALTER TABLE `datos_bolefac`
  ADD PRIMARY KEY (`ID_C`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`ID_F`),
  ADD KEY `ID_Comprador` (`ID_Comprador`),
  ADD KEY `ID_Compañia` (`ID_Compañia`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`ID_Inve`),
  ADD KEY `ID_Categoria` (`ID_Categoria`);

--
-- Indices de la tabla `login_usuarios`
--
ALTER TABLE `login_usuarios`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID_Prod`),
  ADD KEY `ID_Prov` (`ID_Prov`),
  ADD KEY `ID_Categoria` (`ID_Categoria`);

--
-- Indices de la tabla `product_com`
--
ALTER TABLE `product_com`
  ADD PRIMARY KEY (`ID_Product`),
  ADD KEY `ID_Compra` (`ID_Compra`),
  ADD KEY `ID_Prod` (`ID_Prod`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`ID_Prov`),
  ADD KEY `ID_D` (`ID_D`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulob`
--
ALTER TABLE `articulob`
  MODIFY `ID_Artiv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `articulov`
--
ALTER TABLE `articulov`
  MODIFY `ID_Artiv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `boleta`
--
ALTER TABLE `boleta`
  MODIFY `ID_B` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `ID_Categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `compra_poducto`
--
ALTER TABLE `compra_poducto`
  MODIFY `ID_Compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `ID_D` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `datos_bolefac`
--
ALTER TABLE `datos_bolefac`
  MODIFY `ID_C` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `ID_F` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `ID_Inve` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `ID_Prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `product_com`
--
ALTER TABLE `product_com`
  MODIFY `ID_Product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `ID_Prov` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
  ADD CONSTRAINT `boleta_ibfk_1` FOREIGN KEY (`ID_C`) REFERENCES `datos_bolefac` (`ID_C`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`ID_Comprador`) REFERENCES `datos_bolefac` (`ID_C`),
  ADD CONSTRAINT `factura_ibfk_2` FOREIGN KEY (`ID_Compañia`) REFERENCES `datos_bolefac` (`ID_C`);

--
-- Filtros para la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD CONSTRAINT `inventario_ibfk_1` FOREIGN KEY (`ID_Categoria`) REFERENCES `categoria` (`ID_Categoria`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`ID_Prov`) REFERENCES `proveedores` (`ID_Prov`),
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`ID_Categoria`) REFERENCES `categoria` (`ID_Categoria`);

--
-- Filtros para la tabla `product_com`
--
ALTER TABLE `product_com`
  ADD CONSTRAINT `product_com_ibfk_1` FOREIGN KEY (`ID_Compra`) REFERENCES `compra_poducto` (`ID_Compra`),
  ADD CONSTRAINT `product_com_ibfk_2` FOREIGN KEY (`ID_Prod`) REFERENCES `productos` (`ID_Prod`);

--
-- Filtros para la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD CONSTRAINT `proveedores_ibfk_1` FOREIGN KEY (`ID_D`) REFERENCES `datos` (`ID_D`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
