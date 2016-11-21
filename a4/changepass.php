<?php
include "database_connection.php";

if(isset($_POST["submit"]) && $_POST["submit"]!="") {
$usersCount = count($_POST["Nombre_Cuenta"]);
for($i=0;$i<$usersCount;$i++) {
mysqli_query($connection,"UPDATE login_usuario set Contrasena='" . md5($_POST["Contrasena"][$i]) . "' WHERE ID_L='" . $_POST["ID_L"][$i] . "'");
}
header("Location:list_user.php");
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
						<td>Editar usuarios</td>
					</tr>
	<?php
					if (!$_POST["users"]){
						header("Location:list_user.php");
					}
					else{
						$rowCount = count($_POST["users"]);
						for($i=0;$i<$rowCount;$i++) {
							$result = mysqli_query($connection,"SELECT Contrasena FROM login_usuario WHERE ID_L='" . $_POST["users"][$i] . "'");
							$row[$i]= mysqli_fetch_array($result);
?>

							<tr>
								<td>
									<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
										<tr>
											<td><label>Contrasena</label></td>
											<td><input type="password" name="Contrasena[]" class="txtField" value=""></td>
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