<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Combos</title>
	<link rel="stylesheet" href="jQuery/jquery-3.2.1.min.js">
</head>
<?php 
 ?>
<body>
	<form action="conexion.php" method="post">
		nombre<input type="text" name="nombre"><br>
		correo<input type="email" name="correo"><br>
		edad<input type="number" name="edad"><br>
		peliculas<br>
		una<input type="checkbox" value="una" name=" peliculas[]"><br>
		otra<input type="checkbox" value="OTRA" name=" peliculas[]"><br>
		una mas<input type="checkbox" value="OTRA MAS" name=" peliculas[]"><br>
		<input type="submit" value="registrar">
	</form>
</body>
</html>