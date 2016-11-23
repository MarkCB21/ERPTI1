<?php include "tablas.php"; 
include("aside.php");
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
		<link href="style/style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="diseños/style.css">
		<title></title>
	</head>
	<body onload="actprod()">
		<div id='main'>
		<div class='form-head'>Modificar Producto</div><div class='return' onclick='history.back(1)'>Volver</div>
		<div class='container'>
			<form action="Programa_Modificar_Producto.php">
				<?php 
				echo "
				<div>
					<label for='Medida' class='form-label'>Nombre Compania</label>
					<input id='Medida' class='form-control' type='text' value='".$proveedores_Nombre_Compania[intval($productos_ID_Prov[intval($ID_Prod)-1])-1]."' readonly>
				</div>
				<div>
					<label for='Medida' class='form-label'>Nombre Producto</label>
					<input id='Medida' class='form-control' type='text' value='".$productos_Descripcion[intval($ID_Prod)-1]."' readonly>
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
	</div>
	</body>
</html>