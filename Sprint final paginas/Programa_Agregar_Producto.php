<?php
include 'constantes.php';
if(isset($_POST['ID_Prov']) && isset($_POST['ID_Categoria']) && isset($_POST['Descripcion']) && isset($_POST['Precio_Unitario']) && isset($_POST['Fecha_Agregado']))
{
	$ID_Prov=$_POST['ID_Prov'];
	$ID_Categoria=$_POST['ID_Categoria'];
	$Descripcion=$_POST['Descripcion'];
	$Precio_Unitario=$_POST['Precio_Unitario'];
	$Fecha_Agregado=$_POST['Fecha_Agregado'];

	$link = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

	$query = "INSERT INTO productos VALUES(NULL,'$ID_Categoria','$Descripcion','$Precio_Unitario','$Fecha_Agregado','$ID_Prov');";
	mysqli_query($link,$query);

	mysqli_close($link);
}
header("location: Modulo_Productos.php")
?>
