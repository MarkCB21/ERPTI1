<?php
include "database_connection.php";

if(isset($_POST["submit"]) && $_POST["submit"]!="") {
$invCount = count($_POST["comuna"]);
for($i=0;$i<$invCount;$i++) {
mysqli_query($connection,"UPDATE comuna set Nombre_Comuna='" . $_POST["Nombre_Comuna"][$i] . "', ID_Region	='" . $_POST["ID_Region	"][$i] . "' WHERE ID_Comuna='" . $_POST["comuna"][$i] . "'");
}
header("Location:list_comuna.php");
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
						<td>Editar comuna</td>
					</tr>
	<?php
					if (!$_POST["comuna"]){
						header("Location:list_comuna.php");
					}
					else{
						$rowCount = count($_POST["ID_Comuna"]);
						for($i=0;$i<$rowCount;$i++) {
							$result = mysqli_query($connection,"SELECT * FROM comuna WHERE ID_Comuna='" . $_POST["comuna"][$i] . "'");
							$row[$i]= mysqli_fetch_array($result);
?>

							<tr>
								<td>
									<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
										<tr>
											<td><label>Nombre_Comuna</label></td>
											<td><input type="text" name="Nombre_Comuna[]" class="txtField" value="<?php echo $row[$i]['Nombre_Comuna']; ?>"></td>
										</tr>
										<tr>
											<td><label>ID_Region</label></td>
											<td><input type="number" min="1" name="ID_Region[]" class="txtField" value="<?php echo $row[$i]['ID_Region']; ?>"></td>
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