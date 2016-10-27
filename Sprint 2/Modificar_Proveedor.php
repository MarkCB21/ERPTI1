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
			function actdiv()
			{
				ID_Prov = document.getElementById('Nombre_Compania').value
				Datos = document.getElementById('datos_proveedor_'+ID_Prov).innerHTML
				document.getElementById('datos_proveedor').innerHTML = Datos
			}
		</script>
	</head>
	<body onload="actdiv()">
		<div class='cosa'>layout</div>
		<div class='form-head'>Modificar Proveedor</div>
		<div class='container'>
			<form>
				<div>
					<label for="Nombre_Compania" class="form-label">Nombre Compania</label>
					<select id="Nombre_Compania" class="form-control" name="Nombre_Compania" onchange="actdiv()" value=<?php echo "'$ID_Prov'"; ?>>
						<?php 
						for ($i=0; $i < count($proveedores_ID_Prov); $i++)
						{ 
							echo "<option value='$proveedores_ID_Prov[$i]'>$proveedores_Nombre_Compania[$i]</option>";
						}
						?>
					</select>
				</div>
				<?php
				for ($i=0; $i < count($proveedores_ID_Prov); $i++) { 
					echo "
					<form id='datos_proveedor_$proveedores_ID_Prov[$i]' hidden>
						<div>
							<label for='Tipo_Proveedor' class='form-label'>Tipo Proveedor</label>
							<input id='Tipo_Proveedor' class='form-control' type='text' value='".$tipo_proveedores_Nombre[intval($proveedores_Tipo_Proveedor[$i])-1]."'>
						</div>
						<div>
							<label for='ID_Rut' class='form-label'>Rut</label>
							<input id='ID_Rut' class='form-control' type='text' value='$proveedores_ID_Rut[$i]'>
						</div>
						<div>
							<label for='Nombre_C' class='form-label'>Nombre Completo</label>
							<input id='Nombre_C' class='form-control' type='text' value='$proveedores_Nombre_C[$i]'>
						</div>
						<div>
							<label for='Apellido_P' class='form-label'>Apellido Paterno</label>
							<input id='Apellido_P' class='form-control' type='text' value='$proveedores_Apellido_P[$i]'>
						</div>
						<div>
							<label for='Apellido_M' class='form-label'>Apellido Materno</label>
							<input id='Apellido_M' class='form-control' type='text' value='$proveedores_Apellido_M[$i]'>
						</div>
						<div>
							<label for='Correo' class='form-label'>Correo</label>
							<input id='Correo' class='form-control' type='text' value='$proveedores_Correo[$i]'>
						</div>
						<div>
							<label for='Telefono' class='form-label'>Telefono</label>
							<input id='Telefono' class='form-control' type='text' value='$proveedores_Telefono[$i]'>
						</div>	
						<div>
							<label for='ID_Direccion' class='form-label'>Direccion</label>
							<input id='ID_Direccion' class='form-control' type='text' value='".$direccion_Direccion[intval($proveedores_ID_Direccion[$i])-1]."'>
						</div>
						<div>
							<label for='Nombre_Local' class='form-label'>Nombre Local</label>
							<input id='Nombre_Local' class='form-control' type='text' value='".$direccion_Nombre_Local[intval($proveedores_ID_Direccion[$i])-1]."'>
						</div>
					</form>
					";	
				}
				?>
				<div id="datos_proveedor"></div>
				<center>
					<input class="btn" type="submit" value="Modificar">
					<input class="btn" type="button" value="Cancelar" onclick="window.location='Modulo_Proveedores.php'">
				</center>
			</form>
		</div>
	</body>
</html>