<?php
include "database_connection.php";
//Include the database connection file


//Check to see if the submit button has been clicked to process data
if(isset($_POST["submitted"]) && $_POST["submitted"] == "yes")
{
	//Variables Assignment
	$ID_Categoria=trim(strip_tags($_POST['ID_Categoria']));
	$name = trim(strip_tags($_POST['Descripcion']));
	$Costo_Unitario=trim(strip_tags($_POST['Costo_Unitario']));
	$Fecha_Entrada=trim(strip_tags($_POST['Fecha_Entrada']));
	$Fecha_Salida = trim(strip_tags($_POST['Fecha_Salida']));


	
	
	//Validate against empty fields
	if($name == "" || $Fecha_Salida == "" || $ID_Categoria == "" || $Fecha_Entrada == "" || $Costo_Unitario == "")
	{
		$error = '<br><div class="info">se requiere completar todos los campos</div><br>';
	}
	
	else
	{
		if(mysql_query
		("insert into `inventario` values
		('', '".mysqli_real_escape_string($connection,$ID_Categoria)."', '".mysqli_real_escape_string($connection,$name)."', '".mysqli_real_escape_string($connection,$Costo_Unitario)."', '".mysqli_real_escape_string($connection,$Fecha_Entrada)."', '".mysqli_real_escape_string($connection,$Fecha_Salida)."'
		)
		"))
		{
			header("location: create_inv.php");
		}
		else
		{
			$error = '<br><div class="info">su producto no pudo ser registrado</div><br>';
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
<title>registrar productos</title>

</head>
<body>

<div id="contendor">
	<?php include("aside.php"); ?>
	<?php if ($admin ==true ){ ?>
	<div id="main">
		<center>
		<div style="font-family:Verdana, Geneva, sans-serif; font-size:24px;">registrar productos</div><br clear="all" /><br clear="all" />





<!-- Code Begins -->
		<center>
		<div class="vpb_main_wrapper">
			<br clear="all">
			<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<div style="width:115px; padding-top:10px;float:left;" align="left">ID_Categoria:</div>
			<div style="width:300px;float:left;" align="left"><input type="number" min="1" name="ID_Categoria" id="ID_Categoria"  class="vpb_textAreaBoxInputs"></div><br clear="all"><br clear="all">
			
			<div style="width:115px; padding-top:10px;float:left;" align="left">Descripcion:</div>
			<div style="width:300px;float:left;" align="left"><input type="text" name="Descripcion" id="Descripcion"  class="vpb_textAreaBoxInputs"></div><br clear="all"><br clear="all">

			<div style="width:115px; padding-top:10px;float:left;" align="left">Costo unitario:</div>
			<div style="width:300px;float:left;" align="left"><input type="number" min="1" name="Costo_Unitario" id="Costo_Unitario"  class="vpb_textAreaBoxInputs"></div><br clear="all"><br clear="all">
			
			<div style="width:115px; padding-top:10px;float:left;" align="left">Fecha de entrada:</div>
			<div style="width:300px;float:left;" align="left"><input type="date" name="Fecha_Entrada" id="Fecha_Entrada"  class="vpb_textAreaBoxInputs"></div><br clear="all"><br clear="all">
			
			<div style="width:115px; padding-top:10px;float:left;" align="left">Fecha de Salida:</div>
			<div style="width:300px;float:left;" align="left"><input type="date" name="Fecha_Salida" id="Fecha_Salida"  class="vpb_textAreaBoxInputs"></div><br clear="all"><br clear="all">
			
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