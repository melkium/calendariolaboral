<?php


class CentroBD extends GenericoBD{

	 public static function obtenerCentroporTrabajador($id_trabajador){
      $conexion = GenericoBD::conectar();
      $query="select * from centro where id_centro=(select id_centro from trabajador where id_trabajador=".$id_trabajador.")";
      $rs = mysql_query($query,$conexion) or die(mysql_error());
      
      $centro=null;
      if (mysql_num_rows($rs) == 1)
      {
        $fila = mysql_fetch_assoc($rs);
        $centro = new Centro();  
        $centro->setId($fila['id']);
        $centro->setDescripcion($datos['desc']);
        $centro->setLocalizacion($datos['localizacion']);
        $centro->setHorasCalendario($datos['horas_calendario']);
        $centro->setHorasAnuales($datos['horas_anuales']);
        $centro->setEmpresa(null);
      }
      GenericoBD::desconectar($conexion);
      return $centro;
  }

  public static function obtenerCentroporAusGeneral($id_general){
      $conexion = GenericoBD::conectar();
      $query="select * from centro where id_centro=(select id_centro from aus_general where id_general=".$id_general.")";
      $rs = mysql_query($query,$conexion) or die(mysql_error());
      
      $centro=null;
      if (mysql_num_rows($rs) == 1)
      {
        $fila = mysql_fetch_assoc($rs);
        $centro = new Centro();  
        $centro->setId($fila['id']);
        $centro->setDescripcion($datos['desc']);
        $centro->setLocalizacion($datos['localizacion']);
        $centro->setHorasCalendario($datos['horas_calendario']);
        $centro->setHorasAnuales($datos['horas_anuales']);
        $centro->setEmpresa(null);
      }
      GenericoBD::desconectar($conexion);
      return $centro;
  }

}
?>