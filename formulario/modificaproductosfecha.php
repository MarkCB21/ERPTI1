<html> 
<body> 
<img src="volver.jpg" onClick="location.href='paginamodificaproductos.php'" weight=50 height=50><br>
  
<?php 
$servidor="localhost";
$usuario="root";
$bd="empresa";
$conectar = mysql_connect($servidor, $usuario); 
mysql_select_db($bd, $conectar); 
$idp= $_POST ['idp'];
$fecha= $_POST ['fecha'];
$consulta = "UPDATE productos SET Fecha='$fecha' WHERE ID_Prod='$idp'";
$resultado = mysql_query($consulta);
if ($resultado) {
			echo "producto cambiado. <br />";
		}
	else{
		echo "no funciona <br />";
	}
?> 
  
</body> 
</html> 