<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
$host = "localhost";
$user = "root";
$passw = "";
$basedato = "fac";
$conexion = mysqli_connect($host, $user, $passw, $basedato);
  mysqli_set_charset($conexion,'utf8');
  if(!$conexion) {
      echo "Error de conexión Nº ". mysqli_connect_errno()."<br />";
      echo mysqli_connect_error(); //texto/detalle del error
      exit;
  }
  $inser = "INSERT INTO factura(ID_Factura,Fecha_Emision,ID_Comprador,ID_Compania,Condiciones_de_Venta, Giro_Actividad, Anulada, ID_Doc, ID_total_compras, ID_login_usuario VALUES ()";
  
  //Seleciona el ultimo id de la factura
  $result ="SELECT MAX(id) AS id FROM factura";
  $resultado=$conexion->query($result);
  $row = mysqli_fetch_array($resultado);
  $id=$row["id"];
  $idM= $id;
  $idM=$idM+1;

  foreach ($_POST['cod'] as $key => $cod) {
  	$slq1="INSERT INTO factura(id,codigo) VALUES ($idM,$cod)";
  	$conexion->query($slq1);
    $idM+=1;
  }
  $idM= $id;
  $idM=$idM+1;
  
  foreach ($_POST['nombre'] as $nom => $nombre) {
  	$slq2="update factura set nombre=$nombre where id=$idM";
  	$conexion->query($slq2);
    $idM+=1;
  }
  $idM= $id;
  $idM=$idM+1;
  foreach ($_POST['cant'] as $cant => $cantidad) {
  	$slq3="update factura set cantidad=$cantidad where id=$idM";
  	$conexion->query($slq3);
    $idM+=1;
  }
  $idM= $id;
  $idM=$idM+1;
  foreach ($_POST['punit'] as $PU => $punit) {
  	$slq4="update factura set precio_unitario=$punit where id=$idM";
  	$conexion->query($slq4);
    $idM+=1;
  }
  $idM= $id;
  $idM=$idM+1;
  foreach ($_POST['total'] as $tot => $total) {
  	$slq5="update factura set total=$total where id=$idM";
  	$conexion->query($slq5);
    $idM+=1;
  }
?>
</body>
</html>
