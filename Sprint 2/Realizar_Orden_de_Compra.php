<!DOCTYPE HTML>
<?php
	$link = mysqli_connect("localhost","root", "");
	mysqli_select_db($link,"erp-1");
?>
<html>
	<head>
	<meta charset='utf-8'>
	<title>Realizar Orden de Compra</title>
	<link href="../style/style.css" rel="stylesheet" type="text/css">
	<?php
		include "../Sprint 2/tablas.php";
		for($i=0; $i < count($proveedores_ID_Prov); $i++){
			echo "<p id='$proveedores_ID_Prov[$i]' hidden>\n";
			for($j=0; $j < count($productos_ID_Prod); $j++){
				echo "<option value='$productos_ID_Prod[$j]'>$productos_Nombre[$j]</option>\n";
			}
			echo "</p>\n";
		}
	?>
	<script type="text/javascript">
	function actdiv()
	{
		document.getElementById('nombre_producto').innerHTML = document.getElementById(document.getElementById('nombre_compania').value).innerHTML
	}
	</script>
	</head>
	<body onload="actdiv()">
		<div class='cosa'>layout</div>
		<div class='form-head'>Realizar Orden de Compra</div>
		<div class='container'>
			<form action="ROrdenCompraF.php">
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
					<label class="form-label" for="nombre_producto">Nombre Producto</label>
					<select class="form-control" name='nombre_producto' id='nombre_producto'>
						<?php
						for ($i=0;$i < count($productos_Nombre);$i++){
							echo "<option value='$productos_Nombre[$i]'>$productos_Nombre[$i]</option>";
						}
						?>
					</select>
				</div>
				<div>
					<label class="form-label" for="cantidad">Cantidad</label>
					<input class="form-control" type="number" name="cantidad">
				<div>
					<label class="form-label" for="tipo_descuento">Tipo Descuento</label>
					<select class="form-control" name='tipo_descuento' id='tipo_descuento'>
						<option value="sin_descuento">Sin descuento</option>
						<option value="descuento_%">Descuento %</option>
						<option value="descuento_$">Descuento $</option>
					</select>
				</div>
				<div>
					<label class="form-label" for="descuento">Descuento</label>
					<input class="form-control" type="number" name="descuento">
				</div>
				<center>
					<input class="btn" type="submit" value="Enviar">
				</center>
			</form>
		</div>
	</body>
</html>