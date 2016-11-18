<?php
include "database_connection.php";
$result = mysqli_query($connection,"SELECT * FROM  login_usuario");
?>
<html>
<head>
<meta charset="utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="diseños/style.css">
<link rel="stylesheet" type="text/css" href="styles.css" />
<script language="javascript" src="users.js" type="text/javascript"></script>
</head>
<body>
<div id="contendor">
	<?php include("aside.php"); 
	if($admin==False){
		header('Location: index.php?err=2');
	}
		
	?>
	<div id="main">
		<form name="frmUser" method="post" action="">
			<table border="0" cellpadding="10" cellspacing="1" width="500" class="tblListForm">
				<tr class="listheader">
					<td></td>
					<td>ID_L</td>
					<td>Nombre_Cuenta</td>
					<td>Contrasena</td>
					<td>Tipo</td>
					<td>Estado</td>
					<td>ID_Datos</td>
				</tr>
				<?php
				$i=0;
				while($row = mysqli_fetch_array($result)) {
					if($i%2==0)
						$classname="evenRow";
					else
						$classname="oddRow";
					?>
					<tr class="<?php if(isset($classname)) echo $classname;?>">
						<td><input type="checkbox" name="users[]" value="<?php echo $row["ID_L"]; ?>" ></td>
						<td><?php echo $row["ID_L"]; ?></td>
						<td><?php echo $row["Nombre_Cuenta"]; ?></td>
						<td><?php echo $row["Contrasena"]; ?></td>
						<td><?php echo $row["Tipo"]; ?></td>
						<td><?php echo $row["Estado"]; ?></td>
						<td><?php echo $row["ID_Datos"]; ?></td>
					</tr>
					<?php
					$i++;
				}
				?>
				<tr class="listheader">
					<td colspan="4"><input type="button" name="update" value="Actualizar" onClick="setUpdateAction();" /> <input type="button" name="delete" value="Eliminar"  onClick="setDeleteAction();" /></td>
				</tr>
			</table>
		</form>
	</div>
</div>
</body></html>