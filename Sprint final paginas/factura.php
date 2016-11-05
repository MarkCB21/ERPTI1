<!DOCTYPE html>
<html lang="es">
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="diseños/style.css">
	<link rel="stylesheet" type="text/css" href="diseños/stylefactura.css">
	<script type="text/javascript" src="JavaScript.js"></script>
</head>
<body>
<?php include("aside.php"); ?>
<?php include("conect.php"); ?>

<div id="main">
	<div id="factura">
		<div id="datosempresa">
			<div id="logo_factura">
				<img src="diseños/img/locatormedio.png" height="150px" width="150px">
			</div>
			<div id="datos">
				<?php 
				$consulta= "SELECT * 
				FROM datos_compania 
				INNER JOIN direccion On direccion.ID_Direccion = datos_compania.ID_Direccion
				";
				$resultado=$conexion->query($consulta);
				$extraido= mysqli_fetch_array($resultado);
				echo "<h2> $extraido[Razon_Social]</h2>
				<h5>Direccion: $extraido[Direccion] </h5>
				<h5> $extraido[Nombre_Local]</h5>
				 <h5>Telefono: $extraido[Telefono] </h5>
				";
				?>
			</div>	
		</div>
		<div id="id_fact">
			<?php 
				$consulta= "SELECT * FROM datos_compania ";
				$resultado=$conexion->query($consulta);
				$extraido= mysqli_fetch_array($resultado);
				echo " 
				<p> $extraido[Rut] </p>
				<h1>FACTURA</h1>
				<p>$extraido[ID_Membrete] </p>
				";
				?>
		</div>
		 <!-- inicio de factura-->
		<div id="DatosCompador">
			<table width="700px">
				<tr>
					<td width="102px">Rut</td>
					<td width="50px"><input type="number" name="rut" ></td>
					<td width="10px">-</td><td width="50px"><input type="number" name="verificador"  min="1" max="9" "></td>
					<td width="100px">Razon Social:</td>
					<td width="250px"><input type="text" name="razonsocial" size="25"></td>
				</tr>
			</table>
			<table width="700px">
				<tr>
					<td width="100px">Direccion</td>
					<td colspan="3"><input type="text" name="direccion" size="50"></td>
				</tr>
				<tr>
					<td width="100px">Comuna</td>
					<td><input type="text" name="comuna" size="25"></td>
					<td width="100px">Ciudad</td>
					<td><input type="text" name="ciudad" size="25"></td>
				</tr>
				<tr>
					<td width="100px">Giro</td>
					<td colspan="3"><input type="text" name="giro" size="50"></td>
				</tr>
					<td width="100px">Telefono</td>
					<td><input type="number" name="telefono"></td>
					<td width="100px">Rut Solicitante</td>
					<td><input type="number" name="rutsolicitante"></td>	
				</tr>
			</table>
		</div>
		<div id="articulos">
			<table border="3">
				<tr>
					<td><input type="button" onclick="addRow()" value="Agregar"></td>
					<td><input type="button" onclick="deleteRow()" value="quitar"></td>
				</tr>
			</table>
			<form action="recibe.php" method="POST">
				<table width="700px" border="1" id="tableID">
					<tr>
						<th width="100px">Borra.</th>
						<th width="100px">Cod. Prod.</th>
						<th width="200px">Nombre</th>
						<th width="100px">Cant.</th>
						<th width="100px">P. Uni</th>
						<th width="100px">Precio Total</th>
					</tr>				
				</table	>
				<table>
					<tr><td><input type="submit" name="enviar" value="Enviar" onclick="contar()"></td></tr>
				</table>
			</form>
		</div>
	</div>
</div>

</body>
</html>
