<!DOCTYPE HTML>
<link href="../style/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
	function redi(row)
	{
		frm = document.getElementById('frm')
		frm.innerHTML = "<input name='ID_Prov' value='"+row.id+"' hidden>"
		frm.submit()
	}
</script>
<body>
<?php
include "tablas.php";
echo "<div class='cosa'>layout</div>";
echo "<div class='form-head'>Modulo Proveedores</div>";
echo "<div class='container'>";
echo "<table class='table-fill'> \n";
echo "<thead onclick=\"window.location='Lista_Proveedores.php'\">
<th class='text-left'>ID_Prov</th>
<th class='text-left'>Nombre_Compania</th>
<th class='text-left'>Tipo_Proveedor</th>

</thead>\n";
echo "<tbody class='table-hover'>\n";
for($i=0;$i<count($proveedores_ID_Prov);$i++)
{
	echo "<tr onclick=redi(this) id='$proveedores_ID_Prov[$i]'>
	<td class='text-left'>$proveedores_ID_Prov[$i]</td>
	<td class='text-left'>$proveedores_Nombre_Compania[$i]</td>
	<td class='text-left'>$proveedores_Tipo_Proveedor[$i]</td>
	</tr> \n"; 
}
echo "<tbody>\n</table>\n";
echo "<form id='frm' action='Modificar_Proveedor.php' method='POST' hidden></form>";
echo "<input type='button' class='modulo' value='Agregar Proveedor' onclick=\"window.location='Agregar_Proveedor.php'\">";
if(count($proveedores_ID_Prov))
{
	echo "<input type='button' class='modulo' value='Productos Proveedores' onclick=\"window.location='Modulo_Productos.php'\">";
}
echo "</div>";
?>
</body>
</html>