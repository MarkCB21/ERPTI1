<?php
	include "constantes.php";
	
	$link= mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

	$ID_Prov = $_POST['ID_Prov'];
	$Nombre_C = $_POST['Nombre_C'];
	$Apellidop=$_POST['Apellido_P'];
	$ApellidoM=$_POST['Apellido_M'];
	$Correo = $_POST['Correo'];
	$Telefono = $_POST['Telefono'];
	$Direccion = $_POST['Direccion'];
	$Nombre_Local = $_POST['Nombre_Local'];
	$Comuna = $_POST['Comuna'];
	$Rut = $_POST['ID_Rut'];
	$Datos = $_POST['ID_Datos'];
	
	$con = "SELECT ID_Comuna FROM comuna WHERE Nombre_Comuna='$Comuna';";
	echo "$con<br>";
	$result = mysqli_query($link,$con);
	$row = mysqli_fetch_object($result);
	$ID_Comuna = "$row->ID_Comuna";
	mysqli_free_result($result);

	$con = "SELECT ID_Direccion FROM direccion WHERE Direccion='$Direccion' AND Nombre_Local='$Nombre_Local' AND ID_Comuna='$ID_Comuna';";
	echo "$con<br>";
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


	$con = "UPDATE proveedores SET Nombre_Compania='$Nombre_C', ID_Rut ='$Rut'  WHERE ID_Prov='$ID_Prov';";
	echo "$con<br>";
	mysqli_query($link,$con);

	$con = "UPDATE datos SET Nombres='$Nombre_C', Apellidop='$Apellidop',ApellidoM='$ApellidoM', Correo='$Correo', Telefono='$Telefono'  WHERE ID_Datos='$Datos';";
	echo "$con<br>";
	mysqli_query($link,$con);

	$con = "UPDATE `direccion` SET'Nombre_Local' ='$Nombre_Local', 'Direccion' = '$Direccion' WHERE `ID_Direccion` = $Direccion;";
	echo "$con<br>";
	mysqli_query($link,$con);
 
 	$con = "UPDATE comuna SET Nombre_Comuna = '$Nombre_Comuna'  WHERE ID_Comuna= '$ID_Comuna';";
	echo "$con<br>";
	mysqli_query($link,$con);


	mysqli_close($link);

	header("location: Modulo_Proveedores.php");
?> 