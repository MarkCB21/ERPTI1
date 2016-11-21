<?php
include "database_connection.php";

if(isset($_POST["submit"]) && $_POST["submit"]!="") {
$usersCount = count($_POST["Nombre_Cuenta"]);
for($i=0;$i<$usersCount;$i++) {
mysqli_query($connection,"UPDATE login_usuario set Nombre_Cuenta='" . $_POST["Nombre_Cuenta"][$i] . "', Contrasena='" . md5($_POST["Contrasena"][$i]) . "', Tipo='" . $_POST["Tipo"][$i] . "', Estado='" . $_POST["Estado"][$i] . "', ID_Datos='" . $_POST["ID_Datos"][$i] . "' WHERE ID_L='" . $_POST["ID_L"][$i] . "'");
}
header("Location:list_user.php");
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
						<td>Editar usuarios</td>
					</tr>
	<?php
					if (!$_POST["users"]){
						header("Location:list_user.php");
					}
					else{
						$rowCount = count($_POST["users"]);
						for($i=0;$i<$rowCount;$i++) {
							$result = mysqli_query($connection,"SELECT * FROM login_usuario WHERE ID_L='" . $_POST["users"][$i] . "'");
							$row[$i]= mysqli_fetch_array($result);
?>

							<tr>
								<td>
									<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
										<tr>
											<td><label>Nombre_Cuenta</label></td>
											<td><input type="hidden" name="ID_L[]" class="txtField" value="<?php echo $row[$i]['ID_L']; ?>"><input type="text" name="Nombre_Cuenta[]" class="txtField" value="<?php echo $row[$i]['Nombre_Cuenta']; ?>"></td>
										</tr>
										<tr>
											<td><label>Contrasena</label></td>
											<td><input type="password" name="Contrasena[]" class="txtField" value="<?php echo $row[$i]['Contrasena']; ?>"></td>
										</tr>
										<tr>
											<td><label>Tipo</label></td>
											<td><input type="number" min="1" name="Tipo[]" class="txtField" value="<?php echo $row[$i]['Tipo']; ?>"></td>
										</tr>
										<tr>
											<td><label>Estado</label></td>
											<td><input type="text" name="Estado[]" class="txtField" value="<?php echo $row[$i]['Estado']; ?>"></td>
										</tr>
										<tr>
											<td><label>ID_Datos</label></td>
											<td><input type="number" min="1" name="ID_Datos[]" class="txtField" value="<?php echo $row[$i]['ID_Datos']; ?>"></td>
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