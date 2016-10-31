<!DOCTYPE html>
<html lang="es">
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="diseños/style.css">
	<link rel="stylesheet" type="text/css" href="diseños/styletf.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<?php
		function displayBannedUsers(){
			global $database;
			$q = "SELECT username "
			."FROM ".TBL_USERS." WHERE userlevel = 3 ORDER BY username";
			$result = $database->query($q);
			/* Error occurred, return given name by default */
			$num_rows = mysqli_num_rows($result);
			if(!$result || ($num_rows < 0)){
				echo "Error displaying info";
				return;
			}
			if($num_rows == 0){
				echo "Tabla vacía";
				return;
			}
   /* Display table contents */
			echo "<table align=\"left\" border=\"1\" cellspacing=\"0\" cellpadding=\"3\">\n";
			echo "<tr><td><b>Username</b></td></tr>\n";
			for($i=0; $i<$num_rows; $i++){
				mysqli_data_seek($result, $i);
				$row=mysqli_fetch_row($result);
				$uname  = $row[0]; //username
				echo "<tr><td>$uname</td></tr>\n";
			}
			echo "</table><br>\n";
		}
		function displayUsers(){
			global $database;   
			$q = "SELECT username, userlevel,ID_D "."FROM ".TBL_USERS." ORDER BY username DESC, userlevel";
			$resultado = $database->query($q);
/* se a producido un error asociado al nombre */
			$num_rows = mysqli_num_rows($resultado);
			if(!$resultado || ($num_rows < 0)){
			echo "Error displaying info";
			return;
		}
		if($num_rows == 0){
			echo "La base de datos está vacía";
			return;
		}
/* contenido de la tabla */
		echo "<table align=\"left\" border=\"1\" cellspacing=\"0\" cellpadding=\"3\">\n";
		echo "<tr><td><b>Usuario</b></td><td><b>Nivel</b></td><td><b>ID_D</b></td></tr>\n";

		for($i=0; $i<$num_rows; $i++){
			mysqli_data_seek($resultado, $i);
			$row=mysqli_fetch_row($resultado);
			$uname  = $row[0]; //username
			$ulevel = $row[1]; //userlevel
			$ID_D = $row[2]; //ID_D
			echo "<tr><td>$uname</td><td>$ulevel</td><td>$ID_D</td></tr>\n";
		}
		echo "</table><br>\n";
		}
	?>
</head>
<body>
<div id="contendor">
 <?php include("aside.php"); ?>
	<div id="main">
		<?php
		if(!$session->isAdmin()){
			header("Location: index.php");
		}
		else{
		?>
			<?php
				if($form->num_errors > 0){
					echo "<font size=\"4\" color=\"#ff0000\">"
						."!*** Error with request, please fix</font><br><br>";
				}
			?>
			<table align="left" border="0" cellspacing="5" cellpadding="5">
			<tr><td>
					<h3>Tabla de contenido de los usuarios</h3>
					<a href="dato.php"  style="text-decoration:none;" class="vpb_general_button">crear dato</a>
					<?php
						displayUsers();
					?>
				</td>
			</tr>
				<tr>
					<td><br>
						<?php
/**
 * Update User Level
 */
						?>
						<h3>Actualizacion de nivel de usuario</h3>
						<?php echo $form->error("upduser"); ?>
						<table>
							<form action="adminprocess.php" method="POST">
								<tr><td>
									Usuario:<br>
									<input type="text" name="upduser" maxlength="30" value="<?php echo $form->value("upduser"); ?>">
									</td>
									<td>
									Nivel:<br>
									<select name="updlevel">
										<option value="1">cajero
										<option value="2">admin
										<option value="3">banear
									</select>
									</td>
									<td><br>
										<input type="hidden" name="subupdlevel" value="1">
										<input type="submit" value="actualizar nivel ">
									</td>
								</tr>
							</form>
						</table>
					</td>
				</tr>
				<tr>
					<td><hr></td>
				</tr>
				<tr>
					<td>
						<?php
							/**
								* Delete User
							*/
						?>
						<h3>Eliminar Usuarios</h3>
						<?php echo $form->error("deluser"); ?>
						<form action="adminprocess.php" method="POST">
							Usuario:<br>
							<input type="text" name="deluser" maxlength="30" value="<?php echo $form->value("deluser"); ?>">
							<input type="hidden" name="subdeluser" value="1">
							<input type="submit" value="Eliminar usuario">
						</form>
					</td>
				</tr>
				<tr>
					<td><h3>Usuarios baneados:</h3>
							<?php
							displayBannedUsers();
							?></td>
				</tr>
			</table>
	<?php   }?>
	</div>
</div>
</body>
</html>