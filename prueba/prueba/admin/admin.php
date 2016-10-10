<?php
include("../include/classes/UTF-8.php");
include("../include/classes/session.php");

/**
 * muetra la tabla de base de datos de usuarios en una tabla html.........-.-
 */
function displayUsers(){
   global $database;
   $q = "SELECT username, userlevel, email "
       ."FROM ".TBL_USERS." ORDER BY userlevel DESC, username";
   $result = $database->query($q);
   /* se a producido un error asociado al nombre */
   $num_rows = mysqli_num_rows($result);
   if(!$result || ($num_rows < 0)){
      echo "Error displaying info";
      return;
   }
   if($num_rows == 0){
      echo "Database table empty";
      return;
   }
   /* contenido de la tabla */
   echo "<table align=\"left\" border=\"1\" cellspacing=\"0\" cellpadding=\"3\">\n";
   echo "<tr><td><b>Usuario</b></td><td><b>Nivel</b></td><td><b>Email</b></td></tr>\n";

   for($i=0; $i<$num_rows; $i++){
      mysqli_data_seek($result, $i);
      $row=mysqli_fetch_row($result);
      $uname  = $row[0]; //username
      $ulevel = $row[1]; //userlevel
      $email  = $row[2]; //email
      echo "<tr><td>$uname</td><td>$ulevel</td><td>$email</td></tr>\n";
   }
   echo "</table><br>\n";
   
   
}

/**
 * Usuario no es el administrador, redirigido a la pag principal
 */
if(!$session->isAdmin()){
   header("Location: ../index.php");
}
else{
/**
 * administrador viendo la pag
 */
?>
<html>
	<title>Centro de administracion</title>
<body>
	<h1>Centro de administracion</h1>
<font size="5" color="#ff0000">
	<b>::::::::::::::::::::::::::::::::::::::::::::</b></font>
	<font size="4">usuario conectado <b><?php echo $session->username; ?></b></font><br><br>
	volver al  [<a href="../index.php">Inicio</a>]<br><br>
	<?php
	if($form->num_errors > 0){
	echo "<font size=\"4\" color=\"#ff0000\">"
		."!*** Error with request, please fix</font><br><br>";
	}
?>
<table align="left" border="0" cellspacing="5" cellpadding="5">
<tr><td>
<?php

?>
<h3>Tabla de contenido de los usuarios</h3>
<?php
displayUsers();
?>
</td></tr>
<tr>
<td>
<br>
<?php
/**
 * actualizar nivel de usuario
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
<option value="1">1
<option value="2">2

</select>
</td>
<td>
<br>
<input type="hidden" name="subupdlevel" value="1">
<input type="submit" value="actualizar nivel ">
</td></tr>
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
 * eliminar usuario
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
<td><hr></td>
</tr>
<tr>
<td>

</table>
</body>
</html>
<?php
}
?>

