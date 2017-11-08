<?php 
require 'abogado.php';


$cedula = $_POST['cedula'];
$nombre =  $_POST['nombre'];
$telefono =  $_POST['telefono'];
$biografia =  $_POST['biografia'];
$especialidad =  $_POST['especialida'];

print_r($_POST);

 $uno = new Abogado($cedula, $nombre, $telefono, $biografia, $especialidad );

$resultado = $uno-> Registrar();
if ($resultado) {
	header("location:../crudWeb/listado.php");
}else{
	exit();
}

 