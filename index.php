<?php
include 'conexion.php';

?>

<!DOCTYPE >
<html>
<head>
	<title> Calcula tu edad </title>
</head>
<body >
		<form align="center" name="fechas" method="POST" action="porcentaje.php" >


		Ingresa tu fecha de nacimiento
		<br>
		<input type="date" name="fecna" size="20">
		<br>

		<br>
		<br>
		Ingresa la fecha de hoy 
		<br>

		<input type="date" name="feac" size="20"> 

		<br>
		<input type="submit" />
		</form>

  

</body>
</html>