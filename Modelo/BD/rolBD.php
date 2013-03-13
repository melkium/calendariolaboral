<?php

require_once "../Modelo/base/rol.php";

class RolBD extends GenericoBD{

	 public static function obtenerRolporPerfil($id_perfil){
      $conexion = GenericoBD::conectar();
      $query="select * from rol where id_rol=(select id_rol from perfil where id_perfil=".$id_perfil.")";
      $rs = mysql_query($query,$conexion) or die(mysql_error());
      
      $rol=null;
      if (mysql_num_rows($rs) == 1)
      {
        $fila = mysql_fetch_assoc($rs);
        $rol = new Rol();
        $rol->setId($fila['id_rol']);
        $rol->setNombre($fila['nombre']);
        $rol->setDescripcion($fila['desc']);
      }
      GenericoBD::desconectar($conexion);
      return $rol;
  }


}
?>