<?php 

 
class Form
{
   var $values = array();  //sostiene como valores de campo el formulario presentado
   var $errors = array();  //tiene mensajes de error del formulario
   var $num_errors;   //el numero de errores del formulario enviado
   /* Class constructor */
   function Form(){
      /**
       * Obtener valor de forma y matrices de error, que se utiliza cuando hay un error en un formulario enviado por el usuario.       */
      if(isset($_SESSION['value_array']) && isset($_SESSION['error_array'])){
         $this->values = $_SESSION['value_array'];
         $this->errors = $_SESSION['error_array'];
         $this->num_errors = count($this->errors);

         unset($_SESSION['value_array']);
         unset($_SESSION['error_array']);
      }
      else{
         $this->num_errors = 0;
      }
   }

   /**
    * setValue - registra el valor de tipo dado
    * campo de formulario por parte del usuario.
    */
   function setValue($field, $value){
      $this->values[$field] = $value;
   }

   /**
    * setError - Registra nueva forma de error dado el nombre de 
    * campo de formulario y el mensaje de error que se le atribuye.
    */
   function setError($field, $errmsg){
      $this->errors[$field] = $errmsg;
      $this->num_errors = count($this->errors);
   }

   /**
    * value - Devuelve el valor que se asigna al campo dado, 
    * si no existe ninguno, se devuelve una cadena vacía.
    */
   function value($field){
      if(array_key_exists($field,$this->values)){
         return htmlspecialchars(stripslashes($this->values[$field]));
      }else{
         return "";
      }
   }

   /**
    * error - Devuelve el mensaje de error asociada al campo dado, 
    * si no existe ninguno, se devuelve una cadena vacía.
    */
   function error($field){
      if(array_key_exists($field,$this->errors)){
         return "<font size=\"2\" color=\"#ff0000\">".$this->errors[$field]."</font>";
      }else{
         return "";
      }
   }

   /* getErrorArray - retorna el array de errores */
   function getErrorArray(){
      return $this->errors;
   }
};
 
?>
