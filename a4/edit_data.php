<?php
include "database_connection.php";

if(isset($_POST["submit"]) && $_POST["submit"]!="") {
$invCount = count($_POST["rut"]);
for($i=0;$i<$invCount;$i++) {
mysqli_query($connection,"UPDATE datos set Nombres='" . $_POST["Nombres"][$i] . "', Apellidop='" . $_POST["Apellidop"][$i] . "', ApellidoM='" . $_POST["ApellidoM"][$i] . "', Correo='" . $_POST["Correo"][$i] . "', Telefono='" . $_POST["Telefono"][$i] . "', ID_direccion	='" . $_POST["ID_direccion	"][$i] . "' WHERE ID_Datos='" . $_POST["data"][$i] . "'");
}
header("Location:list_data.php");
}
?>
<html>
<head>
<meta charset="utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="diseños/style.css">
</head>
<body>
<div id="contendor">
	<?php include("aside.php"); ?>
	<div id="main">
		<form name="frmUser" method="post" action="">
			<div style="width:500px;">
				<table border="0" cellpadding="10" cellspacing="0" width="500" align="center">
					<tr class="tableheader">
						<td>Editar datos</td>
					</tr>
	<?php
					if (!$_POST["data"]){
						header("Location:list_data.php");
					}
					else{
						$rowCount = count($_POST["data"]);
						for($i=0;$i<$rowCount;$i++) {
							$result = mysqli_query($connection,"SELECT Nombres, Apellidop, ApellidoM,Correo,Telefono,ID_direccion FROM datos WHERE ID_Datos='" . $_POST["data"][$i] . "'");
							$row[$i]= mysqli_fetch_array($result);
?>

							<tr>
								<td>
									<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
										<tr>
											<td><label>Nombres</label></td>
											<td><input type="text" name="Nombres[]" class="txtField" value="<?php echo $row[$i]['Nombres']; ?>"></td>
										</tr>
										<tr>
											<td><label>Apellido Paterno</label></td>
											<td><input type="text" name="Apellidop[]" class="txtField" value="<?php echo $row[$i]['Apellidop']; ?>"></td>
										</tr>
										<tr>
											<td><label>Apellido Materno</label></td>
											<td><input type="text" name="ApellidoM[]" class="txtField" value="<?php echo $row[$i]['ApellidoM']; ?>"></td>
										</tr>
										<tr>
											<td><label>Correo</label></td>
											<td><input type="email" name="Correo[]" class="txtField" value="<?php echo $row[$i]['Correo']; ?>"></td>
										</tr>
										<tr>
											<td><label>Telefono</label></td>
											<td><input type="number" min= "100000" name="Telefono[]" class="txtField" value="<?php echo $row[$i]['Telefono']; ?>"></td>
										</tr>
										<tr>
											<td><label>ID_direccion</label></td>
											<td><input type="number" min="1" name="ID_direccion[]" class="txtField" value="<?php echo $row[$i]['ID_direccion']; ?>"></td>
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