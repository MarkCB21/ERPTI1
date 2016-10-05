<?php

include("../include/classes/session.php");

/**
 * muetra la tabla de base de datos de usuarios en una tabla html.........-.-
 */
function displayUsers(){
   global $database;
   $q = "SELECT username, userlevel, email, timestamp, parent_directory "
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
   echo "<tr><td><b>Username</b></td><td><b>Level</b></td><td><b>Email</b></td><td><b>Last Active</b></td><td><b>Group</b></td></tr>\n";

   for($i=0; $i<$num_rows; $i++){
      mysqli_data_seek($result, $i);
      $row=mysqli_fetch_row($result);
      $uname  = $row[0]; //username
      $ulevel = $row[1]; //userlevel
      $email  = $row[2]; //email
      $time   = $row[3]; //timestamp
      $parent = $row[4]; //parent directory
      echo "<tr><td>$uname</td><td>$ulevel</td><td>$email</td><td>$time</td><td>$parent</td></tr>\n";
   }
   echo "</table><br>\n";
   
   
}

/**
 * displayBannedUsers - Displays the banned users
 * database table in a nicely formatted html table.
 */
function displayBannedUsers(){
   global $database;
   $q = "SELECT username,timestamp "
       ."FROM ".TBL_BANNED_USERS." ORDER BY username";
   $result = $database->query($q);
   /* Error occurred, return given name by default */
   $num_rows = mysqli_num_rows($result);
   if(!$result || ($num_rows < 0)){
      echo "Error displaying info";
      return;
   }
   if($num_rows == 0){
      echo "Database table empty";
      return;
   }
   /* Display table contents */
   echo "<table align=\"left\" border=\"1\" cellspacing=\"0\" cellpadding=\"3\">\n";
   echo "<tr><td><b>Username</b></td><td><b>Time Banned</b></td></tr>\n";
   for($i=0; $i<$num_rows; $i++){
      mysqli_data_seek($result, $i);
      $row=mysqli_fetch_row($result);
      $uname  = $row[0]; //username
      $time   = $row[1]; //timestamp
      echo "<tr><td>$uname</td><td>$time</td></tr>\n";
   }
   echo "</table><br>\n";
}
   
/**
 * User not an administrator, redirect to main page
 * automatically.
 */
if(!$session->isAdmin()){
   header("Location: ../main.php");
}
else{
/**
 * Administrator is viewing page, so display all
 * forms.
 */
?>
<html>
<title>Jpmaster77's Login Script</title>
<body>
<h1>Centro de administracion</h1>
<font size="5" color="#ff0000">
<b>::::::::::::::::::::::::::::::::::::::::::::</b></font>
<font size="4">usuario conectado <b><?php echo $session->username; ?></b></font><br><br>
volver al  [<a href="../main.php">Inicio</a>]<br><br>
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
<option value="9">9
<option value="8">8
<option value="2">2
<option value="1">1

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
<td><hr></td>
</tr>
<tr>
<td>
<?php
/**
 * Delete Inactive Users
 */
?>
<h3>Eliminar usuarios inactivos</h3>
Elimina todos los usuarios no administradores, que no han iniciado sesion en el sitio <br>
dentro de un periodo de tiempo.<br><br>
<table>
<form action="adminprocess.php" method="POST">
<tr><td>
Dias:<br>
<select name="inactdays">
<option value="3">3
<option value="7">7
<option value="14">14
<option value="30">30
<option value="100">100
<option value="365">365
</select>
</td>
<td>
<br>
<input type="hidden" name="subdelinact" value="1">
<input type="submit" value="Eliminar">
</td>
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
 * Ban User
 */
?>
<h3>usuarios bloqueados</h3>
<?php echo $form->error("banuser"); ?>
<form action="adminprocess.php" method="POST">
Usuario:<br>
<input type="text" name="banuser" maxlength="30" value="<?php echo $form->value("banuser"); ?>">
<input type="hidden" name="subbanuser" value="1">
<input type="submit" value="bloquear usuario">
</form>
</td>
</tr>
<tr>
<td><hr></td>
</tr>
<tr><td>
<?php

?>
<h3>bloquear usuario de la tabla de contenidos:</h3>
<?php
displayBannedUsers();
?>
</td></tr>
<tr>
<td><hr></td>
</tr>
<tr>
<td>
<?php

?>
<h3>Eliminar usuario bloqueado</h3>
<?php echo $form->error("delbanuser"); ?>
<form action="adminprocess.php" method="POST">
usuario:<br>
<input type="text" name="delbanuser" maxlength="30" value="<?php echo $form->value("delbanuser"); ?>">
<input type="hidden" name="subdelbanned" value="1">
<input type="submit" value="Eliminsr">
</form>
</td>
</tr>
</table>
</body>
</html>
<?php
}
?>

