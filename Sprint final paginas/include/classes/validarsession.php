<?php
if($_SESSION['userlevel']!=" "){
	header('Location: index.php');
	exit();
}
?>