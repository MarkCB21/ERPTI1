<!DOCTYPE html>
<html lang="es">
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="diseños/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<?php 
		function mostrarproductos(){
			global $database;
			$q = "SELECT ID_Inve, ID_Categoria, Nombre, Precio, Fecha, Stock "
			."FROM ".TBL_INVENTARIO." ORDER BY ID_Inve DESC, ID_Categoria";
			$result = $database->query($q);
/* se a producido un error asociado al nombre */
			$num_rows = mysqli_num_rows($result);
			if(!$result || ($num_rows < 0)){
			echo "Error displaying info";
			return;
		}
		if($num_rows == 0){
			echo "Database table empty";
			return;
		}
/* contenido de la tabla */
		echo "<table align=\"left\" border=\"1\" cellspacing=\"0\" cellpadding=\"3\">\n";
		echo "<tr><td><b>ID_Inve</b></td><td><b>ID_Categoria</b></td><td><b>Nombre</b></td><td><b>Precio</b></td><td><b>Fecha</b></td><td><b>Stock</b></td></tr>\n";

		for($i=0; $i<$num_rows; $i++){
			mysqli_data_seek($result, $i);
			$row=mysqli_fetch_row($result);
			$ID_Inve  = $row[0]; 
			$ID_Categoria = $row[1]; 
			$Nombre  = $row[2]; 
			$Precio   = $row[3];
			$Fecha   = $row[4];	  
			$Stock   = $row[5]; 
			echo "<tr><td>$ID_Inve</td><td>$ID_Categoria</td><td>$Nombre</td><td>$Precio</td><td>$Fecha</td><td>$Stock</td></tr>\n";
		}
		echo "</table><br>\n";
   
}
?>
</head>
<body>
<div id="contendor">

 <?php include("aside.php"); ?>
 
<div align="center" id="main2">
<br><br><br><br>
<p><table align="center" border="0" cellspacing="5" cellpadding="5">
<tr><td>

<h3 align="center">Tabla de inventario</h3>

<?php if($session->logged_in){
	mostrarproductos();
?>
</td></tr>
</table>
<br><br><br><br>
	<?php
	if($session->isAdmin()){ 
	?>
		<table>
		<h3>Actualizacion de Stock (en contruccion)</h3>
		<?php echo $form->error("updinv"); ?>
		<form  action="adminprocess.php" method="POST">
			<tr><td>
					ID inventario:<br>
					<input type="text" name="updinv" maxlength="3" value="<?php echo $form->value("updinv"); ?>">
				</td>
				<td>
					Stock:<br>
					<input type="text" name="updstock">
				</td>
				<td><br>
					<input type="hidden" name="subupdstock" value="1">
					<input type="submit" value="actualizar nivel ">
				</td>
			</tr>
		</form>
		</table><br><br><br><br>
		<table>
		<tr>
			<td>
				<h3>Eliminar producto (en contruccion)</h3>
				<?php echo $form->error("delinv"); ?>
				<form action="adminprocess.php" method="POST">
					ID inventario:<br>
					<input type="text" name="delinv" maxlength="30" value="<?php echo $form->value("delinv"); ?>">
					<input type="hidden" name="subinv" value="1">
					<input type="submit" value="Eliminar producto">
				</form>
			</td>
		</tr>
		</table>
		

<?php
}}
else{
	header('Location: index.php');
}
?>


</div>
</body>
</html>