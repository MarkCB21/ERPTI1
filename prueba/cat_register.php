<?php
//Include the database connection file
include "database_connection.php";

//Check to see if the submit button has been clicked to process data
if(isset($_POST["submitted"]) && $_POST["submitted"] == "yes")
{
	//Variables Assignment
	$fullname = trim(strip_tags($_POST['Nombre']));


	
	
	//Validate against empty fields
	if($fullname == "")
	{
		$error = '<br><div class="info">se requiere completar todos los campos</div><br>';
	}
	
	else
	{
		if(mysql_query
		("insert into `categoria` values
		('', '".mysql_real_escape_string($fullname)."'
		)
		"))
		{
			header("location: cat_register.php");
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
<title>ingresar categoria</title>




<!-- Required header file -->
<link href="css/style.css" rel="stylesheet" type="text/css">





</head>
<body>
<center>
<div style="font-family:Verdana, Geneva, sans-serif; font-size:24px;">ingresar categoria</div><br clear="all" /><br clear="all" />





<!-- Code Begins -->
<center>
<div class="vpb_main_wrapper">

<br clear="all">
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

<div style="width:115px; padding-top:10px;float:left;" align="left">Nombre:</div>
<div style="width:300px;float:left;" align="left"><input type="text" name="Nombre" id="Nombre"  class="vpb_textAreaBoxInputs"></div><br clear="all"><br clear="all">

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