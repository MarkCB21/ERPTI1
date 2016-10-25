<!DOCTYPE HTML>
<link href="../style/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
	function redi(row)
	{
		frm = document.getElementById('frm')
		frm.innerHTML = "<input name='ID_Region' value='"+row.id+"' hidden>"
		frm.submit()
	}
	function show(string)
	{
		window.location = 'Lista_Proveedores.php'
	}
</script>
<body>
<?php
include "tablas.php";
echo "<div class='cosa'>layout</div>";
echo "<div class='form-head'>Modulo Proveedores</div><div class='return'>Volver</div>";
echo "<div class='container'>";
echo "<table class='table-fill'> \n";
echo "<thead onclick='show()'>
<th class='text-left'>ID_Prov</th>
<th class='text-left'>Nombre_Compania</th>
<th class='text-left'>Tipo_Proveedor</th>

</thead>\n";
echo "<tbody class='table-hover'>\n";
for($i=0;$i<count($Apellido_M);$i++)
{
	echo "<tr onclick=redi(this) id='$ID_Prov[$i]'>
	<td class='text-left'>$ID_Prov[$i]</td>
	<td class='text-left'>$Nombre_Compania[$i]</td>
	<td class='text-left'>$Tipo_Proveedor[$i]</td>
	</tr> \n"; 
}
echo "<tbody>\n</table>\n";
echo "<form id='frm' action='algo.php' method='POST' hidden></form>";
echo "<input type='button' class='modulo' value='Agregar Proveedor'>";
echo "<input type='button' class='modulo' value='Productos Proveedores'>";
echo "</div>";
?>
</body>
</html>