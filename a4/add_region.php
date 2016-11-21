<?php
include "database_connection.php";
//Include the database connection file


//Check to see if the submit button has been clicked to process data
if(isset($_POST["submitted"]) && $_POST["submitted"] == "yes")
{
	//Variables Assignment
	$Nombre_Region = trim(strip_tags($_POST['Nombre_Region']));

	
	
	//Validate against empty fields
	if($Nombre_Region == "")
	{
		$error = '<br><div class="info">se requiere completar todos los campos</div><br>';
	}
	else
	{
		if(mysqli_query ($connection,
		("insert into `region` values
		('', '".mysqli_real_escape_string($connection,$Nombre_Region)."'
		)
		")))
		{
			header("location: add_region.php");
		}
		else
		{
			$error = '<br><div class="info">su region no pudo ser registrada</div><br>';
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
<title>registrar cuenta</title>

</head>
<body>

<div id="contendor">
	<?php include("aside.php"); ?>
	<?php if ($admin ==true ){ ?>
	<div id="main">
		<center>
		<div style="font-family:Verdana, Geneva, sans-serif; font-size:24px;">registrar region</div><br clear="all" /><br clear="all" />





<!-- Code Begins -->
		<center>
		<div class="vpb_main_wrapper">
			<br clear="all">
			<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">	
			<div style="width:115px; padding-top:10px;float:left;" align="left">Nombre_Region:</div>
			<div style="width:300px;float:left;" align="left"><input type="text" name="Nombre_Region" id="Nombre_Region"  class="vpb_textAreaBoxInputs"></div><br clear="all"><br clear="all">
			
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