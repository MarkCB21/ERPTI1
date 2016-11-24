<?php
	function subir(){
			$msg="";
			$uploadedfileload="true";
			$uploadedfile_size=$_FILES['uploadedfile']['size'];
			echo $_FILES['uploadedfile']['name'];
			if ($_FILES['uploadedfile']['size']>2000000)
			{
				$msg=$msg."El archivo es mayor que 2MB, debes reduzcirlo antes de subirlo<BR>";
				$uploadedfileload="false";
			}

			if (!($_FILES['uploadedfile']['type'] =="image/png"/* OR $_FILES['uploadedfile']['type'] =="image/jpeg"*/))
			{
				$msg=$msg." Tu archivo tiene que ser PNG. Otros archivos no son permitidos<BR>";
				$uploadedfileload="false";

			}

			$file_name=$_FILES['uploadedfile']['name'];
			/*$new_name= explode(".", $file_name);*/
			$new_name="logo.png";
			$add="uploads/$new_name";
			/*echo "<script> file=<?php echo $file_name; ?></script>";
			echo "<script> alert(file) </script>"; */
					
			if($uploadedfileload=="true"){
				if(move_uploaded_file ($_FILES['uploadedfile']['tmp_name'], $add)){
			echo " El logo ha sido cambiado satisfactoriamente";
		}else{echo "Error al subir el archivo";}
	}else{echo $msg;}
	return $add;
	}
?>

