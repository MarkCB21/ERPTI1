<?php
include("include/classes/UTF-8.php");
include("include/classes/session.php");

class Process
{
   /* Class constructor */
   function Process(){
      global $session;
      /* inicio se de sesion para usuario */
      if(isset($_POST['sublogin'])){
         $this->procLogin();
      }
      /* registro*/
      else if(isset($_POST['subjoin'])){
         $this->procRegister();
      }
      else if(isset($_POST['member_subjoin'])){
         $this->procMemberRegister();
      }
	  
	   
      else if(isset($_POST['master_subjoin'])){
         $this->procMasterRegister();
      }
	  
	      
      else if(isset($_POST['agent_subjoin'])){
         $this->procAgentRegister();
      }
	  
      /* olvido contraceña */
      else if(isset($_POST['subforgot'])){
         $this->procForgotPass();
      }
      /* editar cuentga */
      else if(isset($_POST['subedit'])){
         $this->procEditAccount();
      }
      /**
       * para cerrar la sesion debe dirigirse aqui
       */
      else if($session->logged_in){
         $this->procLogout();
      }
      /**
       * redirige       */
       else{
          header("Location: index.php");
       }
   }

   /**
    * redirige al usuario si la cuenta es correcta	sino
	* es dirigido a corregir la informacion
    */
   function procLogin(){
      global $session, $form;
      /* Login attempt */
      $retval = $session->login($_POST['user'], $_POST['pass'], isset($_POST['remember']));
      
      /* Login exitoso */
      if($retval){
         header("Location: ".$session->referrer);
      }
      /* Login fallido */
      else{
         $_SESSION['value_array'] = $_POST;
         $_SESSION['error_array'] = $form->getErrorArray();
         header("Location: ".$session->referrer);
      }
   }
   
   /**
    * procLogout - intenta iniciar sesion el usuario del 
	* sistema
    */
   function procLogout(){
      global $session;
      $retval = $session->logout();
      header("Location: index.php");
   }
   
   /**
    * procRegister - procesa el formulario
	* de registro, si se encuentra errores 
	* redirige al usuario para corregirlos
    */
   function procRegister(){
      global $session, $form;
      /* nombre de usuario con minisculas */
      if(ALL_LOWERCASE){
         $_POST['user'] = strtolower($_POST['user']);
      }
      /* intento de registro */
      $retval = $session->register($_POST['user'], $_POST['pass'], $_POST['email']);
      
      /* registro exitoso */
      if($retval == 0){
         $_SESSION['reguname'] = $_POST['user'];
         $_SESSION['regsuccess'] = true;
         header("Location: ".$session->referrer);
      }
      /* error encotrado */
      else if($retval == 1){
         $_SESSION['value_array'] = $_POST;
         $_SESSION['error_array'] = $form->getErrorArray();
         header("Location: ".$session->referrer);
      }
      /* intento de registro fallido */
      else if($retval == 2){
         $_SESSION['reguname'] = $_POST['user'];
         $_SESSION['regsuccess'] = false;
         header("Location: ".$session->referrer);
      }
   }
   
    function procMasterRegister(){
      global $session, $form;
      /* nombre de usuario con minusculas */
      if(ALL_LOWERCASE){
         $_POST['user'] = strtolower($_POST['user']);
      }
      /* intento de registro*/
      $retval = $session->SessionMasterRegister($_POST['user'], $_POST['pass'], $_POST['email']);
      
      /* registro exitoso*/
      if($retval == 0){
         $_SESSION['reguname'] = $_POST['user'];
         $_SESSION['regsuccess'] = true;
         header("Location: ".$session->referrer.'?'.$session->username);
      }
      /* error encontrado*/
      else if($retval == 1){
         $_SESSION['value_array'] = $_POST;
         $_SESSION['error_array'] = $form->getErrorArray();
         header("Location: ".$session->referrer.'?'.$session->username);
      }
      /* registro fallido*/
      else if($retval == 2){
         $_SESSION['reguname'] = $_POST['user'];
         $_SESSION['regsuccess'] = false;
         header("Location: ".$session->referrer.'?'.$session->username);
      }
   }
   
   
   
    function procMemberRegister(){
      global $session, $form;
      /* usuario con letras minusculas*/
      if(ALL_LOWERCASE){
         $_POST['user'] = strtolower($_POST['user']);
      }
      /* intento de registro*/
      $retval = $session->SessionMemberRegister($_POST['user'], $_POST['pass'], $_POST['email']);
      
      /* registro exitoso*/
      if($retval == 0){
         $_SESSION['reguname'] = $_POST['user'];
         $_SESSION['regsuccess'] = true;
         header("Location: ".$session->referrer.'?'.$session->username);
      }
      /* error encontrado*/
      else if($retval == 1){
         $_SESSION['value_array'] = $_POST;
         $_SESSION['error_array'] = $form->getErrorArray();
         header("Location: ".$session->referrer.'?'.$session->username);
      }
      /* registro fallido*/
      else if($retval == 2){
         $_SESSION['reguname'] = $_POST['user'];
         $_SESSION['regsuccess'] = false;
         header("Location: ".$session->referrer.'?'.$session->username);
      }
   }
   
      
    function procAgentRegister(){
      global $session, $form;
      /* usuario con letras minusculas*/
      if(ALL_LOWERCASE){
         $_POST['user'] = strtolower($_POST['user']);
      }
      /* intento de registro*/
      $retval = $session->SessionAgentRegister($_POST['user'], $_POST['pass'], $_POST['email']);
      
      /* registro exitoso*/
      if($retval == 0){
         $_SESSION['reguname'] = $_POST['user'];
         $_SESSION['regsuccess'] = true;
         header("Location: ".$session->referrer.'?'.$session->username);
      }
      /* error encontrado*/
      else if($retval == 1){
         $_SESSION['value_array'] = $_POST;
         $_SESSION['error_array'] = $form->getErrorArray();
         header("Location: ".$session->referrer.'?'.$session->username);
      }
      /* registro fallido*/
      else if($retval == 2){
         $_SESSION['reguname'] = $_POST['user'];
         $_SESSION['regsuccess'] = false;
         header("Location: ".$session->referrer.'?'.$session->username);
      }
   }
   /**
    * procForgotPass - valida el nombre de usuario,
	* si todo esta bien genera un nueva pass
    */
   function procForgotPass(){
      global $database, $session, $mailer, $form;
      /*comprobacion de error*/
      $subuser = $_POST['user'];
      $field = "user";  //Use field name for username
      if(!$subuser || strlen($subuser = trim($subuser)) == 0){
         $form->setError($field, "* Username not entered<br>");
      }
      else{
         /*nombre de usuario en la base de datos*/
         $subuser = stripslashes($subuser);
         if(strlen($subuser) < 5 || strlen($subuser) > 30 ||
            !preg_match("/^([0-9a-z])+$/", $subuser) ||
            (!$database->usernameTaken($subuser))){
            $form->setError($field, "* Username does not exist<br>");
         }
      }
      if($form->num_errors > 0){
         $_SESSION['value_array'] = $_POST;
         $_SESSION['error_array'] = $form->getErrorArray();
      }
      /* genera una nueva clave y un email*/
      else{
         /* genera una nueva clave */
         $newpass = $session->generateRandStr(8);
         
         /* genera el email del usuario */
         $usrinf = $database->getUserInfo($subuser);
         $email  = $usrinf['email'];
         
         /* al email llega la nueva contraseña */
         if($mailer->sendNewPass($subuser,$email,$newpass)){
            /* actualiza la base de datos*/
            $database->updateUserField($subuser, "password", md5($newpass));
            $_SESSION['forgotpass'] = true;
         }
         /* email fallido, no cambia la clave */
         else{
            $_SESSION['forgotpass'] = false;
         }
      }
      
      header("Location: ".$session->referrer);
   }
   
   /**
    * procEditAccount - intento de editar cuentas 
	* incluida la contraseña
    */
   function procEditAccount(){
      global $session, $form;
      /* intento de editar cuenta */
      $retval = $session->editAccount($_POST['curpass'], $_POST['newpass'], $_POST['email']);

      /* cuenta editada exitosamente*/
      if($retval){
         $_SESSION['useredit'] = true;
         header("Location: ".$session->referrer);
      }
      /* error encontrado*/
      else{
         $_SESSION['value_array'] = $_POST;
         $_SESSION['error_array'] = $form->getErrorArray();
         header("Location: ".$session->referrer);
      }
   }
};

/* inicializa procces*/
$process = new Process;

?>
