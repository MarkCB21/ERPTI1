<?php
include "database_connection.php";
//Include the database connection file


//Check to see if the submit button has been clicked to process data
if(isset($_POST["submitted"]) && $_POST["submitted"] == "yes")
{
	//Variables Assignment
	$rut=trim(strip_tags($_POST['Rut']));
	$name = trim(strip_tags($_POST['Nombre']));
	$apellidop=trim(strip_tags($_POST['Apellidop']));
	$apellidom=trim(strip_tags($_POST['Apellidom']));
	$user_email = trim(strip_tags($_POST['Correo']));
	$user_phone = trim(strip_tags($_POST['Telefono']));
	$direccion = trim(strip_tags($_POST['Direccion']));

	
	
	//Validate against empty fields
	if($name == "" || $direccion == "" || $user_email == "" || $user_phone == "" || $rut == "" || $apellidom == "" || $apellidop == "")
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
		('', '".mysql_real_escape_string($rut)."', '".mysql_real_escape_string($name)."', '".mysql_real_escape_string($apellidop)."', '".mysql_real_escape_string($apellidom)."', '".mysql_real_escape_string($user_email)."', '".mysql_real_escape_string($user_phone)."', '".mysql_real_escape_string($direccion)."'
		)
		"))
		{
			header("location: dato.php");
		}
		else
		{
			$error = '<br><div class="info">su dato no pudo ser registrado</div><br>';
		}
	}
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="diseños/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<title>registrar datos</title>

</head>
<body>

<div id="contendor">
	<?php include("aside.php"); ?>
	<?php if ($admin ==true ){ ?>
	<div id="main">
		<center>
		<div style="font-family:Verdana, Geneva, sans-serif; font-size:24px;">registrar dato</div><br clear="all" /><br clear="all" />





<!-- Code Begins -->
		<center>
		<div class="vpb_main_wrapper">
			<br clear="all">
			<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<div style="width:115px; padding-top:10px;float:left;" align="left">Rut:</div>
			<div style="width:300px;float:left;" align="left"><input type="number" min="1000000" name="Rut" id="Rut"  class="vpb_textAreaBoxInputs"></div><br clear="all"><br clear="all">
			
			<div style="width:115px; padding-top:10px;float:left;" align="left">Nombre:</div>
			<div style="width:300px;float:left;" align="left"><input type="text" name="Nombre" id="Nombre"  class="vpb_textAreaBoxInputs"></div><br clear="all"><br clear="all">

			<div style="width:115px; padding-top:10px;float:left;" align="left">Apellido paterno:</div>
			<div style="width:300px;float:left;" align="left"><input type="text" name="Apellidop" id="Apellidop"  class="vpb_textAreaBoxInputs"></div><br clear="all"><br clear="all">
			
			<div style="width:115px; padding-top:10px;float:left;" align="left">Apellido materno:</div>
			<div style="width:300px;float:left;" align="left"><input type="text" name="Apellidom" id="Apellidom"  class="vpb_textAreaBoxInputs"></div><br clear="all"><br clear="all">
			
			<div style="width:115px; padding-top:10px;float:left;" align="left">Correo:</div>
			<div style="width:300px;float:left;" align="left"><input type="email" name="Correo" id="Correo"  class="vpb_textAreaBoxInputs"></div><br clear="all"><br clear="all">


			<div style="width:115px; padding-top:10px;float:left;" align="left">Telefono:</div>
			<div style="width:300px;float:left;" align="left"><input type="number" min="100000" name="Telefono" id="Telefono" value="" class="vpb_textAreaBoxInputs"></div><br clear="all"><br clear="all">

			<div style="width:115px; padding-top:10px;float:left;" align="left">ID_Direccion:</div>
			<div style="width:300px;float:left;" align="left"><input type="number" min="1" name="Direccion" id="Direccion"  class="vpb_textAreaBoxInputs"></div><br clear="all"><br clear="all">
			
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
	</div>
</div>
<?php
}else{
	header('Location: index.php?err=2');
}
?>

</center>
</body>
</html>