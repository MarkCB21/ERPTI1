 <html>
 	<head>
 		<title>
			productos
		</title>
 	</head>
 	<body>
 		<h2>
 			formulario
 		</h2>
		<form name="productos" action="index.php">
 			<fieldset>
 				<legend>productos</legend>
 				<label for="proveedor">Proveedor</label>
 					<?php
 						$bd = mysql_connect("localhost","root","");
 						mysql_select_db("empresa", $bd);

 						$Prove = "SELECT Nombre_Compañia FROM proveedores";
 						$value = mysqli_query($Prove,$bd);
 					?>
 				<select id="proveedor" name="proveedor">
 					<?php
 						while ($elegir= mysqli_fetch_assoc($value)) 
 						{
		 					echo "Obtenido:'.$elegir["Nombre_Compañia"]";
 						}
 					?>
 				</select>
 				<br><br>
 				<label for="Nombre">Nombre</label>
 				<input type="text" name="Nombre" value=""/>
 				<br><br>
 				<label for="precios">precios</label>
 				<input type="text" name="precios" value=""/>
 				<br><br>
 				<label for="Stock">Stock</label>
 				<input type="text" name="Stock" value=""/>
 				<br><br>
 				<label for="Fecha">Fecha</label>
 				<input type="date" name="Fecha" value=""/>
 				<br>
 				<center>
 					<button name="Guardar">Guardar</button>
 				</center>
 			</fieldset>
 		</form>
 	</body>
 </html>