<?php
$conn = mysql_connect("localhost","root","");
mysql_select_db("dberp",$conn);
$rowCount = count($_POST["users"]);
for($i=0;$i<$rowCount;$i++) {
mysql_query("DELETE FROM login_usuario WHERE ID_L='" . $_POST["users"][$i] . "'");
}
header("Location:list_user.php");
?>