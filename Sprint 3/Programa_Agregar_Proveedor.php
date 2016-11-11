<?php
include 'constantes.php';

if (isset($_POST['Nombre_Compania']) && isset($_POST['Tipo_Proveedor']) && isset($_POST['ID_Rut']) && isset($_POST['Nombre_C']) && isset($_POST['Apellido_P']) && isset($_POST['Apellido_M']) && isset($_POST['Correo']) && isset($_POST['Telefono']) && isset($_POST['Direccion']) && isset($_POST['Nombre_Local']) && isset($_POST['Comuna']))
{	
	$Nombre_Compania=$_POST['Nombre_Compania'];
	$Tipo_Proveedor=$_POST['Tipo_Proveedor'];
	$ID_Rut=$_POST['ID_Rut'];
	$Nombre_C=$_POST['Nombre_C'];
	$Apellido_P=$_POST['Apellido_P'];
	$Apellido_M=$_POST['Apellido_M'];
	$Correo=$_POST['Correo'];
	$Telefono=$_POST['Telefono'];
	$Direccion=$_POST['Direccion'];
	$Nombre_Local=$_POST['Nombre_Local'];
	$Comuna=$_POST['Comuna'];

	$link = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

	$con = "SELECT ID_Comuna FROM comuna WHERE Nombre_Comuna='$Comuna';";
	$result = mysqli_query($link,$con);
	$row = mysqli_fetch_object($result);
	$ID_Comuna = "$row->ID_Comuna";

	$con = "SELECT ID_Direccion FROM direccion WHERE Direccion='$Direccion' AND Nombre_Local='$Nombre_Local' AND ID_Comuna='$ID_Comuna';";
	$result = mysqli_query($link,$con);
	if(mysqli_num_rows($result)<1)
	{	
		$con = "INSERT INTO direccion VALUES(NULL,'$Direccion','$Nombre_Local','$ID_Comuna');";
		mysqli_query($link,$con);
		echo "$con<br>";
	}
	$con = "SELECT ID_Direccion FROM direccion WHERE Direccion='$Direccion' AND Nombre_Local='$Nombre_Local' AND ID_Comuna='$ID_Comuna';";
	$result = mysqli_query($link,$con);
	$row = mysqli_fetch_object($result);
	$ID_Direccion = intval($row->ID_Direccion);
	echo "$con<br>";
	echo "$ID_Direccion<br>";

	$con = "INSERT INTO proveedores VALUES(NULL,'$Nombre_Compania','$Tipo_Proveedor','$ID_Rut','$Nombre_C','$Apellido_P','$Apellido_M','$Correo','$Telefono','$ID_Direccion');";
	echo $con;
	mysqli_query($link,$con);

	mysqli_close($link);
}
header("location: Modulo_Proveedores.php");
?>