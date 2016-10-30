<?php

include "constantes.php";

$link = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);


// Tabla region
$con = "SELECT ID_Region, Nombre_Region FROM region";
if ($result = mysqli_query($link,$con))
{
	$region_Nombre_Region = [];
	$region_ID_Region = [];
	while ($row = mysqli_fetch_object($result))
	{
		array_push($region_Nombre_Region, $row->Nombre_Region);
		array_push($region_ID_Region, $row->ID_Region);
    }
    mysqli_free_result($result);
}
// Tabla comuna
$con = "SELECT * FROM region";
if ($result = mysqli_query($link,$con))
{
	$comuna_Nombre_Comuna = [];
	$comuna_ID_Region = [];
	$comuna_ID_Comuna = [];
	while ($row = mysqli_fetch_object($result))
	{
		array_push($comuna_Nombre_Comuna, $row->Nombre_Comuna);
		array_push($comuna_ID_Region, $row->ID_Region);
		array_push($comuna_ID_Comuna, $row->ID_Comuna);
    }
    mysqli_free_result($result);
}

// Tabla proveedores
$con = "SELECT * FROM proveedores";
if ($result = mysqli_query($link,$con))
{
	$proveedores_Apellido_M=[];
	$proveedores_Apellido_P=[];
	$proveedores_Correo=[];
	$proveedores_ID_Direccion=[];
	$proveedores_ID_Prov=[];
	$proveedores_ID_Rut=[];
	$proveedores_Nombre_C=[];
	$proveedores_Nombre_Compania=[];
	$proveedores_Telefono=[];
	$proveedores_Tipo_Proveedor=[];
	while ($row = mysqli_fetch_object($result))
	{
		array_push($proveedores_Apellido_M, $row->Apellido_M);
		array_push($proveedores_Apellido_P, $row->Apellido_P);
		array_push($proveedores_Correo, $row->Correo);
		array_push($proveedores_ID_Direccion, $row->ID_Direccion);
		array_push($proveedores_ID_Prov, $row->ID_Prov);
		array_push($proveedores_ID_Rut, $row->ID_Rut);
		array_push($proveedores_Nombre_C, $row->Nombre_C);
		array_push($proveedores_Nombre_Compania, $row->Nombre_Compania);
		array_push($proveedores_Telefono, $row->Telefono);
		array_push($proveedores_Tipo_Proveedor, $row->Tipo_Proveedor);
    }
    mysqli_free_result($result);
}

// Tabla productos
$con = "SELECT * FROM productos";
if ($result = mysqli_query($link,$con))
{
	$productos_ID_Prod = [];
	$productos_ID_Categoria = [];
	$productos_Nombre = [];
	$productos_Precio_Unitario = [];
	$productos_Fecha_Agregado = [];
	$productos_Fecha_Modificacion = [];
	$productos_Medida = [];
	$productos_ID_Prov = [];
	while ($row = mysqli_fetch_object($result))
	{
		array_push($productos_ID_Prod, $row->ID_Prod);
		array_push($productos_ID_Categoria, $row->ID_Categoria);
		array_push($productos_Nombre, $row->Nombre);
		array_push($productos_Precio_Unitario, $row->Precio_Unitario);
		array_push($productos_Fecha_Agregado, $row->Fecha_Agregado);
		array_push($productos_Fecha_Modificacion, $row->Fecha_Modificacion);
		array_push($productos_Medida, $row->Medida);
		array_push($productos_ID_Prov, $row->ID_Prov);
    }
    mysqli_free_result($result);
}

// Tabla produc_com
$con = "SELECT * FROM produc_com";
if ($result = mysqli_query($link,$con))
{
	$produc_com_Anulado = [];
	$produc_com_Cantidad = [];
	$produc_com_Descuento = [];
	$produc_com_Descuento_Porcentaje = [];
	$produc_com_ID_Compra = [];
	$produc_com_ID_Prod = [];
	$produc_com_ID_Produc = [];
	$produc_com_Total_Inventario = [];
	while ($row = mysqli_fetch_object($result))
	{
		array_push($produc_com_Anulado, $row->Anulado);
		array_push($produc_com_Cantidad, $row->Cantidad);
		array_push($produc_com_Descuento, $row->Descuento);
		array_push($produc_com_Descuento_Porcentaje, $row->Descuento_Porcentaje);
		array_push($produc_com_ID_Compra, $row->ID_Compra);
		array_push($produc_com_ID_Prod, $row->ID_Prod);
		array_push($produc_com_ID_Produc, $row->ID_Produc);
		array_push($produc_com_Total_Inventario, $row->Total_Inventario);
    }
    mysqli_free_result($result);
}

// Tabla tipo_proveedores
$con = "SELECT * FROM tipo_proveedores";
if ($result = mysqli_query($link,$con))
{
	$tipo_proveedores_ID_Tipo_Proveedor = [];
	$tipo_proveedores_Nombre = [];
	$tipo_proveedores_Descripcion = [];
	while ($row = mysqli_fetch_object($result))
	{
		array_push($tipo_proveedores_ID_Tipo_Proveedor, $row->ID_Tipo_Proveedor);
		array_push($tipo_proveedores_Nombre, $row->Nombre);
		array_push($tipo_proveedores_Descripcion, $row->Descripcion);
    }
    mysqli_free_result($result);
}

// Tabla direccion
$con = "SELECT * FROM direccion";
if ($result = mysqli_query($link,$con))
{
	$direccion_ID_Direccion = [];
	$direccion_Direccion = [];
	$direccion_Nombre_Local = [];
	$direccion_ID_Comuna = [];
	while ($row = mysqli_fetch_object($result))
	{
		array_push($direccion_ID_Direccion, $row->ID_Direccion);
		array_push($direccion_Direccion, $row->Direccion);
		array_push($direccion_Nombre_Local, $row->Nombre_Local);
		array_push($direccion_ID_Comuna, $row->ID_Comuna);
    }
    mysqli_free_result($result);
}

// Tabla categoria
$con = "SELECT * FROM categoria";
if ($result = mysqli_query($link,$con))
{
	$categoria_ID_Categoria = [];
	$categoria_Nombre = [];
	while ($row = mysqli_fetch_object($result))
	{
		array_push($categoria_ID_Categoria, $row->ID_Categoria);
		array_push($categoria_Nombre, $row->Nombre);
    }
    mysqli_free_result($result);
}

mysqli_close($link);
?>