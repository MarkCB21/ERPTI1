<?php
include 'tablas.php';

if(isset($_POST['ID_Produc']))
{
	$ID_Produc=$_POST['ID_Produc'];
}
else
{
	header("location: Modulo_Orden_de_Compra.php");
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
	<body onload="">
		<div class='cosa'>layout</div>
		<div class='form-head'>Anular Orden de Compra</div>
		<div class='container'>
			<form action="Programa_Anular_Orden_de_Compra.php" method="POST">
				<?php
				$Nombre_Compania=$proveedores_Nombre_Compania[intval($productos_ID_Prod[intval($produc_com_ID_Prod[intval($ID_Produc)-1])-1])-1];
				$Rut_Compania=$proveedores_ID_Rut[intval($productos_ID_Prod[intval($produc_com_ID_Prod[intval($ID_Produc)-1])-1])-1];
				$Nombre_Producto=$productos_Nombre[intval($produc_com_ID_Prod[intval($ID_Produc)-1])-1];
				$ID_Producto=$productos_ID_Prod[intval($produc_com_ID_Prod[intval($ID_Produc)-1])-1];
				$Precio_Unitario=$productos_Precio_Unitario[intval($produc_com_ID_Prod[intval($ID_Produc)-1])-1];
				$Cantidad=$produc_com_Cantidad[intval($ID_Produc)-1];
				$Medida=$productos_Medida[intval($produc_com_ID_Prod[intval($ID_Produc)-1])-1];
				$Total_Bruto=intval($Cantidad)*intval($Precio_Unitario);
				$Descuento=intval($produc_com_Descuento_Porcentaje[intval($ID_Produc)-1])*$Total_Bruto/100 + intval($produc_com_Descuento[intval($ID_Produc)-1]);
				$Total_Compra=$Total_Bruto-$Descuento;
				echo "
				<div>
					<label for='ID_Produc' class='form-label'>Orden de Compra</label>
					<input id='ID_Produc' name='ID_Produc'class='form-control' value='$ID_Produc' readonly>
				</div>
				<div>
					<label for='Detalles' class='form-label'>Detalles</label>
					<textarea rows='12' class='form-control' readonly>Nombre Compania Proveedor: $Nombre_Compania \nRUT Compania: $Rut_Compania \nNombre Producto: $Nombre_Producto \nID Producto: $ID_Producto \nPrecio Unitario: \$$Precio_Unitario \nCantidad: $Cantidad \nMedida: $Medida \nTotal Bruto: \$$Total_Bruto \nDescuento: \$$Descuento \nTotal de Compra: \$$Total_Compra
					</textarea>
				</div>
				";
				?>
				<center>
					<input class="btn" type="submit" value="Anular">
					<input class="btn" type="button" value="Cancelar" onclick="window.location='Modulo_Orden_de_Compra.php'">
				</center>
			</form>
		</div>
	</body>
</html>