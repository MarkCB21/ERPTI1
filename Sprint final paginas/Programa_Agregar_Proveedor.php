<?php
include 'constantes.php';

if (isset($_POST['Nombre_Compania']) && isset($_POST['Nombre_Local']) && isset($_POST['ID_Rut']) && isset($_POST['Direccion']) && isset($_POST['region']) && isset($_POST['comuna']) && isset($_POST['Tipo_Proveedor']) && isset($_POST['Nombre_C']) && isset($_POST['Apellido_P']) && isset($_POST['Apellido_M']) && isset($_POST['rut']) && isset($_POST['Correo']) && isset($_POST['Telefono']))
{	
	$Nombre_Compania=$_POST['Nombre_Compania'];
	$Nombre_Local=$_POST['Nombre_Local'];
	$ID_Rut=$_POST['ID_Rut'];
	$Direccion=$_POST['Direccion'];
	$Comuna=$_POST['comuna'];
	$Tipo_Proveedor=$_POST['Tipo_Proveedor'];
	$Nombre_C=$_POST['Nombre_C'];
	$Apellido_P=$_POST['Apellido_P'];
	$Apellido_M=$_POST['Apellido_M'];
	$Rut=$_POST['rut'];
	$Correo=$_POST['Correo'];
	$Telefono=$_POST['Telefono'];
	echo $Comuna;

	$link = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
	$con="INSERT INTO direccion VALUES(NULL,'$Direccion', '$Nombre_Local', '$Comuna');";
	mysqli_query($link, $con);
	$sql=mysqli_query($link, $con);
	$con="SELECT ID_Direccion FROM direccion WHERE Direccion='$Direccion' AND Nombre_Local='$Nombre_Local';";
	if($result=mysqli_query($link, $con)){
		$ID_Direccion=[];
			while ($row = mysqli_fetch_object($result)){
				array_push($ID_Direccion, $row->ID_Direccion);
			}
		mysqli_free_result($result);
		}
	$con="INSERT INTO datos VALUES(NULL,'$Rut','$Nombre_C','$Apellido_P','Apellido_M','$Correo','$Telefono','$ID_Direccion[0]');";
	mysqli_query($link, $con);
	$sql=mysqli_query($link, $con);
	$con="SELECT ID_Datos FROM datos WHERE rut='$Rut';";
	if($result=mysqli_query($link, $con)){
		$ID_Datos=[];
			while ($row = mysqli_fetch_object($result)){
				array_push($ID_Datos, $row->ID_Datos);
			}
		mysqli_free_result($result);
		}
	$con="INSERT INTO proveedores VALUES(NULL,'$Nombre_Compania','$Tipo_Proveedor','$ID_Rut', '$ID_Datos[0]');";
	echo $con;
	$sql=mysqli_query($link, $con);
	mysqli_close($link);
	}
header("location: Modulo_Proveedores.php");
?>