<?php
include 'tablas.php';
include "aside.php";

if(isset($_POST['ID_Compra']))
{
	$ID_Compra=$_POST['ID_Compra'];
}
else
{
	header("location: Modulo_Orden_de_Compra.php");
}
?>
<!DOCTYPE html>
<html>
<link href="style/style.css" rel="stylesheet" type="text/css">
<link href="diseños/style.css" rel="stylesheet" type="text/css">
	<head>
		<link href="../style/style.css" rel="stylesheet" type="text/css">
		<title></title>
		<script>

		</script>
	</head>
	<body>
		<div id="main">
			<div class='form-head'>Anular Orden de Compra</div><div class='return' onclick='history.back(1)'>Volver</div>
			<div class='container'>
				<form action="Programa_Anular_Orden_de_Compra.php" method="POST">
					<?php
					$Fecha = $compra_producto_Fecha_emision[(int)$ID_Compra-1]; //
					$ID_Doc = $compra_producto_ID_Doc[(int)$ID_Compra-1]; //
					$Documento = $documento_Descripcion[(int)$ID_Doc-1]; //
					$ID_Archivo = $documento_ID_Archivo[(int)$ID_Doc-1]; //
					$Ruta_Archivo = $archivo_Ruta_Archivo[(int)$ID_Archivo-1]; //
					$ID_login_usuario = $compra_producto_ID_login_usuario[(int)$ID_Compra-1]; //
					$Nombre_Cuenta = $login_usuario_Nombre_Cuenta[(int)$ID_login_usuario-1]; //
					$ID_Compania = $compra_producto_ID_Compania[(int)$ID_Compra-1]; //
					$Razon_Social = $datos_compania_Razon_Social[(int)$ID_Compania-1]; //
					$Rut = $datos_compania_Rut[(int)$ID_Compania-1]; //
					$Telefono = $datos_compania_Telefono[(int)$ID_Compania-1]; //
					$Fax = $datos_compania_Fax[(int)$ID_Compania-1]; //
					$ID_Total_compras = $compra_producto_ID_Total_compras[(int)$ID_Compra-1]; 
					$IVA = "20%";
					$Total_con_iva = $total_compras_Total_Iva[(int)$ID_Total_compras-1];
					$Total_sin_iva = $total_compras_Total_sin_iva[(int)$ID_Total_compras-1];
					echo "
					<div>
						<label for='ID_Compra' class='form-label'>Orden de Compra</label>
						<input id='ID_Compra' name='ID_Compra'class='form-control' value='$ID_Compra' readonly>
					</div>
					<div>
						<label for='Detalles' class='form-label'>Detalles</label>
						<textarea rows='12' class='form-control' readonly>Datos Compania:\n- Razon Social: $Razon_Social\n- Rut Comprania: $Rut\n- Telefono: $Telefono\n- Fax: $Fax\n\nDatos Documento:\n- Nombre Documento: $Documento\n- Direccion de Archivo: $Ruta_Archivo\n- Realiza Usuario: $Nombre_Cuenta\n\nDatos Compra:\n- Fecha de Emision: $Fecha\n- Total sin IVA: $Total_sin_iva\n- Total con IVA: $Total_con_iva\n\n:EOF:</textarea>
					</div>
					";
					?>
					<center>
						<input class="btn" type="submit" value="Anular">
						<input class="btn" type="button" value="Cancelar" onclick="window.location='Modulo_Orden_de_Compra.php'">
					</center>
				</form>
			</div>
		</div>
	</body>
</html>