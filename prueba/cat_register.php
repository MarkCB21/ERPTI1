<!DOCTYPE html>
<html lang="es">
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="diseños/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
<div id="contendor">
	<?php include("aside.php"); ?>
	<div id="main2">
		<?php
		if(($session->logged_in)&& ($session->isAdmin())){
		?>

		<h1>Añadir Categoría</h1>
		<?php
		if($form->num_errors > 0){
			echo "<td><font size=\"2\" color=\"#ff0000\">".$form->num_errors." error(s) found</font></td>";
		}
		?>
		<form action="process.php" method="POST">
			<table align="left" border="0" cellspacing="0" cellpadding="3">

					<td><?php echo $form->error("user"); ?></td>
				</tr>
				<tr><td>Nombre:</td>
					<td><input type="text" 
							   name="Nombre" 
							   maxlength="30" 
							   value="<?php echo $form->value("Nombre"); ?>">
					</td>
					<td><?php echo $form->error("Nombre"); ?></td>
				</tr>
				
				<tr><td colspan="2" align="right">
					<input type="hidden" 
					       name="cat_subjoin" 
						   value="1">
					<input type="submit" 
						   value="añadir inventario"></td>
				</tr>
			</table>
		</form>
		<?php
		} 
		else { 
			header("Location: index.php");
		}
		?>
	</div>
</div>
</body>
</html>