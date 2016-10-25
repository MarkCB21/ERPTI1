<!DOCTYPE HTML>
<?php
  $link = mysqli_connect("localhost","root", "");
  mysqli_select_db($link,"erp-1");
?>
<html>
  <head>
  <meta charset='utf-8'>
  <title></title>
  <link href="diseños/styletables.css" rel="stylesheet" type="text/css">
  <?php
    $con1 = mysqli_query($link,"SELECT ID_Prov, Nombre_Compania FROM proveedores");
    while($fila1 = mysqli_fetch_row($con1))
    {
      $Nombre_Compania = "$fila1->Nombre_Compania";
      $ID_Prov = "$fila1->ID_Prov";
      echo "<div id='$Nombre_Compania' hidden=False>\n";
      $con2 = mysqli_query($link,"SELECT Nombre FROM productos WHERE ID_Prov = '$ID_Prov'");
      while($fila2 = mysqli_fetch_row($con2))
      {
        $Nombre_Producto = "$fila2->Nombre";
        echo "<option value='$Nombre_Producto'>$Nombre_Producto</option>\n";
      }
      echo "</div>\n";
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
    <form id="Orden_De_Compra">
    <fieldset>
      <legend>Orden de Compra</legend>
      <div>
        <label class="form-label-large" for="nombre_compania">Nombre Compañia</label>
        <select class="form-control" name='nombre_compania' id='nombre_compania' onchange="actdiv()">
          <?php  
          $con = mysqli_query($link,"SELECT Nombre_Compania FROM proveedores");
          while($fila = mysqli_fetch_object($con))
          {
            $Nombre_Compania = "$fila->Nombre_Compania";
            echo "<option value='$Nombre_Compania'>$Nombre_Compania</option>\n";
          }
          ?>
        </select>
      </div>
      <div >
        <label class="form-label-large" for="nombre_producto">Nombre Producto</label>
        <select class="form-control" name='nombre_producto' id='nombre_producto'>
        </select>
      </div>
      <div>
        <label class="form-label-large" for='cantidad_producto'>Cantidad</label>
        <input class="form-control" type='int' placeholder='Cantidad' maxlength='3'size='4'name='cantidad_producto'id='cantidad_producto'> 
      </div>
      <div>
        <label class="form-label">
        <input class="btn" type = 'submit' value = 'Enviar'>
        </label>
      </div>
    </fieldset>
    </form>    
    <?php 
		$result = mysqli_query($link,"SELECT * FROM datos"); 
		echo "<table class='table-fill'> \n"; 
		echo "<<thead><tr><th class='row'>ID</th><th class='row'>Nombre</th><th class='row'>Correo</th><th class='row'>Telefono</th><th class='row'>Direccion</th></tr></thead><tbody class='table-hover'>\n"; 
		while ($row = mysqli_fetch_row($result)){ 
			echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td></tr> </tbody>\n"; 
		} 
		echo "</table> \n"; 
	?> 
  </body>
</html>