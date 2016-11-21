<?php
include "database_connection.php";
$rowCount = count($_POST["region"]);
for($i=0;$i<$rowCount;$i++) {
mysqli_query($connection,"DELETE * FROM region WHERE ID_Region='" . $_POST["region"][$i] . "'");
}
header("Location:list_region.php");
?>