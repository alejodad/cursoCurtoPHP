<?php 

/**
* 
*/
class Persona 
{
	private $nombre;
	private $apellido;
	private $dni;
	private $sexo;
	private $ciudad;
	
	function __construct( $nombre,$apellido,$dni,$sexo,$ciudad)
	{
		$this -> nombre =  $nombre;
		$this -> apellido =  $apellido;
		$this -> dni =  $dni;
		$this -> sexo =  $sexo;
		$this -> ciudad =  $ciudad;
	}


}
 ?>