 <html>
 	<head>
 		<title>
			productos
		</title>
 	</head>
 	<body>
 		<?php
 			$bd = mysql_connect("localhost","root","");
 			mysql_select_db("empresa", $bd);

 			if(mysqli_connect_errno())
 			{
 				echo "no conecta". mysqli_connect_error();	
 			}

 		?>

 	</body>
 </html>