<?php

class Austipo{
	
	private $id;
	private $desc;
	
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

}


/////////////////GET//////////////////////////////////////////////////////////

public function getId(){
	return $this->id;
}


public function getDescripcion()
{
	return $this->desc;
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


}

?>