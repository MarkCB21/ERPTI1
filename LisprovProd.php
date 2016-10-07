<?php
$db=mysqli_connect ("localhost","root","","erp");
$resul=mysqli_query($db,"SELECT * FROM proveedores NATURAL JOIN productos;");
echo "<table><tr><td><strong>ID_Prov</strong></td><td><strong> Nombre_Compania </strong></td><td><strong>ID_D </strong></td><td><strong>ID_Prod </strong></td><td><strong>ID_Categoria </strong></td><td><strong>Nombre</strong></td><td><strong> Precio</strong></td><td><strong> Stock</strong></td><td><strong>Fecha</strong></td></tr>";
echo "<br/>";
while($row = mysqli_fetch_array($resul))
{
	$imp="<tr>";
	$i=0;
	
	for($i=0;$i<9;$i++){
		$imp=$imp."<td>".$row[$i]."</td>";
	}
echo $imp."</tr>";
}
?>