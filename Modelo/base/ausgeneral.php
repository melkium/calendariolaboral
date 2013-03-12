<?php

class Ausgeneral{
	
	private $id;
	private $fecha;
	private $centro;
	private $tipo;
	
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
	self::setFecha($datos['fecha']);
	self::setCentro(null);
	self::setTipo(null);

}


/////////////////GET//////////////////////////////////////////////////////////

public function getId(){
	return $this->id;
}

public function getFecha()
{
	return $this->fecha;
}


public function getCentro()
{
	if (!$this->centro)
	{
		//relacion
	}
	return $this->centro;
}

public function getTipo()
{
	if (!$this->tipo)
	{
		//relacion
	}
	return $this->tipo;
}



/////////////////SET//////////////////////////////////////////////////////////

public function setId($id)
{
	$this->id = $id;
}


public function setFecha($fecha)
{
	$this->fecha = $fecha;
}

public function setCentro($centro){
	$this->centro=$centro;
}

public function setTipo($tipo){
	$this->tipo=$tipo;
}

}

?>