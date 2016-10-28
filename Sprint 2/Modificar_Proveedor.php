<?php include "tablas.php"; 

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
		<link href="../style/style.css" rel="stylesheet" type="text/css">
		<title></title>
		<script>

		</script>
	</head>
	<body onload="actdiv()">
		<div class='cosa'>layout</div>
		<div class='form-head'>Modificar Proveedor</div>
		<div class='container'>
			<form>
				<?php
				echo "
					<div>
						<label for='Nombre_Compania' class='form-label'>Nombre Compania</label>
						<input id='Nombre_Compania' class='form-control' type='text' value='".$proveedores_Nombre_Compania[intval($ID_Prov)-1]."' readonly>
					</div>
					<div>
						<label for='ID_Rut' class='form-label'>Rut</label>
						<input id='ID_Rut' name='ID_Rut' class='form-control' type='text' value='".$proveedores_ID_Rut[intval($ID_Prov)-1]."'>
					</div>
					<div>
						<label for='Nombre_C' class='form-label'>Nombre Completo</label>
						<input id='Nombre_C' name='Nombre_C' class='form-control' type='text' value='".$proveedores_Nombre_C[intval($ID_Prov)-1]."'>
					</div>
					<div>
						<label for='Apellido_P' class='form-label'>Apellido Paterno</label>
						<input id='Apellido_P' name='Apellido_P' class='form-control' type='text' value='".$proveedores_Apellido_P[intval($ID_Prov)-1]."'>
					</div>
					<div>
						<label for='Apellido_M' class='form-label'>Apellido Materno</label>
						<input id='Apellido_M' name='Apellido_M' class='form-control' type='text' value='".$proveedores_Apellido_M[intval($ID_Prov)-1]."'>
					</div>
					<div>
						<label for='Correo' class='form-label'>Correo</label>
						<input id='Correo' name='Correo' class='form-control' type='text' value='".$proveedores_Correo[intval($ID_Prov)-1]."'>
					</div>
					<div>
						<label for='Telefono' class='form-label'>Telefono</label>
						<input id='Telefono' name='Telefono' class='form-control' type='text' value='".$proveedores_Telefono[intval($ID_Prov)-1]."'>
					</div>	
					<div>
						<label for='Direccion' class='form-label'>Direccion</label>
						<input id='Direccion' name='Direccion' class='form-control' type='text' value='".$direccion_Direccion[intval($proveedores_ID_Direccion[intval($ID_Prov)-1])-1]."'>
					</div>
					<div>
						<label for='Nombre_Local' class='form-label'>Nombre Local</label>
						<input id='Nombre_Local' name='Nombre_Local' class='form-control' type='text' value='".$direccion_Nombre_Local[intval($proveedores_ID_Direccion[intval($ID_Prov)-1])-1]."'>
					</div>
				";
				?>
				<center>
					<input class="btn" type="submit" value="Modificar">
					<input class="btn" type="button" value="Cancelar" onclick="window.location='Modulo_Proveedores.php'">
				</center>
			</form>
		</div>
	</body>
</html>