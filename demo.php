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
    $con1 = mysql_query("SELECT ID_Prov, Nombre_Compania FROM proveedores");
    while($fila1 = mysql_fetch_object($con1))
    {
      $Nombre_Compania = "$fila1->Nombre_Compania";
      $ID_Prov = "$fila1->ID_Prov";
      echo "<div id='$Nombre_Compania' hidden=False>\n";
      $con2 = mysql_query("SELECT Nombre FROM productos WHERE ID_Prov = '$ID_Prov'");
      while($fila2 = mysql_fetch_object($con2))
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
    <div class="form-head">Orden de Compra</div>
    <form>
      <div>
        <label class="form-label" for="nombre_compania">Nombre Compañia</label>
        <select class="form-control" name='nombre_compania' id='nombre_compania' onchange="actdiv()">
          <?php  
          $con = mysql_query("SELECT Nombre_Compania FROM proveedores");
          while($fila = mysql_fetch_object($con))
          {
            $Nombre_Compania = "$fila->Nombre_Compania";
            echo "<option value='$Nombre_Compania'>$Nombre_Compania</option>\n";
          }
          ?>
        </select>
      </div>
      <div >
        <label class="form-label" for="nombre_producto">Nombre Producto</label>
        <select class="form-control" name='nombre_producto' id='nombre_producto'>
        </select>
      </div>
      <div>
        <label class="form-label" for='cantidad_producto'>Cantidad</label>
        <input style="width:10%" class="form-control" type='int' placeholder='Cantidad' maxlength='3' name='cantidad_producto'id='cantidad_producto'> 
      </div>
      <label class="form-label"><input class="btn" type = 'submit' value = 'Enviar'></label>
    </fieldset>
    </form>
    <center>
      <?php 
    		$result = mysql_query("SELECT * FROM datos", $link); 
    		echo "<table class'table-fill'> \n"; 
        echo "<thead><th class='text-left'>ID</th><th class='text-left'>Nombre</th><th class='text-left'>Correo</th><th class='text-left'>Telefono</th><th class='text-left'>Direccion</th></thead>\n";
        echo "<tbody class='table-hover'>\n"; 
  		  while ($row = mysql_fetch_row($result)){ 
          echo "<tr><td class='text-left'>$row[0]</td><td class='text-left'>$row[1]</td><td class='text-left'>$row[2]</td><td class='text-left'>$row[3]</td><td class='text-left'>$row[4]</td></tr> \n"; 
  		  } 
  		  echo "<tbody>\n</table>\n"; 
      ?>
    </center>
  </body>
</html>