<?php
include "database_connection.php";

if(isset($_POST["submit"]) && $_POST["submit"]!="") {
$invCount = count($_POST["ID_Categoria"]);
for($i=0;$i<$invCount;$i++) {
mysqli_query($connection,"UPDATE inventario set ID_Categoria='" . $_POST["ID_Categoria"][$i] . "', Descripcion='" . $_POST["Descripcion"][$i] . "', Costo_Unitario='" . $_POST["Costo_Unitario"][$i] . "', Fecha_Entrada='" . $_POST["Fecha_Entrada"][$i] . "', Fecha_Salida='" . $_POST["Fecha_Salida"][$i] . "' WHERE ID_Inve='" . $_POST["ID_Inve"][$i] . "'");
}
header("Location:list_inv.php");
}
?>
<html>
<head><title>Editar inventario</title>
<meta charset="utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="diseños/style.css">
</head>
<body>
<div id="contendor">
	<?php include("aside.php"); ?>
	<div align="center" id="main">
		<form name="frmUser" method="post" action="">
			<div style="width:500px;">
				<table border="0" cellpadding="10" cellspacing="0" width="500" align="center">
					<tr class="tableheader">
						<td>Editar inventario</td>
					</tr>
	<?php
					if (!$_POST["inv"]){
						header("Location:list_inv.php");
					}
					else{
						$rowCount = count($_POST["inv"]);
						for($i=0;$i<$rowCount;$i++) {
							$result = mysqli_query($connection,"SELECT * FROM inventario WHERE ID_Inve='" . $_POST["inv"][$i] . "'");
							$row[$i]= mysqli_fetch_array($result);
?>

							<tr>
								<td>
									<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
										<tr>
											<td><label>ID_Categoria</label></td>
											<td><input type="hidden" name="ID_Inve[]" class="txtField" value="<?php echo $row[$i]['ID_Inve']; ?>"><input type="number" name="ID_Categoria[]" class="txtField" value="<?php echo $row[$i]['ID_Categoria']; ?>"></td>
										</tr>
										<tr>
											<td><label>Descripcion</label></td>
											<td><input type="text" name="Descripcion[]" class="txtField" value="<?php echo $row[$i]['Descripcion']; ?>"></td>
										</tr>
										<tr>
											<td><label>Costo_Unitario</label></td>
											<td><input type="number"  name="Costo_Unitario[]" class="txtField" value="<?php echo $row[$i]['Costo_Unitario']; ?>"></td>
										</tr>
										<tr>
											<td><label>Fecha_Entrada</label></td>
											<td><input type="date" name="Fecha_Entrada[]" class="txtField" value="<?php echo $row[$i]['Fecha_Entrada']; ?>"></td>
										</tr>
										<tr>
											<td><label>Fecha_Salida</label></td>
											<td><input type="date"  name="Fecha_Salida[]" class="txtField" value="<?php echo $row[$i]['Fecha_Salida']; ?>"></td>
										</tr>
									</table>
								</td>
							</tr>
<?php
						}
					}
?>
				<tr>
					<td colspan="2"><input type="submit" name="submit" value="Actualizar" class="btnSubmit"></td>
				</tr>
				</table>
			</div>
		</form>
	</div>
</div>
</body></html>