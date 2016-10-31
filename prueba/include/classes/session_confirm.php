<?php 
if(!isset($_SESSION["username"])){
	header('Location: ./index.php');
	exit();
}

$admin=false;
if($_SESSION['userlevel']==2){
	$admin=true;
}

?>