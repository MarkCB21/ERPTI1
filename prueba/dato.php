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

		<h1>Añadir dato</h1>
		<?php
		if($form->num_errors > 0){
			echo "<td><font size=\"2\" color=\"#ff0000\">".$form->num_errors." error(s) found</font></td>";
		}
		?>
		<form action="process.php" method="POST">
			<table align="left" border="0" cellspacing="0" cellpadding="3">
				<tr><td>Nombre Completo:</td>
					<td><input type="text" 
							   name="Nombre" 
							   maxlength="30" 
					           value="<?php echo $form->value("Nombre"); ?>">
					</td>
					<td><?php echo $form->error("Nombre"); ?></td>
				</tr>
				<tr><td>Telefono:</td>
					<td><input type="text" 
							   name="Telefono" 
							   maxlength="30" 
							   value="<?php echo $form->value("Telefono"); ?>">
					</td>
					<td><?php echo $form->error("Telefono"); ?></td>
				</tr>
				<tr><td>Correo:</td>
					<td><input type="text" 
							   name="email" 
							   maxlength="50" 
							   value="<?php echo $form->value("email"); ?>">
					</td>
					<td><?php echo $form->error("email"); ?></td>
				</tr>
				<tr><td>Direccion:</td>
					<td><input type="text" 
							   name="Direccion" 
							   maxlength="30" 
							   value="<?php echo $form->value("Direccion"); ?>">
					</td>
					<td><?php echo $form->error("Direccion"); ?></td>
				</tr>
				<tr><td colspan="2" align="right">
					<input type="hidden" 
					       name="dato_subjoin" 
						   value="1">
					<input type="submit" 
						   value="añadir dato"></td>
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