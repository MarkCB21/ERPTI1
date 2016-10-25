<?php
	include("include/classes/UTF-8.php");
	include("include/classes/session.php");
?>
<html>
	<title>Información de usuario</title>
<body>
<?php
	/* comprueba el error de nombre de usuario */
	$req_user = trim($_GET['user']);
	if(!$req_user || strlen($req_user) == 0 ||
		!preg_match("/^([0-9a-z])+$/", $req_user) ||
		!$database->usernameTaken($req_user)){
		header( "refresh:0; url=index.php" );
		die("usuario no registrado");
	}

/* Logged in user viewing own account */
if(strcmp($session->username,$req_user) == 0){
   echo "<h1>Mi Cuenta</h1>";
}
/* informacion del usuario */
else{
   echo "<h1>Información de usuario</h1>";
}

/* solicitar informacion del usuario */
$req_user_info = $database->getUserInfo($req_user);

/* Usuario */
echo "<b>Usuario: ".$req_user_info['username']."</b><br>";

/* Email o correo electronico*/
echo "<b>Email:</b> ".$req_user_info['email']."<br>";


if(strcmp($session->username,$req_user) == 0){
   echo "<br>[<a href=\"useredit.php\">Editar informacion de la cuenta</a>]<br>";
}

/* devuelve a la paguina principal */
echo "<br>[<a href=\"index.php\">inicio</a>]<br>";

?>

</body>
</html>
