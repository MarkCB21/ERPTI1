<?php
//Include the database connection file
include "database_connection.php";

//Check to see if the submit button has been clicked to process data
if(isset($_POST["submitted"]) && $_POST["submitted"] == "yes")
{
	//Variables Assignment
	$fullname = trim(strip_tags($_POST['Nombre_C']));
	$user_email = trim(strip_tags($_POST['Correo']));
	$user_phone = trim(strip_tags($_POST['Telefono']));
	$direccion = trim(strip_tags($_POST['Direccion']));

	
	
	//Validate against empty fields
	if($fullname == "" || $direccion == "" || $user_email == "" || $user_phone == "")
	{
		$error = '<br><div class="info">se requiere completar todos los campos</div><br>';
	}
	elseif(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $user_email))
	{
		$error = '<br><div class="info">su correo es invalido,por favor ingrese uno valido.</div><br>';
	}
	else
	{
		if(mysql_query
		("insert into `datos` values
		('', '".mysql_real_escape_string($fullname)."', '".mysql_real_escape_string($user_email)."', '".mysql_real_escape_string($user_phone)."', '".mysql_real_escape_string($direccion)."'
		)
		"))
		{
			header("location: dato.php");
		}
		else
		{
			$error = '<br><div class="info">su cuenta no pudo ser registrada</div><br>';
		}
	}
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ingresar dato</title>




<!-- Required header file -->
<link href="css/style.css" rel="stylesheet" type="text/css">





</head>
<body>
<center>
<div style="font-family:Verdana, Geneva, sans-serif; font-size:24px;">ingresar dato</div><br clear="all" /><br clear="all" />





<!-- Code Begins -->
<center>
<div class="vpb_main_wrapper">

<br clear="all">
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

<div style="width:115px; padding-top:10px;float:left;" align="left">Nombre_C:</div>
<div style="width:300px;float:left;" align="left"><input type="text" name="Nombre_C" id="Nombre_C"  class="vpb_textAreaBoxInputs"></div><br clear="all"><br clear="all">


<div style="width:115px; padding-top:10px;float:left;" align="left">Direccion:</div>
<div style="width:300px;float:left;" align="left"><input type="text" name="Direccion" id="Direccion"  class="vpb_textAreaBoxInputs"></div><br clear="all"><br clear="all">


<div style="width:115px; padding-top:10px;float:left;" align="left">Correo:</div>
<div style="width:300px;float:left;" align="left"><input type="text" name="Correo" id="Correo"  class="vpb_textAreaBoxInputs"></div><br clear="all"><br clear="all">


<div style="width:115px; padding-top:10px;float:left;" align="left">Telefono:</div>
<div style="width:300px;float:left;" align="left"><input type="text" name="Telefono" id="Telefono" value="" class="vpb_textAreaBoxInputs"></div><br clear="all"><br clear="all">


<div style="width:115px; padding-top:10px;float:left;" align="left">&nbsp;</div>
<div style="width:300px;float:left;" align="left">
<input type="hidden" name="submitted" id="submitted" value="yes">
<input type="submit" name="submit" id="" value="Submit" style="margin-right:50px;" class="vpb_general_button">
<a href="index.php" style="text-decoration:none;" class="vpb_general_button">volver al index</a>

</div>

</form>
<br clear="all"><br clear="all">
</div>
</center>
<!-- Code Ends -->

















<p style="margin-bottom:160px;">&nbsp;</p>
</center>
</body>
</html>