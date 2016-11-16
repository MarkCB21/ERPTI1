<!DOCTYPE html>
<html lang="es">
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="diseños/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
<div id="contendor">
<?php include("aside.php"); ?>
	<div id="main">
	  <?php if(($session->logged_in) or (!$session->isBan() )){ ?>
		<ul id="Botoon">
			<a href="boleta.php" id="Item1">
				<li class="menuP">
					<img src="diseños/iconos/boleta.png" height="100" width="100">
					<p class="LeBot">
						Boleta
					</p>
				</li>
			</a>
			<a href="factura.php" id="Item2">
				<li class="menuP">
					<img src="diseños/iconos/factura.png" height="100" width="100">
					<p class="LeBot">
						Factura
					</p>
				</li>
			</a>
			<a href="inventario.php" id="Item5">
				<li class="menuP" >
					<img src="diseños/iconos/inventario.png" height="100" width="100">
					<p class="LeBot">
						Inventario
					</p>
				</li>
			</a>
			<?php
              if($admin==true){
           ?>
			<a href="orden_de_compra.php" id="Item3">
				<li class="menuP" >
					<img src="diseños/iconos/Ocompra.png" height="100" width="100">
					<p class="LeBot">
						Orden de Compra
					</p>
				</li>
			</a>
			<a href="usuarios.php" id="Item4">
				<li class="menuP" >
					<img src="diseños/iconos/usuarios.png" height="100" width="100">
					<p class="LeBot">
						Usuarios
					</p>
				</li>
			</a>
			<a href="proveedores.php" id="Item6">
				<li class="menuP" >
					<img src="diseños/iconos/provedores.png" height="100" width="100">
					<p class="LeBot">
						Proveedores
					</p>
				</li>
			</a>
			<a href="graficos.php" id="Item5">
				<li class="menuP" >
					<img src="diseños/iconos/grafico.png" height="100" width="100">
					<p class="LeBot">
						Graficos
					</p>
				</li>
			</a>
			<?php
              }
            ?>
		</ul>
	 <?php
        }
		else if ($session->isBan){
			header('Location: baneado.php');
		}
		else {
			header('Location: index.php');
		}
     ?>
	</div>
</div>
</body>
</html>