<!DOCTYPE HTML>
<?php 
include("aside.php");
include ("conect.php");
?>
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
<div id ='main'>
<div class='form-head'>Lista Orden de Compra</div>
<div class='container'>
<div>
<input type="button" class="modulo" value="Realizar Factura" onclick="window.location = 'factura.php'">
</div>
<table class='table-fill'> 
<thead onclick=\"window.location='Modulo_Orden_de_Compra.php'\">
	<th class='text-left'>ID_Factura</th>
	<th class='text-left'>Fecha_emision</th>
	<th class='text-left'>ID_Comprador</th>
	<th class='text-left'>Condiciones_de_Venta</th>
	<th class='text-left'>Giro_Actividad</th>
	<th class='text-left'>Anulada</th>
	<th class='text-left'>ID_Doc</th>
	<th class='text-left'>ID_total_compras</th>
</thead>
<tbody class='table-hover'>
	<?php
	$sql = "SELECT * FROM factura";
	if ($result = mysqli_query($conexion,$sql))
	{
		while ($row = mysqli_fetch_row($result))
		{
			echo "<tr onclick=redi(this) id='$row[0]'>
			<td class='text-left'>$row[0]</td>
			<td class='text-left'>$row[1]</td>
			<td class='text-left'>$row[2]</td>
			<td class='text-left'>$row[4]</td>
			<td class='text-left'>$row[5]</td>
			<td class='text-left'>$row[6]</td>
			<td class='text-left'>$row[7]</td>
			<td class='text-left'>$row[8]</td>	
			</tr> \n";
	    }
	    mysqli_free_result($result);
	}		 
	?>
	<tbody>
</table>
<form id='frm' action='Anular_Orden_de_Compra.php' method='POST' hidden></form>
</div>
</div>
</body>
</html>