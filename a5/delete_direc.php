<?php
include "database_connection.php";
$rowCount = count($_POST["dir"]);
for($i=0;$i<$rowCount;$i++) {
mysqli_query($connection,"DELETE * FROM direccion WHERE ID_Direccion='" . $_POST["dir"][$i] . "'");
}
header("Location:list_direc.php");
?>