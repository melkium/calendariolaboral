<?php

class Empresa{
	
	private $nif;
	private $nombre;
	private $dir;
	
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
	self::setNif($datos['nif']);
	self::setNombre($datos['nombre']);
	self::setDireccion($datos['dir']);

}


/////////////////GET//////////////////////////////////////////////////////////

public function getNif(){
	return $this->nif;
}

public function getNombre()
{
	return $this->nombre;
}

public function getDireccion()
{
	return $this->dir;
}


/////////////////SET//////////////////////////////////////////////////////////

public function setNif($nif)
{
	$this->nif = $nif;
}


public function setNombre($nombre)
{
	$this->nombre = $nombre;
}

public function setDireccion($dir)
{
	$this->dir = $dir;
}


}

?>