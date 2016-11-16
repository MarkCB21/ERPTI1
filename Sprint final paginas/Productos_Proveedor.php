<?php
include("aside.php");
include("tablas.php");
if(isset($_REQUEST['ID_Prov']))
{
	$ID_Prov = $_REQUEST['ID_Prov'];
}
else
{
	header("location: Modulo_Proveedores.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Productos_Proveedor</title>
		<link rel="stylesheet" type="text/css" href="diseños/style.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<script type="text/javascript">
			id
			function redi(row)
			{
				frm = document.getElementById('frm')
				frm.innerHTML = "<input name='ID_Prod' value='"+row.id+"' hidden>"
				frm.submit()
			}
		</script>
	</head>
	<body>
		<?php
		echo "<div id='main'>";
		echo "<div class='form-head'>Productos ".$proveedores_Nombre_Compania[(int)$ID_Prov-1]."</div><div class='return' onclick='history.back(1)'>Volver</div>";
		echo "<div class='container'>";
		echo "
		<table class='table-fill'> \n
			<thead>
				<th class='text-left'>ID_Prod</th>
				<th class='text-left'>Categoria</th>
				<th class='text-left'>Nombre</th>
				<th class='text-left'>Precio_Unitario</th>
				<th class='text-left'>Fecha_Agregado</th>
				<th class='text-left'>Proveedor</th>
			</thead>\n";
		echo "<tbody class='table-hover'>\n";
		for($i=0;$i<count($productos_ID_Prod);$i++)
		{
			if($proveedores_ID_Prov[(int)$productos_ID_Prov[$i]-1] == $ID_Prov)
			{
				echo "<tr onclick=redi(this) id='$productos_ID_Prod[$i]'>
				<td class='text-right'>$productos_ID_Prod[$i]</td>
				<td class='text-left'>".$categoria_Nombre[(int)$productos_ID_Categoria[$i]-1]."</td>
				<td class='text-left'>$productos_Descripcion[$i]</td>
				<td class='text-right'>\$$productos_Precio_Unitario[$i]</td>
				<td class='text-center'>$productos_Fecha_Agregado[$i]</td>
				<td class='text-left'>".$proveedores_Nombre_Compania[(int)$productos_ID_Prov[$i]-1]."</td>	
				</tr> \n"; 
			}
		}
		echo "<tbody>\n</table>\n";
		echo "<form id='frm' action='Datos_Producto.php' method='POST' hidden></form>";
		echo "</div>\n";
		echo "</div>\n";
		?>
	</body>
</html>