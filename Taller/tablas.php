<?php
include "constantes.php";
$link = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Consulta Modelo
$con = "SELECT ID_Region, Nombre_Region FROM region";
if ($result = mysqli_query($link,$con))
{
	$Nombre_Region = [];
	$ID_Region = [];
	while ($row = mysqli_fetch_object($result))
	{
		array_push($Nombre_Region, $row->Nombre_Region);
		array_push($ID_Region, $row->ID_Region);
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
$con = mysqli_connect("localhost","root","","erp-1");

			if(mysqli_connect_errno()){
				echo "No se puede conectar a la base de datos". mysqli_connect_error();
			}

			
				
			$Nombre= mysqli_real_escape_string($con, $_POST["Nombre"]);	
			$Medida = mysqli_real_escape_string($con, $_POST["Medida"]);	
			$Precio_Unitario = mysqli_real_escape_string($con, $_POST["Precio_Unitario"]);	

			$sql="INSERT INTO productos (Nombre,Medida,Precio_Unitario)
			VALUES ('$Nombre','$Medida','$Precio_Unitario')";	
			if(!mysqli_query($con,$sql)){
				die('ERROR:'. mysqli_error($con));
			}
			else{
		
				echo "conexion realizada exitosamente";
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