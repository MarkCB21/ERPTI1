<?php include "tablas.php"; 

if(isset($_POST['ID_Prod']))
{
	$ID_Prod = $_POST['ID_Prod'];
}
else
{
	header("location: Modulo_Productos.php");
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
				ID_Prov = document.getElementById('Nombre_Producto').value
				Datos = document.getElementById('datos_producto_'+ID_Prod).innerHTML
				document.getElementById('datos_producto').innerHTML = Datos
			}

			function actprod()
			{
				ID_Prov = document.getElementById('Nombre_Compania').value
				options = document.getElementById('Nombre_Productos_'+ID_Prov).innerHTML
				document.getElementById('Nombre_Producto').innerHTML = options
			}
		</script>
	</head>
	<body onload="actprod()">
		<div class='cosa'>layout</div>
		<div class='form-head'>Modificar Producto</div>
		<div class='container'>
			<form>
				<div>
					<label for="Nombre_Compania" class="form-label">Nombre Compania</label>
					<select id='Nombre_Compania' class="form-control" name='Nombre_Compania' onchange='actprod()'>
					<?php
					for($i=0;$i<count($proveedores_Nombre_Compania);$i++)
					{
						echo "<option value='$proveedores_ID_Prov[$i]'>$proveedores_Nombre_Compania[$i]</option>";
					}
					?>
					</select>
				</div>
				<div>
					<label for="Nombre_Producto" class="form-label">Nombre Producto</label>
					<?php
					for($i=0;$i<count($proveedores_ID_Prov);$i++)
					{
						echo "<select id='Nombre_Productos_$proveedores_ID_Prov[$i]' hidden>";
						for($j=0;$j<count($productos_ID_Prod);$j++)
						{
							echo "<option value='$productos_ID_Prod[$j]'>$productos_Nombre[$j]</option>";
						}
					echo "</select>";
					}
					?>
					<select id='Nombre_Producto' class="form-control" name='Nombre_Producto'>
					</select>
				</div>
				<?php
				for ($i=0; $i < count($productos_ID_Prod); $i++) { 
					echo "
					<form id='datos_productos_$productos_ID_Prod[$i]' hidden>
						<div>
							<label for='Medida' class='form-label'>Medida</label>
							<input id='Medida' class='form-control' type='text' value='$productos_Medida[$i]'>
						</div>
						<div>
							<label for='Precio_Unitario' class='form-label'>Precio por Medida</label>
							<input id='Precio_Unitario' class='form-control' type='text' value='$productos_Precio_Unitario[$i]'>
						</div>
					</form>
					";	
				}
				?>
				<div id="datos_proveedor"></div>
				<center>
					<input class="btn" type="submit" value="Modificar">
					<input class="btn" type="button" value="Cancelar" onclick="window.location='Modulo_Productos.php'">
				</center>
			</form>
		</div>
	</body>
</html>