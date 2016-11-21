<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="diseños/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	</head>
	<body>
		<div id="contendor">
			<?php include("aside.php"); ?>
			<div id="main">
				<?php
				    if($admin==true){
					    echo "<br><br><h1 align='center'>Cambiar logo</h1>";
					include("uploader.php");
				?>
					<br><br><br><br><p align="center">La imagen debe ser PNG o JPG y el tamaño no debe exeder los 2Mb</p>
					<br><form align='center' enctype='multipart/form-data' action='cambiologo.php' method='POST'>
					<input name='uploadedfile' type='file' />
					<input name='subir' type='submit' value='Subir archivo' />
					</form>
				<?php
					if(isset($_REQUEST['subir']))
						{
							$add=subir();
							echo "<script>document.getElementById('logo2').src='$add'</script>";
						}
					}

					else {
						header('Location: index.php?err=2');
					}
					
					
			    ?>
			</div>
		</div>
	</body>
</html>