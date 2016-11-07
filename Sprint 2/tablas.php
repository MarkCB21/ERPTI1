<?php

/*
if ($result = mysqli_query($link,$con))
{
	while ($row = mysqli_fetch_object($result))
	{
		array_push(array, $row->);
	}
	mysqli_free_result($result);
}
*/

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
$con = "SELECT * FROM comuna";
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

// Tabla datos
$con = "SELECT * FROM datos";
if ($result = mysqli_query($link,$con))
{
	$datos_ID_Datos = [];
	$datos_rut = [];
	$datos_Nombres = [];
	$datos_Apellidop = [];
	$datos_ApellidoM = [];
	$datos_Correo = [];
	$datos_Telefono = [];
	$datos_ID_Direccion = [];
	while ($row = mysqli_fetch_object($result))
	{
		array_push($datos_ID_Datos, $row->ID_Datos);
		array_push($datos_rut, $row->rut);
		array_push($datos_Nombres, $row->Nombres);
		array_push($datos_Apellidop, $row->Apellidop);
		array_push($datos_ApellidoM, $row->ApellidoM);
		array_push($datos_Correo, $row->Correo);
		array_push($datos_Telefono, $row->Telefono);
		array_push($datos_ID_Direccion, $row->ID_Direccion);
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

// Tabla proveedores
$con = "SELECT * FROM proveedores";
if ($result = mysqli_query($link,$con))
{
	$proveedores_ID_Prov = [];
	$proveedores_Nombre_Compania = [];
	$proveedores_Tipo_Proveedor = [];
	$proveedores_ID_Rut = [];
	$proveedores_ID_Datos = [];
	while ($row = mysqli_fetch_object($result))
	{
		array_push($proveedores_ID_Prov, $row->ID_Prov);
		array_push($proveedores_Nombre_Compania, $row->Nombre_Compania);
		array_push($proveedores_Tipo_Proveedor, $row->Tipo_Proveedor);
		array_push($proveedores_ID_Rut, $row->ID_Rut);
		array_push($proveedores_ID_Datos, $row->ID_Datos);
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

// Tabla productos
$con = "SELECT * FROM productos";
if ($result = mysqli_query($link,$con))
{
	$productos_ID_Prod = [];
	$productos_ID_Categoria = [];
	$productos_Descripcion = [];
	$productos_Precio_Unitario = [];
	$productos_Fecha_Agregado = [];
	$productos_ID_Prov = [];
	while ($row = mysqli_fetch_object($result))
	{
		array_push($productos_ID_Prod, $row->ID_Prod);
		array_push($productos_ID_Categoria, $row->ID_Categoria);
		array_push($productos_Descripcion, $row->Descripcion);
		array_push($productos_Precio_Unitario, $row->Precio_Unitario);
		array_push($productos_Fecha_Agregado, $row->Fecha_Agregado);
		array_push($productos_ID_Prov, $row->ID_Prov);

	}
	mysqli_free_result($result);
}

// Tabla archivo
$con = "SELECT * FROM archivo";
if ($result = mysqli_query($link,$con))
{
	$archivo_ID_Archivo = [];
	$archivo_Ruta_Archivo = [];
	while ($row = mysqli_fetch_object($result))
	{
		array_push($archivo_ID_Archivo, $row->ID_Archivo);
		array_push($archivo_Ruta_Archivo, $row->Ruta_Archivo);
	}
	mysqli_free_result($result);
}

// Tabla documento
$con = "SELECT * FROM documento";
if ($result = mysqli_query($link,$con))
{
	$documento_ID_Doc
	$documento_Descripcion
	$documento_ID_Archivo
	while ($row = mysqli_fetch_object($result))
	{
		array_push($documento_ID_Doc, $row->ID_Doc);
		array_push($documento_Descripcion, $row->Descripcion);
		array_push($documento_ID_Archivo, $row->ID_Archivo);
	}
	mysqli_free_result($result);
}

// Tabla login_usuario
$con = "SELECT * FROM login_usuario";
if ($result = mysqli_query($link,$con))
{
	$login_usuario_ID_L = [];
	$login_usuario_Nombre_Cuenta = [];
	$login_usuario_Contrasena = [];
	$login_usuario_Tipo = [];
	$login_usuario_Estado = [];
	$login_usuario_ID_Datos = [];
	while ($row = mysqli_fetch_object($result))
	{
		array_push($login_usuario_ID_L, $row->ID_L);
		array_push($login_usuario_Nombre_Cuenta, $row->Nombre_Cuenta);
		array_push($login_usuario_Contrasena, $row->Contrasena);
		array_push($login_usuario_Tipo, $row->Tipo);
		array_push($login_usuario_Estado, $row->Estado);
		array_push($login_usuario_ID_Datos, $row->ID_Datos);
	}
	mysqli_free_result($result);
}

// Tabla datos_compania
$con = "SELECT * FROM datos_compania";
if ($result = mysqli_query($link,$con))
{
	$datos_compania_ID_Compania = [];
	$datos_compania_Razon_Social = [];
	$datos_compania_Rut = [];
	$datos_compania_ID_Direccion = [];
	$datos_compania_Telefono = [];
	$datos_compania_Fax = [];
	$datos_compania_ID_Membrete = [];
	while ($row = mysqli_fetch_object($result))
	{
		array_push($datos_compania_ID_Compania, $row->ID_Compania);
		array_push($datos_compania_Razon_Social, $row->Razon_Social);
		array_push($datos_compania_Rut, $row->Rut);
		array_push($datos_compania_ID_Direccion, $row->ID_Direccion);
		array_push($datos_compania_Telefono, $row->Telefono);
		array_push($datos_compania_Fax, $row->Fax);
		array_push($datos_compania_ID_Membrete, $row->ID_Membrete);
	}
	mysqli_free_result($result);
}

// Tabla compra_producto
$con = "SELECT * FROM compra_producto";
if ($result = mysqli_query($link,$con))
{
	$compra_producto_ID_Compra = [];
	$compra_producto_Fecha_emision = [];
	$compra_producto_ID_Doc = [];
	$compra_producto_ID_login_usuario = [];
	$compra_producto_ID_Compania = [];
	$compra_producto_ID_proveedor = [];
	$compra_producto_anulado = [];
	$compra_producto_ID_Total_compras = [];
	while ($row = mysqli_fetch_object($result))
	{
		array_push($compra_producto_ID_Compra, $row->ID_Compra);
		array_push($compra_producto_Fecha_emision, $row->Fecha_emision);
		array_push($compra_producto_ID_Doc, $row->ID_Doc);
		array_push($compra_producto_ID_login_usuario, $row->ID_login_usuario);
		array_push($compra_producto_ID_Compania, $row->ID_Compania);
		array_push($compra_producto_ID_proveedor, $row->ID_proveedor);
		array_push($compra_producto_anulado, $row->anulado);
		array_push($compra_producto_ID_Total_compras, $row->ID_Total_compras);
	}
	mysqli_free_result($result);
}

// Tabla produc_com
$con = "SELECT * FROM produc_com";
if ($result = mysqli_query($link,$con))
{
	$produc_com_ID_Compraproducto = [];
	$produc_com_ID_Compra = [];
	$produc_com_ID_Prod = [];
	$produc_com_Cantidad = [];
	$produc_com_Descuento_Porcentaje = [];
	$produc_com_Descuento = [];
	$produc_com_Total_Producto = [];
	while ($row = mysqli_fetch_object($result))
	{
		array_push($produc_com_ID_Compraproducto, $row->ID_Compraproducto);
		array_push($produc_com_ID_Compra, $row->ID_Compra);
		array_push($produc_com_ID_Prod, $row->ID_Prod);
		array_push($produc_com_Cantidad, $row->Cantidad);
		array_push($produc_com_Descuento_Porcentaje, $row->Descuento_Porcentaje);
		array_push($produc_com_Descuento, $row->Descuento);
		array_push($produc_com_Total_Producto, $row->Total_Producto);
	}
	mysqli_free_result($result);
}

mysqli_close($link);
?>