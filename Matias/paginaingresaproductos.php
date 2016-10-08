<!DOCTYPE html>
<img src="volver.jpg" onClick="location.href='index.php'" weight=25 height=25><br>
<html>
<form action="agregaproductos.php" method="POST" NAME="form">
ID Categoria: <input type="text" name="idc" value=""><br>
ID Proveedor: <input type="text" name="idp" value=""><br>
Nombre: <input type="text" name="nombre" value=""><br>
Precio: <input type="text" name="precio" value=""><br>
Stock: <input type="text" name="stock" value=""><br>
Fecha: <input type="date" name="fecha" value=""><br>
<input type="submit" value="Ingresar">
</form>
<?php 
$link = mysql_connect("localhost", "root"); 
mysql_select_db("empresa", $link); 
$result = mysql_query("SELECT * FROM productos", $link); 
echo "<table border = '1'> \n"; 
echo "<tr><td>ID Producto</td><td>ID Categoria</td><td>Nombre</td><td>Precio</td><td>Stock</td><td>Fecha</td><td>ID Proveedor</td></tr> \n"; 
while ($row = mysql_fetch_row($result)){ 
       echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td></tr> \n"; 
} 
echo "</table> \n"; 
?> 
</body>
</html>
