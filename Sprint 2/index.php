<!DOCTYPE HTML>
<link href="../style/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
	function redi(row)
	{
		frm = document.getElementById('frm')
		frm.innerHTML = "<input name='ID_Region' value='"+row.id+"' hidden>"
		frm.submit()
	}
</script>
<?php

include "tablas.php";

echo "<div class='form-head'>Modulo de Prueba <input class='return' type='button' value='Volver'></div>";
echo "<table class='table-fill'> \n"; 
echo "<thead><th class='text-left'>ID_Region</th><th class='text-left'>Nombre_Region</th></thead>\n";
echo "<tbody class='table-hover'>\n";
for($i=0;$i<count($ID_Region);$i++)
{
	echo "<tr onclick=redi(this) id='$Nombre_Region[$i]'><td class='text-left'>$ID_Region[$i]</td><td class='text-left'>$Nombre_Region[$i]</td></tr> \n"; 
}
echo "<tbody>\n</table>\n";
echo "<form id='frm' action='algo.php' method='POST' hidden></form>";

echo "<input type='button' class='modulo' value='Modulo Prueba'>";
echo "<input type='button' class='modulo' value='Modulo Prueba'>";
echo "<input type='button' class='modulo' value='Modulo Prueba'>";
echo "<input type='button' class='modulo' value='Modulo Prueba'>";
echo "<input type='button' class='modulo' value='Modulo Prueba'>";
echo "<input type='button' class='modulo' value='Modulo Prueba'>";
echo "<input type='button' class='modulo' value='Modulo Prueba'>";
echo "<input type='button' class='modulo' value='Modulo Prueba'>";
?>
