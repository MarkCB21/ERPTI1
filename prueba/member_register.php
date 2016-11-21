<!DOCTYPE html>
<html lang="es">
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="diseños/style.css">
	<link rel="stylesheet" type="text/css" href="diseños/styletf.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
<div id="contendor">
	<?php include("aside.php"); ?>
	<div id="main">
		<?php
		if(($session->logged_in)&& ($session->isAdmin())){
		?>

		<h1>Añadir cajero</h1>
		<?php
		if($form->num_errors > 0){
			echo "<td><font size=\"2\" color=\"#ff0000\">".$form->num_errors." error(s) found</font></td>";
		}
		?>
		<form action="process.php" method="POST">
			<table align="left" border="0" cellspacing="0" cellpadding="3">
				<tr><td>Nombre:</td>
					<td><input type="text" 
							   name="user" 
							   maxlength="30" 
					           value="<?php echo $form->value("user"); ?>">
					</td>
					<td><?php echo $form->error("user"); ?></td>
				</tr>
				<tr><td>Contraseña:</td>
					<td><input type="password" 
							   name="pass" 
							   maxlength="30" 
							   value="<?php echo $form->value("pass"); ?>">
					</td>
					<td><?php echo $form->error("pass"); ?></td>
				</tr>
				<tr><td>ID de dato:</td>
					<td><input type="text" 
							   name="email" 
							   maxlength="50" 
							   value="<?php echo $form->value("email"); ?>">
					</td>
					<td><?php echo $form->error("email"); ?></td>
				</tr>
				<tr><td colspan="2" align="right">
					<input type="hidden" 
					       name="member_subjoin" 
						   value="1">
					<input type="submit" 
						   value="añadir cajero"></td>
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