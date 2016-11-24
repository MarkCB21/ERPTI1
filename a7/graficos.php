<script src="js/validaciongraficos.js"></script>

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
				if(validacion()==true)
				{
					idi=document.getElementById('idi').value;
					fecha=document.getElementById('anio').value;
					<?php 
						$totalventas=0;
						$totaldinero=0;
						$totalventas1= array(0,0,0,0,0,0,0,0,0,0,0,0);
						$totalventasd= array(0,0,0,0,0,0,0,0,0,0,0,0);

	
						function consultas()
						{
							include "database_connection.php";
							$id="'<script>document.write(idi)</script>'";
							$anio="'<script>document.write(fecha)</script>'";

							// esta consulta saca la cantidad de veces que se vendió el producto en el año (saca lso datos de la tabla boletas)
							$sql = "SELECT SUM(A.Cantidad) FROM articulob as A INNER JOIN boleta as B ON A.ID_Boleta = B.ID_Boleta WHERE (B.Anulada=0 AND (year(B.Fecha_Emision)=$anio)) AND A.ID_Inventario=$id";
							$consulta =mysqli_query($connection,$sql) or die(mysqli_error($connection));
							$resultado = mysqli_fetch_array($consulta);
							// esta consulta saca la cantidad de veces que se vendió el producto en el año (saca lso datos de la tabla Facturas)
							$sql2 = "SELECT SUM(A.Cantidad) FROM articulov as A INNER JOIN factura as F ON A.ID_F = F.ID_Factura WHERE (F.Anulada=0 AND (year(F.Fecha_Emision)=$anio)) AND A.ID_Inve=$id";
							$consulta2 =mysqli_query($connection,$sql2) or die(mysqli_error($connection));
							$resultado2 = mysqli_fetch_array($consulta2);
							// esta variable une los datos extraidos de las boletas y de las facturas del producto
							$totalventas=$resultado[0]+$resultado2[0];
							$sql3 = "SELECT SUM(A.Total_inventario) FROM articulob as A INNER JOIN boleta as B ON A.ID_Boleta = B.ID_Boleta WHERE (B.Anulada=0 AND (year(B.Fecha_Emision)=$anio)) AND A.ID_Inventario=$id";
							$consulta3 =mysqli_query($connection,$sql3) or die(mysqli_error($connection));
							$resultado3 = mysqli_fetch_array($consulta3);
							$sql4 = "SELECT SUM(A.Total_inventario) FROM articulov as A INNER JOIN factura as F ON A.ID_F = F.ID_Factura WHERE (F.Anulada=0 AND (year(F.Fecha_Emision)=$anio)) AND A.ID_Inve=$id";
							$consulta4 =mysqli_query($connection,$sql4) or die(mysqli_error($connection));
							$resultado4 = mysqli_fetch_array($consulta4);
							$totaldinero=$resultado3[0]+$resultado4[0];

							//total de ventas por mes (Estas consultas sacan datos de las boletas, facturas y suma los datos del producto especificado)
							for ($i=0; $i < 12; $i++) { 
								$sqlb[$i] = "SELECT SUM(A.Cantidad) FROM articulob as A INNER JOIN boleta as B ON A.ID_Boleta = B.ID_Boleta WHERE ((B.Anulada=0 AND (year(B.Fecha_Emision)=$anio))AND month(B.Fecha_Emision)=$i+1) AND A.ID_Inventario=$id";
								$consultab[$i] = mysqli_query($connection,$sqlb[$i]) or die(mysqli_error($connection));
								$resultadob = mysqli_fetch_array($consultab[$i]);

								$sqlf[$i] = "SELECT SUM(A.Cantidad) FROM articulov as A INNER JOIN factura as F ON A.ID_F = F.ID_Factura WHERE ((F.Anulada=0 AND (year(F.Fecha_Emision)=$anio)) AND month(F.Fecha_Emision)=$i+1) AND A.ID_Inve=$id";
								$consultaf[$i] = mysqli_query($connection,$sqlf[$i]) or die(mysqli_error($connection));
								$resultadof = mysqli_fetch_array($consultaf[$i]);
								$totalventas1[$i] = $resultadob[0]+$resultadof[0];
							}
							//Ganancias por mes (Estas consultas sacan datos de las boletas, facturas y suma los datos del producto especificado)
							for ($i=0; $i < 12; $i++) { 
								$sqlbd[$i] = "SELECT SUM(A.Total_inventario) FROM articulob as A INNER JOIN boleta as B ON A.ID_Boleta = B.ID_Boleta WHERE ((B.Anulada=0 AND (year(B.Fecha_Emision)=$anio))AND month(B.Fecha_Emision)=$i+1) AND A.ID_Inventario=$id";
								$consultabd[$i] =mysqli_query($connection,$sqlbd[$i]) or die(mysqli_error($connection));
								$resultadobd = mysqli_fetch_array($consultabd[$i]);

								$sqlfd[$i] = "SELECT SUM(A.Total_inventario) FROM articulov as A INNER JOIN factura as F ON A.ID_F = F.ID_Factura WHERE ((F.Anulada=0 AND (year(F.Fecha_Emision)=$anio)) AND month(F.Fecha_Emision)=$i+1) AND A.ID_Inve=$id";
								$consultafd[$i] =mysqli_query($connection,$sqlfd[$i]) or die(mysqli_error($connection));
								$resultadofd = mysqli_fetch_array($consultafd[$i]);

								$totalventasd[$i] =$resultadobd[0]+$resultadofd[0];
							}
							/*$aParametrost[0]=$totalventas;
							$aParametrost[1]=$totaldinero;
							for ($i=2; $i < 14; $i++) { 
								$aParametrost[$i]=$totalventas1[$i-2];
							}
							for ($i=14; $i < 26 ; $i++) { 
								$aParametrost[$i]=$totalventasd[$i-14];
							}*/

							
						}


						consultas();
					?>

					var a=Math.floor((Math.random() * 50))
					var b=Math.floor((Math.random() * 1000000))
					var c=[]
					var d=[]
					for (i=0;i<12;i++)
					{
						c[i]=Math.floor((Math.random() * 50))
					}
					for (i=0;i<12;i++)
					{
						d[i]=Math.floor((Math.random() * 200000))
					}

					graficoBarra1(a)

					graficoPastel1(c[0],c[1],c[2],c[3],c[4],c[5],c[6],c[7],c[8],c[9],c[10],c[11])

					graficoBarra2(b)

					graficoPastel2(d[0],d[1],d[2],d[3],d[4],d[5],d[6],d[7],d[8],d[9],d[10],d[11])
					/*graficoBarra1(<?php echo $totalventas; ?>)

					graficoPastel1(<?php echo $totalventas1[0]; ?>,<?php echo $totalventas1[1]; ?>,<?php echo $totalventas1[2]; ?>,<?php echo $totalventas1[3]; ?>,<?php echo $totalventas1[4]; ?>,<?php echo $totalventas1[5]; ?>,<?php echo $totalventas1[6]; ?>,<?php echo $totalventas1[7]; ?>,<?php echo $totalventas1[8]; ?>,<?php echo $totalventas1[9]; ?>,<?php echo $totalventas1[10]; ?>,<?php echo $totalventas1[11]; ?>)

					graficoBarra2(<?php echo $totaldinero; ?>)

					graficoPastel2(<?php echo $totalventasd[0]; ?>,<?php echo $totalventasd[1]; ?>,<?php echo $totalventasd[2]; ?>,<?php echo $totalventasd[3]; ?>,<?php echo $totalventasd[4]; ?>,<?php echo $totalventasd[5]; ?>,<?php echo $totalventasd[6]; ?>,<?php echo $totalventasd[7]; ?>,<?php echo $totalventasd[8]; ?>,<?php echo $totalventasd[9]; ?>,<?php echo $totalventasd[10]; ?>,<?php echo $totalventasd[11]; ?>)*/

				}
				
			}

            function graficoBarra1(resultado) {
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
				    		<div id="error1" style="font-size:15pt;color:#FF0000;"></div>
				    		Ingrese el año: <input type="text" name="anio" id="anio" size="5"><br><br>
				    		<div id="error2" style="font-size:15pt;color:#FF0000;"></div>
				    		
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
				    	<div id="hola"></div>
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