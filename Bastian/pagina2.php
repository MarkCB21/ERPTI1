 <?php
 	$link = mysql_connect("localhost","root","");
 	mysql_select_db("erp", $link);
 	if(mysqli_connect_errno())
	{
		echo "no conecta". mysqli_connect_error();	
	}
?>
<html>
	<head>
		<title>
		productos
		</title>
		<link rel="stylesheet" type="text/css" href="../style/style.css">
	</head>
	<body>
		<form id="Agregar_Producto" name="productos" action="pagina1.php" method="POST">
			<fieldset>
				<legend>Agregar Producto a Proveedor</legend>
				<div>
					<label  class="form-label" for="proveedor">Proveedor</label>
					<select class="form-control" id="proveedor" name="proveedor">
					<?php  
						$con = mysql_query("SELECT Nombre_Compania FROM proveedores", $link);
						while ($fila = mysql_fetch_object($con))
						{
							echo "<option value='$fila->Nombre_Compania'>$fila->Nombre_Compania</option>";
						}
					?>
					</select>
				<div>
					<label class="form-label" for="Nombre">Nombre</label>
					<input id="Nombre" class="form-control" type="text" name="Nombre" value=""/>
				<div>
					<label class="form-label" for="Precio">Precio</label>
					<input id="Precio" class="form-control" type="text" name="precios" value=""/>
				<div>
				<label class="form-label" for="Stock">Stock</label>
					<input id="Stock" class="form-control" type="text" name="Stock" value=""/>
				<div>
					<center>
						<button class="btn" name="Guardar">Guardar</button>
					</center>
			</fieldset>
		</form>
	</body>
</html>