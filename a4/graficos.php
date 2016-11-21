<?php 
	include "database_connection.php";
	// esta consulta saca la cantidad de veces que se vendió el producto en el año (saca lso datos de la tabla boletas)
	$sql = "SELECT SUM(A.Cantidad) FROM articulob as A INNER JOIN boleta as B ON A.ID_Boleta = B.ID_Boleta WHERE (B.Anulada=0 AND (year(B.Fecha_Emision)=2012)) AND A.ID_Inventario=24";
	$consulta =mysqli_query($connection,$sql);
	$resultado = mysqli_fetch_array($consulta);
	// esta consulta saca la cantidad de veces que se vendió el producto en el año (saca lso datos de la tabla Facturas)
	$sql2 = "SELECT SUM(A.Cantidad) FROM articulov as A INNER JOIN factura as F ON A.ID_F = F.ID_Factura WHERE (F.Anulada=0 AND (year(F.Fecha_Emision)=2012)) AND A.ID_Inve=24";
	$consulta2 =mysqli_query($connection,$sql2);
	$resultado2 = mysqli_fetch_array($consulta2);
	// esta variable une los datos extraidos de las boletas y de las facturas del producto
	$totalventas=$resultado[0]+$resultado2[0];
	$sql3 = "SELECT SUM(A.Total_inventario) FROM articulob as A INNER JOIN boleta as B ON A.ID_Boleta = B.ID_Boleta WHERE (B.Anulada=0 AND (year(B.Fecha_Emision)=2012)) AND A.ID_Inventario=24";
	$consulta3 =mysqli_query($connection,$sql3);
	$resultado3 = mysqli_fetch_array($consulta3);
	$sql4 = "SELECT SUM(A.Total_inventario) FROM articulov as A INNER JOIN factura as F ON A.ID_F = F.ID_Factura WHERE (F.Anulada=0 AND (year(F.Fecha_Emision)=2012)) AND A.ID_Inve=24";
	$consulta4 =mysqli_query($connection,$sql4);
	$resultado4 = mysqli_fetch_array($consulta4);
	$totaldinero=$resultado3[0]+$resultado4[0];
	// por mes (Estas consultas sacan datos de las boletas)
	$sqlb1 = "SELECT SUM(A.Cantidad) FROM articulob as A INNER JOIN boleta as B ON A.ID_Boleta = B.ID_Boleta WHERE ((B.Anulada=0 AND (year(B.Fecha_Emision)=2012))AND month(B.Fecha_Emision)=1) AND A.ID_Inventario=24";
	$consultab1 =mysqli_query($connection,$sqlb1);
	$resultadob1 = mysqli_fetch_array($consultab1);
	$sqlb2 = "SELECT SUM(A.Cantidad) FROM articulob as A INNER JOIN boleta as B ON A.ID_Boleta = B.ID_Boleta WHERE ((B.Anulada=0 AND (year(B.Fecha_Emision)=2012))AND month(B.Fecha_Emision)=2) AND A.ID_Inventario=24";
	$consultab2 =mysqli_query($connection,$sqlb2);
	$resultadob2 = mysqli_fetch_array($consultab2);
	$sqlb3 = "SELECT SUM(A.Cantidad) FROM articulob as A INNER JOIN boleta as B ON A.ID_Boleta = B.ID_Boleta WHERE ((B.Anulada=0 AND (year(B.Fecha_Emision)=2012))AND month(B.Fecha_Emision)=3) AND A.ID_Inventario=24";
	$consultab3 =mysqli_query($connection,$sqlb3);
	$resultadob3 = mysqli_fetch_array($consultab3);
	$sqlb4 = "SELECT SUM(A.Cantidad) FROM articulob as A INNER JOIN boleta as B ON A.ID_Boleta = B.ID_Boleta WHERE ((B.Anulada=0 AND (year(B.Fecha_Emision)=2012))AND month(B.Fecha_Emision)=4) AND A.ID_Inventario=24";
	$consultab4 =mysqli_query($connection,$sqlb4);
	$resultadob4 = mysqli_fetch_array($consultab4);
	$sqlb5 = "SELECT SUM(A.Cantidad) FROM articulob as A INNER JOIN boleta as B ON A.ID_Boleta = B.ID_Boleta WHERE ((B.Anulada=0 AND (year(B.Fecha_Emision)=2012))AND month(B.Fecha_Emision)=5) AND A.ID_Inventario=24";
	$consultab5 =mysqli_query($connection,$sqlb5);
	$resultadob5 = mysqli_fetch_array($consultab5);
	$sqlb6 = "SELECT SUM(A.Cantidad) FROM articulob as A INNER JOIN boleta as B ON A.ID_Boleta = B.ID_Boleta WHERE ((B.Anulada=0 AND (year(B.Fecha_Emision)=2012))AND month(B.Fecha_Emision)=6) AND A.ID_Inventario=24";
	$consultab6 =mysqli_query($connection,$sqlb6);
	$resultadob6 = mysqli_fetch_array($consultab6);
	$sqlb7 = "SELECT SUM(A.Cantidad) FROM articulob as A INNER JOIN boleta as B ON A.ID_Boleta = B.ID_Boleta WHERE ((B.Anulada=0 AND (year(B.Fecha_Emision)=2012))AND month(B.Fecha_Emision)=7) AND A.ID_Inventario=24";
	$consultab7 =mysqli_query($connection,$sqlb7);
	$resultadob7 = mysqli_fetch_array($consultab7);
	$sqlb8 = "SELECT SUM(A.Cantidad) FROM articulob as A INNER JOIN boleta as B ON A.ID_Boleta = B.ID_Boleta WHERE ((B.Anulada=0 AND (year(B.Fecha_Emision)=2012))AND month(B.Fecha_Emision)=8) AND A.ID_Inventario=24";
	$consultab8 =mysqli_query($connection,$sqlb8);
	$resultadob8 = mysqli_fetch_array($consultab8);
	$sqlb9 = "SELECT SUM(A.Cantidad) FROM articulob as A INNER JOIN boleta as B ON A.ID_Boleta = B.ID_Boleta WHERE ((B.Anulada=0 AND (year(B.Fecha_Emision)=2012))AND month(B.Fecha_Emision)=9) AND A.ID_Inventario=24";
	$consultab9 =mysqli_query($connection,$sqlb9);
	$resultadob9 = mysqli_fetch_array($consultab9);
	$sqlb10 = "SELECT SUM(A.Cantidad) FROM articulob as A INNER JOIN boleta as B ON A.ID_Boleta = B.ID_Boleta WHERE ((B.Anulada=0 AND (year(B.Fecha_Emision)=2012))AND month(B.Fecha_Emision)=10) AND A.ID_Inventario=24";
	$consultab10 =mysqli_query($connection,$sqlb10);
	$resultadob10 = mysqli_fetch_array($consultab10);
	$sqlb11 = "SELECT SUM(A.Cantidad) FROM articulob as A INNER JOIN boleta as B ON A.ID_Boleta = B.ID_Boleta WHERE ((B.Anulada=0 AND (year(B.Fecha_Emision)=2012))AND month(B.Fecha_Emision)=11) AND A.ID_Inventario=24";
	$consultab11 =mysqli_query($connection,$sqlb11);
	$resultadob11 = mysqli_fetch_array($consultab11);
	$sqlb12 = "SELECT SUM(A.Cantidad) FROM articulob as A INNER JOIN boleta as B ON A.ID_Boleta = B.ID_Boleta WHERE ((B.Anulada=0 AND (year(B.Fecha_Emision)=2012))AND month(B.Fecha_Emision)=12) AND A.ID_Inventario=24";
	$consultab12 =mysqli_query($connection,$sqlb12);
	$resultadob12 = mysqli_fetch_array($consultab12);
	//ventas por mes (Estas consultas sacan datos de las Facturas)
	$sqlf1 = "SELECT SUM(A.Cantidad) FROM articulov as A INNER JOIN factura as F ON A.ID_F = F.ID_Factura WHERE ((F.Anulada=0 AND (year(F.Fecha_Emision)=2012)) AND month(F.Fecha_Emision)=1) AND A.ID_Inve=24";
	$consultaf1 =mysqli_query($connection,$sqlf1);
	$resultadof1 = mysqli_fetch_array($consultaf1);
	$sqlf2 = "SELECT SUM(A.Cantidad) FROM articulov as A INNER JOIN factura as F ON A.ID_F = F.ID_Factura WHERE ((F.Anulada=0 AND (year(F.Fecha_Emision)=2012)) AND month(F.Fecha_Emision)=2) AND A.ID_Inve=24";
	$consultaf2 =mysqli_query($connection,$sqlf2);
	$resultadof2 = mysqli_fetch_array($consultaf2);
	$sqlf3 = "SELECT SUM(A.Cantidad) FROM articulov as A INNER JOIN factura as F ON A.ID_F = F.ID_Factura WHERE ((F.Anulada=0 AND (year(F.Fecha_Emision)=2012)) AND month(F.Fecha_Emision)=3) AND A.ID_Inve=24";
	$consultaf3 =mysqli_query($connection,$sqlf3);
	$resultadof3 = mysqli_fetch_array($consultaf3);
	$sqlf4 = "SELECT SUM(A.Cantidad) FROM articulov as A INNER JOIN factura as F ON A.ID_F = F.ID_Factura WHERE ((F.Anulada=0 AND (year(F.Fecha_Emision)=2012)) AND month(F.Fecha_Emision)=4) AND A.ID_Inve=24";
	$consultaf4 =mysqli_query($connection,$sqlf4);
	$resultadof4 = mysqli_fetch_array($consultaf4);
	$sqlf5 = "SELECT SUM(A.Cantidad) FROM articulov as A INNER JOIN factura as F ON A.ID_F = F.ID_Factura WHERE ((F.Anulada=0 AND (year(F.Fecha_Emision)=2012)) AND month(F.Fecha_Emision)=5) AND A.ID_Inve=24";
	$consultaf5 =mysqli_query($connection,$sqlf5);
	$resultadof5 = mysqli_fetch_array($consultaf5);
	$sqlf6 = "SELECT SUM(A.Cantidad) FROM articulov as A INNER JOIN factura as F ON A.ID_F = F.ID_Factura WHERE ((F.Anulada=0 AND (year(F.Fecha_Emision)=2012)) AND month(F.Fecha_Emision)=6) AND A.ID_Inve=24";
	$consultaf6 =mysqli_query($connection,$sqlf6);
	$resultadof6 = mysqli_fetch_array($consultaf6);
	$sqlf7 = "SELECT SUM(A.Cantidad) FROM articulov as A INNER JOIN factura as F ON A.ID_F = F.ID_Factura WHERE ((F.Anulada=0 AND (year(F.Fecha_Emision)=2012)) AND month(F.Fecha_Emision)=7) AND A.ID_Inve=24";
	$consultaf7 =mysqli_query($connection,$sqlf7);
	$resultadof7 = mysqli_fetch_array($consultaf7);
	$sqlf8 = "SELECT SUM(A.Cantidad) FROM articulov as A INNER JOIN factura as F ON A.ID_F = F.ID_Factura WHERE ((F.Anulada=0 AND (year(F.Fecha_Emision)=2012)) AND month(F.Fecha_Emision)=8) AND A.ID_Inve=24";
	$consultaf8 =mysqli_query($connection,$sqlf8);
	$resultadof8 = mysqli_fetch_array($consultaf8);
	$sqlf9 = "SELECT SUM(A.Cantidad) FROM articulov as A INNER JOIN factura as F ON A.ID_F = F.ID_Factura WHERE ((F.Anulada=0 AND (year(F.Fecha_Emision)=2012)) AND month(F.Fecha_Emision)=9) AND A.ID_Inve=24";
	$consultaf9 =mysqli_query($connection,$sqlf9);
	$resultadof9 = mysqli_fetch_array($consultaf9);
	$sqlf10 = "SELECT SUM(A.Cantidad) FROM articulov as A INNER JOIN factura as F ON A.ID_F = F.ID_Factura WHERE ((F.Anulada=0 AND (year(F.Fecha_Emision)=2012)) AND month(F.Fecha_Emision)=10) AND A.ID_Inve=24";
	$consultaf10 =mysqli_query($connection,$sqlf10);
	$resultadof10 = mysqli_fetch_array($consultaf10);
	$sqlf11 = "SELECT SUM(A.Cantidad) FROM articulov as A INNER JOIN factura as F ON A.ID_F = F.ID_Factura WHERE ((F.Anulada=0 AND (year(F.Fecha_Emision)=2012)) AND month(F.Fecha_Emision)=11) AND A.ID_Inve=24";
	$consultaf11 =mysqli_query($connection,$sqlf11);
	$resultadof11 = mysqli_fetch_array($consultaf11);
	$sqlf12 = "SELECT SUM(A.Cantidad) FROM articulov as A INNER JOIN factura as F ON A.ID_F = F.ID_Factura WHERE ((F.Anulada=0 AND (year(F.Fecha_Emision)=2012)) AND month(F.Fecha_Emision)=12) AND A.ID_Inve=24";
	$consultaf12 =mysqli_query($connection,$sqlf12);
	$resultadof12 = mysqli_fetch_array($consultaf12);
	//Total de ventas del producto por mes (Se unen datos de boletas y de facturas)
	$totalventas1=$resultadob1[0]+$resultadof1[0];
	$totalventas2=$resultadob2[0]+$resultadof2[0];
	$totalventas3=$resultadob3[0]+$resultadof3[0];
	$totalventas4=$resultadob4[0]+$resultadof4[0];
	$totalventas5=$resultadob5[0]+$resultadof5[0];
	$totalventas6=$resultadob6[0]+$resultadof6[0];
	$totalventas7=$resultadob7[0]+$resultadof7[0];
	$totalventas8=$resultadob8[0]+$resultadof8[0];
	$totalventas9=$resultadob9[0]+$resultadof9[0];
	$totalventas10=$resultadob10[0]+$resultadof10[0];
	$totalventas11=$resultadob11[0]+$resultadof11[0];
	$totalventas12=$resultadob12[0]+$resultadof12[0];
	//Ganancias por mes (Estas consultas sacan datos de las boletas)
	$sqlbd1 = "SELECT SUM(A.Total_inventario) FROM articulob as A INNER JOIN boleta as B ON A.ID_Boleta = B.ID_Boleta WHERE ((B.Anulada=0 AND (year(B.Fecha_Emision)=2012))AND month(B.Fecha_Emision)=1) AND A.ID_Inventario=24";
	$consultabd1 =mysqli_query($connection,$sqlbd1);
	$resultadobd1 = mysqli_fetch_array($consultabd1);
	$sqlbd2 = "SELECT SUM(A.Total_inventario) FROM articulob as A INNER JOIN boleta as B ON A.ID_Boleta = B.ID_Boleta WHERE ((B.Anulada=0 AND (year(B.Fecha_Emision)=2012))AND month(B.Fecha_Emision)=2) AND A.ID_Inventario=24";
	$consultabd2 =mysqli_query($connection,$sqlbd2);
	$resultadobd2 = mysqli_fetch_array($consultabd2);
	$sqlbd3 = "SELECT SUM(A.Total_inventario) FROM articulob as A INNER JOIN boleta as B ON A.ID_Boleta = B.ID_Boleta WHERE ((B.Anulada=0 AND (year(B.Fecha_Emision)=2012))AND month(B.Fecha_Emision)=3) AND A.ID_Inventario=24";
	$consultabd3 =mysqli_query($connection,$sqlbd3);
	$resultadobd3 = mysqli_fetch_array($consultabd3);
	$sqlbd4 = "SELECT SUM(A.Total_inventario) FROM articulob as A INNER JOIN boleta as B ON A.ID_Boleta = B.ID_Boleta WHERE ((B.Anulada=0 AND (year(B.Fecha_Emision)=2012))AND month(B.Fecha_Emision)=4) AND A.ID_Inventario=24";
	$consultabd4 =mysqli_query($connection,$sqlbd4);
	$resultadobd4 = mysqli_fetch_array($consultabd4);
	$sqlbd5 = "SELECT SUM(A.Total_inventario) FROM articulob as A INNER JOIN boleta as B ON A.ID_Boleta = B.ID_Boleta WHERE ((B.Anulada=0 AND (year(B.Fecha_Emision)=2012))AND month(B.Fecha_Emision)=5) AND A.ID_Inventario=24";
	$consultabd5 =mysqli_query($connection,$sqlbd5);
	$resultadobd5 = mysqli_fetch_array($consultabd5);
	$sqlbd6 = "SELECT SUM(A.Total_inventario) FROM articulob as A INNER JOIN boleta as B ON A.ID_Boleta = B.ID_Boleta WHERE ((B.Anulada=0 AND (year(B.Fecha_Emision)=2012))AND month(B.Fecha_Emision)=6) AND A.ID_Inventario=24";
	$consultabd6 =mysqli_query($connection,$sqlbd6);
	$resultadobd6 = mysqli_fetch_array($consultabd6);
	$sqlbd7 = "SELECT SUM(A.Total_inventario) FROM articulob as A INNER JOIN boleta as B ON A.ID_Boleta = B.ID_Boleta WHERE ((B.Anulada=0 AND (year(B.Fecha_Emision)=2012))AND month(B.Fecha_Emision)=7) AND A.ID_Inventario=24";
	$consultabd7 =mysqli_query($connection,$sqlbd7);
	$resultadobd7 = mysqli_fetch_array($consultabd7);
	$sqlbd8 = "SELECT SUM(A.Total_inventario) FROM articulob as A INNER JOIN boleta as B ON A.ID_Boleta = B.ID_Boleta WHERE ((B.Anulada=0 AND (year(B.Fecha_Emision)=2012))AND month(B.Fecha_Emision)=8) AND A.ID_Inventario=24";
	$consultabd8 =mysqli_query($connection,$sqlbd8);
	$resultadobd8 = mysqli_fetch_array($consultabd8);
	$sqlbd9 = "SELECT SUM(A.Total_inventario) FROM articulob as A INNER JOIN boleta as B ON A.ID_Boleta = B.ID_Boleta WHERE ((B.Anulada=0 AND (year(B.Fecha_Emision)=2012))AND month(B.Fecha_Emision)=9) AND A.ID_Inventario=24";
	$consultabd9 =mysqli_query($connection,$sqlbd9);
	$resultadobd9 = mysqli_fetch_array($consultabd9);
	$sqlbd10 = "SELECT SUM(A.Total_inventario) FROM articulob as A INNER JOIN boleta as B ON A.ID_Boleta = B.ID_Boleta WHERE ((B.Anulada=0 AND (year(B.Fecha_Emision)=2012))AND month(B.Fecha_Emision)=10) AND A.ID_Inventario=24";
	$consultabd10 =mysqli_query($connection,$sqlbd10);
	$resultadobd10 = mysqli_fetch_array($consultabd10);
	$sqlbd11 = "SELECT SUM(A.Total_inventario) FROM articulob as A INNER JOIN boleta as B ON A.ID_Boleta = B.ID_Boleta WHERE ((B.Anulada=0 AND (year(B.Fecha_Emision)=2012))AND month(B.Fecha_Emision)=11) AND A.ID_Inventario=24";
	$consultabd11 =mysqli_query($connection,$sqlbd11);
	$resultadobd11 = mysqli_fetch_array($consultabd11);
	$sqlbd12 = "SELECT SUM(A.Total_inventario) FROM articulob as A INNER JOIN boleta as B ON A.ID_Boleta = B.ID_Boleta WHERE ((B.Anulada=0 AND (year(B.Fecha_Emision)=2012))AND month(B.Fecha_Emision)=12) AND A.ID_Inventario=24";
	$consultabd12 =mysqli_query($connection,$sqlbd12);
	$resultadobd12 = mysqli_fetch_array($consultabd12);
	//Ganancias por mes (Estas consultas sacan los datos de facturas)
	$sqlfd1 = "SELECT SUM(A.Total_inventario) FROM articulov as A INNER JOIN factura as F ON A.ID_F = F.ID_Factura WHERE ((F.Anulada=0 AND (year(F.Fecha_Emision)=2012)) AND month(F.Fecha_Emision)=1) AND A.ID_Inve=24";
	$consultafd1 =mysqli_query($connection,$sqlfd1);
	$resultadofd1 = mysqli_fetch_array($consultafd1);
	$sqlfd2 = "SELECT SUM(A.Total_inventario) FROM articulov as A INNER JOIN factura as F ON A.ID_F = F.ID_Factura WHERE ((F.Anulada=0 AND (year(F.Fecha_Emision)=2012)) AND month(F.Fecha_Emision)=2) AND A.ID_Inve=24";
	$consultafd2 =mysqli_query($connection,$sqlfd2);
	$resultadofd2 = mysqli_fetch_array($consultafd2);
	$sqlfd3 = "SELECT SUM(A.Total_inventario) FROM articulov as A INNER JOIN factura as F ON A.ID_F = F.ID_Factura WHERE ((F.Anulada=0 AND (year(F.Fecha_Emision)=2012)) AND month(F.Fecha_Emision)=3) AND A.ID_Inve=24";
	$consultafd3 =mysqli_query($connection,$sqlfd3);
	$resultadofd3 = mysqli_fetch_array($consultafd3);
	$sqlfd4 = "SELECT SUM(A.Total_inventario) FROM articulov as A INNER JOIN factura as F ON A.ID_F = F.ID_Factura WHERE ((F.Anulada=0 AND (year(F.Fecha_Emision)=2012)) AND month(F.Fecha_Emision)=4) AND A.ID_Inve=24";
	$consultafd4 =mysqli_query($connection,$sqlfd4);
	$resultadofd4 = mysqli_fetch_array($consultafd4);
	$sqlfd5 = "SELECT SUM(A.Total_inventario) FROM articulov as A INNER JOIN factura as F ON A.ID_F = F.ID_Factura WHERE ((F.Anulada=0 AND (year(F.Fecha_Emision)=2012)) AND month(F.Fecha_Emision)=5) AND A.ID_Inve=24";
	$consultafd5 =mysqli_query($connection,$sqlfd5);
	$resultadofd5 = mysqli_fetch_array($consultafd5);
	$sqlfd6 = "SELECT SUM(A.Total_inventario) FROM articulov as A INNER JOIN factura as F ON A.ID_F = F.ID_Factura WHERE ((F.Anulada=0 AND (year(F.Fecha_Emision)=2012)) AND month(F.Fecha_Emision)=6) AND A.ID_Inve=24";
	$consultafd6 =mysqli_query($connection,$sqlfd6);
	$resultadofd6 = mysqli_fetch_array($consultafd6);
	$sqlfd7 = "SELECT SUM(A.Total_inventario) FROM articulov as A INNER JOIN factura as F ON A.ID_F = F.ID_Factura WHERE ((F.Anulada=0 AND (year(F.Fecha_Emision)=2012)) AND month(F.Fecha_Emision)=7) AND A.ID_Inve=24";
	$consultafd7 =mysqli_query($connection,$sqlfd7);
	$resultadofd7 = mysqli_fetch_array($consultafd7);
	$sqlfd8 = "SELECT SUM(A.Total_inventario) FROM articulov as A INNER JOIN factura as F ON A.ID_F = F.ID_Factura WHERE ((F.Anulada=0 AND (year(F.Fecha_Emision)=2012)) AND month(F.Fecha_Emision)=8) AND A.ID_Inve=24";
	$consultafd8 =mysqli_query($connection,$sqlfd8);
	$resultadofd8 = mysqli_fetch_array($consultafd8);
	$sqlfd9 = "SELECT SUM(A.Total_inventario) FROM articulov as A INNER JOIN factura as F ON A.ID_F = F.ID_Factura WHERE ((F.Anulada=0 AND (year(F.Fecha_Emision)=2012)) AND month(F.Fecha_Emision)=9) AND A.ID_Inve=24";
	$consultafd9 =mysqli_query($connection,$sqlfd9);
	$resultadofd9 = mysqli_fetch_array($consultafd9);
	$sqlfd10 = "SELECT SUM(A.Total_inventario) FROM articulov as A INNER JOIN factura as F ON A.ID_F = F.ID_Factura WHERE ((F.Anulada=0 AND (year(F.Fecha_Emision)=2012)) AND month(F.Fecha_Emision)=10) AND A.ID_Inve=24";
	$consultafd10 =mysqli_query($connection,$sqlfd10);
	$resultadofd10 = mysqli_fetch_array($consultafd10);
	$sqlfd11 = "SELECT SUM(A.Total_inventario) FROM articulov as A INNER JOIN factura as F ON A.ID_F = F.ID_Factura WHERE ((F.Anulada=0 AND (year(F.Fecha_Emision)=2012)) AND month(F.Fecha_Emision)=11) AND A.ID_Inve=24";
	$consultafd11 =mysqli_query($connection,$sqlfd11);
	$resultadofd11 = mysqli_fetch_array($consultafd11);
	$sqlfd12 = "SELECT SUM(A.Total_inventario) FROM articulov as A INNER JOIN factura as F ON A.ID_F = F.ID_Factura WHERE ((F.Anulada=0 AND (year(F.Fecha_Emision)=2012)) AND month(F.Fecha_Emision)=12) AND A.ID_Inve=24";
	$consultafd12 =mysqli_query($connection,$sqlfd12);
	$resultadofd12 = mysqli_fetch_array($consultafd12);
	//total de ganancias por mes (dinero)(Se unen datos de boletas y de facturas)
	$totalventasd1=$resultadobd1[0]+$resultadofd1[0];
	$totalventasd2=$resultadobd2[0]+$resultadofd2[0];
	$totalventasd3=$resultadobd3[0]+$resultadofd3[0];
	$totalventasd4=$resultadobd4[0]+$resultadofd4[0];
	$totalventasd5=$resultadobd5[0]+$resultadofd5[0];
	$totalventasd6=$resultadobd6[0]+$resultadofd6[0];
	$totalventasd7=$resultadobd7[0]+$resultadofd7[0];
	$totalventasd8=$resultadobd8[0]+$resultadofd8[0];
	$totalventasd9=$resultadobd9[0]+$resultadofd9[0];
	$totalventasd10=$resultadobd10[0]+$resultadofd10[0];
	$totalventasd11=$resultadobd11[0]+$resultadofd11[0];
	$totalventasd12=$resultadobd12[0]+$resultadofd12[0];
?>
<html>
	<head>
		<title>Graficos</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="diseños/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<style type="text/css">
            #container {
            	min-width: 220px;
            	max-width: 400px;
            	min-height: 220px;
            	max-height: 400px;
            	/*margin: 0 auto;*/
            }
            #container2 {
            	min-width: 220px;
            	max-width: 400px;
            	min-height: 220px;
            	max-height: 400px;
            	/*margin: 0 auto;*/
            }
            #container3 {
            	
            	width: 400px;
            	min-height: 220px;
            	max-height: 400px;
            	/*margin: 0 auto;*/
            }
            #container4 {
            	
            	width: 400px;
            	min-height: 220px;
            	max-height: 400px;
            	/*margin: 0 auto;*/
            }
            ${demo.css}
		</style>
		<script type="text/javascript">
			
            function graficoBarra1(resultado) {
            	//var resultado="<?php echo $totalventas; ?>"
                var chart = Highcharts.chart('container', {

                    title: {
                        text: 'Total de ventas del producto'
                    },

                    xAxis: {
                        categories: ['Producto']
                    },

                    series: [{
                    	name: 'Total de ventas',
                        type: 'column',
                        colorByPoint: true,
                        data: [resultado],
                        showInLegend: false
                    }]

                })
            }
            function graficoPastel1(total1,total2,total3,total4,total5,total6,total7,total8,total9,total10,total11,total12) {
			    Highcharts.chart('container2', {
			        chart: {
			            plotBackgroundColor: null,
			            plotBorderWidth: null,
			            plotShadow: false,
			            type: 'pie'
			        },
			        title: {
			            text: 'Total de ventas por mes en el año'
			        },
			        tooltip: {
			            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
			        },
			        plotOptions: {
			            pie: {
			                allowPointSelect: true,
			                cursor: 'pointer',
			                dataLabels: {
			                    enabled: true,
			                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
			                    style: {
			                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
			                    }
			                }
			            }
			        },
			        series: [{
			            name: 'Ventas totales por mes',
			            colorByPoint: true,
			            data: [{
				                name: 'Enero',
				                y: total1,
				            }, {
				                name: 'Febrero',
				                y: total2
				            }, {
				                name: 'Marzo',
				                y: total3
				            }, {
				                name: 'Abril',
				                y: total4
				            }, {
				                name: 'Mayo',
				                y: total5
				            }, {
				                name: 'Junio',
				                y: total6
				            },{
				                name: 'Julio',
				                y: total7
				            }, {
				                name: 'Agosto',
				                y: total8
				            }, {
				                name: 'Septiembre',
				                y: total9
				            }, {
				                name: 'Octubre',
				                y: total10
				            }, {
				                name: 'Noviembre',
				                y: total11
				            }, {
				                name: 'Diciembre',
				                y: total12
				            }]
			        }]
			    })
			}
			function graficoBarra2(resultado) {
                var chart = Highcharts.chart('container3', {

                    title: {
                        text: 'Ganancias en el año'
                    },

                    xAxis: {
                        categories: ['Ganancias']
                    },

                    series: [{
                    	name: 'Ganancias totales en el año',
                        type: 'column',
                        colorByPoint: true,
                        data: [resultado],
                        showInLegend: false
                    }]

                })
            }
            function graficoPastel2(total1,total2,total3,total4,total5,total6,total7,total8,total9,total10,total11,total12) {
			    Highcharts.chart('container4', {
			        chart: {
			            plotBackgroundColor: null,
			            plotBorderWidth: null,
			            plotShadow: false,
			            type: 'pie'
			        },
			        title: {
			            text: 'Ganancias por mes en el año'
			        },
			        tooltip: {
			            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
			        },
			        plotOptions: {
			            pie: {
			                allowPointSelect: true,
			                cursor: 'pointer',
			                dataLabels: {
			                    enabled: true,
			                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
			                    style: {
			                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
			                    }
			                }
			            }
			        },
			        series: [{
			            name: 'Ganancias por mes en el año',
			            colorByPoint: true,
			            data: [{
				                name: 'Enero',
				                y: total1,
				            }, {
				                name: 'Febrero',
				                y: total2
				            }, {
				                name: 'Marzo',
				                y: total3
				            }, {
				                name: 'Abril',
				                y: total4
				            }, {
				                name: 'Mayo',
				                y: total5
				            }, {
				                name: 'Junio',
				                y: total6
				            },{
				                name: 'Julio',
				                y: total7
				            }, {
				                name: 'Agosto',
				                y: total8
				            }, {
				                name: 'Septiembre',
				                y: total9
				            }, {
				                name: 'Octubre',
				                y: total10
				            }, {
				                name: 'Noviembre',
				                y: total11
				            }, {
				                name: 'Diciembre',
				                y: total12
				            }]
			        }]
			    })
			}
		</script>
	</head>
	<body>
		<script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://code.highcharts.com/highcharts-more.js"></script>
		<script src="https://code.highcharts.com/modules/exporting.js"></script>
		<div id="contendor">
			<?php
				include("aside.php");
			?>
			<div id="main">
				<?php
				    if($admin==true)
				    {
				    ?>
				    	<br><h1 align="center">Graficos</h1>
				    	<br><br>
				    	<center>
				    		Ingrese la Id: <input type="text" name="idi" id="idi" size="5"><br><br>
				    		Ingrese el año: <input type="text" id="anio" size="5"><br><br>
				    		<input type="button" name="boton" value="Generar grafico de barras" onclick="graficoBarra1(<?php echo $totalventas; ?>)">
				    		<input type="button" name="boton2" value="Generar grafico Pastel" onclick="graficoPastel1(<?php echo $totalventas1; ?>,<?php echo $totalventas2; ?>,<?php echo $totalventas3; ?>,<?php echo $totalventas4; ?>,<?php echo $totalventas5; ?>,<?php echo $totalventas6; ?>,<?php echo $totalventas7; ?>,<?php echo $totalventas8; ?>,<?php echo $totalventas9; ?>,<?php echo $totalventas10; ?>,<?php echo $totalventas11; ?>,<?php echo $totalventas12; ?>)">
				    		<input type="button" name="boton3" value="Generar grafico de barras 2" onclick="graficoBarra2(<?php echo $totaldinero; ?>)">
				    		<input type="button" name="boton4" value="Generar grafico Pastel 2" onclick="graficoPastel2(<?php echo $totalventasd1; ?>,<?php echo $totalventasd2; ?>,<?php echo $totalventasd3; ?>,<?php echo $totalventasd4; ?>,<?php echo $totalventasd5; ?>,<?php echo $totalventasd6; ?>,<?php echo $totalventasd7; ?>,<?php echo $totalventasd8; ?>,<?php echo $totalventasd9; ?>,<?php echo $totalventasd10; ?>,<?php echo $totalventasd11; ?>,<?php echo $totalventasd12; ?>)">
				    		<table>
					    		<td><div  id="container"></div></td>
					    		<td><div id="container2"></div></td>
					    		<tr>
					    			<td><div id="container3"></div></td>
					    			<td><div id="container4"></div></td>
					    		</tr>
					    	</table>
				    	</center>
					<?php
					}
					else {
						header('Location: index.php?err=2');
					}
			    ?>
			</div>
		</div>
	</body>
</html>