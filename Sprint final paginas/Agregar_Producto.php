<?php 
include "tablas.php"; 
include("aside.php"); 
?>
<!DOCTYPE HTML>
<html>
	<head>
		<link href="style/style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="diseños/style.css">
	</head>
	<body>
		<div id ="main">
		<div class='form-head'>Agregar Producto</div><div class='return' onclick="window.location='Modulo_Productos.php'">Volver</div>
		<div class='container'>
			<form action="Programa_Agregar_Producto.php" method="POST">
				<div>
					<label for="ID_Prov" class="form-label">Proveedor</label>
					<select id="ID_Prov" name="ID_Prov" class="form-control">
					<?php 
					for ($i=0; $i < count($proveedores_ID_Prov); $i++) { 
						echo "<option value='$proveedores_ID_Prov[$i]'>$proveedores_Nombre_Compania[$i]</option>";
					}
					?>
					</select>
				</div>
				<div>
					<label for="ID_Categoria" class="form-label">Categoria</label>
					<select id="ID_Categoria" name="ID_Categoria" class="form-control">
					<?php 
					for ($i=0; $i < count($categoria_ID_Categoria); $i++) { 
						echo "<option value='$categoria_ID_Categoria[$i]'>$categoria_Nombre[$i]</option>";
					}
					?>
					</select>
				</div>
				<div>
					<label for="Descripcion" class="form-label">Descripcion</label>
					<input id="Descripcion" name="Descripcion" class="form-control" type="text">
				</div>
				<div>
					<label for="Precio_Unitario" class="form-label">Precio Unitario</label>
					<input id="Precio_Unitario" name="Precio_Unitario" class="form-control" type="text">
				</div>
				<div>
					<label for="Fecha_Agregado" class="form-label">Fecha</label>
					<input id="Fecha_Agregado" name="Fecha_Agregado" class="form-control" type="date" value="">
				</div>
				<center>
					<input class="btn" type="submit" value="Crear">
					<input class="btn" type="reset" value="Restaurar">
					<input class="btn" type="button" value="Cancelar" onclick="window.location='Modulo_Productos.php'">
				</center>
			</form>
		</div>
		</div>
	</body>
</html>
