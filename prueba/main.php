<?php

include("include/classes/session.php");
?>

<html>
<title>Sistema de login</title>
<body>
<div align="center"><br>
  <br><br><br><br><br><br><br>
  <table border="5" cellspacing="0" cellpadding="4" >
    <tr>
      <td>
      
      
      <?php
/**
 *El usuario ya ha iniciado la sesion
 */
 
 if (($session->logged_in) && ($session->isMember())){

		echo "<h1>Logged In</h1>";
   		echo  "Welcome <b>$session->username</b>, you are logged in. <br><br>"
		    ."<div style='background-color:white;'>"
       		."[<a href=\"userinfo.php?user=$session->username\">My Account</a>]   "
       		."[<a href=\"useredit.php\">Editar cuenta</a>]   ";
	   	echo "[<a href=\"process.php\">Salir</a>]";

} elseif (($session->logged_in) && ($session->isAgent())) {

  		echo "<h1>Conectado</h1>";
   		echo "Welcome <b>$session->username</b>, you are logged in. <br><br>"
		    ."<div style='background-color:white;'>"
       		."[<a href=\"userinfo.php?user=$session->username\">My Account</a>]   "
	   		."[<a href=\"member_register.php?user=$session->username\">Add Member</a>]   "
       		."[<a href=\"useredit.php\">Edit Account</a>]   ";
	    echo "[<a href=\"agent/agent.php\">Agent Center</a>] ";
		echo "[<a href=\"process.php\">Logout</a>]";

} elseif (($session->logged_in) && ($session->isMaster())) {

  		echo "<h1>Logged In</h1>";
   		echo "Welcome <b>$session->username</b>, you are logged in. <br><br>"
       		."<div style='background-color:white;'>"
			."[<a href=\"userinfo.php?user=$session->username\">My Account</a>]   "
	   		."[<a href=\"agent_register.php?user=$session->username\">Add Agent</a>]   "
       		."[<a href=\"useredit.php\">Edit Account</a>]   ";
	    echo "[<a href=\"master/master.php\">Master Center</a>] ";
		echo "[<a href=\"process.php\">Logout</a>]";

} elseif (($session->logged_in) && ($session->isAdmin())) {

  		echo "<h1>Conectado</h1>";
   		echo "bienvenido <b>$session->username</b>, estas conectado. <br><br>"
		    ."<div style='background-color:white;'>"
       		."[<a  href=\"userinfo.php?user=$session->username\">Mi cuenta</a>]   "
	   		."[<a href=\"master_register.php?user=$session->username\">añadir</a>]   "
       		."[<a href=\"useredit.php\">Editar cuenta</a>]   ";
	    echo "[<a href=\"admin/admin.php\">Centro de administracion	</a>] ";
	    echo "[<a href=\"process.php\">Desconexion</a>]";

} else {

/**
 * el usuario no se ha identificado, mostrar el formulario de inicio de sesion.
 * si el usuario ya ha intentado iniciar seseion,
 * mostrar numero de errores.
 * si se producen errores los mostrara.
 */
if($form->num_errors > 0){
   echo "<font size=\"2\" color=\"#ff0000\">".$form->num_errors." error(s) found</font>";
}
?>

      <img src="img/logoerop.png" width="300" height="150" align="center"><br><br>
      <!-- <form action="process.php" method="POST"> -->
      <form  action="process.php" method="POST"> 
        <table style="background-color:cyan" align="left" border="5" cellspacing="0" cellpadding="4">
          <tr><td width="111"><div align="center">Usuario</div></td><td width="144"><input  type="text" name="user" maxlength="30" value="<?php echo $form->value("user"); ?>"></td><td width="0"><?php echo $form->error("user"); ?></td></tr>
          <tr><td><div align="center">Contraseña</div></td><td><input type="password" name="pass" maxlength="30" value="<?php echo $form->value("pass"); ?>"></td><td><?php echo $form->error("pass"); ?></td></tr>
          <tr><td colspan="2" align="left"><div align="center">
            <input type="checkbox" name="remember" <?php if($form->value("remember") != ""){ echo "checked"; } ?>>
            <font size="2">Recordar nombre de usuario	     
            <input type="hidden" name="sublogin" value="1">
            <input style="background-color: yellow" type="submit" value="entrar">
          </div></td></tr>

          </table>
        </form>
      
      <?php
}

/**
 * indica el numero de usuarios registrados
 * cantidad de usuarios conectados y cantidad en modo vistaa,
 * numero de invitados visualizando el sitio . Los usuarios activos se muestras,
 * con un enlace a su informacion de usuario.
 */
echo "</td></tr><tr><td align=\"center\"><br><br>";
echo "<b>Usuarios totales:</b> ".$database->getNumMembers()."<br>";
echo "Hay $database->num_active_users usuarios registrado y ";
echo "$database->num_active_guests huspedes viendo la pagina .<br><br>";

include("include/classes/view_active.php");
//echo $session->userlevel;
?>
      
  </table>
</div>


</body>
</html>