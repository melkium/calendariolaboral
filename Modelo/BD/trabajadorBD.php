<?php

require_once "conf.php";
require_once "genericoBD.php";
require_once "../Modelo/base/trabajador.php";

class TrabajadorBD extends GenericoBD{

	 public static function obtenerTrabajadorporAus($id_individual){
      $conexion = GenericoBD::conectar();
      $query="select * from trabajador where id_trabajador=(select id_trabajador from aus_individual where id_individual=".$id_individual.")";
      $rs = mysql_query($query,$conexion) or die(mysql_error());
      
      $trabajador=null;
      if (mysql_num_rows($rs) == 1)
      {
        $datos = mysql_fetch_assoc($rs);
        $trabajador = new Trabajador();  
        $trabajador->setId($datos['id_trabajador']);
        $trabajador->setDni($datos['dni']);
        $trabajador->setPassword($datos['password']);
        $trabajador->setNombre($datos['nombre']);
        $trabajador->setApellido1($datos['apellido1']);
        $trabajador->setApellido2($datos['apellido2']);
        $trabajador->setTelefono($datos['telefono']);
        $trabajador->setPerfil(null);
        $trabajador->setCentro(null);

      
      GenericoBD::desconectar($conexion);
      return $trabajador;
  }

}
  public static function obtenerUsuarioPorUsername($usuario,$password)
  {
    $conexion = GenericoBD::conectar();

    $query="select * from trabajador where nombre='".$usuario."' and password='".$password."'";
   
      $rs = mysql_query($query,$conexion) or die(mysql_error());
      
      $trabajador=null;
      if (mysql_num_rows($rs) == 1)
      {
        $datos = mysql_fetch_assoc($rs);
        $trabajador = new Trabajador();  
        $trabajador->setId($datos['id_trabajador']);
        $trabajador->setDni($datos['dni']);
        $trabajador->setPassword($datos['password']);
        $trabajador->setNombre($datos['nombre']);
        $trabajador->setApellido1($datos['apellido1']);
        $trabajador->setApellido2($datos['apellido2']);
        $trabajador->setTelefono($datos['telefono']);
        $trabajador->setPerfil(null);
        $trabajador->setCentro(null);
      }
      else
      {
        GenericoBD::desconectar($conexion);
      }
      
      return $trabajador;
  }

}
?>