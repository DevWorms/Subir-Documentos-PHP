<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>PruebaImagenes</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>

<body> 

<!--
	SOLAMENTE LLAMAMOS UN FORM PARA AGREGAR LA INFORMACIÓN QUE DESEAMOS	
-->
<form action="subir.php" method="POST" enctype="multipart/form-data">

  numero: <input type="text" name="numero" id="numero"><br><br>
  <input type="file" name="documento" id="documento" /><br><br>
  <input type="submit" name="subir" value="Subir"/>

</form>

<br><br><br>

<!--
	MANDAMOS A LLAMAR UNA LIBRARY PARA EJECUTAR SU CONTENIDO AL CARGAR LA PÁGINA	
-->
<?php
	include_once("ver_todas.php");
?>

</body>
</html>