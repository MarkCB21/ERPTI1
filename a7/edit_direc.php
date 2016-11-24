<?php
include "database_connection.php";

if(isset($_POST["submit"]) && $_POST["submit"]!="") {
$usersCount = count($_POST["Direccion"]);
for($i=0;$i<$usersCount;$i++) {
mysqli_query($connection,"UPDATE direccion set Direccion='" . $_POST["Direccion"][$i] . "', Nombre_Local='" . $_POST["Nombre_Local"][$i] . "', ID_Comuna='" . $_POST["ID_Comuna"][$i] . "' WHERE ID_Direccion='" . $_POST["ID_Direccion"][$i] . "'");
}
header("Location:list_direc.php");
}
?>
<html>
<head><title>Editar cuenta de usuario</title>
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
						<td>Editar direcciones</td>
					</tr>
	<?php
					if (!$_POST["users"]){
						header("Location:list_direc.php");
					}
					else{
						$rowCount = count($_POST["users"]);
						for($i=0;$i<$rowCount;$i++) {
							$result = mysqli_query($connection,"SELECT * FROM direccion WHERE ID_Direccion='" . $_POST["users"][$i] . "'");
							$row[$i]= mysqli_fetch_array($result);
?>

							<tr>
								<td>
									<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
										<tr>
											<td><label>Direccion</label></td>
											<td><input type="hidden" name="ID_Direccion[]" class="txtField" value="<?php echo $row[$i]['ID_Direccion']; ?>"><input type="text" name="Direccion[]" class="txtField" value="<?php echo $row[$i]['Direccion']; ?>"></td>
										</tr>
										<tr>
											<td><label>Nombre_Local</label></td>
											<td><input type="text" name="Nombre_Local[]" class="txtField" value="<?php echo $row[$i]['Nombre_Local']; ?>"></td>
										</tr>
										<tr>
											<td><label>ID_Comuna</label></td>
											<td><input type="number" min="1" name="ID_Comuna[]" class="txtField" value="<?php echo $row[$i]['ID_Comuna']; ?>"></td>
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