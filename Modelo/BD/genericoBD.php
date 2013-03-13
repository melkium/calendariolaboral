<?php

class GenericoBD{
	

	protected static function conectar(){

	$conexion= mysql_connect("localhost", "root", "");
	mysql_select_db("vacaciones", $conexion);
	return $conexion;

    }


	protected static function desconectar ($conexion){

		mysql_close($conexion);
	}

		
}

?>