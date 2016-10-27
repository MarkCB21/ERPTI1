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
	</head>
	<body onload="actprod()">
		<div class='cosa'>layout</div>
		<div class='form-head'>Modificar Producto</div>
		<div class='container'>
			<form action="actualiza.php">
				<?php 
				echo "
				<div>
					<label for='Medida' class='form-label'>Nombre Compania</label>
					<input id='Medida' class='form-control' type='text' value='".$proveedores_Nombre_Compania[intval($productos_ID_Prov[intval($ID_Prod)-1])-1]."' readonly>
				</div>
				<div>
					<label for='Medida' class='form-label'>Nombre Producto</label>
					<input id='Medida' class='form-control' type='text' value='".$productos_Nombre[intval($ID_Prod)-1]."' readonly>
				</div>
				<div>
					<label for='Medida' class='form-label'>Medida</label>
					<input id='Medida' name='Medida' class='form-control' type='text' value='".$productos_Medida[intval($ID_Prod)-1]."'>
				</div>
				<div>
					<label for='Precio_Unitario' class='form-label'>Precio por Medida</label>
					<input id='Precio_Unitario' name='Precio_Unitario' class='form-control' type='text' value='".$productos_Precio_Unitario[intval($ID_Prod)-1]."'>
				</div>
				<div>
					<input id='ID_Prod' name='ID_Prod' type='hidden' value='$ID_Prod'>
				</div>
				";
				?>
				<center>
					<input class="btn" type="submit" value="Modificar">
					<input class="btn" type="button" value="Cancelar" onclick="window.location='Modulo_Productos.php'">
				</center>
			</form>
		</div>
	</body>
</html>