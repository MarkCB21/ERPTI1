<?php
include "database_connection.php";
$rowCount = count($_POST["inv"]);
for($i=0;$i<$rowCount;$i++) {
mysql_query("DELETE FROM inventario WHERE ID_Inve='" . $_POST["inv"][$i] . "'");
}
header("Location:list_inv.php");
?>