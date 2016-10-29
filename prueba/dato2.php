<html>
<body>
	<h1>BUSCAR ALUMNO</h1>
	<form action="dato2.php">
		CODIGO ALUMNO:
		<input type="text" name="codigo" size=3>
		<input type="submit" name="buscar" value="Buscar">
		</form>
	<?php
	if(isset($_REQUEST["codigo"])) {
		$conexion = mysql_pconnect("localhost", "root", "");
		mysql_select_db("erp-1");
		$username = $_GET["username"];
		$sql = "SELECT * from login_usuarios WHERE username='".$username."'";

	$consulta = mysql_query($sql, $conexion);
	$nfilas = mysql_num_rows($consulta);

	if($nfilas>0) {
		$registro = mysql_fetch_array($consulta);
		$username = $registro["username"];
		$userlevel = $registro["userlevel"];
		$caralu = $registro["ID_D"];
		echo "
		<form action='dato2.php'>
			<table border=1>
			<tr>
				<td>usuario </td>
				<td>nivel </td>
				<td>ID_D</td>
			</tr>
			<tr>
				<td>
					<input type='hidden' name='username' value='$username' onClick='this.select()'>
				</td>
				<td>
					<input type='text' name='userlevel' value='$userlevel' onClick='this.select()'>
				</td>
				<td>
					<input type='text' name='ID_D' value='$ID_D' onClick='this.select()'>
				</td>
			</tr>
			</table>
			<input type='submit' name='accion' value='BORRAR'>
			<input type='submit' name='accion' value='MODIFICAR'>
		</form>
		";
	}
	mysql_close($conexion);
 }

 if(isset($_REQUEST['accion'])) {
	$conexion = mysqli_connect("localhost", "root", "", "erp-1");
	$accion = $_GET['accion'];
	$username = $_GET['username'];
	$userlevel = $_GET['userlevel'];
	$caralu = $_GET['ID_D'];
	if($accion=="BORRAR") {
		$sql = "DELETE FROM login_usuarios WHERE username={$username}";
	}
	if($accion=="MODIFICAR") {
		$sql= "UPDATE login_usuarios SET userlevel='{$userlevel}', userlevel='{$userlevel}'";
	}
	if (mysqli_query($conexion, $sql)) echo "accion realizada";
	else echo "Error!, accion NO realizada";
	mysqli_close($conexion);
 }
?>
</body>
</html>
