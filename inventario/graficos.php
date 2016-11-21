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

	//total de ventas por mes (Estas consultas sacan datos de las boletas, facturas y suma los datos del producto especificado)
	for ($i=0; $i < 12; $i++) { 
		$sqlb[$i] = "SELECT SUM(A.Cantidad) FROM articulob as A INNER JOIN boleta as B ON A.ID_Boleta = B.ID_Boleta WHERE ((B.Anulada=0 AND (year(B.Fecha_Emision)=2012))AND month(B.Fecha_Emision)=$i+1) AND A.ID_Inventario=24";
		$consultab[$i] = mysqli_query($connection,$sqlb[$i]);
		$resultadob = mysqli_fetch_array($consultab[$i]);

		$sqlf[$i] = "SELECT SUM(A.Cantidad) FROM articulov as A INNER JOIN factura as F ON A.ID_F = F.ID_Factura WHERE ((F.Anulada=0 AND (year(F.Fecha_Emision)=2012)) AND month(F.Fecha_Emision)=$i+1) AND A.ID_Inve=24";
		$consultaf[$i] = mysqli_query($connection,$sqlf[$i]);
		$resultadof = mysqli_fetch_array($consultaf[$i]);
		$totalventas1[$i] = $resultadob[0]+$resultadof[0];
	}
	//Ganancias por mes (Estas consultas sacan datos de las boletas, facturas y suma los datos del producto especificado)
	for ($i=0; $i < 12; $i++) { 
		$sqlbd[$i] = "SELECT SUM(A.Total_inventario) FROM articulob as A INNER JOIN boleta as B ON A.ID_Boleta = B.ID_Boleta WHERE ((B.Anulada=0 AND (year(B.Fecha_Emision)=2012))AND month(B.Fecha_Emision)=$i+1) AND A.ID_Inventario=24";
		$consultabd[$i] =mysqli_query($connection,$sqlbd[$i]);
		$resultadobd = mysqli_fetch_array($consultabd[$i]);

		$sqlfd[$i] = "SELECT SUM(A.Total_inventario) FROM articulov as A INNER JOIN factura as F ON A.ID_F = F.ID_Factura WHERE ((F.Anulada=0 AND (year(F.Fecha_Emision)=2012)) AND month(F.Fecha_Emision)=$i+1) AND A.ID_Inve=24";
		$consultafd[$i] =mysqli_query($connection,$sqlfd[$i]);
		$resultadofd = mysqli_fetch_array($consultafd[$i]);

		$totalventasd[$i] =$resultadobd[0]+$resultadofd[0];
	}
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
            	width: 350px;
            	min-height: 220px;
            	max-height: 400px;
            	/*margin: 0 auto;*/
            }
            #container2 {
            	width: 350px;
            	min-height: 220px;
            	max-height: 400px;
            	/*margin: 0 auto;*/
            }
            #container3 {
            	
            	
            	width: 350px;
            	min-height: 220px;
            	max-height: 400px;
            	/*margin: 0 auto;*/
            }
            #container4 {
            	width: 350px;
            	min-height: 220px;
            	max-height: 400px;
            	/*margin: 0 auto;*/
            }
            ${demo.css}
		</style>
		<script type="text/javascript">
			
			function main()
			{
				graficoBarra1(<?php echo $totalventas; ?>)

				graficoPastel1(<?php echo $totalventas1[0]; ?>,<?php echo $totalventas1[1]; ?>,<?php echo $totalventas1[2]; ?>,<?php echo $totalventas1[3]; ?>,<?php echo $totalventas1[4]; ?>,<?php echo $totalventas1[5]; ?>,<?php echo $totalventas1[6]; ?>,<?php echo $totalventas1[7]; ?>,<?php echo $totalventas1[8]; ?>,<?php echo $totalventas1[9]; ?>,<?php echo $totalventas1[10]; ?>,<?php echo $totalventas1[11]; ?>)

				graficoBarra2(<?php echo $totaldinero; ?>)

				graficoPastel2(<?php echo $totalventasd[0]; ?>,<?php echo $totalventasd[1]; ?>,<?php echo $totalventasd[2]; ?>,<?php echo $totalventasd[3]; ?>,<?php echo $totalventasd[4]; ?>,<?php echo $totalventasd[5]; ?>,<?php echo $totalventasd[6]; ?>,<?php echo $totalventasd[7]; ?>,<?php echo $totalventasd[8]; ?>,<?php echo $totalventasd[9]; ?>,<?php echo $totalventasd[10]; ?>,<?php echo $totalventasd[11]; ?>)
			}

            function graficoBarra1(resultado) {
            	//var resultado="<?php echo $totalventas; ?>"
                var chart = Highcharts.chart('container', {

                    title: {
                        text: 'Total de ventas del producto'
                    },

                    xAxis: {
                        categories: ['Ventas del producto']
                    },

                    series: [{
                    	name: 'Veces vendido el producto en el año',
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
			            name: 'Ventas totales en el mes',
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
			            name: 'Ganancias totales en el mes',
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
				    		
				    		<input type="button" name="boton" value="Generar graficos" onclick="main()">
				    		
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