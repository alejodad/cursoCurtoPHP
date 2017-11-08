<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Clases</title>
</head>
<body>
	<h1>Trabajando con clases</h1>
	<?php 
		require "Persona.php";

		$uno = new Persona();

		echo $uno->getSaludo();
		echo "<br>"	;
		echo $uno->getSaludoNombre("david");
	 ?>
</body>
</html>