<html> 
	<link href="../style/style.css" rel="stylesheet" type="text/css">
	<body>
		<img src="volver.jpg" onClick="location.href='index.php'" weight=25 height=25><br>
		<form action="modificaproveedoresnombre.php" method="POST" NAME="form">
			<fieldset>
				<legend>Modificar Nombre</legend>
				<div>
					<label class="form-label">ID:</label>
					<input class="form-control" type="text" name="id" value="">
				</div>
				<div>
					<label class="form-label">Nombre:</label>
					<input class="form-control" type="text" name="nombre" value="">
				</div>
				<div>
					<input class="btn" type="submit" value="Ingresar" >
				</div>
			</fieldset>
		</form>
		<form action="modificaproveedorescorreo.php" method="POST" NAME="form">
			<fieldset>
				<div>
					<label class="form-label">ID:</label>
					<input class="form-control" type="text" name="id" value="">
				</div>
				<div>
					<label class="form-label">Correo:</label>
					<input class="form-control" type="text" name="correo" value="">
				</div>
				<div>
					<input class="btn" type="submit" value="Ingresar">
				</div>
			</fieldset>
		</form>
		<form action="modificaproveedorestelefono.php" method="POST" NAME="form">
			<fieldset>
				<div>
					<label class="form-label">ID:</label>
					<input class="form-control" type="text" name="id" value="">
				</div>
				<div>
					<label class="form-label">Telefono:</label>
					<input class="form-control" type="text" name="telefono" value="">
				</div>
				<div>
					<input class="btn" type="submit" value="Ingresar">
				</div>
			</fieldset>
		</form>
		<form action="modificaproveedoresdireccion.php" method="POST" NAME="form">
			ID:        <input type="text" name="id" value=""><br>
			Direccion: <input type="text" name="direccion" value=""><br>
			<input type="submit" value="Ingresar" >
		</form>
		<?php 
			$link = mysql_connect("localhost", "root"); 
			mysql_select_db("erp", $link); 
			$result = mysql_query("SELECT * FROM datos", $link); 
			echo "<table border = '1'> \n"; 
			echo "<tr><td>ID</td><td>Nombre</td><td>Correo</td><td>Telefono</td><td>Direccion</td></tr> \n"; 
			while ($row = mysql_fetch_row($result)){ 
				echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td></tr> \n"; 
			} 
			echo "</table> \n"; 
		?> 
	</body> 
</html> 