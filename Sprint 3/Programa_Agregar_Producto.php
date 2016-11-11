<?php
include 'constantes.php';
if(isset($_POST['ID_Prov']) && isset($_POST['ID_Categoria']) && isset($_POST['Nombre']) && isset($_POST['Medida']) && isset($_POST['Precio_Unitario']))
{
	$ID_Prov=$_POST['ID_Prov'];
	$ID_Categoria=$_POST['ID_Categoria'];
	$Nombre=$_POST['Nombre'];
	$Medida=$_POST['Medida'];
	$Precio_Unitario=$_POST['Precio_Unitario'];

	$link = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

	$query = "INSERT INTO productos VALUES(NULL,'$ID_Categoria','$Nombre','$Precio_Unitario',CURDATE(),CURDATE(),'$Medida','$ID_Prov');";
	mysqli_query($link,$query);

	mysqli_close($link);
}
header("location: Modulo_Productos.php")
?>