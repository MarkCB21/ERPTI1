<?php

include "constantes.php";

$link = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);


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

$con = "SELECT * FROM proveedores";
if ($result = mysqli_query($link,$con))
{
	$Apellido_M=[];
	$Apellido_P=[];
	$Correo=[];
	$ID_Direccion=[];
	$ID_Prov=[];
	$ID_Rut=[];
	$Nombre_C=[];
	$Nombre_Compania=[];
	$Telefono=[];
	$Tipo_Proveedor=[];
	while ($row = mysqli_fetch_object($result))
	{
		array_push($Apellido_M, $row->Apellido_M);
		array_push($Apellido_P, $row->Apellido_P);
		array_push($Correo, $row->Correo);
		array_push($ID_Direccion, $row->ID_Direccion);
		array_push($ID_Prov, $row->ID_Prov);
		array_push($ID_Rut, $row->ID_Rut);
		array_push($Nombre_C, $row->Nombre_C);
		array_push($Nombre_Compania, $row->Nombre_Compania);
		array_push($Telefono, $row->Telefono);
		array_push($Tipo_Proveedor, $row->Tipo_Proveedor);
    }
    mysqli_free_result($result);
}
mysqli_close($link);
?>