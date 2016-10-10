<?php
include("include/classes/session.php");
include("include/classes/UTF-8.php");
?>

<html>
<title>Sistema de login</title>

<body>
<div align="center">
      
      
      <?php

 
 if (($session->logged_in) && ($session->isMember())){

		echo "<h1>Conectado</h1>";
   		echo  "Bienvenido  <b>$session->username</b>, estas conectado. <br><br>"
       		."[<a href=\"info.php?user=$session->username\">Mi cuenta</a>]   ";
		echo "[<a href=\"caja/productos.php\">Ver productos</a>]   ";
		echo "[<a href=\"caja/boleta.php\">Generar boleta</a>]   ";
		echo "[<a href=\"caja/factura.php\">Generar factura</a>]   ";
	   	echo "[<a href=\"process.php\">Salir</a>]";

} elseif (($session->logged_in) && ($session->isAdmin())) {

  		echo "<h1>Conectado</h1>";
   		echo "Bienvenido <b>$session->username</b>, estas conectado. <br><br>"
       		."[<a  href=\"info.php?user=$session->username\">Mi cuenta</a>]   "
	   		."[<a href=\"member_register.php?user=$session->username\">Añadir cuenta</a>]   "
       		."[<a href=\"admin/productos.php\">Inventario</a>]   ";
	    echo "[<a href=\"admin/admin.php\">Centro de administracion de cajas</a>] ";
	    echo "[<a href=\"process.php\">Desconexion</a>]";
} else {


if($form->num_errors > 0){
   echo "<font size=\"2\" color=\"#ff0000\">".$form->num_errors." error(s) found</font>";
}
?>
<br><br><br><br><br><br><br>
      <img src="img/logoerop.png" width="297" height="137" align="baseline"><br><br>
      <!-- <form action="process.php" method="POST"> -->
      <form  action="process.php" method="POST"> 
          <tr><td width="111"><div align="center">Usuario</div></td><td width="144"><input  type="text" name="user" maxlength="30" value="<?php echo $form->value("user"); ?>"></td><td width="0"><?php echo $form->error("user"); ?></td></tr>
          <tr><td><div align="center">Contraseña</div></td><td><input type="password" name="pass" maxlength="30" value="<?php echo $form->value("pass"); ?>"></td><td><?php echo $form->error("pass"); ?></td></tr>
          <tr><td colspan="2" align="left"><div align="center">
            <input type="checkbox" name="remember" <?php if($form->value("remember") != ""){ echo "checked"; } ?>>
            <font size="2">Recordar nombre de usuario	  
            <input type="hidden" name="sublogin" value="1">
            <input style="background-color: #FF9900" type="submit" value="Entrar">
          </div></td></tr>
        </form>
      
      <?php
}

?>
      
</div>


</body>
</html>