<!DOCTYPE html>
<img src="volver.jpg" onClick="location.href='index.php'" weight=25 height=25><br>
<html>
<form action="agregaproveedores.php" method="POST" NAME="form">
Nombre: <input type="text" name="Nombre" value=""><br>
Correo: <input type="text" name="Correo" value=""><br>
Telefono: <input type="text" name="Telefono" value=""><br>
Direccion: <input type="text" name="Direccion" value=""><br>
<input type="submit" value="Ingresar">
<?php 
$link = mysql_connect("localhost", "root"); 
mysql_select_db("empresa", $link); 
$result = mysql_query("SELECT * FROM datos, proveedores", $link); 
echo "<table border = '1'> \n"; 
echo "<tr><td>ID</td><td>Nombre</td><td>Correo</td><td>Telefono</td><td>Direccion</td><td>ID Proveedores</td><td>Nombre Compagnia</td><td>ID</td></tr> \n"; 
while ($row = mysql_fetch_row($result)){ 
       echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td></tr> \n"; 
} 
echo "</table> \n"; 
?> 
</form>
</body>
</html>

