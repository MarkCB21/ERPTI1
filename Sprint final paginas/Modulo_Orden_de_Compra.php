<!DOCTYPE HTML>
<?php include "aside.php"; ?>
<link href="style/style.css" rel="stylesheet" type="text/css">
<link href="diseños/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
	function redi(row)
	{
		frm = document.getElementById('frm')
		frm.innerHTML = "<input name='ID_Produc' value='"+row.id+"' hidden>"
		frm.submit()
	}
	function show(string)
	{
		window.location = 'Lista_Orden_de_Compra.php'
	}
</script>
<body>
<?php
include "tablas.php";
echo "<div id='main'>";
echo "<div class='form-head'>Modulo Orden de Compra</div>";
echo "<div class='container'>";
echo "<table class='table-fill'> \n";
echo "<thead onclick=\"window.location = 'Lista_Orden_de_Compra.php'\">
<th class='text-left'>ID_Compraproducto</th>
<th class='text-left'>Producto</th>
<th class='text-left'>Cantidad</th>

</thead>\n";
echo "<tbody class='table-hover'>\n";
for($i=0;$i<count($produc_com_ID_Compraproducto);$i++)
{
	echo "<tr onclick=redi(this) id='$produc_com_ID_Compraproducto[$i]'>
	<td class='text-right'>$produc_com_ID_Compraproducto[$i]</td>
	<td class='text-left'>".$productos_Descripcion[intval($produc_com_ID_Prod[$i])-1]."</td>
	<td class='text-right'>$produc_com_Cantidad[$i]</td>
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