<?php 
@session_start();
$admin=false;
$ban=false;
$caja=false;
$loggin=false;
if (isset($_SESSION['sess_userrole'])){
if($_SESSION['sess_userrole']==2){
	$admin=true;
}
if($_SESSION['sess_userrole']==3){
	$ban=true;
}
if($_SESSION['sess_userrole']==1){
	$caja=true;
}
if ($admin==true or $caja==true){
	$loggin=true;
}
}
?>