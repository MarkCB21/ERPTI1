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
echo "<div class='form-head'>Lista Proveedores</div>";
echo "<div class='container'>";
echo "<table class='table-fill'> \n"; 
echo "<thead onclick=\"window.location='Modulo_Proveedores.php'\">
<th class='text-left'>ID_Prov</th>
<th class='text-left'>Nombre_Compania</th>
<th class='text-left'>Tipo_Proveedor</th>
<th class='text-left'>Rut</th>
</thead>\n";
echo "<tbody class='table-hover'>\n";
for($i=0;$i<count($proveedores_ID_Prov);$i++)
{
	echo "<tr onclick=redi(this) id='$proveedores_ID_Prov[$i]'>
	<td class='text-right'>$proveedores_ID_Prov[$i]</td>
	<td class='text-left'>$proveedores_Nombre_Compania[$i]</td>
	<td class='text-left'>".$tipo_proveedores_Nombre[intval($proveedores_Tipo_Proveedor[$i])-1]."</td>
	<td class='text-right'>$proveedores_ID_Rut[$i]</td>
	</tr> \n"; 
}
echo "<tbody>\n</table>\n";
echo "<form id='frm' action='Modificar_Proveedor.php' method='POST' hidden></form>";
echo "</div>";
?>
</body>
</html>