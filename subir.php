<?php
//conexion a la base de datos
mysql_connect("nombre_server", "usuario", "pass") or die(mysql_error()) ;
mysql_select_db("nombre_bd") or die(mysql_error()) ;

//comprobamos si ha ocurrido un error.
if ($_FILES["documento"]["error"] > 0){
	echo "ha ocurrido un error";
} else {

	$numero = $_POST["numero"];
	$limite_kb = 2048000;

	if ($_FILES['documento']['size'] <= $limite_kb * 2048000){
		//esta es la ruta donde copiaremos la imagen
		//recuerden que deben crear un directorio con este mismo nombre
		//en el mismo lugar donde se encuentra el archivo subir.php
		$ruta = "documents/" . $numero . "_" . $_FILES['documento']['name'];

			$resultado = @move_uploaded_file($_FILES["documento"]["tmp_name"], $ruta);
			if ($resultado){
				$nombre = $_FILES['documento']['name'];

				$nombre = $numero."_".$nombre;

				@mysql_query("INSERT INTO documentos (documentoval, usuario) VALUES ('$nombre','$numero')") ;
				echo "el archivo ha sido movido exitosamente";				

			} else {
				echo "ocurrio un error al mover el archivo.";
			}
	} else {
		echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
	}
}

echo "<script>
	window.location = 'Index.php'
					</script>";

?>