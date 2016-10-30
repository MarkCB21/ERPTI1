<?php
	$con= mysqli_connect("localhost", "root", "", "erp-1");

	$proveedor = $_POST['Compania'];
	$rut = $_POST['ID_Rut'];
	$nomC = $_POST['Nombre_C'];
	$paterno = $_POST['Apellido_P'];
	$materno = $_POST['Apellido_M'];
	$correo = $_POST['Correo'];
	$telefono = $_POST['Telefono'];
	$direccion = $_POST['Direccion'];
	$nombreL = $_POST['Nombre_Local'];

	$gato = "SELECT ID_Prov 
		FROM proveedores 
		WHERE Nombre_Compania='$proveedor'";

	$con->query($gato);
	if($con->errno) die($con->error);

	$actualizar = "UPDATE proveedores 
					SET ID_Rut='$rut',
					Nombre_C='$nomC',
					Apellido_P='$paterno',
					Apellido_M='$materno',
					Correo='$correo',
					Telefono='$telefono', 
					WHERE ID_Prov='$gato'";

	$con->query($actualizar);
    if($con->errno) die($con->error);

	mysqli_close($con);
	header("location: Modulo_Proveedores.php");
?> 