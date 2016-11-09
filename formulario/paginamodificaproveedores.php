<html> 
<SCRIPT>
</SCRIPT>
<img src="volver.jpg" onClick="location.href='index.php'" weight=25 height=25><br>
<body> 
<form action="modificaproveedoresnombre.php" method="POST" NAME="form">
ID:        <input type="text" name="id" value=""><br>
Nombre:    <input type="text" name="nombre" value=""><br>
<input type="submit" value="Ingresar" >
</form>
<form action="modificaproveedorescorreo.php" method="POST" NAME="form">
ID:        <input type="text" name="id" value=""><br>
Correo:    <input type="text" name="correo" value=""><br>
<input type="submit" value="Ingresar">
</form>
<form action="modificaproveedorestelefono.php" method="POST" NAME="form">
ID:        <input type="text" name="id" value=""><br>
Telefono:  <input type="text" name="telefono" value=""><br>
<input type="submit" value="Ingresar" >
</form>
<form action="modificaproveedoresdireccion.php" method="POST" NAME="form">
ID:        <input type="text" name="id" value=""><br>
Direccion: <input type="text" name="direccion" value=""><br>
<input type="submit" value="Ingresar" >
</form>
  
<?php 
$link = mysql_connect("localhost", "root"); 
mysql_select_db("empresa", $link); 
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