<?php
include "database_connection.php";

if(isset($_POST["submit"]) && $_POST["submit"]!="") {
$invCount = count($_POST["region"]);
for($i=0;$i<$invCount;$i++) {
mysqli_query($connection,"UPDATE region set Nombre_Region='" . $_POST["Nombre_Region"][$i] . "' WHERE ID_Region='" . $_POST["region"][$i] . "'");
}
header("Location:list_region.php");
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
						<td>Editar region</td>
					</tr>
	<?php
					if (!$_POST["region"]){
						header("Location:list_region.php");
					}
					else{
						$rowCount = count($_POST["ID_Region"]);
						for($i=0;$i<$rowCount;$i++) {
							$result = mysqli_query($connection,"SELECT * FROM region WHERE ID_Region='" . $_POST["region"][$i] . "'");
							$row[$i]= mysqli_fetch_array($result);
?>

							<tr>
								<td>
									<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
										<tr>
											<td><label>Nombre_Region</label></td>
											<td><input type="text" name="Nombre_Region[]" class="txtField" value="<?php echo $row[$i]['Nombre_Region']; ?>"></td>
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