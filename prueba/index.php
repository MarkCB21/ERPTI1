<!DOCTYPE html>
<?php
include("include/classes/session.php");
include("include/classes/UTF-8.php");
?>

<html>
<head>
  <title>Sistema de login</title>
  <link rel="stylesheet" type="text/css" href="diseños/stylelogin.css">
<div  style="background-color: #ededf5; class=container;" >
  <img src="diseños/img/uctimagen.png" width=200 height=65 align="top">

</div>
<!--  ################## -->
<body>
<div  align="center" style="position:relative; left:460px; top:80px;" id="textbox">
      
      
<?php
	 if (($session->logged_in)){

		header('Location: inicio.php');
	  	exit;	

	} else {
		if($form->num_errors > 0){
		   echo "<br><font  size=\"2\" color=\"#ff0000\">".$form->num_errors." errores encontrados</font>";
	}
?>

<br><br><br>
    <img id="logo2" src="uploads/locatormedio.png" width="80" height="100" align="baseline"><br><br>
    <!-- <form action="process.php" method="POST"> -->
    <form  action="process.php" method="POST"> 
        <tr>
			<td width="111">
				<div align="center">
					<FONT face="Arial">Usuario
				</div>
			</td>
			<td width="144"><input  type="text" name="user" maxlength="30" value="<?php echo $form->value("user"); ?>"></td>
			<td width="0">
				<br><?php echo $form->error("user"); ?>
			</td>
		</tr>
         
        <tr>
			<td>
				<div align="center">Contraseña</div>
			</td>
			<td><input type="password" name="pass" maxlength="30" value="<?php echo $form->value("pass"); ?>"></td>
			<td>
				<br><?php echo $form->error("pass"); ?>
			</td>
		</tr> 
        <tr>
			<td colspan="2" align="left">
			<div align="center">
				<input type="checkbox" name="remember" <?php if($form->value("remember") != ""){ echo "checked"; }} ?>>
				<br>
				<font size="2">Recordar datos<input type="hidden" name="sublogin" value="1"><br>
					<input style="background-color: #FF9900" type="submit" value="Sign In">
				</font>
			</div>
			</td>
			</tr>
    </form>    
</div>
</body>
</html>