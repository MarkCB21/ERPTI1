<?php
	function subir(){
			$msg="";
			$uploadedfileload="true";
			$uploadedfile_size=$_FILES['uploadedfile']['size'];
			echo $_FILES['uploadedfile']['name'];
			if ($_FILES['uploadedfile']['size']>2000000)
			{$msg=$msg."El archivo es mayor que 2MB, debes reduzcirlo antes de subirlo<BR>";
			$uploadedfileload="false";}

			if (!($_FILES['uploadedfile']['type'] =="image/png" OR $_FILES['uploadedfile']['type'] =="image/jpeg"))
			{$msg=$msg." Tu archivo tiene que ser PNG o JPG. Otros archivos no son permitidos<BR>";
			$uploadedfileload="false";}
			$file_name=$_FILES['uploadedfile']['name'];
			$add="uploads/$file_name";
			if($uploadedfileload=="true"){
				if(move_uploaded_file ($_FILES['uploadedfile']['tmp_name'], $add)){
			echo " El logo ha sido cambiado satisfactoriamente";
		}else{echo "Error al subir el archivo";}
	}else{echo $msg;}
	return $add;
	}
?>

