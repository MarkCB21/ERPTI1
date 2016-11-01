<!DOCTYPE html>
<html lang="es">
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="diseños/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<style>
		

		
		table
  		{
    		border-collapse: collapse;
    		border-radius: 10px;
    		width: 30%;
    		background-image: url("diseños/img/caja.png");
    		left: 30%;
 			background: linear-gradient(to right, rgba(183,222,237,1) 0%, rgba(33,180,226,1) 44%, rgba(113,206,239,1) 87%, rgba(183,222,237,1) 100%);

    	}
   		th, td
    	{
    		text-align: left;
    		padding: 7px;
    		border-radius: 5px;

    	}
    	tr:nth-child(even)
    	{
    		background-color: none

    	}


    	#button1
    	{
      		box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
      		border-radius: 20px;
      		background-color: #2E64FE;
      		width: 100px;
      		height: 30px;
    	}

	</style>	






</head>
<body>
<div id="contendor">
	<?php include("aside.php"); ?>
	<div id="main2">
		<?php
		if(($session->logged_in)&& ($session->isAdmin())){
		?>

		<br><h1><FONT face="Arial">Añadir cajero</h1>
		<?php
		if($form->num_errors > 0){
			echo "<td><font size=\"2\" color=\"#ff0000\">".$form->num_errors." error(s) found</font></td>";
		}
		?>
		<form style="position:relative; left:60px; top:30px;" action="process.php" method="POST">
			<table align="left" border="0" cellspacing="0" cellpadding="3">
				<tr><td>Nombre:</td>
					<td><input type="text" 
							   name="user" 
							   maxlength="30" 
					           value="<?php echo $form->value("user"); ?>">
					</td>
					<td><?php echo $form->error("user"); ?></td>
				</tr>
				<tr><td>Contraseña:</td>
					<td><input type="password" 
							   name="pass" 
							   maxlength="30" 
							   value="<?php echo $form->value("pass"); ?>">
					</td>
					<td><?php echo $form->error("pass"); ?></td>
				</tr>
				<tr><td>ID de dato:</td>
					<td><input type="text" 
							   name="email" 
							   maxlength="50" 
							   value="<?php echo $form->value("email"); ?>">
					</td>
					<td><?php echo $form->error("email"); ?></td>
				</tr>
				<tr><td colspan="2" align="right">
					<input type="hidden" 
					       name="member_subjoin" 
						   value="1">
					<input id="button1"
						   type="submit" 
						   value="Añadir cajero"></td></FONT>
				</tr>
			</table>
		</form>
		<?php
		} 
		else { 
			header("Location: index.php");
		}
		?>
	</div>
</div>
</body>
</html>