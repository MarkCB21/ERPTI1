<?php
include "database_connection.php";
$result = mysqli_query($connection,"SELECT * FROM  inventario");
?>
<html>
<head> <title>Inventario</title>
<meta charset="utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="diseños/style.css">
<link rel="stylesheet" type="text/css" href="styles.css" />
<link rel="stylesheet" type="text/css" href="diseños/styletables.css" />
<script language="javascript" src="inv.js" type="text/javascript"></script>
</head>
<body>
<div id="contendor">
	<?php include("aside.php"); 
	if($loggin==False){
		header('Location: index.php?err=2');
	}
		
	?>
	<div align="center" id="main">
		<!--<div class="form-head">hola</div><div class="return" onclick="window.location='inicio.php'">Volver</div>-->
		<h1 align="center">Lista del inventario</h1><br>
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
				while($row = mysqli_fetch_array($result)) {
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
		</form><br>
		<p>	<a href="list_category.php" style="text-decoration:none;" class="vpb_general_button"><button>ver categorias</button></a><br>
		<p>	<a href="create_inv.php" style="text-decoration:none;" class="vpb_general_button"><button>crear nuevo inventario</button></a><br>
	</div>
</div>
</body></html>