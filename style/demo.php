<!DOCTYPE HTML>
<?php
  $link = mysql_connect("localhost","root", "");
  mysql_select_db("erp", $link);
?>
<html>
  <head>
  <meta charset='utf-8'>
  <title></title>
  <link href="../style/style.css" rel="stylesheet" type="text/css">
  <?php
  	include "../Sprint 2/tablas.php";
  	for($i=0; $i < count($proveedores_ID_Prov); $i++){
  		echo "<p id='$proveedores_ID_Prov[$i]' hidden>\n";
  		for($j=0; $j < count($productos_ID_Prod); $j++){
  			echo "<option value='$productos_ID_Prod[$j]'>$productos_Nombre[$j]</option>\n";
  		}
  		echo "</p>\n";
  	}
  ?>
  <script type="text/javascript">
  function actdiv()
  {
    document.getElementById('nombre_producto').innerHTML = document.getElementById(document.getElementById('nombre_compania').value).innerHTML
  }
  </script>
  </head>
  <body onload="actdiv()">
    <form>
      <div>
        <label class="form-label" for="nombre_compania">Nombre Compañia</label>
        <select class="form-control" name='nombre_compania' id='nombre_compania' onchange="actdiv()">
          <?php  
          for($i=0; $i<count($proveedores_ID_Prov); $i++){
          	echo "<option value='$proveedores_ID_Prov[$i]'>$proveedores_Nombre_Compania";
          }
          ?>
        </select>
      </div>
      <div >
        <label class="form-label" for="nombre_producto">Nombre Producto</label>
        <select class="form-control" name='nombre_producto' id='nombre_producto'>
        </select>
      </div>
    </form>
  </body>
</html>