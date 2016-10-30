<?php
	#Para evitar Modificar la DB execivamente algunas lineas estan Comentadas
	include "../Sprint 2/tablas.php";
	$ID_Prov=$_GET['ID_Prov'];
	$Nombre_Producto=$_GET['nombre_producto'];
	$Cantidad=$_GET['cantidad'];
	$tipo_descuento=$_GET['tipo_descuento'];
	$descuento=$_GET['descuento'];
	$link = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
	$con="SELECT MAX(ID_Produc) AS ID_Produc FROM produc_com;";
	$result = mysqli_query($link,$con);
	$row = mysqli_fetch_object($result);
	$arch = intval($row->ID_Produc) +1;
	$url= "docs/ordcom$arch.txt";
	#$con="INSERT INTO archivo VALUES(NULL,'$url');";
	#mysqli_query($link,$con);
	$con = "SELECT MAX(ID_Archivo) AS ID_Archivo FROM archivo;";
	$result = mysqli_query($link,$con);
	$row = mysqli_fetch_object($result);
	$ID_Archivo = "$row->ID_Archivo";
	echo $ID_Archivo;
	#$con="INSERT INTO documento VALUES(NULL,'Documento Venta $Nombre_Producto','$ID_Archivo');";
	#mysqli_query($link,$con);
	#header("location:Realizar_Orden_de_Compra.php");
?>