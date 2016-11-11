<?php include "tablas.php"; 
include "aside.php";?>
<!DOCTYPE HTML>
<html>
	<head>
		<link href="style/style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="diseños/style.css">
	</head>
	<body>
		<div id="main">
		<div class='form-head'>Agregar Proveedor</div>
		<div class='container'>
			<form action="Programa_Agregar_Proveedor.php" method="POST">
				<div>
					<label for="Nombre_Compania" class="form-label">Nombre Compania</label>
					<input id="Nombre_Compania" name="Nombre_Compania" class="form-control" type="text">
				</div>
				<div>
					<label for="Tipo_Proveedor" class="form-label">Tipo Proveedor</label>
					<select id="Tipo_Proveedor" name="Tipo_Proveedor" class="form-control">
					<?php 
					for ($i=0; $i < count($tipo_proveedores_ID_Tipo_Proveedor); $i++)
					{ 
						echo "<option value='$tipo_proveedores_ID_Tipo_Proveedor[$i]'>$tipo_proveedores_Nombre[$i]</option>";
					}
					?>
					</select>
				</div>
				<div>
					<label for="ID_Rut" class="form-label">Rut</label>
					<input id="ID_Rut" name="ID_Rut" class="form-control" type="text">
				</div>
				<div>
					<label for="Nombre_C" class="form-label">Nombre Completo</label>
					<input id="Nombre_C" name="Nombre_C" class="form-control" type="text">
				</div>
				<div>
					<label for="Apellido_P" class="form-label">Apellido Paterno</label>
					<input id="Apellido_P" name="Apellido_P" class="form-control" type="text">
				</div>
				<div>
					<label for="Apellido_M" class="form-label">Apellido Materno</label>
					<input id="Apellido_M" name="Apellido_M" class="form-control" type="text">
				</div>
				<div>
					<label for="Correo" class="form-label">Correo</label>
					<input id="Correo" name="Correo" class="form-control" type="text">
				</div>
				<div>
					<label for="Telefono" class="form-label">Telefono</label>
					<input id="Telefono" name="Telefono" class="form-control" type="text">
				</div>	
				<div>
					<label for="Direccion" class="form-label">Direccion</label>
					<input id="Direccion" name="Direccion" class="form-control" type="text">
				</div>
				<div>
					<label for="Comuna" class="form-label">Comuna</label>
					<input id="Comuna" name="Comuna" class="form-control" type="text">
				</div>
				<div>
					<label for="Nombre_Local" class="form-label">Nombre Local</label>
					<input id="Nombre_Local" name="Nombre_Local" class="form-control" type="text">
				</div>
				<center>
					<input class="btn" type="submit" value="Crear">
					<input class="btn" type="reset" value="Restaurar">
					<input class="btn" type="button" value="Cancelar" onclick="window.location='Modulo_Proveedores.php'">
				</center>
			</form>
		</div>
	</div>
	</body>
</html>