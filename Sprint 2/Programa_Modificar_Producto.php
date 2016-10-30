<?php include "tablas.php"; 
	if(isset($_GET['Medida'])){
		if(isset($_GET['Precio_Unitario'])){
			if(isset($_GET['ID_Prod'])){
				$ID_Prod=$_GET['ID_Prod'];
				$Medida=$_GET['Medida'];
				$Precio_Unitario=$_GET['Precio_Unitario'];
				$link = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
				$con = "UPDATE productos SET Precio_Unitario = '$Precio_Unitario', Medida = '$Medida' WHERE ID_Prod = '$ID_Prod'";
				mysqli_query($link,$con);
				mysqli_close($link);
				header("location: Modulo_Productos.php");
			}
		}
	}

?>