<?php
	include "constantes.php";
	
	$link= mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

	$ID_Prov = $_POST['ID_Prov']
	$ID_Rut = $_POST['ID_Rut'];
	$Nombre_C = $_POST['Nombre_C'];
	$Apellido_P = $_POST['Apellido_P'];
	$Apellido_M = $_POST['Apellido_M'];
	$Correo = $_POST['Correo'];
	$Telefono = $_POST['Telefono'];
	$Direccion = $_POST['Direccion'];
	$Nombre_Local = $_POST['Nombre_Local'];
	$Comuna = $_POST['Comuna'];
	$con = "SELECT ID_Comuna 
				FROM comuna
			WHERE Nombre_Comuna='$Comuna';";

	$result = mysqli_query($link,$con);
	$row = mysql_fetch_object($result);
	$ID_Comuna = "$row->ID_Comuna";
	mysql_free_result($result);

	$con = "UPDATE proveedores 
				SET 
					ID_Rut='$ID_Rut',
					Nombre_C='$Nombre_C',
					Apellido_P='$Apellido_P',
					Apellido_M='$Apellido_M',
					Correo='$Correo',
					Telefono='$Telefono' 
				WHERE
					ID_Prov='$ID_Prov';

			INSERT INTO direccion
				VALUES(
					NULL,
					'$Direccion',
					'$Nombre_Local',
					'$ID_Comuna'
				);
			";

	mysqli_query($link,$con)

	mysqli_close($link);

	header("location: Modulo_Proveedores.php");
?> 