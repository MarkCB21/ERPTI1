<?php
include "database_connection.php";
$rowCount = count($_POST["inv"]);
for($i=0;$i<$rowCount;$i++) {
mysqli_query($connection,"DELETE FROM datos WHERE ID_Datos='" . $_POST["data"][$i] . "'");
}
header("Location:list_data.php");
?>