<!DOCTYPE HTML>
<link href="../style/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
	function redi(row)
	{
		frm = document.getElementById('frm')
		frm.innerHTML = "<input name='ID_Prov' value='"+row.id+"' hidden>"
		frm.submit()
	}
	function volver()
	{
		window.location = 'Modulo_Proveedores.php'
	}
</script>
<body>
<?php
include "tablas.php";
echo "<div class='cosa'>layout</div>";
echo "<div class='form-head'>Lista Proveedores</div><div class='return' onclick='volver()'>Volver</div>";
echo "<div class='container'>";
echo "<table class='table-fill'> \n"; 
echo "<thead>
<th class='text-left'>ID_Prov</th>
<th class='text-left'>Nombre_Compania</th>
<th class='text-left'>Tipo_Proveedor</th>
<th class='text-left'>ID_Rut</th>
<th class='text-left'>Nombre_C</th>
<th class='text-left'>Apellido_P</th>
<th class='text-left'>Apellido_M</th>
<th class='text-left'>Correo</th>
<th class='text-left'>Telefono</th>
<th class='text-left'>ID_Direccion</th>
</thead>\n";
echo "<tbody class='table-hover'>\n";
for($i=0;$i<count($proveedores_ID_Prov);$i++)
{
	echo "<tr onclick=redi(this) id='$ID_Prov[$i]'>
	<td class='text-left'>$proveedores_ID_Prov[$i]</td>
	<td class='text-left'>$proveedores_Nombre_Compania[$i]</td>
	<td class='text-left'>$proveedores_Tipo_Proveedor[$i]</td>
	<td class='text-left'>$proveedores_ID_Rut[$i]</td>
	<td class='text-left'>$proveedores_Nombre_C[$i]</td>
	<td class='text-left'>$proveedores_Apellido_P[$i]</td>
	<td class='text-left'>$proveedores_Apellido_M[$i]</td>
	<td class='text-left'>$proveedores_Correo[$i]</td>
	<td class='text-left'>$proveedores_Telefono[$i]</td>
	<td class='text-left'>$proveedores_ID_Direccion[$i]</td>
	</tr> \n"; 
}
echo "<tbody>\n</table>\n";
echo "<form id='frm' action='algo.php' method='POST' hidden></form>";
echo "</div>";
?>
</body>
</html>