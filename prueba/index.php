<?php
include("include/classes/session.php");
include("include/classes/UTF-8.php");
?>

<html>
<head>
  <title>Sistema de login</title>
</head>
  <style type="text/css">
    #textbox
    {
      background-image:url("img/cajita2.png");
      width: 420px;
      height: 540px;
    }
  </style>

  <style type="text/css">
    input
    {
      -webkit-border-radius: 15px;
      -moz-border-radius: 15px;
      border-radius: 15px;
      background-color: #E0ECF8;
      width: 200px;
      height: 35px;
      font-size: 15pt;

    }
    
    input[type=checkbox]
    {
      -webkit-transform: scale(0.56); /* Safari and Chrome */
    }


    .button1
    {
      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
      border-radius: 20px;
      background-color: #FF8000;
      width: 100px;
      height: 31px;
    }

    .button2
    {
      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
      border-radius: 20px;
      background: linear-gradient(50deg,#0404B4, #5882FA);
      width: 100px;
      height: 31px;
    }
 
    body 
    {
      background-attachment: fixed;
      background-image: url("img/fondo.png");
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
    }

    table
    {
      border-collapse: collapse;
      border-radius: 10px;
      width: 70%;
    }

    th, td
    {
      text-align: left;
      padding: 10px;
      border-radius: 10px;
    }

  tr:nth-child(even){background-color: none}


</style>

<div  style="background-image: url(img/caja2.png); class=container;  width: 100%; height: 11%; " >

  <h1><em><FONT face="Arial">Bienvenido<em></FONT></h1>
 
</div>


<!--  ################## -->

<body>
<div  align="center" style="position:relative; left:460px; top:80px;" id="textbox">
      
      
      <?php


 if (($session->logged_in) && ($session->isMember())){

		echo "<FONT size='4' face='Arial'><br><br><br><h1>CONECTADO</h1>";
   		echo  "<i>Bienvenido  <b>$session->username</b>, estas conectado. </i><br><br><br>"
       		."<button class='button2' style='width:230;'><a href=\"info.php?user=$session->username\"><FONT size='3' color='#AFFFFF'>Mi cuenta</FONT></a></button> <br><br>   ";
		echo "<button class='button2' style='width:230;'><a href=\"caja/productos.php\"><FONT size='3' color='#AFFFFF'>Ver productos</FONT></a></button>   <br> <br>";
		echo "<button class='button2' style='width:230;'><a href=\"caja/boleta.php\"><FONT size='3' color='#AFFFFF'>Generar boleta</FONT></a></button>   <br><br> ";
		echo "<button class='button2' style='width:230;'><a href=\"caja/factura.php\"><FONT size='3' color='#AFFFFF'>Generar factura</FONT></a></button>  <br>  <br>";
	   	echo "<button class='button2' style='width:230;'><a href=\"process.php\"><FONT size='3' color='#AFFFFF'>Salir</FONT></a></button></FONT>";

} elseif (($session->logged_in) && ($session->isAdmin())) {

  		echo "<FONT size='4' face='Arial'><br><br><br><br><h1>CONECTADO</h1>";
   		echo "<i>Bienvenido <b>$session->username</b>, estas conectado. </i><br><br>"
       		."<button class='button2' style='width:230;'><a  href=\"info.php?user=$session->username\"><FONT size='3' color='#AFFFFF'>Mi cuenta</FONT></a></button><br><br>   "
	   		."<button   class='button2' style='width:230;'><a href=\"member_register.php?user=$session->username\"><FONT size='3' color='#AFFFFF'>Añadir cuenta</FONT></a></button><br><br>   "
       		."<button class='button2' style='width:230;'><a href=\"admin/productos.php\"><FONT size='3' color='#AFFFFF'>Inventario</FONT></a></button><br> <br>  ";
	    echo "<button class='button2' style='width:230;'><a href=\"admin/admin.php\"><FONT size='2' color='#AFFFFF'>Centro de administracion de cajas</FONT></a></button><br><br> ";
	    echo "<button class='button2' style='width:230;'><a href=\"process.php\"><FONT size='3' color='#AFFFFF'>Desconexion</FONT></a></button></FONT>";
} else {


if($form->num_errors > 0){
   echo "<br><font  size=\"2\" color=\"#ff0000\">".$form->num_errors." error(s) found</font>";
}
?>
<br><br><br>
      <img src="img/logo2.png" width="184" height="171" align="baseline"><br><br>
      <!-- <form action="process.php" method="POST"> -->
      <form  action="process.php" method="POST"> 

          <tr><td width="111"><div align="center"><FONT face="Arial">Usuario</div></td><td width="144"><input  type="text" name="user" maxlength="30" value="<?php echo $form->value("user"); ?>"></td><td width="0">
            <br><?php echo $form->error("user"); ?></td></tr>
         
          <tr><td><div align="center">Contraseña</div></td><td><input type="password" name="pass" maxlength="30" value="<?php echo $form->value("pass"); ?>"></td><td>
            <br><?php echo $form->error("pass"); ?></td></tr>
         
          <tr><td colspan="2" align="left"><div align="center">
         
            <input type="checkbox" name="remember" <?php if($form->value("remember") != ""){ echo "checked"; } ?>>
         
            <br><font size="2">Recordar nombre de usuario<input type="hidden" name="sublogin" value="1"><br>
         
            <input style="background-color: #FF9900" type="submit" value="Entrar"></FONT>
         
          </div></td></tr>
        
        </form>
      <br><br><br><br><br><br><br>
      <?php
}

?>
      
</div>


</body>
</html>