<?php
include "database_connection.php";
$result = mysql_query("SELECT * FROM  inventario");
?>
<html>
<head>
<meta charset="utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="diseños/style.css">
<link rel="stylesheet" type="text/css" href="styles.css" />
<script language="javascript" src="inv.js" type="text/javascript"></script>
</head>
<body>
<div id="contendor">
	<?php include("aside.php"); 
	if($loggin==False){
		header('Location: index.php?err=2');
	}
		
	?>
	<div id="main">
		<form name="frmUser" method="post" action="">
			<table border="0" cellpadding="10" cellspacing="1" width="500" class="tblListForm">
				<tr class="listheader">
			<?php if ($admin==True){?>
					<td></td>
			<?php }?>
					<td>ID_Inve</td>
					<td>ID_Categoria</td>
					<td>Descripcion</td>
					<td>Costo_Unitario</td>
					<td>Fecha_Entrada</td>
					<td>Fecha_Salida</td>
				</tr>
				<?php
				$i=0;
				while($row = mysql_fetch_array($result)) {
					if($i%2==0)
						$classname="evenRow";
					else
						$classname="oddRow";
					?>
					<tr class="<?php if(isset($classname)) echo $classname;?>">
					<?php if ($admin==True){?>
							<td><input type="checkbox" name="inv[]" value="<?php echo $row["ID_Inve"]; ?>" ></td>
					<?php }?>
						<td><?php echo $row["ID_Inve"]; ?></td>
						<td><?php echo $row["ID_Categoria"]; ?></td>
						<td><?php echo $row["Descripcion"]; ?></td>
						<td><?php echo $row["Costo_Unitario"]; ?></td>
						<td><?php echo $row["Fecha_Entrada"]; ?></td>
						<td><?php echo $row["Fecha_Salida"]; ?></td>
					</tr>
					<?php
					$i++;
				}
				?><?php if ($admin==True){?>
				<tr class="listheader">
					<td colspan="4"><input type="button" name="update" value="Actualizar" onClick="setUpdateAction();" /> <input type="button" name="delete" value="Eliminar"  onClick="setDeleteAction();" /></td>
				</tr>
				<?php }?>
			</table>
		</form>
	</div>
</div>
</body></html>