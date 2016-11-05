<?php  
$host = "localhost";
$user = "root";
$passw = "";
$basedato = "probando";
$conexion = mysqli_connect($host, $user, $passw, $basedato);
  mysqli_set_charset($conexion,'utf8');
  if(!$conexion) {
      echo "Error de conexión Nº ". mysqli_connect_errno()."<br />";
      echo mysqli_connect_error(); //texto/detalle del error
      exit;
  }?>