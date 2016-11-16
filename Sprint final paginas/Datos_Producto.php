<?php
include("aside.php");
include("tablas.php");
if(isset($_REQUEST['ID_Prod']))
{
	$ID_Prod = $_REQUEST['ID_Prod'];
}
else
{
	header("location: Modulo_Productos.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Datos Producto</title>
		<link rel="stylesheet" type="text/css" href="diseños/style.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<script type="text/javascript">
		id = <?php echo "'$ID_Prod'";?>;
		function modprod()
		{
			
			frm = document.getElementById('frm')
			frm.innerHTML = "<input name='ID_Prod' value='"+id+"' hidden>"
			frm.action = "Modificar_Producto.php"
			frm.submit()
		}

		</script>
	</head>
	<body>
		<?php
		echo "<div id='main'>";
		echo "<div class='form-head'>Datos ".$productos_Descripcion[(int)$ID_Prod-1]."</div><div class='return' onclick='history.back(1)'>Volver</div>";
		echo "<div class='container'>";
		echo "
		<table class='table-fill' style='width:600px'>\n
			<tr><td class='text-left' style='color:#DDDDDD;background:#222222;font-size:14px;'>ID Producto</td>			<td class='text-right'>".$productos_ID_Prod[(int)$ID_Prod-1]."</td></tr>\n
			<tr><td class='text-left' style='color:#DDDDDD;background:#222222;font-size:14px;'>Categoria</td>			<td class='text-right'>".$categoria_Nombre[(int)$productos_ID_Categoria[(int)$ID_Prod-1]-1]."</td></tr>\n
			<tr><td class='text-left' style='color:#DDDDDD;background:#222222;font-size:14px;'>Descripcion</td>			<td class='text-right'>".$productos_Descripcion[(int)$ID_Prod-1]."</td></tr>\n
			<tr><td class='text-left' style='color:#DDDDDD;background:#222222;font-size:14px;'>Precio Unitario</td>		<td class='text-right'>\$".$productos_Precio_Unitario[(int)$ID_Prod-1]."</td></tr>\n
			<tr><td class='text-left' style='color:#DDDDDD;background:#222222;font-size:14px;'>Fecha de Agregado</td>	<td class='text-right'>".$productos_Fecha_Agregado[(int)$ID_Prod-1]."</td></tr>\n
			<tr><td class='text-left' style='color:#DDDDDD;background:#222222;font-size:14px;'>Proveedor</td>			<td class='text-right'>".$proveedores_Nombre_Compania[(int)$productos_ID_Prov[(int)$ID_Prod-1]-1]."</td></tr>\n
		</table>\n";
		echo "<form id='frm' action='' method='POST' hidden></form>";
		echo "<input type='button' class='modulo' value='Modificar Producto' onclick='modprod()'>";
		echo "</div>\n";
		echo "</div>\n";
		?>
	</body>
</html>
