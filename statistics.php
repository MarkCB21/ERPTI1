<!DOCTYPE html>
<html lang="es">
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
<div id="contendor">

 	<?php include("aside.php"); ?>

	<div id="main">
		<?php echo "Aquí va la info del gráfico ".$_GET['id']; ?>
		<br>
		<?php echo "Y si hago clic en el logo o en link 'Home' vuelvo al listado"; ?>
	</div>

</div>
</body>
</html>