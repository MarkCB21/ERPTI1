<?php
	$link = mysqli_connect("localhost","root","","erp-1");
	$ID_Prov=$_GET['ID_Prov'];
	$Nombre_Producto=$_GET['nombre_producto'];
	$Cantidad=$_GET['cantidad'];
	$tipo_descuento=$_GET['tipo_descuento'];
	$descuento=$_GET['descuento'];
	$con="SELECT ID_Prod, Precio_Unitario as Precio FROM productos where descripcion='$Nombre_Producto' AND ID_Prov=$ID_Prov;";
	$result=mysqli_query($link,$con);
	$row=mysqli_fetch_object($result);
	$precio=intval($row->Precio);
	$ID_Prod=intval($row->ID_Prod);
	$con="SELECT MAX(ID_Prod) AS ID_Prod FROM produc_com;";
	$result = mysqli_query($link,$con);
	$row = mysqli_fetch_object($result);
	$arch = intval($row->ID_Prod) +1;
	$url= "docs/ordcom$arch.txt";
	$con = "SELECT MAX(ID_Archivo) AS ID_Archivo FROM archivo;";
	$result = mysqli_query($link,$con);
	$row = mysqli_fetch_object($result);
	$ID_Archivo = "$row->ID_Archivo";
	$con="SELECT MAX(ID_Doc) AS ID_Doc FROM documento";
	$result=mysqli_query($link,$con);
	$row=mysqli_fetch_object($result);
	$ID_Doc=intval($row->ID_Doc);
	$con="SELECT MAX(ID_Compra) AS ID_Compra FROM compra_producto";
	$result=mysqli_query($link,$con);
	$row=mysqli_fetch_object($result);
	$ID_Compra=intval($row->ID_Compra);
	if($tipo_descuento=="descuento_%"){
		$descuento2=$descuento;
		$descuento1=0;
	}
	else{
		$descuento1=$descuento;
		$descuento2=0;
	}
	$total=($Cantidad*$precio)-($precio*$descuento2/100)-$descuento1;	

	$con="INSERT INTO archivo VALUES(NULL,'$url');";
	mysqli_query($link,$con);
	$con="INSERT INTO documento VALUES(NULL,'Documento Venta $Nombre_Producto','$ID_Archivo');";
	mysqli_query($link,$con);
	$con="INSERT INTO compra_producto VALUES(NULL,'$Cantidad','$total',CURDATE(),'$ID_Doc');";
	mysqli_query($link,$con);
	$con="INSERT INTO produc_com VALUES(NULL,'$ID_Compra','$ID_Prod','$Cantidad','$descuento2','$descuento1','$Cantidad','0');";
	mysqli_query($link,$con);	
	header("location:Modulo_Orden_de_Compra.php");
?>