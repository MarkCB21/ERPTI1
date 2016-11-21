<!DOCTYPE html>

<html>
<head>
  <title>Sistema de login</title>
  <link rel="stylesheet" type="text/css" href="diseños/stylelogin.css">
<div  style="background-color: #ededf5; class=container;" >
  <img src="diseños/img/uctimagen.png" width=200 height=65 align="top">
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <link href="css/style.css" rel="stylesheet">
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</div>
<!--  ################## -->
<body>
<?php 
include("session_confirm.php");
	if($loggin== true){
      header('Location: inicio.php');
	}else{
 ?>  
<div  align="center" style="position:relative; left:460px; top:80px;" id="textbox">
<br><br><br>
    <img id="logo2" src="uploads/locatormedio.png" width="80" height="100" align="baseline"><br><br>
    <form  action="authenticate.php" method="POST"> 
        <tr>
			<td width="111">
				<div align="center">
				             <?php 

                                $errors = array(
                                    1=>"Usuario o contraseña invalidos",
                                    2=>"No tienes permisos para acceder a esta pagina",
									3=>"Usted ha sido baneado, contactese con su administrador"
                                  );

                                $error_id = isset($_GET['err']) ? (int)$_GET['err'] : 0;

                                if ($error_id == 1) {
                                        echo '<p class="text-danger">'.$errors[$error_id].'</p>';
                                    }elseif ($error_id == 2) {
                                        echo '<p class="text-danger">'.$errors[$error_id].'</p>';
									}elseif ($error_id == 3) {
                                        echo '<p class="text-danger">'.$errors[$error_id].'</p>';
                                    }
                               ?>  
					<FONT face="Arial">Usuario
				</div>
			</td>
			<td width="144"><input  type="text" name="username" maxlength="30" placeholder="Username"></td>
			<td width="0">
			</td>
		</tr>
         
        <tr>
			<td>
				<div align="center">Contraseña</div>
			</td>
			<td><input type="password" name="password" maxlength="30" placeholder="Password"></td>
		</tr> 
        <tr>
			<td colspan="2" align="left">
			
					<br><br><input style="background-color: #FF9900" type="submit" value="Sign In">
				</font>
			</div>
			</td>
			</tr>
    </form>    
</div>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
<?php } ?>  
</body>
</html>