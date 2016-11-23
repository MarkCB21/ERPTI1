<?php
include 'constantes.php';
if(isset($_POST['ID_Compra']))
{
	$ID_Produc=$_POST['ID_Compra'];
	$link = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

	$query = "UPDATE compra_producto SET anulado='1' WHERE ID_Compra='$ID_Compra'";
	echo "$query";
	mysqli_query($link,$query);

	mysqli_close($link);
}
header("location: Modulo_Orden_de_Compra.php");
?>
