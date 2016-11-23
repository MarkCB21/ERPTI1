<!DOCTYPE HTML>

<html>
	<head>
	<meta charset='utf-8'>
	<title>Realizar Orden de Compra</title>
	<link href="style/style.css" rel="stylesheet" type="text/css">
	<link href="diseños/style.css" rel="stylesheet" type="text/css">
	<?php include "aside.php"; ?>
	<?php
		include "tablas.php";
		for($i = 0; $i < count($proveedores_ID_Prov); $i++)
		{
			echo "<select id=\"Prod_Prov_$i\" hidden>";
			for($j = 0; $j < count($productos_ID_Prod); $j++)
			{
				if($productos_ID_Prov[$j] == $i+1)
				{
					echo "<option value=\"$productos_ID_Prod[$j]\">$productos_Descripcion[$j]</option>";
				}
			}
			echo "</select>";
		}
	?>
	<script type="text/javascript">
	count = 0

	function addprod()
	{
		count++
		Orden = document.getElementById('Orden')
		Prov = "<td class=\"text-center\"><select style=\"background-color:transparent;border:none;\" id=\"ID_Prov_"+count+"\" name=\"ID_Prov_"+count+"\" onchange=\"actprod('"+count+"');\">" <?php for ($i=0; $i < count($proveedores_ID_Prov); $i++) {	echo " + \"<option value='$proveedores_ID_Prov[$i]'>$proveedores_Nombre_Compania[$i]</option>\""; } ?> + "</select></td>"
		Prod = "<td class=\"text-center\"><select style=\"background-color:transparent;border:none;\" id=\"ID_Prod_"+count+"\" name=\"ID_Prod_"+count+"\" onchange=\"calprod('"+count+"');\"></select></td>"
		Cant = "<td class=\"text-center\"><input style=\"background-color:transparent;border:none;\" id=\"Cantidad_"+count+"\" name=\"Cantidad_"+count+"\" onchange=\"calprod('"+count+"');\" type=\"number\" min='1' value='1'></td>"
		Desc_100 = "<td class=\"text-center\"><input style=\"background-color:transparent;border:none;\" id=\"Descuento_Porcentaje_"+count+"\" name=\"Descuento_Porcentaje_"+count+"\" onchange=\"calprod('"+count+"');\" type=\"number\" min='0' max='100' value='0'></td>"
		Desc = "<td class=\"text-center\"><input style=\"background-color:transparent;border:none;\" id=\"Descuento_"+count+"\" name=\"Descuento_"+count+"\" onchange=\"calprod('"+count+"');\" type=\"number\" min='0' value='0'></td>"
		Total = "<td calss=\"text-center\" id=\"Total_"+count+"\" name=\"Total_"+count+"\"></td"

		Orden.innerHTML = Orden.innerHTML + "<tr>" + Prov + Prod + Cant + Desc_100 + Desc + Total + "</tr>"
		actprod(count)
	}

	function actprod(id)
	{
		select_Prov = document.getElementById("ID_Prov_" + id)
		Prov_Index = select_Prov.value - 1
		select_Prod = document.getElementById("ID_Prod_" + id)
		select_Prod.innerHTML = document.getElementById("Prod_Prov_" + Prov_Index).innerHTML
		calprod(id)
	}

	function calprod(id)
	{
		Prod_Precio = [<?php echo join(',',$productos_Precio_Unitario); ?>]
		select_Prod = document.getElementById("ID_Prod_" + id)
		Prod_Index = select_Prod.value - 1
		Cantidad = document.getElementById("Cantidad_" + id).value
		Precio = Prod_Precio[parseInt(Prod_Index)]
		Descuento_Porcentaje = document.getElementById("Descuento_Porcentaje_" + id).value
		Descuento = document.getElementById("Descuento_" + id).value
		Total_Bruto = Precio * Cantidad
		Total = Total_Bruto - (Total_Bruto * Descuento_Porcentaje / 100) - Descuento
		document.getElementById("Total_" + id).innerHTML = parseInt(Total)
	}
	</script>
	</head>
	<body onload="addprod()">
		<div id='main'>
			<div class='form-head'>Realizar Orden de Compra</div><div class='return' onclick="window.location='Modulo_Orden_de_Compra.php'">Volver</div>
			<div class='container'>
				<form action="Programa_Realizar_Orden_de_Compra.php" method="POST">
					<table class="table-fill" style="float:none">
						<thead>
							<th>Proveedor</th>
							<th>Producto</th>
							<th>Cantidad</th>
							<th>Descuento %</th>
							<th>Descuento $</th>
							<th>Total $</th>
						</thead>
						<tbody id="Orden">
						</tbody>	
					</table>
					<input type="button" class="modulo" value="Add Prod" onclick="addprod()">
					<input type="submit" class="modulo" value="Enviar">
				</form>
			</div>
		</div>
	</body>
</html>