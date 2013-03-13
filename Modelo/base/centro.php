<?php

class Centro{
	
	private $id;
	private $desc;
	private $localizacion;
	private $horas_calendario;
	private $horas_anuales;
	private $empresa;
	
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
	self::setDescripcion($datos['desc']);
	self::setLocalizacion($datos['localizacion']);
	self::setHorasCalendario($datos['horas_calendario']);
	self::setHorasAnuales($datos['horas_anuales']);
	self::setEmpresa(null);

}


/////////////////GET//////////////////////////////////////////////////////////

public function getId(){
	return $this->id;
}


public function getDescripcion()
{
	return $this->desc;
}

public function getLocalizacion(){
	return $this->localizacion;
}

public function getHorasCalendario(){
	return $this->horas_calendario;
}

public function getHorasAnuales(){
	return $this->horas_anuales;
}

public function getEmpresa()
{
	if (!$this->empresa)
	{
		self::setEmpresa(EmpresaBD::obtenerEmpresaporCentro($this->getId()));
	}
	return $this->empresa;
}


/////////////////SET//////////////////////////////////////////////////////////

public function setId($id)
{
	$this->id = $id;
}

public function setDescripcion($desc)
{
	$this->desc = $desc;
}

public function setLocalizacion($localizacion){
	$this->localizacion=$localizacion;
}

public function setHorasCalendario($horas_calendario){
	$this->horas_calendario=$horas_calendario;
}

public function setHorasAnuales($horas_anuales){
	$this->horas_anuales=$horas_anuales;
}

public function setEmpresa($empresa){
	$this->empresa=$empresa;
}

}

?>