<html> 
<body> 
<img src="volver.jpg" onClick="location.href='paginamodificaproveedores.php'" weight=50 height=50><br>
  
<?php 
$servidor="localhost";
$usuario="root";
$bd="empresa";
$conectar = mysql_connect($servidor, $usuario); 
mysql_select_db($bd, $conectar); 
$id= $_POST ['id'];
$correo= $_POST ['correo'];
$consulta = "UPDATE datos SET Correo='$correo' WHERE ID_D='$id'";
$resultado = mysql_query($consulta);
if ($resultado) {
			echo "perfil cambiado. <br />";
		}
	else{
		echo "no funciona <br />";
	}
?> 
  
</body> 
</html> 