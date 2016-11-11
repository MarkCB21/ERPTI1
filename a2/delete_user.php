<?php
include "database_connection.php";
$rowCount = count($_POST["users"]);
for($i=0;$i<$rowCount;$i++) {
mysql_query("DELETE FROM login_usuario WHERE ID_L='" . $_POST["users"][$i] . "'");
}
header("Location:list_user.php");
?>