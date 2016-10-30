<?php
	$con= mysqli_connect("localhost", "root", "", "erp-1");

	$ID_Prov = $_POST['ID_Prov'];
	$proveedor = $_POST['Compania'];
	$rut = $_POST['ID_Rut'];
	$nomC = $_POST['Nombre_C'];
	$paterno = $_POST['Apellido_P'];
	$materno = $_POST['Apellido_M'];
	$correo = $_POST['Correo'];
	$telefono = $_POST['Telefono'];
	$nombreL = $_POST['Nombre_Local'];

	$actualizar = "UPDATE proveedores 
					SET Nombre_Compania='$proveedor',
					ID_Rut='$rut',
					Nombre_C='$nomC',
					Apellido_P='$paterno',
					Apellido_M='$materno',
					Correo='$correo',
					Telefono='$telefono'
					WHERE ID_Prov='$ID_Prov'";

	$con->query($actualizar);
    if($con->errno) die($con->error);

	mysqli_close($con);
	header("location: Modulo_Proveedores.php");
?> 