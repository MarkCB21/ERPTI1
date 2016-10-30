<HTML>
<?php
$locale= mysqli_connect("localhost", "root","","erp-1"); 

$Nombre_Compania=$_POST['Nombre_Compania'];
$Tipo_Proveedor=$_POST["Tipo_Proveedor"];
$ID_Rut=$_POST["ID_Rut"];
$Nombre_C=$_POST["Nombre_C"];
$Apellido_P=$_POST["Apellido_P"];
$Apellido_M=$_POST["Apellido_M"];
$Correo=$_POST["Correo"];
$Telefono=$_POST["Telefono"];
$Direccion=$_POST["Direccion"];
$Nombre_Local=$_POST["Nombre_Local"];
$consulta=mysqli_query($locale,"INSERT INTO proveedores (`Nombre_Compania`, `Tipo_Proveedor`, `ID_Rut`, `Nombre_C`, `Apellido_P`, `Apellido_M`, `Correo`, `Telefono`, `ID_Direccion`) VALUES('$Nombre_Compania','$Tipo_Proveedor','$ID_Rut','$Nombre_C','Apellido_P','Apellido_M','$Correo','$Telefono')");
?>
</HTML>