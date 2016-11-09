 <html>
 	<head>
 		<title>
			productos
		</title>
 	</head>
 	<body>
 		<?php
 			$link = mysql_connect("localhost","root","");
 			mysql_select_db("empresa", $link);

 			if(mysqli_connect_errno())
 			{
 				echo "no conecta". mysqli_connect_error();	
 			}
 			else
 			{
 				header('Location: pagina2.php');
 			}
 		?>
 	</body>
 </html>