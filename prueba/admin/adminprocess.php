<?php
include("../include/classes/UTF-8.php");
include("../include/classes/session.php");

class AdminProcess
{
   /* Class constructor */
   function AdminProcess(){
      global $session;
      /* Make sure administrator is accessing page */
      if(!$session->isAdmin()){
         header("Location: ../index.php");
         return;
      }
      /* Admin submitted update user level form */
      if(isset($_POST['subupdlevel'])){
         $this->procUpdateLevel();
      }
      /* Admin submitted delete user form */
      else if(isset($_POST['subdeluser'])){
         $this->procDeleteUser();
      }


      /* Should not get here, redirect to home page */
      else{
         header("Location: ../index.php");
      }
   }

   /**
    * procUpdateLevel - If the submitted username is correct,
    * their user level is updated according to the admin's
    * request.
    */
   function procUpdateLevel(){
      global $session, $database, $form;
      /* Username error checking */
      $subuser = $this->checkUsername("upduser");
      
      /* Errors exist, have user correct them */
      if($form->num_errors > 0){
         $_SESSION['value_array'] = $_POST;
         $_SESSION['error_array'] = $form->getErrorArray();
         header("Location: ".$session->referrer);
      }
      /* Update user level */
      else{
         $database->updateUserField($subuser, "userlevel", (int)$_POST['updlevel']);
         header("Location: ".$session->referrer);
      }
   }
   function procUpdateStock(){
      global $session, $database, $form;
      /* Username error checking */
      $subinv = $this->checkinv("updinv");
      
      /* Errors exist, have user correct them */
      if($form->num_errors > 0){
         $_SESSION['value_array'] = $_POST;
         $_SESSION['error_array'] = $form->getErrorArray();
         header("Location: ".$session->referrer);
      }
      /* Update user level */
      else{
         $database->updateinvField($subinv, "Stock", (int)$_POST['updstock']);
         header("Location: ".$session->referrer);
      }
   }
   /**
    * procDeleteUser - If the submitted username is correct,
    * the user is deleted from the database.
    */
   function procDeleteUser(){
      global $session, $database, $form;
      /* Username error checking */
      $subuser = $this->checkUsername("deluser");
      
      /* Errors exist, have user correct them */
      if($form->num_errors > 0){
         $_SESSION['value_array'] = $_POST;
         $_SESSION['error_array'] = $form->getErrorArray();
         header("Location: ".$session->referrer);
      }
      /* Delete user from database */
      else{
         $q = "DELETE FROM ".TBL_USERS." WHERE username = '$subuser'";
         $database->query($q);
         header("Location: ".$session->referrer);
      }
   }
 function checkUsername($uname, $ban=false){
      global $database, $form;
      /* Username error checking */
      $subuser = $_POST[$uname];
      $field = $uname;  //Use field name for username
      if(!$subuser || strlen($subuser = trim($subuser)) == 0){
         $form->setError($field, "* Username not entered<br>");
      }
      else{
         /* Make sure username is in database */
         $subuser = stripslashes($subuser);
         if(strlen($subuser) < 5 || strlen($subuser) > 30 ||
            !preg_match("/^([0-9a-z])+$/", $subuser) ||
            (!$ban && !$database->usernameTaken($subuser))){
            $form->setError($field, "* Username does not exist<br>");
         }
      }
      return $subuser;
}
 function procDeleteInv(){
      global $session, $database, $form;
      /* Username error checking */
      $subuser = $this->checkinv("delinv");
      
      /* Errors exist, have user correct them */
      if($form->num_errors > 0){
         $_SESSION['value_array'] = $_POST;
         $_SESSION['error_array'] = $form->getErrorArray();
         header("Location: ".$session->referrer);
      }
      /* Delete user from database */
      else{
         $q = "DELETE FROM ".TBL_INVENTARIO." WHERE ID_Inve = '$subinv'";
         $database->query($q);
         header("Location: ".$session->referrer);
      }
   }
function checkinv($uname, $ban=false){
      global $database, $form;
      /* Username error checking */
      $subinv = $_POST[$uname];
      $field = $uname;  //Use field name for username
      if(!$subinv || strlen($subuser = trim($subuser)) == 0){
         $form->setError($field, "* id no ingresado<br>");
      }
      else{
         /* Make sure username is in database */
         $subinv = stripslashes($subinv);
         if(strlen($subinv) < 5 || strlen($subinv) > 30 ||
            !preg_match("/^([0-9a-z])+$/", $subinv) ||
            (!$ban && !$database->usernameTaken($subinv))){
            $form->setError($field, "* ID no existe<br>");
         }
      }
      return $subinv;
   }
};
 
   /**
    * checkUsername - Helper function for the above processing,
    * it makes sure the submitted username is valid, if not,
    * it adds the appropritate error to the form.
    */
   

/* Initialize process */
$adminprocess = new AdminProcess;

?>
