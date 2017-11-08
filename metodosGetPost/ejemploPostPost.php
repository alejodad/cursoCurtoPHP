<?php 
echo "<pre>";
print_r($_POST);


$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$edad = $_POST['edad'];
$pelis = $_POST['peliculas'];


echo "mi nombre es ".$nombre."<br>";
echo "mi correo es ".$correo."<br>";
echo "mi edad es ".$edad."<br>";

foreach ($pelis  AS $value) {
	echo $value."<br>";
}
 ?>
