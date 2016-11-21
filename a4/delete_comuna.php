<?php
include "database_connection.php";
$rowCount = count($_POST["comuna"]);
for($i=0;$i<$rowCount;$i++) {
mysqli_query($connection,"DELETE * FROM comuna WHERE ID_Comuna='" . $_POST["comuna"][$i] . "'");
}
header("Location:list_comuna.php");
?>