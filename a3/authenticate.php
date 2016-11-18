<?php 
	require 'database-config.php';

	session_start();

	$username = "";
	$password = "";
	
	if(isset($_POST['username'])){
		$username = $_POST['username'];
	}
	if (isset($_POST['password'])) {
		$password = $_POST['password'];

	}
	
	echo $username ." : ".$password;

	$q = 'SELECT * FROM login_usuario WHERE Nombre_Cuenta=:username AND Contrasena=:password';

	$query = $dbh->prepare($q);

	$query->execute(array(':username' => $username, ':password' => $password));


	if($query->rowCount() == 0){
		header('Location: index.php?err=1');
	}else{

		$row = $query->fetch(PDO::FETCH_ASSOC);

		session_regenerate_id();
		$_SESSION['sess_user_id'] = $row['ID_L'];
		$_SESSION['sess_username'] = $row['Nombre_Cuenta'];
        $_SESSION['sess_userrole'] = $row['Tipo'];

        echo $_SESSION['sess_userrole'];
		session_write_close();

		if( $_SESSION['sess_userrole'] != 3){
			header('Location: inicio.php');
		}else if ( $_SESSION['sess_userrole'] == 3){
			header('Location: index.php?err=3');
		}
	
		
		
	}


?>