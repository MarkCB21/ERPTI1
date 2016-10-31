<?php
include 'constantes.php';
if(isset($_POST['ID_Produc']))
{
	$ID_Produc=$_POST['ID_Produc'];
	$link = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

	$query = "UPDATE produc_com SET Anulado='1' WHERE ID_Produc='$ID_Produc'";
	echo "$query";
	mysqli_query($link,$query);

	mysqli_close($link);
}
header("location: Modulo_Orden_de_Compra.php");
?>
