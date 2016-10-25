<!DOCTYPE HTML>
<link href="../style/style.css" rel="stylesheet" type="text/css">
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
echo "<div class='cosa'>layout</div>";
echo "<div class='form-head'>Lista Productos</div><div class='return' onclick='volver()'>Volver</div>";
echo "<div class='container'>";
echo "<table class='table-fill'> \n"; 
echo "<thead>
<th class='text-left'>ID_Prod</th>
<th class='text-left'>ID_Categoria</th>
<th class='text-left'>Nombre</th>
<th class='text-left'>Precio_Unitario</th>
<th class='text-left'>Fecha_Agregado</th>
<th class='text-left'>Fecha_Modificacion</th>
<th class='text-left'>Medida</th>
<th class='text-left'>ID_Prov</th>
</thead>\n";
echo "<tbody class='table-hover'>\n";
for($i=0;$i<count($productos_ID_Prod);$i++)
{
	echo "<tr onclick=redi(this) id='$productos_ID_Prod[$i]'>
	<td class='text-left'>$productos_ID_Prod[$i]</td>
	<td class='text-left'>$productos_ID_Categoria[$i]</td>
	<td class='text-left'>$productos_Nombre[$i]</td>
	<td class='text-left'>$productos_Precio_Unitario[$i]</td>
	<td class='text-left'>$productos_Fecha_Agregado[$i]</td>
	<td class='text-left'>$productos_Fecha_Modificacion[$i]</td>
	<td class='text-left'>$productos_Medida[$i]</td>
	<td class='text-left'>$productos_ID_Prov[$i]</td>	
	</tr> \n"; 
}
echo "<tbody>\n</table>\n";
echo "<form id='frm' action='algo.php' method='POST' hidden></form>";
echo "</div>";
?>
</body>
</html>