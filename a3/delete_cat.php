<?php
include "database_connection.php";
$rowCount = count($_POST["categoria"]);
for($i=0;$i<$rowCount;$i++) {
mysql_query($connection,"DELETE FROM categoria WHERE ID_Categoria='" . $_POST["categoria"][$i] . "'");
}
header("Location:list_cat.php");
?>