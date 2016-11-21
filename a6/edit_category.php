<?php
include "database_connection.php";

if(isset($_POST["submit"]) && $_POST["submit"]!="") {
$usersCount = count($_POST["Nombre"]);
for($i=0;$i<$usersCount;$i++) {
mysqli_query($connection,"UPDATE categoria set Nombre='" . $_POST["Nombre"][$i] . "' WHERE ID_Categoria='" . $_POST["ID_Categoria"][$i] . "'");
}
header("Location:list_category.php");
}
?>
<html>
<head><title>Editar cate</title>
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
						header("Location:list_category.php");
					}
					else{
						$rowCount = count($_POST["users"]);
						for($i=0;$i<$rowCount;$i++) {
							$result = mysqli_query($connection,"SELECT * FROM categoria WHERE ID_Categoria='" . $_POST["users"][$i] . "'");
							$row[$i]= mysqli_fetch_array($result);
?>

							<tr>
								<td>
									<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
										<tr>
											<td><label>Nombre</label></td>
											<td><input type="hidden" name="ID_Categoria[]" class="txtField" value="<?php echo $row[$i]['ID_Categoria']; ?>"><input type="text" name="Nombre[]" class="txtField" value="<?php echo $row[$i]['Nombre']; ?>"></td>
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