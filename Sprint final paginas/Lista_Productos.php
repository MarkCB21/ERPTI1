<!DOCTYPE HTML>
<link href="style/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="diseños/style.css">
<script type="text/javascript">
	function redi(row)
	{
		frm = document.getElementById('frm')
		frm.innerHTML = "<input name='ID_Prod' value='"+row.id+"' hidden>"
		frm.submit()
	}
	function volver()
	{
		window.location = 'Modulo_Productos.php'
	}
</script>
<body>
<?php
include "tablas.php";
include "aside.php";
echo "<div id='main'>";
echo "<div class='form-head'>Lista Productos</div>";
echo "<div class='container'>";
echo "<table class='table-fill'> \n"; 
echo "<thead onclick=\"window.location='Modulo_Productos.php'\">
<th class='text-left'>ID_Prod</th>
<th class='text-left'>Categoria</th>
<th class='text-left'>Nombre</th>
<th class='text-left'>Precio_Unitario</th>
<th class='text-left'>Fecha_Agregado</th>
<th class='text-left'>Fecha_Modificacion</th>
<th class='text-left'>Medida</th>
<th class='text-left'>Proveedor</th>
</thead>\n";
echo "<tbody class='table-hover'>\n";
for($i=0;$i<count($productos_ID_Prod);$i++)
{
	echo "<tr onclick=redi(this) id='$productos_ID_Prod[$i]'>
	<td class='text-left'>$productos_ID_Prod[$i]</td>
	<td class='text-left'>".$categoria_Nombre[intval($productos_ID_Categoria[$i])-1]."</td>
	<td class='text-left'>$productos_Nombre[$i]</td>
	<td class='text-left'>$productos_Precio_Unitario[$i]</td>
	<td class='text-left'>$productos_Fecha_Agregado[$i]</td>
	<td class='text-left'>$productos_Fecha_Modificacion[$i]</td>
	<td class='text-left'>$productos_Medida[$i]</td>
	<td class='text-left'>".$proveedores_Nombre_Compania[intval($productos_ID_Prov[$i])-1]."</td>	
	</tr> \n"; 
}
echo "<tbody>\n</table>\n";
echo "<form id='frm' action='Modificar_Producto.php' method='POST' hidden></form>";
echo "</div>";
echo "</div>";
?>
</body>
</html>