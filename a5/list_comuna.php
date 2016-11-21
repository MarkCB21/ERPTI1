<?php
include "database_connection.php";
$result = mysqli_query($connection,"SELECT * FROM  comuna");
?>
<html>
<head><title>Lista de comunas</title>
<meta charset="utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="diseños/style.css">
<link rel="stylesheet" type="text/css" href="styles.css" />
<script language="javascript" src="comuna.js" type="text/javascript"></script>
</head>
<body>
<div id="contendor">
	<?php include("aside.php"); 
	if($admin==False){
		header('Location: index.php?err=2');
	}
		
	?>
	<div align="center" id="main">
		<h1>Lista de comunas</h1><br>
		<form name="frmUser" method="post" action="">
			<table border="0" cellpadding="10" cellspacing="1" width="500" class="tblListForm">
				<tr class="listheader">
					<td></td>
					<td>ID_Comuna</td>
					<td>Nombre_Comuna</td>
					<td>ID_Region</td>
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
						<td><input type="checkbox" name="comuna[]" value="<?php echo $row["ID_Comuna"]; ?>" ></td>
						<td><?php echo $row["ID_Comuna"]; ?></td>
						<td><?php echo $row["Nombre_Comuna"]; ?></td>
						<td><?php echo $row["ID_Region"]; ?></td>
					</tr>
					<?php
					$i++;
				}
				?>
				<tr class="listheader">
					<td colspan="4"><input type="button" name="update" value="Actualizar" onClick="setUpdateAction();" /> 
					<input type="button" name="delete" value="Eliminar"  onClick="setDeleteAction();" /></td>
				</tr>
			</table>
		</form>
		<p>	<a href="list_region.php" style="text-decoration:none;" class="vpb_general_button"><button>Ver regiones</button></a>
		<p>	<a href="add_comuna.php" style="text-decoration:none;" class="vpb_general_button"><button>Agregar comunas</button></a>

	</div>
</div>
</body></html>