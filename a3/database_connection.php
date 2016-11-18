<?php

define ('hostnameorservername','localhost'); 
define ('serverusername','root');
define ('serverpassword','');
define ('databasenamed','dberp');

global $connection;
$connection = @mysqli_connect(hostnameorservername,serverusername,serverpassword,databasenamed) or die('Connection could not be made to the SQL Server. Please report this system error at <font color="blue">info@servername.com</font>');	
?>
