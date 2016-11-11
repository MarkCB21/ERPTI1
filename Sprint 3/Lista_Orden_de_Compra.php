<!DOCTYPE HTML>
<link href="../style/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
	function redi(row)
	{
		frm = document.getElementById('frm')
		frm.innerHTML = "<input name='ID_Compraproducto' value='"+row.id+"' hidden>"
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
echo "<div class='form-head'>Lista Orden de Compra</div>";
echo "<div class='container'>";
echo "<table class='table-fill'> \n"; 
echo "<thead onclick=\"window.location='Modulo_Orden_de_Compra.php'\">
<th class='text-left'>ID_Compraproducto</th>
<th class='text-left'>ID_Compra</th>
<th class='text-left'>Producto</th>
<th class='text-left'>Cantidad</th>
<th class='text-left'>Descuento_Porcentaje</th>
<th class='text-left'>Descuento</th>
<th class='text-left'>Total_Producto</th>
</thead>\n";
echo "<tbody class='table-hover'>\n";
for($i=0;$i<count($produc_com_ID_Compraproducto);$i++)
{
	echo "<tr onclick=redi(this) id='$produc_com_ID_Compraproducto[$i]'>
	<td class='text-right'>$produc_com_ID_Compraproducto[$i]</td>
	<td class='text-right'>$produc_com_ID_Compra[$i]</td>
	<td class='text-left'>".$productos_Descripcion[intval($produc_com_ID_Prod[$i])-1]."</td>
	<td class='text-right'>$produc_com_Cantidad[$i]</td>
	<td class='text-center'>$produc_com_Descuento_Porcentaje[$i]%</td>
	<td class='text-center'>\$$produc_com_Descuento[$i]</td>
	<td class='text-right'>$produc_com_Total_Producto[$i]</td>
	</tr> \n"; 
}
echo "<tbody>\n</table>\n";
echo "<form id='frm' action='Anular_Orden_de_Compra.php' method='POST' hidden></form>";
echo "</div>";
?>
</body>
</html>