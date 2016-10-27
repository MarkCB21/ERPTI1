<!DOCTYPE html>
<html>
<head></head>
	<body>
		<?php
			$con = mysqli_connect("localhost","root","","trabajo");
			if(mysqli_connect_errno()){
				echo "No se puede conectar a la base de datos". mysqli_connect_error();
			}

			$Nombre = mysqli_real_escape_string($con, $_POST["Nombre"]);
			$Direccion = mysqli_real_escape_string($con, $_POST["Direccion"]);	
			$Pais= mysqli_real_escape_string($con, $_POST["Pais"]);	
			$Telefono = mysqli_real_escape_string($con, $_POST["Telefono"]);	
			$Correo = mysqli_real_escape_string($con, $_POST["Correo"]);	

			$sql="INSERT INTO prueba (Nombre,Direccion,Pais,Telefono,Correo)
			VALUES ('$Nombre','$Direccion','$Pais','$Telefono','$Correo')";	
			if(!mysqli_query($con,$sql)){
				die('ERROR:'. mysqli_error($con));
			}
			else{
		
				echo "conexion realizada exitosamente";
			}
			
		?>
	
	<form action="pagina1.html" method="post">
		<input type="submit" value="Atras">
	</body>

</html>