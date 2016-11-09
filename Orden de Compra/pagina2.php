<?php
  $link = mysql_connect("localhost","root", "");
  mysql_select_db("erp", $link);
  $localtime = localtime();
  $localtime_assoc = localtime(time(), true);
  
  $Nombre = $_POST['nombre_producto'];
  echo "Nombre = $Nombre<br>";

  $cons = mysql_query("SELECT ID_Prod FROM productos WHERE Nombre = '$Nombre'");
  $object = mysql_fetch_object($cons);
  $ID_Prod = "$object->ID_Prod";

  echo "ID_Prod = $ID_Prod<br>";
  if($ID_Prod)
  {
    $cons = mysql_query("SELECT Precio FROM productos WHERE ID_Prod = $ID_Prod");
    $object = mysql_fetch_object($cons);
    $Precio = "$object->Precio";
    echo "Precio = $Precio<br>";
  
    $cons = mysql_query("SELECT Stock FROM productos WHERE ID_Prod = $ID_Prod");
    $object = mysql_fetch_object($cons);
    $Stock = "$object->Stock";
    echo "Stock = $Stock<br>";
  
    $Cantidad = $_POST['cantidad_producto'];
    echo "Cantidad = $Cantidad<br>";
    
    if($Cantidad <= $Stock)
    {
      $New_Stock = (string)((int)$Stock - (int)$Cantidad);
      echo "New_Stock = $New_Stock<br>";
      
      mysql_query("UPDATE productos SET Stock = '$New_Stock' WHERE ID_Prod = $ID_Prod");
  
      $Total=(string)((int)$Cantidad*(int)$Precio);
      echo "Total = $Total<br>";
  
      $Day = $localtime_assoc['tm_mday'];
      echo "Day = $Day<br>";
    
      $Month = (string)((int)$localtime_assoc['tm_mon']+1);
      if($Month < 10)
      {
        $Month = "0$Month";
      }
      echo "Month = $Month<br>";
    
      $Year = (string)((int)$localtime_assoc['tm_year']+1900);
      echo "Year = $Year<br>";
    
      $Fecha = "$Year-$Month-$Day";
      echo "Fecha = $Fecha<br>";  
      
      mysql_query("INSERT INTO compra_poducto (ID_Compra, Cantidad, Total, Fecha) VALUES (NULL, '$Cantidad', '$Total', '$Fecha');");
      
      $cons = mysql_query("SELECT MAX(ID_Compra) AS ID_Compra FROM compra_poducto");
      $object = mysql_fetch_object($cons);
      $ID_Compra = "$object->ID_Compra";
      echo "ID_Compra = $ID_Compra<br>";
      
      mysql_query("INSERT INTO product_com (ID_Product, ID_Compra, ID_Prod) VALUES (NULL, '$ID_Compra', '$ID_Prod');");
    }
  }
  mysql_close($Link);
  header('Location: pagina1.php');
?>