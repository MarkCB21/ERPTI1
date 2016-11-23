<?php
	include "tablas.php";
	$i = 1;
	while(isset($_POST["ID_Prov_$i"]))
	{
		$nMAX = $i;
		$i++;
	}

	$productos = [];
	for ($i=1; $i <= $nMAX; $i++)
	{ 
		$produc_com = array('ID_Prov'=>(int)$_POST["ID_Prov_$i"], 'ID_Prod'=>(int)$_POST["ID_Prod_$i"], 'Cantidad'=>(int)$_POST["Cantidad_$i"], 'Descuento_Porcentaje'=>(int)$_POST["Descuento_Porcentaje_$i"], 'Descuento'=>(int)$_POST["Descuento_$i"]);
		array_push($productos, $produc_com);		
	}

	$total = 0;
	for ($i=0; $i < count($productos); $i++)
	{
		$precio = $productos_Precio_Unitario[$productos[$i]['ID_Prod']-1];
		$total_bruto = $productos[$i]['Cantidad'] * $precio;
		$total += $total_bruto - ($total_bruto * $productos[$i]['Descuento_Porcentaje'] / 100.0) - $productos[$i]['Descuento'];
	}
	$total = intval($total);

	echo "$nMAX<br>";
	$link = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
	$query = "SELECT MAX(ID_Archivo) AS ID_Archivo FROM archivo;";
	if($result = mysqli_query($link, $query))
	{
		if($row = mysqli_fetch_object($result))
		{
			$next_id = (int)($row->ID_Archivo) + 1;
		}
		mysqli_free_result($result);
	}
	echo "$query<br>$next_id<br>";
	$query = "INSERT INTO archivo VALUES(NULL,'./uploads/documento$next_id.pdf');";
	mysqli_query($link, $query);
	echo "$query<br>";
	$query = "SELECT MAX(ID_Archivo) AS ID_Archivo FROM archivo WHERE Ruta_Archivo = './uploads/documento$next_id.pdf';";
	if($result = mysqli_query($link, $query))
	{
		if($row = mysqli_fetch_object($result))
		{
			$ID_Archivo = (int)$row->ID_Archivo;
		}
		mysqli_free_result($result);
	}
	echo "$query<br>$ID_Archivo<br>";
	$query = "SELECT MAX(ID_Doc) AS ID_Doc FROM documento;";
	if($result = mysqli_query($link, $query))
	{
		if($row = mysqli_fetch_object($result))
		{
			$next_id = (int)$row->ID_Doc + 1;
		}
		mysqli_free_result($result);
	}
	echo "$query<br>$next_id<br>";
	$query = "INSERT INTO documento VALUES(NULL,'documento$next_id','$ID_Archivo');";
	mysqli_query($link, $query);
	echo "$query<br>";
	$query = "SELECT MAX(ID_Doc) AS ID_Doc FROM documento WHERE Descripcion = 'documento$next_id' AND ID_Archivo = '$ID_Archivo';";
	if($result = mysqli_query($link, $query))
	{
		if($row = mysqli_fetch_object($result))
		{
			$ID_Doc = (int)$row->ID_Doc;
		}
		mysqli_free_result($result);
	}
	echo "$query<br>$ID_Doc<br>";
	// Esto siguiente hay que cambiarlo por el correspondiente session.
	$_SESSION['username'] = "Lucas_Fernandez";
	$query = "SELECT ID_L FROM login_usuario WHERE Nombre_Cuenta = '".$_SESSION['username']."';";
	if($result = mysqli_query($link, $query))
	{
		if($row = mysqli_fetch_object($result))
		{
			$ID_L = (int)$row->ID_L;
		}
		mysqli_free_result($result);
	}
	echo "$query<br>$ID_L<br>";
	// Marco... a saber para que era esto...
	$Rut = "984854-5";
	$query = "SELECT ID_Compania FROM datos_compania WHERE Rut = '$Rut';";
	if($result = mysqli_query($link, $query))
	{
		if($row = mysqli_fetch_object($result))
		{
			$ID_Compania = (int)$row->ID_Compania;
		}
		mysqli_free_result($result);
	}
	echo "$query<br>$ID_Compania<br>";
	$con_iva = intval($total * 1.2);
	$query = "INSERT INTO total_compras VALUES(NULL, '$con_iva','$total');";
	mysqli_query($link, $query);
	echo "$query<br>";
	$query = "SELECT MAX(ID_total_compras) AS ID_total_compras FROM total_compras WHERE Total_Iva = '$con_iva' AND Total_sin_iva = '$total';";
	if($result = mysqli_query($link, $query))
	{
		if($row = mysqli_fetch_object($result))
		{
			$ID_total_compras = (int)$row->ID_total_compras;
		}
		mysqli_free_result($result);
	}
	echo "$query<br>$ID_total_compras<br>";
	$query = "INSERT INTO compra_producto VALUES(NULL, CURRENT_DATE,'$ID_Doc','$ID_L','$ID_Compania','".$_POST["ID_Prov_$nMAX"]."','0','$ID_total_compras');";
	mysqli_query($link, $query);
	echo "$query<br>";
	$query = "SELECT MAX(ID_Compra) AS ID_Compra FROM compra_producto WHERE ID_Doc = '$ID_Doc' AND ID_login_usuario = '$ID_L' AND ID_Compania = '$ID_Compania' AND ID_proveedor = '".$_POST["ID_Prov_$nMAX"]."' AND ID_Total_compras = '$ID_total_compras';";
	if($result = mysqli_query($link, $query))
	{
		if($row = mysqli_fetch_object($result))
		{
			$ID_Compra = (int)$row->ID_Compra;
		}
		mysqli_free_result($result);
	}
	echo "$query<br>$ID_Compra<br>";
	for ($i=0; $i < $nMAX ; $i++)
	{ 
		$precio = $productos_Precio_Unitario[$productos[$i]['ID_Prod']-1];
		$total_bruto = $productos[$i]['Cantidad'] * $precio;
		$total = $total_bruto - ($total_bruto * $productos[$i]['Descuento_Porcentaje'] / 100.0) - $productos[$i]['Descuento'];
		if ($total < 0)
		{
			$total = 0;
		}
		$total = intval($total);
		$query = "INSERT INTO produc_com VALUES(NULL,'$ID_Compra','".$productos[$i]['ID_Prod']."','".$productos[$i]['Cantidad']."','".$productos[$i]['Descuento_Porcentaje']."','".$productos[$i]['Descuento']."','$total');";
		mysqli_query($link, $query);
		echo "$query<br>";
	}
	header("location: Modulo_Orden_de_Compra.php");
?>