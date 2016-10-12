<?php

include("constants.php");
      
class MySQLDB
{
   var $connection;         //The MySQL database connection          Coneccion a la base de datos MySQL
   var $num_active_users;   //Number of active users viewing site    Nro activo de usuarios viendo el sitio
   var $num_active_guests;  //Number of active guests viewing site   Nro activo de huespedes viendo el sitio 
   var $num_members;        //Number of signed-up users              Nro de usuarios con sesion iniciada
   /* Note: call getNumMembers() to access $num_members! */

   /* Class constructor */
   function MySQLDB(){
   
	  $this->connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME) or die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());

      /* HACER CONECCION CON BD */
	  /*
      $this->connection = mysql_connect(DB_SERVER, DB_USER, DB_PASS) or die(mysql_error());
      mysql_select_db(DB_NAME, $this->connection) or die(mysql_error());
      */
	  
      /** Solo consultas para averiguar nro de miembros
      cuando getNumMembers() es llamado por primera vez
      hasta entonces, ajustar por defecto el valor

       */
      $this->num_members = -1;
      
      if(TRACK_VISITORS){

         /* Calcular numero de usarios en el sitio
          */
         $this->calcNumActiveUsers();
      
         /* Calcular el nro de huespedes en el sitio   */
         $this->calcNumActiveGuests();
      }
   }

   /* FUNCION CONFIRMAR USUARI Y PASS:
  Chequear si se recibio
  el nombre de usuario en BD, si es asi comprobar si la
  contraseña dada es la misma en la base de datos para ese usuario.
  En caso contrario si el usuario no existe o si las contraseñas no coinciden
  retornar error de codigo (RETORNA 1 O 2). EL RETORNO 0 ES PARA CUANDO SON CORRECTOS
  PASS Y USER
    */

   function confirmUserPass($username, $password){
      /* AÑADIR slashes SI ES NECESARIO (for query) */
      if(!get_magic_quotes_gpc()) {
	      $username = addslashes($username);
      }

      /* VERIFICAR SI EL USUARIO ESTA EN LA BD */
      $q = "SELECT password FROM ".TBL_USERS." WHERE username = '$username'";
      $result = mysqli_query($this->connection, $q);
      if(!$result || (mysqli_num_rows($result) < 1)){
         return 1; // INDICAR FALLO EN USERNAME
      }

      /* Retrieve password from result, strip slashes */
      $dbarray = mysqli_fetch_array($result);
      $dbarray['password'] = stripslashes($dbarray['password']);
      $password = stripslashes($password);

      /* VALIDAR SI EL PASS ES CORRECTO      */
      if($password == $dbarray['password']){
         return 0; //EXTIO, EL USUARIO Y PASS ESTAN CONFIRMADOS
      }
      else{
         return 2; //INDICA FALLO EN PASS  
      }
   }
   
   /*
   FUNCION CONFIRMAR ID DE USUARIO:
   Chequea si el username dado
   esta en la BD, Si  es asi: comprobar si el userid es
   el mismo userid en la BD
   En caso de que el usuario no exista o el userid no coincide
   con el user id de la BD, retornar un error de codigo
   (RETURN 1 o 2), EL RETURN 0 ES PARA CUANDO EL CHEQUEO RESULTE EXITOSO
    */

   function confirmUserID($username, $userid){
      /* Add slashes if necessary (for query) */
      if(!get_magic_quotes_gpc()) {
	      $username = addslashes($username);
      }

      /* VERIFICAR ESE USER ESTA EN LA BD */
      $q = "SELECT userid FROM ".TBL_USERS." WHERE username = '$username'";
      $result = mysqli_query($this->connection, $q);
      if(!$result || (mysqli_num_rows($result) < 1)){
         return 1; //INDICAR FALLO EN USERNAME
      }

      /*  Retrieve userid from result, strip slashes */
      $dbarray = mysqli_fetch_array($result);
      $dbarray['userid'] = stripslashes($dbarray['userid']);
      $userid = stripslashes($userid);

      /* VALIDAR SI EL USER ID ES CORRECTO */
      if($userid == $dbarray['userid']){
         return 0; //EXITO  Username Y userid CONFIRMADO
      }
      else{
         return 2; //INDICAR USERID INVALIDO
      }
   }
   
   /*
    * FUNCION usernameTaken:
    * RETORNAR VERDADERO SI: EL USERNAME HA SIDO TOMADO YA POR OTRO USUARIO
    * RETORNAR FALSO: EN CASO CONTRARIO.
    */
   function usernameTaken($username){
      if(!get_magic_quotes_gpc()){
         $username = addslashes($username);
      }
      $q = "SELECT username FROM ".TBL_USERS." WHERE username = '$username'";
      $result = mysqli_query($this->connection, $q);
      return (mysqli_num_rows($result) > 0);
   }
   
   /**
    * FUNCION usernameBanned:
    * RETORNA VERDADERO SI EL USERNAME HA SIDO PROHIBIDO POR EL ADMIN
    */
   function usernameBanned($username){
      if(!get_magic_quotes_gpc()){
         $username = addslashes($username);
      }
      $q = "SELECT username FROM ".TBL_BANNED_USERS." WHERE username = '$username'";
      $result = mysqli_query($this->connection, $q);
      return (mysqli_num_rows($result) > 0);
   }
   
   /**
    * FUNCION AÑADIR NUEVO USUARIO:
    * INSERTA:
    * INFORMACION (username, password, email) EN BD
    * TIPO DE USUARIO (NIVEL) 
    * RETORNA VERDADERO SI FINALIZA CORRECTAMENTE, FALSO EN CASO CONTRARIO.
    */
   function addNewUser($username, $password, $email){
      $time = time();
      /*  If admin sign up, give admin user level */
      if(strcasecmp($username, ADMIN_NAME) == 0){
         $ulevel = ADMIN_LEVEL;
      }else{
         $ulevel = MASTER_LEVEL;
      }
      $q = "INSERT INTO ".TBL_USERS." VALUES ('$username', '$password', '0', $ulevel, '$email')";
      return mysqli_query($this->connection, $q);
   }
  
   
   //FUNCION AGREGAR NUEVO MIEMBRO:
   function addNewMember($username, $password, $email){
   
      $time = time();
      $ulevel = AGENT_MEMBER_LEVEL;
       $q = "INSERT INTO ".TBL_USERS." VALUES ('$username', '$password', '0', $ulevel, '$email')";
      return mysqli_query($this->connection, $q); 
   }
   
   /*
    * updateUserField - actualiza un campo especificado por parametro
    *Updates a field, specified by the field
    * parameter, in the user's row of the database.

    */
   function updateUserField($username, $field, $value){
      $q = "UPDATE ".TBL_USERS." SET ".$field." = '$value' WHERE username = '$username'";
      return mysqli_query($this->connection, $q);
   }
   
   /*
    * getUserInfo -
    * Retorna el array una consulta mysql solicitando toda la informacion
    almacenada en relacion con el nnombre de usuario entregado.
    Si la consulta falla se devuelve VACIO (NULL)

    *de Returns the result array from a mysql
    * query asking for all information stored regarding
    * the given username. If query fails, NULL is returned.
    */
   function getUserInfo($username){
      $q = "SELECT * FROM ".TBL_USERS." WHERE username = '$username'";
      $result = mysqli_query($this->connection, $q);
      /* Error occurred, return given name by default */
      if(!$result || (mysqli_num_rows($result) < 1)){
         return NULL;
      }
      /*  Return result array */
      $dbarray = mysqli_fetch_array($result);
      return $dbarray;
   }
   
      function getUserOnly($username){
      $q = "SELECT username FROM ".TBL_USERS." WHERE username = '$username'";
      $result = mysqli_query($this->connection, $q);
      /* Error occurred, return given name by default */
      if(!$result || (mysqli_num_rows($result) < 1)){
         return NULL;
      }
      /* Return result array */
      $dbarray = mysqli_fetch_array($result);
      return $dbarray;
   }
   
   /* FUNCION getNumMembers:
     Retorna el numero de usuarios con sesion iniciada en el sitio web
      Returns the number of signed-up users
    * of the website, banned members not included. The first
    * time the function is called on page load, the database
    * is queried, on subsequent calls, the stored result
    * is returned. This is to improve efficiency, effectively
    * not querying the database when no call is made.
    */
   function getNumMembers(){
      if($this->num_members < 0){
         $q = "SELECT * FROM ".TBL_USERS;
         $result = mysqli_query($this->connection, $q);
         $this->num_members = mysqli_num_rows($result);
      }
      return $this->num_members;
   }
   
   /**
    * calcNumActiveUsers - Finds out how many active users
    * are viewing site and sets class variable accordingly.
    */
   function calcNumActiveUsers(){
      /* Calculate number of users at site */
      $q = "SELECT * FROM ".TBL_ACTIVE_USERS;
      $result = mysqli_query($this->connection, $q);
      $this->num_active_users = mysqli_num_rows($result);
   }
   
   /**
    * calcNumActiveGuests - Finds out how many active guests
    * are viewing site and sets class variable accordingly.
    */
   function calcNumActiveGuests(){
      /* Calculate number of guests at site */
      $q = "SELECT * FROM ".TBL_ACTIVE_GUESTS;
      $result = mysqli_query($this->connection, $q);
      $this->num_active_guests = mysqli_num_rows($result);
   }
   
   /**
    * addActiveUser - Updates username's last active timestamp
    * in the database, and also adds him to the table of
    * active users, or updates timestamp if already there.
    */
   function addActiveUser($username, $time){
      $q = "UPDATE ".TBL_USERS." SET timestamp = '$time' WHERE username = '$username'";
      mysqli_query($this->connection, $q);
      
      if(!TRACK_VISITORS) return;
      $q = "REPLACE INTO ".TBL_ACTIVE_USERS." VALUES ('$username', '$time')";
      mysqli_query($this->connection, $q);
      $this->calcNumActiveUsers();
   }
   
   /* addActiveGuest - Adds guest to active guests table */
   function addActiveGuest($ip, $time){
      if(!TRACK_VISITORS) return;
      $q = "REPLACE INTO ".TBL_ACTIVE_GUESTS." VALUES ('$ip', '$time')";
      mysqli_query($this->connection, $q);
      $this->calcNumActiveGuests();
   }
   
   /* These functions are self explanatory, no need for comments */
   
   /* removeActiveUser */
   function removeActiveUser($username){
      if(!TRACK_VISITORS) return;
      $q = "DELETE FROM ".TBL_ACTIVE_USERS." WHERE username = '$username'";
      mysqli_query($this->connection, $q);
      $this->calcNumActiveUsers();
   }
   
   /* removeActiveGuest */
   function removeActiveGuest($ip){
      if(!TRACK_VISITORS) return;
      $q = "DELETE FROM ".TBL_ACTIVE_GUESTS." WHERE ip = '$ip'";
      mysqli_query($this->connection, $q);
      $this->calcNumActiveGuests();
   }
   
   /* removeInactiveUsers */
   function removeInactiveUsers(){
      if(!TRACK_VISITORS) return;
      $timeout = time()-USER_TIMEOUT*60;
      $q = "DELETE FROM ".TBL_ACTIVE_USERS." WHERE timestamp < $timeout";
      mysqli_query($this->connection, $q);
      $this->calcNumActiveUsers();
   }

   /* removeInactiveGuests */
   function removeInactiveGuests(){
      if(!TRACK_VISITORS) return;
      $timeout = time()-GUEST_TIMEOUT*60;
      $q = "DELETE FROM ".TBL_ACTIVE_GUESTS." WHERE timestamp < $timeout";
      mysqli_query($this->connection, $q);
      $this->calcNumActiveGuests();
   }
   
   /**
    * query - Performs the given query on the database and
    * returns the result, which may be false, true or a
    * resource identifier.
    */
   function query($query){
      return mysqli_query($this->connection, $query);
   }
};

/* Create database connection */
$database = new MySQLDB;

?>
