<?php
	#Para evitar Modificar la DB execivamente algunas lineas estan Comentadas
	$link = mysqli_connect("localhost","root","","erp-1");
	$ID_Prov=$_GET['ID_Prov'];
	$Nombre_Producto=$_GET['nombre_producto'];
	$Cantidad=$_GET['cantidad'];
	$tipo_descuento=$_GET['tipo_descuento'];
	$descuento=$_GET['descuento'];
	$con="SELECT Precio_Unitario as Precio FROM productos where Nombre='$Nombre_Producto' AND ID_Prov=$ID_Prov;";
	$result=mysqli_query($link,$con);
	$row=mysqli_fetch_object($result);
	$precio=intval($row->Precio);
	$total=($Cantidad*$precio)-$descuento;
	$con="SELECT MAX(ID_Produc) AS ID_Produc FROM produc_com;";
	$result = mysqli_query($link,$con);
	$row = mysqli_fetch_object($result);
	$arch = intval($row->ID_Produc) +1;
	$url= "docs/ordcom$arch.txt";
	$con="INSERT INTO archivo VALUES(NULL,'$url');";
	#mysqli_query($link,$con);
	$con = "SELECT MAX(ID_Archivo) AS ID_Archivo FROM archivo;";
	$result = mysqli_query($link,$con);
	$row = mysqli_fetch_object($result);
	$ID_Archivo = "$row->ID_Archivo";
	$con="INSERT INTO documento VALUES(NULL,'Documento Venta $Nombre_Producto','$ID_Archivo');";
	#mysqli_query($link,$con);
	$con="SELECT MAX(ID_Doc) FROM documento";
	$result=mysqli_query($link,$con);
	$row=mysqli_fetch_object($result);
	$ID_Doc=intval($row->ID_Doc);
	$con="INSERT INTO compra_producto(Cantidad,Fecha,ID_Compra,ID_Doc,Total) VALUES($Cantidad,CURDATE(),NULL,$ID_Doc,$total";
	#mysqli_query($link,$con);
	$con="SELECT MAX(ID_Compra) FROM compra_producto";
	$result=mysqli_query($link,$con);
	$row=mysqli_fetch_object($result);
	$ID_Compra=intval($row->ID_Compra);
	$con="SELECT MAX(ID_Prod) FROM productos";
	$result=mysqli_query($link,$con);
	$row=mysqli_fetch_object($result);
	$ID_Prod=intval($row->ID_Prod);
	if($tipo_descuento=="descuento_%"){
		$descuento2=$descuento;
		$descuento1=0;
	}
	else{
		$descuento1=$descuento;
		$descuento2=0;
	}
	$con="INSERT INTO produc_com(Anulado,Cantidad,Descuento,Descuento_Porcentaje,ID_Compra,ID_Prod,ID_Produc,Total_Inventario) VALUES(0,$Cantidad,$descuento1,$descuento2,$ID_Compra,$ID_Prod,NULL,";
	#header("location:Realizar_Orden_de_Compra.php");
?>