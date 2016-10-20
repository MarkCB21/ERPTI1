<?php

include "constantes.php";

$link = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);


$con = "SELECT ID_Region, Nombre_Region FROM region";
if ($result = mysqli_query($link,$con))
{
	$Nombre_Region = [];
	$ID_Region = [];
	while ($row = mysqli_fetch_object($result))
	{
		array_push($Nombre_Region, $row->Nombre_Region);
		array_push($ID_Region, $row->ID_Region);
    }
    mysqli_free_result($result);
}
mysqli_close($link);
?>