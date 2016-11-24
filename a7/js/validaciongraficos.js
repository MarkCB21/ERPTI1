function validacion() {
	var idi = document.getElementById("idi").value
	var anio = document.getElementById("anio").value
	document.getElementById("error1").innerHTML=" "
	document.getElementById("error2").innerHTML=" "


  if((idi == null || idi.length == 0 ) && (anio == null || anio.length == 0 ))
  {
  	document.getElementById("error1").innerHTML="No se ha ingresado el id del inventario a graficar."
  	document.getElementById("error2").innerHTML="No se ha ingresado la a&ntilde;o."
  	
  	return false;
  }
  else if (idi == null || idi.length == 0 ) {
     	document.getElementById("error1").innerHTML="No se ha ingresado el id del inventario a graficar."
     	return false;
    	
  }
  else if (anio == null || anio.length == 0 ) {
   	document.getElementById("error2").innerHTML="No se ha ingresado la a&ntilde;o."
   	return false;
    	
  }
  else if (isNaN(idi) && isNaN(anio)) {
    document.getElementById("error1").innerHTML="La id debe ser numerica."
    document.getElementById("error2").innerHTML="El a&ntilde;o debe ser numerico."
    return false;
     
  }
  else if (isNaN(idi)) {
    document.getElementById("error1").innerHTML="La id debe ser numerica."
    return false;
  }
  else if (isNaN(anio)) {
    document.getElementById("error2").innerHTML="El a&ntilde;o debe ser numerico."
    return false;
  }
  else if (idi < 0) {
    document.getElementById("error1").innerHTML="La id debe ser un numero positivo."
    return false;
  }
  else if (anio < 2000) {
    document.getElementById("error2").innerHTML="El a&ntilde;o debe ser un numero mayor o igual a 2000."
    return false;
  }
  else if (idi < 0 && anio < 2000) {
    document.getElementById("error1").innerHTML="La id debe ser un numero positivo."
    document.getElementById("error2").innerHTML="El a&ntilde;o debe ser un numero mayor o igual a 2000."
    return false;
  }
  return true
}