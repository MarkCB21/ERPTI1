<!DOCTYPE HTML>
<?php include "aside.php"; ?>
<link href="style/style.css" rel="stylesheet" type="text/css">
<link href="diseños/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
	function redi(row)
	{
		frm = document.getElementById('frm')
		frm.innerHTML = "<input name='ID_Compra' value='"+row.id+"' hidden>"
		frm.submit()
	}
	function show(string)
	{
		window.location = 'Lista_Orden_de_Compra.php'
	}
</script>
<body>
<?php
$option = ["No","Si"];
include "tablas.php";
echo "<div id='main'>";
echo "<div class='form-head'>Modulo Orden de Compra</div><div class='return' onclick=\"window.location='inicio.php'\">Volver</div>";
echo "<div class='container'>";
echo "<table class='table-fill' style='width:600px;'> \n";
echo "<thead>
<th class='text-left'>ID Compra</th>
<th class='text-left'>Fecha de Emision</th>
<th class='text-left'>Documento</th>
<th class='text-left'>Anulado</th>

</thead>\n";
echo "<tbody class='table-hover'>\n";
for($i=0;$i<count($compra_producto_ID_Compra);$i++)
{
	echo "<tr onclick=redi(this) id='$compra_producto_ID_Compra[$i]'>
	<td class='text-right'>$compra_producto_ID_Compra[$i]</td>
	<td class='text-center'>$compra_producto_Fecha_emision[$i]</td>
	<td class='text-right'>$compra_producto_ID_Doc[$i]</td>
	<td class='text-center'>".$option[$compra_producto_anulado[$i]]."
	</tr> \n"; 
}
echo "<tbody>\n</table>\n";
echo "<form id='frm' action='Anular_Orden_de_Compra.php' method='POST' hidden></form>";
echo "<input type='button' class='modulo' value='Realizar Orden de Compra' onclick=\"window.location = 'Realizar_Orden_de_Compra.php'\">";
echo "</div>";
echo "</div>";

?>
</body>
</html>