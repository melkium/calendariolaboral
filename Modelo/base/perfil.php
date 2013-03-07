<?php

class Perfil{
	
	private $id;
	private $nombre;
	private $desc;
	private $serv_minimo;
	private $rol;
	
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
	self::setNombre($datos['nombre']);
	self::setDescripcion($datos['desc']);
	self::setServiciosMinimos($datos['serv_minimo']);
	self::setRol(null);

}


/////////////////GET//////////////////////////////////////////////////////////

public function getId(){
	return $this->id;
}

public function getNombre()
{
	return $this->nombre;
}

public function getDescripcion()
{
	return $this->desc;
}

public function getServiciosMinimos(){
	return $this->serv_minimo;
}

public function getRol()
{
	if (!$this->rol)
	{
		//relacion
	}
	return $this->rol;
}


/////////////////SET//////////////////////////////////////////////////////////

public function setId($id)
{
	$this->id = $id;
}


public function setNombre($nombre)
{
	$this->nombre = $nombre;
}

public function setDescripcion($desc)
{
	$this->desc = $desc;
}

public function setServiciosMinimos($serv_minimo){
	$this->serv_minimo=$serv_minimo;
}

public function setRol($rol){
	$this->rol=$rol;
}

}

?>