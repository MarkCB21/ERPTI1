<?php
include "database_connection.php";
$rowCount = count($_POST["users"]);
for($i=0;$i<$rowCount;$i++) {
mysqli_query($connection,"DELETE FROM categoria WHERE ID_Categoria='" . $_POST["users"][$i] . "'");
}
header("Location:list_category.php");
?>