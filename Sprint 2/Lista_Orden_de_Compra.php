<!DOCTYPE HTML>
<link href="../style/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
	function redi(row)
	{
		frm = document.getElementById('frm')
		frm.innerHTML = "<input name='ID_Produc' value='"+row.id+"' hidden>"
		frm.submit()
	}
	function volver()
	{
		window.location = 'Modulo_Orden_de_Compra.php'
	}
</script>
<body>
<?php
include "tablas.php";
echo "<div class='cosa'>layout</div>";
echo "<div class='form-head'>Lista Orden de Compra</div><div class='return' onclick='volver()'>Volver</div>";
echo "<div class='container'>";
echo "<table class='table-fill'> \n"; 
echo "<thead>
<th class='text-left'>ID_Produc</th>
<th class='text-left'>ID_Prod</th>
<th class='text-left'>Cantidad</th>
<th class='text-left'>Descuento_Porcentaje</th>
<th class='text-left'>Descuento</th>
<th class='text-left'>Total_Inventario</th>
<th class='text-left'>Anulado</th>
</thead>\n";
echo "<tbody class='table-hover'>\n";
for($i=0;$i<count($produc_com_ID_Produc);$i++)
{
	echo "<tr onclick=redi(this) id='$produc_com_ID_Produc[$i]'>
	<td class='text-left'>$produc_com_ID_Produc[$i]</td>
	<td class='text-left'>$produc_com_ID_Prod[$i]</td>
	<td class='text-left'>$produc_com_Cantidad[$i]</td>
	<td class='text-left'>$produc_com_Descuento_Porcentaje[$i]</td>
	<td class='text-left'>$produc_com_Descuento[$i]</td>
	<td class='text-left'>$produc_com_Total_Inventario[$i]</td>
	<td class='text-left'>$produc_com_Anulado[$i]</td>	
	</tr> \n"; 
}
echo "<tbody>\n</table>\n";
echo "<form id='frm' action='algo.php' method='POST' hidden></form>";
echo "</div>";
?>
</body>
</html>