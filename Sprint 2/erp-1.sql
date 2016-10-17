-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2016 a las 18:55:16
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
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `ID_Ciudad` int(11) NOT NULL,
  `Nombre_Ciudad` varchar(32) DEFAULT NULL
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
  `ID_Ciudad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_compania`
--

CREATE TABLE `datos_compania` (
  `ID_Com` int(11) NOT NULL,
  `Nombre` varchar(32) DEFAULT NULL,
  `Razon_Social` varchar(32) DEFAULT NULL,
  `Rut` varchar(10) DEFAULT NULL,
  `ID_Direccion` int(11) DEFAULT NULL,
  `Telefono` varchar(12) DEFAULT NULL,
  `Fax` varchar(12) DEFAULT NULL,
  `ID_Membrete` int(11) DEFAULT NULL
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
  `Total_Neto` int(11) DEFAULT NULL,
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
  `ID_Rut` varchar(20) NOT NULL,
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
  `ID_Rut` varchar(20) NOT NULL,
  `Nombre_C` varchar(32) NOT NULL,
  `Apellido_P` varchar(32) NOT NULL,
  `Apellido_M` varchar(32) NOT NULL,
  `Correo` varchar(32) NOT NULL,
  `Telefono` varchar(12) NOT NULL,
  `ID_Direccion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  ADD PRIMARY KEY (`ID_B`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`ID_Categoria`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`ID_Ciudad`);

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
-- Indices de la tabla `datos_compania`
--
ALTER TABLE `datos_compania`
  ADD PRIMARY KEY (`ID_Com`);

--
-- Indices de la tabla `datos_comprador`
--
ALTER TABLE `datos_comprador`
  ADD PRIMARY KEY (`ID_C`);

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
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`ID_F`);

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
  ADD PRIMARY KEY (`ID_Produc`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`ID_Prov`);

--
-- Indices de la tabla `tipo_proveedores`
--
ALTER TABLE `tipo_proveedores`
  ADD PRIMARY KEY (`ID_Tipo_Proveedor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

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
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `ID_Ciudad` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `compra_producto`
--
ALTER TABLE `compra_producto`
  MODIFY `ID_Compra` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `comuna`
--
ALTER TABLE `comuna`
  MODIFY `ID_Comuna` int(11) NOT NULL AUTO_INCREMENT;
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
-- AUTO_INCREMENT de la tabla `tipo_proveedores`
--
ALTER TABLE `tipo_proveedores`
  MODIFY `ID_Tipo_Proveedor` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
