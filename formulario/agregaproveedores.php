<html> 
<img src="volver.jpg" onClick="location.href='paginaingresaproveedores.php'" weight=25 height=25><br>
<body> 
  
<?php 
$servidor="localhost";
$usuario="root";
$bd="empresa";
$conectar = mysql_connect($servidor, $usuario); 
mysql_select_db($bd, $conectar); 
$nombre= $_POST ['Nombre'];
$correo= $_POST ['Correo'];
$telefono= $_POST ['Telefono'];
$direccion= $_POST ['Direccion'];
$consulta = "INSERT INTO datos VALUES ('','$nombre','$correo','$telefono','$direccion')"; 
$resultado = mysql_query($consulta);
if ($resultado) {
			echo "perfil almacenado. <br />";
		}
	else{
		echo "no funciona <br />";
	}
?> 

  
</body> 
</html> 