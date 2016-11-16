<?php
include("aside.php");
include("tablas.php");
if(isset($_REQUEST['ID_Prov']))
{
	$ID_Prov = $_REQUEST['ID_Prov'];
}
else
{
	header("location: Modulo_Proveedores.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Datos Proveedor</title>
		<link rel="stylesheet" type="text/css" href="diseños/style.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<script type="text/javascript">
		id = <?php echo "'$ID_Prov'";?>;
		function modprov()
		{
			
			frm = document.getElementById('frm')
			frm.innerHTML = "<input name='ID_Prov' value='"+id+"' hidden>"
			frm.action = "Modificar_Proveedor.php"
			frm.submit()
		}

		function showprod()
		{
			id = <?php echo "'$ID_Prov'";?>;
			frm = document.getElementById('frm2')
			frm.innerHTML = "<input name='ID_Prov' value='"+id+"' hidden>"
			frm.action = "Productos_Proveedor.php"
			frm.submit()
		}
		</script>
	</head>
	<body>
		<?php
		echo "<div id='main'>";
		echo "<div class='form-head'>Datos ".$proveedores_Nombre_Compania[(int)$ID_Prov-1]."</div><div class='return' onclick='history.back(1)'>Volver</div>";
		echo "<div class='container'>";
		echo "
		<table class='table-fill' style='width:600px'>\n
			<tr><td class='text-left' style='color:#DDDDDD;background:#222222;font-size:14px;'>ID Proveedor</td>			<td class='text-right'>".$proveedores_ID_Prov[(int)$ID_Prov-1]."</td></tr>\n
			<tr><td class='text-left' style='color:#DDDDDD;background:#222222;font-size:14px;'>Nombre de la Compania</td>	<td class='text-right'>".$proveedores_Nombre_Compania[(int)$ID_Prov-1]."</td></tr>\n
			<tr><td class='text-left' style='color:#DDDDDD;background:#222222;font-size:14px;'>Tipo de Proveedor</td>		<td class='text-right'>".$tipo_proveedores_Nombre[(int)$proveedores_Tipo_Proveedor[(int)$ID_Prov-1]-1]."</td></tr>\n
			<tr><td class='text-left' style='color:#DDDDDD;background:#222222;font-size:14px;'>Rut</td>						<td class='text-right'>".$proveedores_ID_Rut[(int)$ID_Prov-1]."</td></tr>\n
			<tr><td class='text-left' style='color:#DDDDDD;background:#222222;font-size:14px;'>Nombres</td>					<td class='text-right'>".$datos_Nombres[(int)$proveedores_ID_Datos[(int)$ID_Prov-1]-1]."</td></tr>\n
			<tr><td class='text-left' style='color:#DDDDDD;background:#222222;font-size:14px;'>Apellido Paterno</td>		<td class='text-right'>".$datos_Apellidop[(int)$proveedores_ID_Datos[(int)$ID_Prov-1]-1]."</td></tr>\n
			<tr><td class='text-left' style='color:#DDDDDD;background:#222222;font-size:14px;'>Apellido Materno</td>		<td class='text-right'>".$datos_ApellidoM[(int)$proveedores_ID_Datos[(int)$ID_Prov-1]-1]."</td></tr>\n
			<tr><td class='text-left' style='color:#DDDDDD;background:#222222;font-size:14px;'>Correo</td>					<td class='text-right'>".$datos_Correo[(int)$proveedores_ID_Datos[(int)$ID_Prov-1]-1]."</td></tr>\n
			<tr><td class='text-left' style='color:#DDDDDD;background:#222222;font-size:14px;'>Telefono</td>				<td class='text-right'>".$datos_Telefono[(int)$proveedores_ID_Datos[(int)$ID_Prov-1]-1]."</td></tr>\n
			<tr><td class='text-left' style='color:#DDDDDD;background:#222222;font-size:14px;'>Region</td>					<td class='text-right'>".$region_Nombre_Region[(int)$comuna_ID_Region[(int)$direccion_ID_Comuna[(int)$datos_ID_direccion[(int)$proveedores_ID_Datos[(int)$ID_Prov-1]-1]-1]-1]-1]."</td></tr>\n
			<tr><td class='text-left' style='color:#DDDDDD;background:#222222;font-size:14px;'>Comuna</td>					<td class='text-right'>".$comuna_Nombre_Comuna[(int)$direccion_ID_Comuna[(int)$datos_ID_direccion[(int)$proveedores_ID_Datos[(int)$ID_Prov-1]-1]-1]-1]."</td></tr>\n
			<tr><td class='text-left' style='color:#DDDDDD;background:#222222;font-size:14px;'>Direccion</td>				<td class='text-right'>".$direccion_Direccion[(int)$datos_ID_direccion[(int)$proveedores_ID_Datos[(int)$ID_Prov-1]-1]-1]."</td></tr>\n
			<tr><td class='text-left' style='color:#DDDDDD;background:#222222;font-size:14px;'>Nombre del Local</td>		<td class='text-right'>".$direccion_Nombre_Local[(int)$datos_ID_direccion[(int)$proveedores_ID_Datos[(int)$ID_Prov-1]-1]-1]."</td></tr>\n
		</table>\n";
		echo "<form id='frm' action='' method='POST' hidden></form>";
		echo "<input type='button' class='modulo' value='Modificar Proveedor' onclick='modprov()'>";
		echo "<form id='frm2' action='' method='POST' hidden></form>";
		echo "<input type='button' class='modulo' value='Ver Productos ".$proveedores_Nombre_Compania[(int)$ID_Prov-1]."' onclick='showprod()'>";
		echo "</div>\n";
		echo "</div>\n";
		?>
	</body>
</html>
