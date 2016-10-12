<?php

include("database.php");
include("mailer.php");
include("form.php");

class Session
{
   var $username;            //nombre de usuario
   var $userid;              //valor aleatorio generado en el inicio de sesion actual 
   var $userlevel;           //nivel al que corresponde el usuario
   var $time;                //tiempo que el usuario aestado en la pag 
   var $logged_in;           //verdadero si el usuario esta conectado, falso si no
   var $userinfo = array();  //arreglo que contiene toda la informacion del usuario
   var $url;                 //url de la pag que se esta viendo actualmente
   var $referrer;            //ultima pag vista
   /**
    * Nota: Sólo se considerara la referencia de pagina real
    * en process.php, en cualquier otro momento que no sea exacta.
    */

   /* clase constructor */
   function Session(){
      $this->time = time();
      $this->startSession();
   }

   /**
    * StartSession - Lleva a cabo todas las acciones
    * necesarias para iniciar sesion.
    * Trata de determinar si el usuario ha iniciado
    * sesion, y establece las variables necesarias. 
    * Tambien se aprovecha de esta carga de la pagina
    * para actualizar las tablas de visitantes activos.
    */
   function startSession(){
      global $database;  //La conexion a la base de datos
      session_start();   //Dice a PHP para iniciar la sesion

      /* Determina si el usuario esta logeado */
      $this->logged_in = $this->checkLogin();

      /**
       * Valor de invitados a los usuarios
       * no registrados, y actualizacion de tabla de
       * clientes activos en consecuencia.
       */
      if(!$this->logged_in){
         $this->username = $_SESSION['username'] = GUEST_NAME;
         $this->userlevel = GUEST_LEVEL;
         $database->addActiveGuest($_SERVER['REMOTE_ADDR'], $this->time);
      }
      /* Actualiza usuarios activos actualmente */
      else{
         $database->addActiveUser($this->username, $this->time);
      }
      
      /* Retira los visitantes inactivos de la base de datos */
      $database->removeInactiveUsers();
      $database->removeInactiveGuests();
      
      /* La pagina de conjunto de referencia */
      if(isset($_SESSION['url'])){
         $this->referrer = $_SESSION['url'];
      }else{
         $this->referrer = "/";
      }

      /* Establece URL actual */
      $this->url = $_SESSION['url'] = $_SERVER['PHP_SELF'];
   }

   /**
    * checkLogin - Comprueba si el usuario ya ha iniciado una sesion
    * previamente, y si ya se ha establecido una sesión con el usuario.
    * Tambien comprueba si el usuario ha "recordado". Si es asi, la base
    * de datos se consulta para asegurarse de la autenticidad del usuario.
    * Devuelve true (Verdadero) si el usuario ha iniciado sesion.
    */
   function checkLogin(){
      global $database;  //La conexion a la base de datos
      /* Comprueba si el usuario se ha "recordado" */
      if(isset($_COOKIE['cookname']) && isset($_COOKIE['cookid'])){
         $this->username = $_SESSION['username'] = $_COOKIE['cookname'];
         $this->userid   = $_SESSION['userid']   = $_COOKIE['cookid'];
      }

      /* Verifica si el Nombre de usuario y la ID de usuario se han establecido y no es invitado */
      if(isset($_SESSION['username']) && isset($_SESSION['userid']) &&
         $_SESSION['username'] != GUEST_NAME){
         /* confirma que el nombre y la id son validas */
         if($database->confirmUserID($_SESSION['username'], $_SESSION['userid']) != 0){
            /* Si las variables son incorrectas, el usuario no esta logeado */
            unset($_SESSION['username']);
            unset($_SESSION['userid']);
            return false;
         }

         /* El usuario esta logeado, establese clase y variables */
         $this->userinfo  = $database->getUserInfo($_SESSION['username']);
         $this->username  = $this->userinfo['username'];
         $this->userid    = $this->userinfo['userid'];
         $this->userlevel = $this->userinfo['userlevel'];
         $_SESSION['userlevel']=$this->userlevel;
         return true;
      }
      /* Usuario no logeado */
      else{
         return false;
      }
   }

   /**
    * Login - El usuario ha enviado su nombre de usuario y contraseña
    * a través del formulario de acceso, esta funcion verifica
    * la autenticidad de esa informacion en la base de datos y
    * crea la sesion. Efectivamente la tala en el usuario, si todo va bien.
    */
   function login($subuser, $subpass, $subremember){
      global $database, $form;  //La base de datos y el formulario

      /* Comprueba errores de nombre de usuario */
      $field = "user";  //usa el nombre del campo de nombre de usuario
      if(!$subuser || strlen($subuser = trim($subuser)) == 0){
         $form->setError($field, "* Usuario no encontrado");
      }
      else{
         /* Comprueba que el nombre de usuario no sea alfanumerico */
         if(!preg_match("/^([0-9a-z])*$/", $subuser)){
            $form->setError($field, "* nombre de usuario no alfanumerico");
         }
      }

      /* Comprueba errores de contraseña */
      $field = "pass";  //Usa el nombre del campo de contraseña
      if(!$subpass){
         $form->setError($field, "* contraseña no ingresada");
      }
      
      /* Vuelve si existen errores de formulario */
      if($form->num_errors > 0){
         return false;
      }

      /* Comprueba que el nombre de usuario y la contraseña esten en la base de datos y esten correctos */
      $subuser = stripslashes($subuser);
      $result = $database->confirmUserPass($subuser, md5($subpass));

      /* Comprueba errores de codigo */
      if($result == 1){
         $field = "user";
         $form->setError($field, "* Usuario no encontrado");
      }
      else if($result == 2){
         $field = "pass";
         $form->setError($field, "* contraseña invalida");
      }
      
      /* Vuelve si existen errores de formulario */
      if($form->num_errors > 0){
         return false;
      }

      /* Nombre de usuario y contraseña correctos, registra variables de secion */
      $this->userinfo  = $database->getUserInfo($subuser);
      $this->username  = $_SESSION['username'] = $this->userinfo['username'];
      $this->userid    = $_SESSION['userid']   = $this->generateRandID();
      $this->userlevel = $this->userinfo['userlevel'];
      
      /* inserta id de usuario en la base de datos y actualiza la tabla de usuarios activos */
      $database->updateUserField($this->username, "userid", $this->userid);
      $database->addActiveUser($this->username, $this->time);
      $database->removeActiveGuest($_SERVER['REMOTE_ADDR']);

      /**
       * El usuario ha solicitado que recordemos que ha iniciado la sesion,
       * por lo que establecer dos cookies. Una para sujetar su nombre de usuario
       * y una para sujetar a su valor de identificador de usuario al azar. De que
       * caduque el tiempo especificado en constants.php. Ahora, la proxima vez que
       * viene a nuestro sitio, lo vamos a conectarse de forma automatica,
       * pero solo si el no cerrar la sesion antes de marcharse.
       */
      if($subremember){
         setcookie("cookname", $this->username, time()+COOKIE_EXPIRE, COOKIE_PATH);
         setcookie("cookid",   $this->userid,   time()+COOKIE_EXPIRE, COOKIE_PATH);
      }

      /* Inicio de secion hecho satisfactoriamente */
      return true;
   }

   /**
    * logout - Se llama cuando el usuario quiere estar desconectado
    * de la pagina web. Borra todas las cookies que se quedaran almacenadas
    * en el ordenador del usuario como resultado de lo que quiera ser recordado,
    * y tambien lo elimina variables de sesion y degrada su nivel de usuario invitado.
    */
   function logout(){
      global $database;  //La conexion a la base de datos
      /**
       * Delete cookies - si el tiempo limite ya pasado, niega lo que ha añadido al crear la cookie.
       */
      if(isset($_COOKIE['cookname']) && isset($_COOKIE['cookid'])){
         setcookie("cookname", "", time()-COOKIE_EXPIRE, COOKIE_PATH);
         setcookie("cookid",   "", time()-COOKIE_EXPIRE, COOKIE_PATH);
      }

      /* Elimina variables de sesion */
      unset($_SESSION['username']);
      unset($_SESSION['userid']);

      /* establece que el usuario ha cerrado la sesion */
      $this->logged_in = false;
      
      /**
       * Sacar de la tabla usuarios activos y
       * añadir a las tablas huespedes activos.
       */
      $database->removeActiveUser($this->username);
      $database->addActiveGuest($_SERVER['REMOTE_ADDR'], $this->time);
      
      /* Ajusta el nivel de usuario de alojamiento */
      $this->username  = GUEST_NAME;
      $this->userlevel = GUEST_LEVEL;
   }

   /**
    * se llama cuando el usuario acaba de presentar el formulario de registro.
    * Determina si hubo algún error con los campos de entrada, si es así, registra
    * los errores y devuelve 1. Si no se encuentran errores, se registra el nuevo usuario
    * y devuelve 0. devuelve 2 si el registro ha fallado.
    */
   function register($subuser, $subpass, $subemail){
      global $database, $form, $mailer;  //La base de datos, el formulario y el objeto mailer
      
      /* comprueba errores de nombre de usuario */
      $field = "user";  //usa el nombre del campo de nombre de usuario
      if(!$subuser || strlen($subuser = trim($subuser)) == 0){
         $form->setError($field, "* Usuario no encontrado");
      }
      else{
         /* Arregla nombre de usuario, mirar duración */
         $subuser = stripslashes($subuser);
         if(strlen($subuser) < 5){
            $form->setError($field, "* Username below 5 characters");
         }
         else if(strlen($subuser) > 30){
            $form->setError($field, "* Username above 30 characters");
         }
         /* Confirma que el nombre de usuario no sea alfanumerico */
         else if(!preg_match("/^([0-9a-z_])+$/", $subuser)){
            $form->setError($field, "* Username not alphanumeric");
         }
         /* confirma que el nombre de usuario haya sido reservado */
         else if(strcasecmp($subuser, GUEST_NAME) == 0){
            $form->setError($field, "* Username reserved word");
         }
         /* confirma si el nombre de usuario esta en uso */
         else if($database->usernameTaken($subuser)){
            $form->setError($field, "* Username already in use");
         }
         /* Confirma que el usuario no este banneado */
         else if($database->usernameBanned($subuser)){
            $form->setError($field, "* usuario baneado");
         }
      }

      /* comprueba errores de contraseña */
      $field = "pass";  //Usa el nombre del campo de contraseña
      if(!$subpass){
         $form->setError($field, "* Contraseña invalida");
      }
      else{
         /* Arregla la contraseña, mirar duración*/
         $subpass = stripslashes($subpass);
         if(strlen($subpass) < 4){
            $form->setError($field, "* contraseña muy corta");
         }
         /* comprueba que la contraseña no sea alfanumerica */
         else if(!preg_match("/^([0-9a-z])+$/", ($subpass = trim($subpass)))){
            $form->setError($field, "* contraseña no alfanumerica");
         }
         /**
          * Nota: He recortado la contraseña sólo después de que haya comprobado la longitud
          * ya que si se llena el campo de la contraseña con espacios que parece
          * mucho más caracteres de 4, por lo que parece un poco estúpido reportar "contraseña demasiado corta".
          */
      }
      
      /* comprueba errores de correo electronico */
      $field = "email";  //Usa el nombre del campo de email
      if(!$subemail || strlen($subemail = trim($subemail)) == 0){
         $form->setError($field, "* Email no ingresado");
      }
      else{
         /* comprueba que sea una direccion de correo electronico valida */
         $regex = "/^[_+a-z0-9-]+(\.[_+a-z0-9-]+)*"
                 ."@[a-z0-9-]+(\.[a-z0-9-]{1,})*"
                 ."\.([a-z]{2,}){1}$/";
         if(!preg_match($regex,$subemail)){
            $form->setError($field, "* Email invalido");
         }
         $subemail = stripslashes($subemail);
      }

      /* si existen errores los corrige el usuario */
      if($form->num_errors > 0){
         return 1;  //Errors with form
      }
      /* Si no hay errores, agregue la nueva cuenta a la base de datos*/
      else{
         if($database->addNewUser($subuser, md5($subpass), $subemail)){
            if(EMAIL_WELCOME){
               $mailer->sendWelcome($subuser,$subemail,$subpass);
            }
            return 0;  //Nuevo usuario agregado con exito
         }else{
            return 2;  //intento de registro fallido
         }
      }
   }
   
    function SessionMasterRegister($subuser, $subpass, $subemail){
	  
	  global $database, $form, $mailer;  //La base de datos, el formulario y el objeto meiler
      
      /* comprobando errores de nombre de usuario */
      $field = "user";  //usa el nombre del campo nombre de usuario
      if(!$subuser || strlen($subuser = trim($subuser)) == 0){
         $form->setError($field, "* Username not entered");
      }
      else{
         /* Arregla nombre de usuario, mirar duración */
         $subuser = stripslashes($subuser);
         if(strlen($subuser) < 5){
            $form->setError($field, "* Username below 5 characters");
         }
         else if(strlen($subuser) > 30){
            $form->setError($field, "* Username above 30 characters");
         }
         /* Comprueba que el nombre de usuario no sea alfanumerico */
         else if(!preg_match("/^([0-9a-z])+$/", $subuser)){
            $form->setError($field, "* Username not alphanumeric");
         }
         /* comprueba que el nombre de usuario este reservado */
         else if(strcasecmp($subuser, GUEST_NAME) == 0){
            $form->setError($field, "* Username reserved word");
         }
         /* comprueba que el nombre de usuario no este registrado */
         else if($database->usernameTaken($subuser)){
            $form->setError($field, "* Username already in use");
         }
         /* Check if username is banned */
         else if($database->usernameBanned($subuser)){
            $form->setError($field, "* Username banned");
         }
      }

      /* Password error checking */
      $field = "pass";  //Use field name for password
      if(!$subpass){
         $form->setError($field, "* Password not entered");
      }
      else{
         /* Spruce up password and check length*/
         $subpass = stripslashes($subpass);
         if(strlen($subpass) < 4){
            $form->setError($field, "* Password too short");
         }
         /* Check if password is not alphanumeric */
         else if(!preg_match("/^([0-9a-z])+$/", ($subpass = trim($subpass)))){
            $form->setError($field, "* Password not alphanumeric");
         }
         /**
          * Nota: He recortado la contraseña sólo después de que haya comprobado la longitud
          * ya que si se llena el campo de la contraseña con espacios que parece
          * mucho más caracteres de 4, por lo que parece un poco estúpido reportar "contraseña demasiado corta".
          */
      }
      
      /* comprueba errores de correo electronico */
      $field = "email";  //usa el campo email
      if(!$subemail || strlen($subemail = trim($subemail)) == 0){
         $form->setError($field, "* Email not entered");
      }
      else{
         /* comprueba si es un email valido */
         $regex = "/^[_+a-z0-9-]+(\.[_+a-z0-9-]+)*"
                 ."@[a-z0-9-]+(\.[a-z0-9-]{1,})*"
                 ."\.([a-z]{2,}){1}$/";
         if(!preg_match($regex,$subemail)){
            $form->setError($field, "* Email invalid");
         }
         $subemail = stripslashes($subemail);
      }

      /* si existen errores los corrige el usuario */
      if($form->num_errors > 0){
         return 1;  //Errors with form
      }
      /* Si no hay errores, agregue la nueva cuenta a la base de datos */
      else{
	  //THE NAME OF THE CURRENT USER THE PARENT...
	  $parent = $this->username;
         if($database->addNewMaster($subuser, md5($subpass), $subemail, $parent)){
            if(EMAIL_WELCOME){
               $mailer->sendWelcome($subuser,$subemail,$subpass);
            }
            return 0;  //nuevo usuario agregado con exito
         }else{
            return 2;  //intento de registro fallido
         }
      }
   }
   
   
  function SessionMemberRegister($subuser, $subpass, $subemail){
	  
	  global $database, $form, $mailer;  //La base de datos, el formulario y el objeto mailer
      
      /* comprueba errores de nombre de usuario */
      $field = "user";  //Usa el nombre del campo username
      if(!$subuser || strlen($subuser = trim($subuser)) == 0){
         $form->setError($field, "* Username not entered");
      }
      else{
         /* Arregla nombre de usuario, mirar duración */
         $subuser = stripslashes($subuser);
         if(strlen($subuser) < 5){
            $form->setError($field, "* Username below 5 characters");
         }
         else if(strlen($subuser) > 30){
            $form->setError($field, "* Username above 30 characters");
         }
         /* Comprueba que el nombre de usuario no sea alfanumerico */
         else if(!preg_match("/^([0-9a-z])+$/", $subuser)){
            $form->setError($field, "* Username not alphanumeric");
         }
         /* verifica si el username esta reservado */
         else if(strcasecmp($subuser, GUEST_NAME) == 0){
            $form->setError($field, "* Username reserved word");
         }
         /* comprueba que el nombre de usuario no este utilizado */
         else if($database->usernameTaken($subuser)){
            $form->setError($field, "* Username already in use");
         }
         /* verifica si el nombre de usuario esta banneado */
         else if($database->usernameBanned($subuser)){
            $form->setError($field, "* Username banned");
         }
      }

      /* Comprueba errores de contraseña */
      $field = "pass";  //Usa el campo contraseña
      if(!$subpass){
         $form->setError($field, "* Password not entered");
      }
      else{
         /* Arregla la contraseña, mirar duración*/
         $subpass = stripslashes($subpass);
         if(strlen($subpass) < 4){
            $form->setError($field, "* Password too short");
         }
         /* comprueba que la contraseña no sea alfanumerica */
         else if(!preg_match("/^([0-9a-z])+$/", ($subpass = trim($subpass)))){
            $form->setError($field, "* Password not alphanumeric");
         }
         /**
          * Note: I trimmed the password only after I checked the length
          * because if you fill the password field up with spaces
          * it looks like a lot more characters than 4, so it looks
          * kind of stupid to report "password too short".
          */
      }
      
      /* Email error checking */
      $field = "email";  //Use field name for email
      if(!$subemail || strlen($subemail = trim($subemail)) == 0){
         $form->setError($field, "* Email not entered");
      }
      else{
         /* Check if valid email address */
         $regex = "/^[_+a-z0-9-]+(\.[_+a-z0-9-]+)*"
                 ."@[a-z0-9-]+(\.[a-z0-9-]{1,})*"
                 ."\.([a-z]{2,}){1}$/";
         if(!preg_match($regex,$subemail)){
            $form->setError($field, "* Email invalid");
         }
         $subemail = stripslashes($subemail);
      }

      /* Errors exist, have user correct them */
      if($form->num_errors > 0){
         return 1;  //Errors with form
      }
      /* No errors, add the new account to the */
      else{
	  //THE NAME OF THE CURRENT USER THE PARENT...
	  $parent = $this->username;
         if($database->addNewMember($subuser, md5($subpass), $subemail, $parent)){
            if(EMAIL_WELCOME){
               $mailer->sendWelcome($subuser,$subemail,$subpass);
            }
            return 0;  //New user added succesfully
         }else{
            return 2;  //Registration attempt failed
         }
      }
   }
   
   
   function SessionAgentRegister($subuser, $subpass, $subemail){
	  
	  global $database, $form, $mailer;  //The database, form and mailer object
      
      /* Username error checking */
      $field = "user";  //Use field name for username
      if(!$subuser || strlen($subuser = trim($subuser)) == 0){
         $form->setError($field, "* Username not entered");
      }
      else{
         /* Spruce up username, check length */
         $subuser = stripslashes($subuser);
         if(strlen($subuser) < 5){
            $form->setError($field, "* Username below 5 characters");
         }
         else if(strlen($subuser) > 30){
            $form->setError($field, "* Username above 30 characters");
         }
         /* Check if username is not alphanumeric */
         else if(!preg_match("/^([0-9a-z])+$/", $subuser)){
            $form->setError($field, "* Username not alphanumeric");
         }
         /* Check if username is reserved */
         else if(strcasecmp($subuser, GUEST_NAME) == 0){
            $form->setError($field, "* Username reserved word");
         }
         /* Check if username is already in use */
         else if($database->usernameTaken($subuser)){
            $form->setError($field, "* Username already in use");
         }
         /* Check if username is banned */
         else if($database->usernameBanned($subuser)){
            $form->setError($field, "* Username banned");
         }
      }

      /* Password error checking */
      $field = "pass";  //Use field name for password
      if(!$subpass){
         $form->setError($field, "* Password not entered");
      }
      else{
         /* Spruce up password and check length*/
         $subpass = stripslashes($subpass);
         if(strlen($subpass) < 4){
            $form->setError($field, "* Password too short");
         }
         /* Check if password is not alphanumeric */
         else if(!preg_match("/^([0-9a-z])+$/", ($subpass = trim($subpass)))){
            $form->setError($field, "* Password not alphanumeric");
         }
         /**
          * Note: I trimmed the password only after I checked the length
          * because if you fill the password field up with spaces
          * it looks like a lot more characters than 4, so it looks
          * kind of stupid to report "password too short".
          */
      }
      
      /* Email error checking */
      $field = "email";  //Use field name for email
      if(!$subemail || strlen($subemail = trim($subemail)) == 0){
         $form->setError($field, "* Email not entered");
      }
      else{
         /* Check if valid email address */
         $regex = "/^[_+a-z0-9-]+(\.[_+a-z0-9-]+)*"
                 ."@[a-z0-9-]+(\.[a-z0-9-]{1,})*"
                 ."\.([a-z]{2,}){1}$/";
         if(!preg_match($regex,$subemail)){
            $form->setError($field, "* Email invalid");
         }
         $subemail = stripslashes($subemail);
      }

      /* Errors exist, have user correct them */
      if($form->num_errors > 0){
         return 1;  //Errors with form
      }
      /* No errors, add the new account to the */
      else{
	  //THE NAME OF THE CURRENT USER THE PARENT...
	  $parent = $this->username;
         if($database->addNewAgent($subuser, md5($subpass), $subemail, $parent)){
            if(EMAIL_WELCOME){
               $mailer->sendWelcome($subuser,$subemail,$subpass);
            }
            return 0;  //New user added succesfully
         }else{
            return 2;  //Registration attempt failed
         }
      }
   }
   /**
    * editAccount - Attempts to edit the user's account information
    * including the password, which it first makes sure is correct
    * if entered, if so and the new password is in the right
    * format, the change is made. All other fields are changed
    * automatically.
    */
   function editAccount($subcurpass, $subnewpass, $subemail){
      global $database, $form;  //La base de datos y el formulario
      /* Nueva contraseña introducida */
      if($subnewpass){
         /* Comprueba errores de la contraseña actual */
         $field = "curpass";  //usa el campo con nombre curpass
         if(!$subcurpass){
            $form->setError($field, "* Current Password not entered");
         }
         else{
            /* comprueba que la contraseña no sea alfanumerica */
            $subcurpass = stripslashes($subcurpass);
            if(strlen($subcurpass) < 4 ||
               !preg_match("/^([0-9a-z])+$/", ($subcurpass = trim($subcurpass)))){
               $form->setError($field, "* Current Password incorrect");
            }
            /* la contraseña ingresada es incorrecta */
            if($database->confirmUserPass($this->username,md5($subcurpass)) != 0){
               $form->setError($field, "* Current Password incorrect");
            }
         }
         
         /* comprueba errores de la nueva contraseña */
         $field = "newpass";  //usa el campo de nombre newpass
         /* Arregla contraseña, y marca la longitud*/
         $subpass = stripslashes($subnewpass);
         if(strlen($subnewpass) < 4){
            $form->setError($field, "* New Password too short");
         }
         /* Comprueba que la cotraseña no sea alfanumerica */
         else if(!preg_match("/^([0-9a-z])+$/", ($subnewpass = trim($subnewpass)))){
            $form->setError($field, "* New Password not alphanumeric");
         }
      }
      /* intento de cambio de contraseña */
      else if($subcurpass){
         /* Nuevo informe de errores de contraseña */
         $field = "newpass";  //Usa el campo con nombre newpass
         $form->setError($field, "* New Password not entered");
      }
      
      /* comprueba errores de email */
      $field = "email";  //usa el campo con nombre email
      if($subemail && strlen($subemail = trim($subemail)) > 0){
         /* comprueba si es un email valido */
         $regex = "/^[_+a-z0-9-]+(\.[_+a-z0-9-]+)*"
                 ."@[a-z0-9-]+(\.[a-z0-9-]{1,})*"
                 ."\.([a-z]{2,}){1}$/";
         if(!preg_match($regex,$subemail)){
            $form->setError($field, "* Email invalid");
         }
         $subemail = stripslashes($subemail);
      }
      
      /* Si existen errores, el usuario los arregla */
      if($form->num_errors > 0){
         return false;  //Errores con el formulario
      }
      
      /* Actualizar la contraseña ya que no había errores */
      if($subcurpass && $subnewpass){
         $database->updateUserField($this->username,"password",md5($subnewpass));
      }
      
      /* cambio email */
      if($subemail){
         $database->updateUserField($this->username,"email",$subemail);
      }
      
      /* proceso realizado con exito */
      return true;
   }
   
   /**
    * isAdmin - Devuelve true si ha iniciado la sesión de usuario es un administrador, en caso contrario.
    */
   function isAdmin(){
      return ($this->userlevel == ADMIN_LEVEL ||
              $this->username  == ADMIN_NAME);
   }

    function isMember(){
      return ($this->userlevel == AGENT_MEMBER_LEVEL);
   }
   

   /**
    * generateRandID -  Genera una cadena formada por letras aleatorios
    * (más bajas y mayúsculas) y dígitos y devuelve el hash MD5 de que
    * sea utilizado como un identificador de usuario.
    */
   function generateRandID(){
      return md5($this->generateRandStr(16));
   }
   
   /**
    * generateRandStr - Genera una cadena formada por letras aleatorios
    * (más bajas y mayúsculas) y dígitos, la longitud es un parámetro especificado.
    */
   function generateRandStr($length){
      $randstr = "";
      for($i=0; $i<$length; $i++){
         $randnum = mt_rand(0,61);
         if($randnum < 10){
            $randstr .= chr($randnum+48);
         }else if($randnum < 36){
            $randstr .= chr($randnum+55);
         }else{
            $randstr .= chr($randnum+61);
         }
      }
      return $randstr;
   }
};


/**
 * Initialize session object - Esta debe ser inicializado
 * antes de que el objeto de formulario porque el formulario
 * utiliza variables de sesión, que no se puede acceder a
 * menos que la sesión ha comenzado.
 */
$session = new Session;

/* Inicializar el objeto formulario */
$form = new Form;

?>
