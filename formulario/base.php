<html> 
<body> 
  
<?php 
$link = mysql_connect("localhost", "root"); 
mysql_select_db("empresa", $link); 
$result = mysql_query("SELECT anulada FROM boleta", $link); 
echo "<table border = '1'> \n"; 
echo "<tr><td>Anulada</td></tr> \n"; 
while ($row = mysql_fetch_row($result)){ 
       echo "<tr><td>$row[0]</td></tr> \n"; 
} 
echo "</table> \n"; 
?> 
  
</body> 
</html> 