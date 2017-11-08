<?php 
/**
* 
*/
class Abogado
{
	private $cedula;
	private $nombre;
	private $telefono;
	private $biografia;
	private $especialidad;
	private $cnx;
    private $datos;

	
	function __construct($cedula=false,$nombre=false,$telefono=false,$biografia=false, $especialidad=false)
	{
		$this -> cedula = $cedula;
		$this -> nombre = $nombre;
		$this -> telefono = $telefono;
		$this -> biografia = $biografia;
		$this -> especialidad = $especialidad;
        $this -> datos = array();
		$this -> cnx = new mysqli('localhost:3306', 'root', 'dad931106', 'gestionabogados');
	}
        function getCedula() {
            return $this->cedula;
        }

        function getNombre() {
            return $this->nombre;
        }

        function getTelefono() {
            return $this->telefono;
        }

        function getBiografia() {
            return $this->biografia;
        }

        function getEspecialidad() {
            return $this->especialidad;
        }

        function setCedula($cedula) {
            $this->cedula = $cedula;
        }

        function setNombre($nombre) {
            $this->nombre = $nombre;
        }

        function setTelefono($telefono) {
            $this->telefono = $telefono;
        }

        function setBiografia($biografia) {
            $this->biografia = $biografia;
        }

        function setEspecialidad($especialidad) {
            $this->especialidad = $especialidad;
        }


public function Registrar(){
$cedula = $this -> getCedula();
$nombre = $this -> getNombre();
$telefono = $this -> getTelefono();
$biografia = $this -> getBiografia();
$especialidad = $this -> getEspecialidad();
 $query = "insert into tbl_abogado values('$cedula','$nombre', '$telefono', '$biografia ', '$especialidad');";
 $resultado = $this -> cnx ->query($query);

 if ($resultado) {
     return true;
 }else{
    return false;
 }
}

public function Actualizar(){
    
}
    

    public function Eliminar(){
        $cedula = $this -> getCedula();
    $query = "delete from tbl_abogado where cedulaAbogado = '$cedula'";
    $resultado = $this -> cnx -> query($query);

    if ($resultado) {
        return true;
    }else{
        return false;
    }
}
    

    public function Modificar(){
        $nombre = $this->getNombre();
        $telefono = $this->getTelefono();
        $biografia = $this->getBiografia();
        $especialidad = $this->getEspecialidad();
        $cedula = $this->getCedula();
    $query ="update  tbl_abogado  set nombreAbogado='$nombre',numeroTelefonoAbogado='$telefono',biograiaAbogado='$biografia',idEspecialidad='$especialidad' where cedulaAbogado ='$cedula'";
    $resultado = $this -> cnx ->query($query);

    if ($resultado) {
        return true;
    }else{
        return false;
    }
}

public function Listar(){
    $query = "select cedulaAbogado,nombreAbogado,numeroTelefonoAbogado,biograiaAbogado,nombreEspecialidad  from tbl_abogado inner join tbl_especialidad on tbl_abogado.idEspecialidad=tbl_especialidad.idEspecialidad";
    $resultado = $this -> cnx ->query($query);

    while ( $fila = mysqli_fetch_object($resultado)) {
        $this ->datos[] = $fila;
    }

    return $this -> datos;
}
	
}
 ?>