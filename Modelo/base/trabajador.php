<?php

require_once "../Modelo/BD/perfilBD.php";
require_once "../Modelo/BD/centroBD.php";


class Trabajador{
	
	private $id;
	private $dni;
	private $pass;
	private $nombre;
	private $apellido1;
	private $apellido2;
	private $telefono;
	private $perfil; //guardaremos objeto perfil
	private $centro; //guardaremos objeto centro

public function __construct()
{
$args = func_get_args();
$nargs = func_num_args();
switch($nargs) 
{
	case 1:
		$this->__construct1($args[0]);
		
		break;
}
}

public function __construct1($datos)
{	
	self::setId($datos['id']);
	self::setDni($datos['dni']);
	self::setPassword($datos['pass']);
	self::setNombre($datos['nombre']);
	self::setApellido1($datos['apellido1']);
	self::setApellido2($datos['apellido2']);
	self::setTelefono($datos['telefono']);
	self::setPerfil(null);
	self::setCentro(null);

}


/////////////////GET//////////////////////////////////////////////////////////

public function getId(){
	return $this->id;
}

public function getDni()
{
	return $this->dni;
}

public function getPassword()
{
	return $this->pass;
}

public function getNombre()
{
	return $this->nombre;
}

public function getApellido1()
{
	return $this->apellido1;
}

public function getApellido2()
{
	return $this->apellido2;
}


public function getTelefono()
{
	return $this->telefono;
}



public function getPerfil()
{
	if (!$this->perfil)
	{

		self::setPerfil(PerfilBD::obtenerPerfilporTrabajador($this->getId()));

		

	}
	return $this->perfil;
}

public function getCentro()
{
	if (!$this->centro)
	{

		self::setCentro(CentroBD::obtenerCentroporTrabajador($this->getId()));


	}
	return $this->centro;
}

/////////////////SET//////////////////////////////////////////////////////////

public function setId($id)
{
	$this->id = $id;
}


public function setDni($dni)
{
	$this->dni = $dni;
}

public function setPassword($pass)
{
	$this->pass = $pass;
}

public function setNombre($nombre)
{
	$this->nombre = $nombre;
}

public function setApellido1($apellido1)
{
	$this->apellido1 = $apellido1;
}

public function setApellido2($apellido2)
{
	$this->apellido2 = $apellido2;
}


public function setTelefono($telefono)
{
	$this->telefono = $telefono;
}



public function setPerfil($perfil)
{
	$this->perfil = $perfil;
}

public function setCentro($cento)
{
	$this->cento = $cento;
}




}

?>