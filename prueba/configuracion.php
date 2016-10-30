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
				    if((($session->logged_in) or (!$session->isBan() )) and $session->isAdmin())
				    {
				    ?>
				    	<br><h1 align="center">Configuraciones</h1><br><br>
						<div align='center'><a href='cambiologo.php'><img src="diseños/img/cambiologo.png"></a></div>
					<?php
					}
					else if ($session->isBan){
						header('Location: baneado.php');
					}
					else {
						header('Location: index.php');
					}
			    ?>
			</div>
		</div>
	</body>
</html>