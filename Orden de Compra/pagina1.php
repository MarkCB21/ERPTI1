<!DOCTYPE HTML>
<?php
  $link = mysql_connect("localhost","root", "");
  mysql_select_db("erp", $link);
?>
<html>
  <head>
  <meta content='text/html; charset=utf-8'>
  <title></title>
  <link href="Styles.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <form action='pagina2.php' method='POST'>
    <fieldset>
      <legend>Orden de Compra</legend>
      <div>
        <label for="nombre_compania">Nombre Compañia</label>
        <select name='nombre_compania' id='nombre_compania' onchange="cambiar()">
          <?php
          $con = mysql_query("SELECT Nombre_Compania FROM proveedores", $link);
          while($fila = mysql_fetch_object($con)){
            echo "<option value='$fila->Nombre_Compania'>$fila->Nombre_Compania</option>";
          }?>
        </select>
      </div>
      <div>
        <label for='nombre_producto'>Nombre Producto</label>
        <select name='nombre_producto' id='nombre_producto'>
          <?php
          $con = mysql_query("SELECT Nombre FROM productos", $link);
          while($fila = mysql_fetch_object($con)){
            echo "<option value='$fila->Nombre'>$fila->Nombre</option>";
          }?>
        </select>
      </div>
      <div>
        <label for='cantidad_producto'>Cantidad</label>
        <input type='int' placeholder='Cantidad' maxlength='3'size='4'name='cantidad_producto'id='cantidad_producto'> 
      </div>
      <div>
        <input type = 'submit' value = 'Enviar'>
      </div>
    </fieldset>
    </form>    
  </body>
</html>