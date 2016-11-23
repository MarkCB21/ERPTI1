<?php include "tablas.php"; 

include "aside.php";

if(isset($_POST['ID_Prov']))
{
	$ID_Prov = $_POST['ID_Prov'];
}
else
{
	header("location: Modulo_Proveedores.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<link href="style/style.css" rel="stylesheet" type="text/css">
		<link href="diseños/style.css" rel="stylesheet" type="text/css">
		<title></title>
		<script>

		</script>
	</head>
	<body onload="">
		<div id='main'>
		<div class='form-head'>Modificar Proveedor</div><div class='return' onclick='history.back(1)'>Volver</div>
		<div class='container'>
			<form action="Programa_Modificar_Proveedor.php" method="POST">
				<?php
				echo "
					<div>
						<label for='Nombre_Compania' class='form-label'>Nombre Compania</label>
						<input id='Nombre_Compania' class='form-control' type='text' value='".$proveedores_Nombre_Compania[(int)$ID_Prov-1]."' readonly>
					</div>
					<div>
						<label for='ID_Rut' class='form-label'>Rut</label>
						<input id='ID_Rut' class='form-control' type='text' value='".$proveedores_ID_Rut[(int)$ID_Prov-1]."' readonly>
					</div>
					<div>
						<label for='Nombre_C' class='form-label'>Nombre Completo</label>
						<input id='Nombre_C' name='Nombre_C' class='form-control' type='text' value='".$datos_Nombres[(int)$proveedores_ID_Datos[(int)$ID_Prov-1]-1]."'>
					</div>
					<div>
						<label for='Apellido_P' class='form-label'>Apellido Paterno</label>
						<input id='Apellido_P' name='Apellido_P' class='form-control' type='text' value='".$datos_Apellidop[(int)$proveedores_ID_Datos[(int)$ID_Prov-1]-1]."'>
					</div>
					<div>
						<label for='Apellido_M' class='form-label'>Apellido Materno</label>
						<input id='Apellido_M' name='Apellido_M' class='form-control' type='text' value='".$datos_ApellidoM[(int)$proveedores_ID_Datos[(int)$ID_Prov-1]-1]."'>
					</div>
					<div>
						<label for='Correo' class='form-label'>Correo</label>
						<input id='Correo' name='Correo' class='form-control' type='text' value='".$datos_Correo[(int)$proveedores_ID_Datos[(int)$ID_Prov-1]-1]."'>
					</div>
					<div>
						<label for='Telefono' class='form-label'>Telefono</label>
						<input id='Telefono' name='Telefono' class='form-control' type='text' value='".$datos_Telefono[(int)$proveedores_ID_Datos[(int)$ID_Prov-1]-1]."'>
					</div>	
					<div>
						<label for='Direccion' class='form-label'>Direccion</label>
						<input id='Direccion' name='Direccion' class='form-control' type='text' value='".$direccion_Direccion[(int)$datos_ID_direccion[(int)$proveedores_ID_Datos[(int)$ID_Prov-1]-1]-1]."'>
					</div>
					<div>
						<label for='Comuna' class='form-label'>Comuna</label>
						<input id='Comuna' name='Comuna' class='form-control' type='text' value='".$comuna_Nombre_Comuna[(int)$direccion_ID_Comuna[(int)$datos_ID_direccion[(int)$proveedores_ID_Datos[(int)$ID_Prov-1]-1]-1]-1]."'>
					</div>
					<div>
						<label for='Nombre_Local' class='form-label'>Nombre Local</label>
						<input id='Nombre_Local' name='Nombre_Local' class='form-control' type='text' value='".$direccion_Nombre_Local[(int)$datos_ID_direccion[(int)$proveedores_ID_Datos[(int)$ID_Prov-1]-1]-1]."'>
					</div>
					<div>
						<input name='ID_Prov' type='hidden' value='$ID_Prov'>
					</div>
					<div>
						<input name='ID_Datos' type='hidden' value='".$datos_ID_Datos[(int)$proveedores_ID_Datos[(int)$ID_Prov-1]-1]."'>
					</div>
				";
				?>
				<center>
					<input class="btn" type="submit" value="Modificar">
					<input class="btn" type="button" value="Cancelar" onclick="window.location='Modulo_Proveedores.php'">
				</center>
			</form>
		</div>
		</div>
	</body>
</html>