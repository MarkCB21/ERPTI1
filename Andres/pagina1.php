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
  </head>
  <body>
    <form id="Orden_De_Compra" action='pagina2.php' method='POST'>
    <fieldset>
      <legend>Orden de Compra</legend>
      <div>
        <label class="form-label-large" for="nombre_producto">Nombre Producto</label>
        <select class="form-control" name='nombre_producto' id='nombre_producto'>
          <?php  
          $con1 = mysql_query("SELECT ID_Prov, Nombre_Compania FROM proveedores");
          while($fila1 = mysql_fetch_object($con1))
          {
            $Nombre_Compania = "$fila1->Nombre_Compania";
            $ID_Prov = "$fila1->ID_Prov";
            echo "<optgroup label='$Nombre_Compania'>\n";
            $con2 = mysql_query("SELECT Nombre FROM productos WHERE ID_Prov = '$ID_Prov'");
            while($fila2 = mysql_fetch_object($con2))
            {
              $Nombre_Producto = "$fila2->Nombre";
              echo "<option value='$Nombre_Producto'>$Nombre_Producto</option>\n";
            }
            echo "</optgroup>\n";
          }
          ?>
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
  </body>
</html>