<?php 

 
class Form
{
   var $values = array();  //Valores de campo de formulario presentado
   var $errors = array();  //Mensajes de error de formulario presentado
   var $num_errors;        //El numero de errores en el formulario enviado

   /* Clase Constructor */
   function Form(){
      /**
       * Obtiene valor del form y arreglos de error,
       * que se utiliza cuando hay un error en un formulario enviado por el usuario.
       */
      if(isset($_SESSION['value_array']) && isset($_SESSION['error_array'])){
         $this->values = $_SESSION['value_array'];
         $this->errors = $_SESSION['error_array'];
         $this->num_errors = count($this->errors);

         unset($_SESSION['value_array']); // unset Destruye una variable especificada
         unset($_SESSION['error_array']);
      }
      else{
         $this->num_errors = 0;
      }
   }

   /**
    * setValue - Registra el valor introducido
    * en el campo de formulario dado.
    */
   function setValue($field, $value){
      $this->values[$field] = $value;
   }

   /**
    * setError - Registro de errores 
    * por los nombres de campos del formulario
    * y el mensaje de error que se le atribuye.
    */
   function setError($field, $errmsg){
      $this->errors[$field] = $errmsg;
      $this->num_errors = count($this->errors);
   }

   /**
    * Valor - Devuelve el valor que se asigna
    * al campo dado, si no existe ninguno, se
    * devuelve una cadena vacia.
    */
   function value($field){
      if(array_key_exists($field,$this->values)){
         return htmlspecialchars(stripslashes($this->values[$field]));
      }else{
         return "";
      }
   }

   /**
    * Error - Devuelve el mensaje de error
    * asociado al campo dado, si no existe ninguno,
    * se devuelve una cadena vacia.
    */
   function error($field){
      if(array_key_exists($field,$this->errors)){
         return "<font size=\"2\" color=\"#ff0000\">".$this->errors[$field]."</font>";
      }else{
         return "";
      }
   }

   /* getErrorArray - Devuelve la serie de mensajes de error */
   function getErrorArray(){
      return $this->errors;
   }
};
 
?>
