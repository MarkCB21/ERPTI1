<!DOCTYPE HTML>
<?php include("aside.php") ?>
<link href="style/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="diseños/style.css">

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
echo "<div id ='main'>";
echo "<div class='form-head'>Lista Orden de Compra</div>";
echo "<div class='container'>";
echo "<table class='table-fill'> \n"; 
echo "<thead onclick=\"window.location='Modulo_Orden_de_Compra.php'\">
<th class='text-left'>ID_Produc</th>
<th class='text-left'>ID_Compra</th>
<th class='text-left'>Producto</th>
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
	<td class='text-left'>$produc_com_ID_Compra[$i]</td>
	<td class='text-left'>".$productos_Nombre[intval($produc_com_ID_Prod[$i])-1]."</td>
	<td class='text-left'>$produc_com_Cantidad[$i]</td>
	<td class='text-left'>$produc_com_Descuento_Porcentaje[$i]</td>
	<td class='text-left'>$produc_com_Descuento[$i]</td>
	<td class='text-left'>$produc_com_Total_Inventario[$i]</td>
	<td class='text-left'>$produc_com_Anulado[$i]</td>	
	</tr> \n"; 
}
echo "<tbody>\n</table>\n";
echo "<form id='frm' action='Anular_Orden_de_Compra.php' method='POST' hidden></form>";
echo "</div>";
echo "</div>";
?>
</body>
</html>