<html> 
<img src="volver.jpg" onClick="location.href='paginamodificaproveedores.php'" weight=50 height=50><br>
<body> 
  
<?php 
$servidor="localhost";
$usuario="root";
$bd="empresa";
$conectar = mysql_connect($servidor, $usuario); 
mysql_select_db($bd, $conectar); 
$id= $_POST ['id'];
$telefono= $_POST ['telefono'];
$consulta = "UPDATE datos SET Telefono='$telefono' WHERE ID_D='$id'";
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