<?php

include("include/classes/session.php");
?>

<html>
<title>Login Script</title>
<body>

<?php
/* comprueba el error de nombre de usuario */
$req_user = trim($_GET['user']);
if(!$req_user || strlen($req_user) == 0 ||
   !preg_match("/^([0-9a-z])+$/", $req_user) ||
   !$database->usernameTaken($req_user)){
   die("usuario no registrado");
}

/* Logged in user viewing own account */
if(strcmp($session->username,$req_user) == 0){
   echo "<h1>Mi Cuenta</h1>";
}
/* Visitor not viewing own account */
else{
   echo "<h1>User Info</h1>";
}

/* Display requested user information */
$req_user_info = $database->getUserInfo($req_user);

/* Usuario */
echo "<b>Usuario: ".$req_user_info['username']."</b><br>";

/* Email o correo electronico*/
echo "<b>Email:</b> ".$req_user_info['email']."<br>";

/**
 * Note: when you add your own fields to the users table
 * to hold more information, like homepage, location, etc.
 * they can be easily accessed by the user info array.
 *
 * $session->user_info['location']; (for logged in users)
 *
 * ..and for this page,
 *
 * $req_user_info['location']; (for any user)
 */

/* If logged in user viewing own account, give link to edit */
if(strcmp($session->username,$req_user) == 0){
   echo "<br><a href=\"useredit.php\">Editar informacion de la cuenta</a><br>";
}

/* devuelve a la paguina principal */
echo "<br>Volver al  [<a href=\"main.php\">inicio</a>]<br>";

?>

</body>
</html>
