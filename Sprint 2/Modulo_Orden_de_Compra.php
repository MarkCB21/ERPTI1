<!DOCTYPE HTML>
<link href="../style/style.css" rel="stylesheet" type="text/css">
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
echo "<div class='cosa'>layout</div>";
echo "<div class='form-head'>Modulo Orden de Compra</div>";
echo "<div class='container'>";
echo "<table class='table-fill'> \n";
echo "<thead onclick=\"window.location = 'Lista_Orden_de_Compra.php'\">
<th class='text-left'>ID_Produc</th>
<th class='text-left'>Producto</th>
<th class='text-left'>Cantidad</th>

</thead>\n";
echo "<tbody class='table-hover'>\n";
for($i=0;$i<count($produc_com_ID_Produc);$i++)
{
	echo "<tr onclick=redi(this) id='$produc_com_ID_Produc[$i]'>
	<td class='text-left'>$produc_com_ID_Produc[$i]</td>
	<td class='text-left'>".$productos_Nombre[intval($produc_com_ID_Prod[$i])-1]."</td>
	<td class='text-left'>$produc_com_Cantidad[$i]</td>
	</tr> \n"; 
}
echo "<tbody>\n</table>\n";
echo "<form id='frm' action='algo.php' method='POST' hidden></form>";
echo "<input type='button' class='modulo' value='Realizar Orden de Compra'>";
echo "</div>";
?>
</body>
</html>