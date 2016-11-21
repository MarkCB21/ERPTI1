<!DOCTYPE html>
<html lang="es">
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="diseños/style.css">
	<link rel="stylesheet" type="text/css" href="diseños/styletf.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<body>
<div id="contendor">
 <?php include("aside.php"); ?>
	<div id="main">
		<?php
		if(!$session->logged_in){
			header("Location: index.php");
		}
		else{
		?>
		<?php

			if(isset($_SESSION['useredit'])){
				unset($_SESSION['useredit']);
					header("Location: index.php");
			}
			else{
			?>

				<h1>Edicion de cuenta : <?php echo $session->username; ?></h1>
				<?php
				if($form->num_errors > 0){
					echo "<td><font size=\"2\" color=\"#ff0000\">".$form->num_errors." error(s) found</font></td>";
				}
			?>
				<form action="process.php" method="POST">
					<table align="left" border="0" cellspacing="0" cellpadding="3">
						<tr>
							<td>contraseña actual:</td>
							<td><input type="password" name="curpass" maxlength="30" value="
							<?php echo $form->value("curpass"); ?>">
							</td>
							<td><?php echo $form->error("curpass"); ?></td>
						</tr>
						<tr>
							<td>Nueva contraseña:</td>
							<td><input type="password" name="newpass" maxlength="30" value="
								<?php echo $form->value("newpass"); ?>">
							</td>
							<td><?php echo $form->error("newpass"); ?></td>
						</tr>
						<tr><td colspan="2" align="right">
							<input type="hidden" name="subedit" value="1">
							<input type="submit" value="Editar cuenta"></td></tr>
						<tr><td colspan="2" align="left"></td></tr>
					</table>
				</form>
<?php
}
}
?>
</div></div>
</body>
</html>
