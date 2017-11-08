<?php 
require 'abogado.php';


$cedula = $_REQUEST['cedula'];


 $uno = new Abogado($cedula);

$resultado = $uno-> Eliminar();
if ($resultado) {
	header("location:../crudWeb/listado.php");
}else{
	exit();
}

 ?>