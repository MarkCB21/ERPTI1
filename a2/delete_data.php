<?php
include "database_connection.php";
$rowCount = count($_POST["inv"]);
for($i=0;$i<$rowCount;$i++) {
mysql_query("DELETE FROM datos WHERE ID_Datos='" . $_POST["data"][$i] . "'");
}
header("Location:list_data.php");
?>