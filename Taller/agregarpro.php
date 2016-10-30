<?php include "tablas.php"; ?>
<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css.css"/>
	</head>
	<body>
		<div class='cosa'>layout</div>
		<div class='form-head'>Agregar Producto</div>
		<div class='container'>
			<form action="tablas.php" method="post" name="form">
				<div>
					<label for="ID_Prov" class="form-label">Proveedor</label>
					<select id="ID_Prov" name="ID_Prov" class="form-control">
					<?php 
					for ($i=0; $i < count($proveedores_ID_Prov); $i++) { 
						echo "<option id='$proveedores_ID_Prov[$i]'>$proveedores_Nombre_Compania[$i]</option>";
					}
					?>
					</select>
					
				</div>
				<div>
					<label for="ID_Categoria" class="form-label">Categoria</label>
					<select id="ID_Categoria" name="ID_Categoria" class="form-control">
					<?php 
					for ($i=0; $i < count($categoria_ID_Categoria); $i++) { 
						echo "<option id='$categoria_ID_Categoria[$i]'>$categoria_Nombre[$i]</option>";
					}
					?>
					</select>
					 
				</div>
				<div>
					<label for="Nombre" class="form-label">Nombre</label>
					<input id="Nombre" name="Nombre" class="form-control" type="text">
				</div>
				<div>
					<label for="Medida" class="form-label">Medida</label>
					<input id="Medida" name="Medida" class="form-control" type="text">
				</div>
				<div>
					<label for="Precio_Unitario" class="form-label">Precio por Medida</label>
					<input id="Precio_Unitario" name="Precio_Unitario" class="form-control" type="text">
				</div>
				<center>
					<input class="btn" type="submit" value="Crear">
					<input class="btn" type="reset" value="Restaurar">
					<input class="btn" type="button" value="Cancelar" onclick="window.location='Modulo_Productos.php'">
				</center>
			</form>
		</div>
	</body>
</html>