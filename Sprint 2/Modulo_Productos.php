<!DOCTYPE HTML>
<link href="../style/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
	function redi(row)
	{
		frm = document.getElementById('frm')
		frm.innerHTML = "<input name='ID_Prod' value='"+row.id+"' hidden>"
		frm.submit()
	}
	function show(string)
	{
		window.location = 'Lista_Productos.php'
	}
</script>
<body>
<?php
include "tablas.php";
echo "<div class='cosa'>layout</div>";
echo "<div class='form-head'>Modulo Productos</div><div class='return'>Volver</div>";
echo "<div class='container'>";
echo "<table class='table-fill'> \n";
echo "<thead onclick='show()'>
<th class='text-left'>ID_Prod</th>
<th class='text-left'>Nombre</th>
<th class='text-left'>Precio_Unitario</th>

</thead>\n";
echo "<tbody class='table-hover'>\n";
for($i=0;$i<count($productos_ID_Prod);$i++)
{
	echo "<tr onclick=redi(this) id='$productos_ID_Prod[$i]'>
	<td class='text-left'>$productos_ID_Prod[$i]</td>
	<td class='text-left'>$productos_Nombre[$i]</td>
	<td class='text-left'>$productos_Tipo_Proveedor[$i]</td>
	</tr> \n"; 
}
echo "<tbody>\n</table>\n";
echo "<form id='frm' action='algo.php' method='POST' hidden></form>";
echo "<input type='button' class='modulo' value='Agregar Productos'>";
echo "</div>";
?>
</body>
</html>