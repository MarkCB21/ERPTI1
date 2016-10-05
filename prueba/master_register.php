<?php

include("include/classes/session.php");
?>

<html>
<title>Pagina de registro</title>
<body>

<?php
/**
 * The user is already logged in, not allowed to register.
 */
if($session->logged_in){
 
?>

<h1>añadir nuevo usuario </h1>
<?php
if($form->num_errors > 0){
   echo "<td><font size=\"2\" color=\"#ff0000\">".$form->num_errors." error(s) found</font></td>";
}
?>
<form action="process.php" method="POST">
<table align="left" border="0" cellspacing="0" cellpadding="3">
<tr><td>Usuario:</td><td><input type="text" name="user" maxlength="30" value="<?php echo $form->value("user"); ?>"></td><td><?php echo $form->error("user"); ?></td></tr>
<tr><td>Contraseña:</td><td><input type="password" name="pass" maxlength="30" value="<?php echo $form->value("pass"); ?>"></td><td><?php echo $form->error("pass"); ?></td></tr>
<tr><td>Email:</td><td><input type="text" name="email" maxlength="50" value="<?php echo $form->value("email"); ?>"></td><td><?php echo $form->error("email"); ?></td></tr>
<tr><td colspan="2" align="right">
<input type="hidden" name="master_subjoin" value="1">
<input type="submit" value="añadir!"></td></tr>
<tr><td colspan="2" align="left"><a href="main.php">Inicio</a></td></tr>
</table>
</form>
<?php
} else { die('you are not an agent'); }
?>

</body>
</html>
