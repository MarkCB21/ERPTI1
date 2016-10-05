<html> 
<img src="volver.jpg" onClick="location.href='paginaingresaproductos.php'" weight=25 height=25><br>
<body> 
  
<?php 
$servidor="localhost";
$usuario="root";
$bd="empresa";
$conectar = mysql_connect($servidor, $usuario); 
mysql_select_db($bd, $conectar); 
$idc=$_POST ['idc'];
$idp=$_POST ['idp'];
$nombre= $_POST ['nombre'];
$precio= $_POST ['precio'];
$stock= $_POST ['stock'];
$fecha= $_POST ['fecha'];
$consulta = "INSERT INTO productos VALUES ('','$idc','$nombre','$precio','$stock','$fecha','$idp')"; 
$resultado = mysql_query($consulta);
if ($resultado) {
			echo "producto almacenado. <br />";
		}
	else{
		echo "no funciona <br />";
	}
?> 
  
</body> 
</html> 