<!DOCTYPE HTML>
<link href="style/style.css" rel="stylesheet" type="text/css">
<link href="diseños/style.css" rel="stylesheet" type="text/css">

<script type="text/javascript">
	function redi(row)
	{
		frm = document.getElementById('frm')
		frm.innerHTML = "<input name='ID_Prod' value='"+row.id+"' hidden>"
		frm.submit()
	}
</script>
<body>
<?php
include "tablas.php";
include "aside.php";
echo "<div id='main'>";
echo "<div class='form-head'>Modulo Productos</div>";
echo "<div class='container'>";
echo "<table class='table-fill'> \n";
echo "<thead onclick=\"window.location='Lista_Productos.php'\">
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
	<td class='text-left'>$productos_Precio_Unitario[$i]</td>
	</tr> \n"; 
}
echo "<tbody>\n</table>\n";
echo "<form id='frm' action='Modificar_Producto.php' method='POST' hidden></form>";
echo "<input type='button' class='modulo' value='Agregar Productos' onclick=\"window.location='Agregar_Producto.php'\">";
if(count($productos_ID_Prod))
{
	echo "<input type='button' class='modulo' value='Modulo Orden de Compra' onclick=\"window.location='Modulo_Orden_de_Compra.php'\">";
}
echo "</div>";
echo "</div>";
?>
</body>
</html>