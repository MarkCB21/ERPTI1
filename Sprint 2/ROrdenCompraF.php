<?php
	#Para evitar Modificar la DB execivamente algunas lineas estan Comentadas
	include "../Sprint 2/tablas.php";
	$ID_Prov=$_GET['ID_Prov'];
	$Nombre_Producto=$_GET['nombre_producto'];
	$Cantidad=$_GET['cantidad'];
	$tipo_descuento=$_GET['tipo_descuento'];
	$descuento=$_GET['descuento'];
	$link = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
	$con="SELECT max(ID_Produc) as id_product FROM produc_com";
	$result = mysqli_query($link,$con);
	$row = mysqli_fetch_object($result);
	$arch = intval($row->id_product) +1;
	$url= "docs/ordcom$arch.txt";
	$con="Insert into archivo(Ruta_Archivo) values('$url')";
	#mysqli_query($link,$con);
	$con = "select max(ID_Archivo) as ID_Archivo from archivo;";
	$row = mysqli_query($link,$con);
	$id_archivo = "$row->ID_Archivo";
	echo $id_archivo;
	#$con="Insert into documento(Descripcion) values(Descripcion)";
	#mysqli_query($link,$con);
	#header("location:Realizar_Orden_de_Compra.php");
?>