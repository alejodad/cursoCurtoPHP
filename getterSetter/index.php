<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		require 'Persona.php';
		$una = new Persona('David','Sierrra','1234','m','bogota');
		echo $una->getNombre()."<br>";

		$una ->setCiudad('Medllein');
		echo $una ->getCiudad();
	 ?>
</body>
</html>