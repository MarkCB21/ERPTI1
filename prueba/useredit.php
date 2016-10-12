<?php
include("include/classes/UTF-8.php");
include("include/classes/session.php");
?>

<html>
<title>Sistema de login</title>
<body>

<?php

if(isset($_SESSION['useredit'])){
   unset($_SESSION['useredit']);
   
   echo "<h1>Edición de la cuenta completada !</h1>";
   echo "<p><b>$session->username</b>, su cuenta ha sido actualizada satisfactoriamente!. "
       ."<a href=\"index.php\">Inicio</a>.</p>";
}
else{
?>

<?php

if($session->logged_in){
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
<?php echo $form->value("curpass"); ?>"></td>
<td><?php echo $form->error("curpass"); ?></td>
</tr>
<tr>
<td>Nueva contraseña:</td>
<td><input type="password" name="newpass" maxlength="30" value="
<?php echo $form->value("newpass"); ?>"></td>
<td><?php echo $form->error("newpass"); ?></td>
</tr>
<tr>
<td>Email:</td>
<td><input type="text" name="email" maxlength="50" value="
<?php
if($form->value("email") == ""){
   echo $session->userinfo['email'];
}else{
   echo $form->value("email");
}
?>">
</td>
<td><?php echo $form->error("email"); ?></td>
</tr>
<tr><td colspan="2" align="right">
<input type="hidden" name="subedit" value="1">
<input type="submit" value="Editar cuenta"></td></tr>
<tr><td colspan="2" align="left"></td></tr>
</table>
</form>
<br><br><br><br>
<?php
}
}
echo "<br>[<a href=\"info.php?user=$session->username\">volver</a>]<br>";
?>

</body>
</html>
