<?php
	include "constantes.php";
	
	$link= mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

	$ID_Prov = $_POST['ID_Prov'];
	$Nombre_C = $_POST['Nombre_C'];
	$Apellido_P = $_POST['Apellido_P'];
	$Apellido_M = $_POST['Apellido_M'];
	$Correo = $_POST['Correo'];
	$Telefono = $_POST['Telefono'];
	$Direccion = $_POST['Direccion'];
	$Nombre_Local = $_POST['Nombre_Local'];
	$Comuna = $_POST['Comuna'];
	
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


	$con = "UPDATE proveedores SET Nombre_C='$Nombre_C',Apellido_P='$Apellido_P',Apellido_M='$Apellido_M',Correo='$Correo',Telefono='$Telefono',ID_Direccion='$ID_Direccion' WHERE ID_Prov='$ID_Prov';";
	echo "$con<br>";
	mysqli_query($link,$con);

	mysqli_close($link);

	header("location: Modulo_Proveedores.php");
?> 